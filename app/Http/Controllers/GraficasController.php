<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficasController extends Controller
{
     public function graficas()
    {
        return view("graficas.selecciona_grafica");
    }


    public function grafica_areas()
    {
        return view("graficas.grafica_areas");
    }


    public function grafica_barras()
    {
        return view("graficas.grafica_barras");
    }


    public function grafica_pie()
    {
        return view("graficas.grafica_pie");
    }


    public function grafica_3d()
    {
        /*SELECT count(d.cantidad), p.name
FROM detalles_pagos d
join productos p
on d.id_producto=p.id_producto
GROUP BY p.name;*/
/*
        $carreras = Carreras::orderBy('nombre')->get();
        return view("graficas.grafica_3d")
        ->with('carreras',$carreras);*/
$ventas= DB::table('detalles_pagos')
        ->join('productos', 'detalles_pagos.id_producto', '=', 'productos.id_producto')
        ->select(DB::raw('COUNT(detalles_pagos.cantidad) as total'), 'productos.name')
        ->groupBy('productos.name')
        ->get();
        //dd($ventas);
        return view("graficas.grafica_3d", compact('ventas'));
    }
}
