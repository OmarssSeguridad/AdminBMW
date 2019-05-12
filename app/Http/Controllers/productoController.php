<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;
class productoController extends Controller
{
    public function create(){
      $categoria=Categorias::All();
     	return view("admin.AltaProducto", compact('categoria'));
    }

    public function store(request $request)
    {
        $categoria=Categorias::All();
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
        return view("admin.altaProducto", compact('categoria'));
    }
}
