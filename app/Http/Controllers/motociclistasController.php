<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class motociclistasController extends Controller
{
    	public function create(){
    	return view("admin.AltaMotociclista");
    }
        public function mostrarMotociclistas()
    {
    	return view("admin.motociclistas");
    }
}
