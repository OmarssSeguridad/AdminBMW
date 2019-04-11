<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagosController extends Controller
{
        	public function create(){
    	return view("admin.AltaPago");
    }
        public function mostrarPagos()
    {
    	return view("admin.Pagos");
    }
}
