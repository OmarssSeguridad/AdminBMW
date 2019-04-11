<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modoPagoController extends Controller
{
    public function create(){
    	return view("admin.AltaModoPago");
    }
        public function mostrarModoPagos()
    {
    	return view("admin.ModoPagos");
    }

}
