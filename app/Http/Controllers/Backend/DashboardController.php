<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $_pagePath = 'backend.pages.';

    public function index()
    {
        return view($this->_pagePath . 'dashboard.index');
    }
}
