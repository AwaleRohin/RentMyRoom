<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function aboutus(){
        return view('pages.aboutus');
    }
    public function howitworks(){
        return view('pages.howitworks');
    }
    public function location(){

        return view('pages.location');
    }
}
