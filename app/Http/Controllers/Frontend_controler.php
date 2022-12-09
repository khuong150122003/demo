<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend_controler extends Controller
{
    public function index()
    {
        return view ('inc/admin/navbar');
    }
}
