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
    public function mostrarModoPago()
    {
      $modoPagos = modoPago::all();
      return view('admin.modoPago', compact('modoPagos'));
    }
    

    public function edit($id)
    {
        $modoPago = modoPago::find($id);
        return view('admin.editarModoPago',compact('modoPago'));
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
            'detalle'=>'required',
        ]);

        $modoPago = modoPago::find($id);
        $modoPago->name = $request->get('name');
        $modoPago->detalle = $request->get('detalle');
        $modoPago->save();

        return redirect()->route('modoPagos');
    }

     public function destroy($id)
    {
         $modoPago= modoPago::find($id);
        if($modoPago==null)
        {
            return view('errors.404');
        }
        $modoPago->delete();
        return view('admin.modoPago', compact('modoPagos'));
    }



}
