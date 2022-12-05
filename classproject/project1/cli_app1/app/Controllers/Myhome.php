<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Myhome extends BaseController
{
    public function index()
    {
        return  view('home');
    }
    public function aboutus()
    {
        return view('about');
    }
    public function contactus()
    {
        return view('contact');
    }
}
