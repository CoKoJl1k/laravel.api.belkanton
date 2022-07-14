<?php

namespace App\Http\Controllers;


class MainController extends Controller
{

    public function index() {
        return view('main');
    }

    public function about() {
        return view('about');
    }

    public function contacts() {
        return view('contacts');
    }

}
