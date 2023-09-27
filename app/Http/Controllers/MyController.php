<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        return view('my-page');
         // return 'welcome to my first page in my first Laravel project';
    }
}
