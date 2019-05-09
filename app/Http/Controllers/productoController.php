<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
class productoController extends Controller
{
        	public function create(){
    	return view("admin.AltaProducto");
    }
   public function store(request $request)
   {
		$producto = new Productos;   
        $producto->name = $request->name;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->id_categoria = $request->id_categoria;

        $this->validate($request, [
            'name'=>'required|max:30',
           	'precio'=>'required',
           	'stock'=>'required',
        ]);

        $producto->save(); 
        return view("admin.altaProducto");
    }
}
