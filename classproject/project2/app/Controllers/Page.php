<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('hello');
    }

    public function view($page = 'home')
    {
        return $page;
    }
}