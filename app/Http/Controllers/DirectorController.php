<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index(){
        return view('directors.index');
    }


        public function organization(){
        return view('directors.organization');
    }
}
