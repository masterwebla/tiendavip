<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function inicio(){
    	return view('template');
    }

    public function nosotros(){
    	return view('nosotros');
    }
}
