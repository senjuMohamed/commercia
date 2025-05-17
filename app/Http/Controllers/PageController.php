<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function products() {
        return view('products');
    }

    public function contact() {
        return view('contact');
    }

    public function checkout() {
        return view('checkout');
    }

    public function about() {
        return view('about');
    }

    public function login() {
        return view('login');
    }
   
    public function menu()
    {
        return view('menu');
    }

}
