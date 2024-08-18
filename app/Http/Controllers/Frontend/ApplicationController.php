<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    private $_pagePath="frontend.pages.";

    public function index()
    {
        $newsData= News::all();
        return view($this->_pagePath.'home',compact('newsData'));
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
