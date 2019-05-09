<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modoPago;

class modoPagoController extends Controller
{
    public function create(){
    	return view("admin.AltaModoPago");
    }
   public function store(request $request)
   {
		$modoPago = new modoPago;   
        $modoPago->name = $request->name;
        $modoPago->detalle = $request->detalle;

        $this->validate($request, [
            'name'=>'required|max:30',
           	'detalle'=>'required',
        ]);

        $modoPago->save(); 
        return view("admin.altaModoPago");
    }


}
