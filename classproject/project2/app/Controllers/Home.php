<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function hello_us()
    {
        return view('hello');
    }
}
