<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages/home');
    }
    public function ramesh(){
        return view('pages/ramesh');
    }
}
