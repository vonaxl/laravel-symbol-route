<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class setUp extends Controller
{
    public function home(){
        return view('base');
    }
    public function contact(){
        return view('pages.contacts');
    }
    public function projects(){
        return view('pages.projects');
    }
}
