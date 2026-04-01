<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use App\Http\Middleware\checkUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registerPage', [userController::class, 'registerPage'])->name('registerPage');
Route::get('/loginPage', [userController::class, 'loginPage'])->name('loginPage');

Route::post('/register', [userController::class, 'register'])->name('register');
Route::post('/login', [userController::class, 'login'])->name('login');
Route::get('/logout', [userController::class, 'logout'])->name('logout');



// ======= TO CHECK THE USER IS LOGIN OR NOT ==========
Route::middleware('isUserValid')->group(function () {
    Route::get('/dashboardPage', [userController::class, 'dashboardPage'])->name('dashboardPage');
    Route::get('/products',[productController::class,'index'])->name('products');
    Route::get('/products-details/{id}',[productController::class,'show'])->name('products.show');
});
// =========================================================================================================

// ---------- AFTER RAZORPAY PAYMENT -----------
Route::post('razorpay/callback',[productController::class,'callback'])->name('razorpay.callback');
