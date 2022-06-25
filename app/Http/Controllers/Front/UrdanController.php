<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UrdanController extends Controller
{
    public function index ()
    {
        return view('front.home.home');
    }

    public function categoryPage ()
    {
        return view('front.category.category');
    }
    public function productDetails ()
    {
        return view('front.product.product-details');
    }
}
