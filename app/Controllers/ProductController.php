<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index()
    {
        //
    }
    public function chris()
    {
        return view('main');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function furniture()
    {
        return view('furniture');
    }
    public function shop()
    {
        return view('shop');
    }
}
