<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rutaController extends Controller
{
        	public function create(){
    	return view("admin.AltaRuta");
    }
        public function mostrarRutas()
    {
    	return view("admin.Rutas");
    }
}
