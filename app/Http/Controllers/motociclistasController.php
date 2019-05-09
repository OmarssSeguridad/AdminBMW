<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motociclistas;
class motociclistasController extends Controller
{
    public function create(){
    		return view("admin.AltaMotociclista");
    }
   public function store(request $request)
   {
		$motociclista = new Motociclistas;   
        $motociclista->name = $request->name;
        $motociclista->ap = $request->ap;
        $motociclista->am = $request->am;
        $motociclista->direccion = $request->direccion;
        $motociclista->fecNac = $request->fecNac;
        $motociclista->email = $request->email;
        $motociclista->telefono = $request->telefono;

        $this->validate($request, [
            'name'=>'required|max:30',
           	'ap'=>'required|max:30',
           	'am'=>'required|max:30',
           	'direccion'=>'required|max:50',
           	'fecNac'=>'required',
           	'email'=>'required',
            'telefono'=>'required|min:6|max:10',
        ]);

        $motociclista->save(); 
        return view("admin.altaMotociclista");
    }
}
