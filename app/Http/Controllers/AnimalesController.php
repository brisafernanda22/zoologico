<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalesController extends Controller
{
    public function __invoke(){
        return view('home');
    }
    public function gato(){
        
        return view('zoologico.gato');
    }

    public function perro(){
        return view('zoologico.perro');
    }

    public function raton(){
        return view('zoologico.raton');
    }

}
