<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

class CategoriaController extends Controller
{
    	public function create(){
    	return view("admin.AltaCategoria");
    }
   public function store(request $request)
   {
		$categoria = new Categorias;   
        $categoria->name = $request->name;
        $categoria->detalle = $request->detalle;

        $this->validate($request, [
            'name'=>'required|max:30',
           	'detalle'=>'required',
        ]);

        $categoria->save(); 
        return view("admin.altaCategoria");
    }


}
