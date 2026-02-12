<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstControl extends Controller
{
    public function index(){
        return view('first');
    }
}
