<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function landingpage(){
        return view('landingpage');
    }

    public function contacto(){
        return view('contacto');
    }
}
