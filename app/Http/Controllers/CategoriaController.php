<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    	public function create(){
    	return view("admin.AltaCategoria");
    }
        public function mostrarCategorias()
    {
    	return view("admin.Categorias");
    }

}
