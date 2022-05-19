<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //! Invoke administra una única ruta
    public function __invoke()
    {
        // return view('welcome');
        return view('home');
    }
}
