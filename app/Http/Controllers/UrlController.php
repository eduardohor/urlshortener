<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function shorten()
    {
        return view('shorten.shorten');
    }

    public function index()
    {
        return view('shorten.index');
    }
}