<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show(){

            return view('welcome');


    }
    public function showw(){

        return view('first');

        
}
}
