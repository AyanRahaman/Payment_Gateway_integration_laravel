<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    // ===== FOR REGISTER PAGE ======
    public function registerPage()
    {
        return view('registerpage');
    }

    // ===== FOR LOGIN PAGE ======
    public function loginPage()
    {
        return view('loginpage');
    }

    // ===== FOR DASGBOARD PAGE ======
    public function dashboardPage()
    {
        // if (Auth::check()) {
        //     return view('dashboardpage');
        // } else {
        //     return redirect()->route('loginPage');
        // }

        return view('dashboardpage');
    }

    // ===== FOR REGISTRATOIN ======
    public function register(request $request)
    {
        $user = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if ($user) {
            return redirect()->route('loginPage')->with('status', 'You have Succesfully register');
        } else {
            return '<h1>Something Went wrong, Please try again later</h1>';
        }
    }

    // ===== FOR lOGIN ======
    public function login(request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()
                ->route('dashboardPage')
                ->with('status', 'Login Successful');
        } else {
            return redirect()->route('loginPage')->with('status', 'Invalid Credentials');
        }
    }

    // ===== FOR LOGOUT ======
    public function logout()
    {
        Auth::logout();

        return redirect()->route('loginPage');
    }
}