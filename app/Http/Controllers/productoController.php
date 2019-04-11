<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productoController extends Controller
{
        	public function create(){
    	return view("admin.AltaProducto");
    }
        public function mostrarProductos()
    {
    	return view("admin.Productos");
    }
}
