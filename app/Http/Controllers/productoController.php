<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = DB::table('productos')
            ->join('categorias', 'productos.id_categoria', '=', 'categorias.id_categoria')
            ->select('productos.*', 'categorias.name as categoria')
            ->get();

        return view('admin.productos',compact('productos'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.AltaProducto");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Productos::find($id);

        $cselect = Categorias::find($producto->id_categoria);

        $categorias = DB::table('categorias')
                     ->where('id_categoria', '<>', $producto->id_categoria)
                     ->get();

        return view('admin.editarProducto',compact('producto','categorias','cselect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  

        $this->validate($request, [
            'name'=>'required|max:30',
            'precio'=>'required',
            'stock'=>'required',
            'id_categoria'=>'required',
        ]);
        $producto = Productos::find($id);

        $producto->name = $request->get('name');
        $producto->precio = $request->get('precio');
        $producto->stock = $request->get('stock');
        $producto->id_categoria = $request->get('id_categoria');


        $producto->save(); 
        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
