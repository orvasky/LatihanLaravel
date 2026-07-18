<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function articles($id) {
        return view('articles', compact('id'));
    }

}
