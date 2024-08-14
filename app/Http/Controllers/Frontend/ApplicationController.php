<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    private $_pagePath="frontend.pages.";

    public function index()
    {
        return view($this->_pagePath.'home');
    }
    public function about()
    {
        return view($this->_pagePath.'about');
    }

    public function contact()
    {
        return view($this->_pagePath . 'contact');
    }
}
