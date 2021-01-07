<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function shop() {
        return view('pages.shop');
    }

    public function blog() {
        return view('pages.blog');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function about_us() {
        return view('pages.about_us');
    }

    public function shop_details() {
        return view('pages.shop_details');
    }

    public function shopping_cart() {
        return view('pages.shopping_cart');
    }

    public function check_out() {
        return view('pages.check_out');
    }

    public function blog_details() {
        return view('pages.blog_details');
    }
}
