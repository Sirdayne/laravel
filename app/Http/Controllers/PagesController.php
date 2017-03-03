<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }
    
    public function types(){
        return view('pages.types');
    }
    
    public function jalousie(){
        return view('pages.jalousie');
    }

    public function sew(){
        return view('pages.sew');
    }

    public function decor(){
        return view('pages.decor');
    }

    public function wallpapers(){
        return view('pages.wallpapers');
    }

    public function floor(){
        return view('pages.floor');
    }

    public function business(){
        return view('pages.business');
    }

    public function dealers(){
        return view('pages.dealers');
    }

    public function contacts(){
        return view('pages.contacts');
    }

}
