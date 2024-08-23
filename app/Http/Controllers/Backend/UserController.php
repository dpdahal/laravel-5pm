<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $_pagePath = 'backend.pages.';

    public function index()
    {
        $usersData = User::all();
        return view($this->_pagePath . 'users.index',compact('usersData'));
    }
}
