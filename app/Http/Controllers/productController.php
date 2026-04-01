<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

use Razorpay\Api\Api;


class productController extends Controller
{
    public function index(){
        $products  = Product::all();

        return view('product.products',compact('products'));
    }

    public function show(string $id){
        $product = Product::findOrFail($id);

        return view('product.product-show',compact('product'));
    }

    public function callback(Request $request){

        $api = new Api(env('RAZORPA_KEY'), env('RAZORPA_SECRET'));
        $response = $api->payment->fetch($request->razorpay_payment_id);

        if($response->status == 'captured'){
            return view("product.productSuccess");
        }
        dd($response);
    }
}
