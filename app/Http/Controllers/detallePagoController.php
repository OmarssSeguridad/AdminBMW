<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagos;
use App\detallesPago;
use App\Motociclistas;
use App\Productos;
use App\ModoPago;
class detallePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motociclista=Motociclistas::all();
        $producto=Productos::all();
        $modoPago=ModoPago::all();
        return view("admin.AltaPago",compact('motociclista','producto','modoPago'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pago= new Pagos();
        $pago->id_motociclista= $request->id_motociclista;
        $pago->fecha=$request->fecha;
        $pago->id_modopago=$request->id_motociclista;
        $pago->save();

        $detallePago = new detallesPago();
        $detallePago->id_pago= Pagos::select('id_pago')->max('id_pago'); 
        $detallePago->id_producto= $request->id_producto;
        $detallePago->cantidad= $request->cantidad;
        $detallePago->precio= $request->precio;
        $this->validate($request, [
           
        ]);

        $detallePago->save(); 
        $motociclista=Motociclistas::all();
        $producto=Productos::all();
        $modoPago=ModoPago::all();
        return view("admin.AltaPago",compact('motociclista','producto','modoPago'));

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
        //
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
        //
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
    public function mostrarPagos()
    {
        return view("admin.Pagos");
    }
}
