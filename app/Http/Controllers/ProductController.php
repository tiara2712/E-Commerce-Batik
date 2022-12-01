<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Transaction;
use Auth;

class ProductController extends Controller
{
    public function homeView(){
        return view('content.home.home');
    }

    public function productView(){
        $product = Product::all();
        $customer = Customer::all();
        $transaction = Transaction::all();
        // dd($transaction);
        // foreach ($transaction as $data) {
        //     echo $data;
        // };
        return view('content.product.product',
        ['product' => $product,
        'customer' => $customer,
        'transaction' => $transaction]
        );
    }

    public function aboutView(){
        return view('content.about.about');
    }
}
