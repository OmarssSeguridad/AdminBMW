<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagos;
use App\detallesPago;
use App\Motociclistas;
use App\Productos;
use App\ModoPago;
use DB;
use Mail;
use Illuminate\Mail\Message;

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
        
        //Envio de email 
        $motociclistass = motociclistas::select("name", "ap", "am")->find($request->id_motociclista);
        $productoss = productos::select("name")->find($request->id_producto);
        $asunto = 'Pago Realizado';
        $folio = Pagos::select('id_pago')->max('id_pago'); 
        Mail::send('emails.AltaPago', [
                'motociclista'=> $motociclistass,
                'producto'=>$productoss,
                'asunto' =>$asunto,
                'folio' =>$folio
            ], function(Message $message)use($request){
            $message->to('omar.blanco@8w.com.mx','Sistemas')->subject('Pago Realizado');
        });



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
        $detallePago = detallesPago::find($id);
        $motociclista=Motociclistas::all();
        $producto=Productos::all();
        $modoPago=ModoPago::all();
        $pago=Pagos::find($detallePago->id_pago);

        return view('admin.editarPago',compact('detallePago','motociclista','producto','modoPago','pago'));
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
        $detallePago = detallesPago::find($id);
        $pago=Pagos::find($detallePago->id_pago);

        $this->validate($request, [
           
        ]);
       
        $pago->id_motociclista= $request->get('id_motociclista');
        $pago->fecha=$request->get('fecha');
        $pago->id_modopago=$request->get('id_motociclista');
        $pago->save();

        $detallePago->id_producto= $request->get('id_producto');
        $detallePago->cantidad= $request->get('cantidad');
        $detallePago->precio= $request->get('precio');
        
        $detallePago->save(); 

        return redirect()->route('pagos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id2)
    {
        $detallePago = detallesPago::find($id);
        $pago = Pagos::find($id2);

        $detallePago->delete();
        $pago->delete();

         $pagos = DB::select('SELECT d.id_detalle as id, d.id_pago as pago, m.name AS name, m.ap AS ap, m.am AS am, p.fecha as fecha, q.name AS modopago, w.name as producto, d.cantidad as cantidad, d.precio as precio FROM detalles_pagos d JOIN pagos p, motociclistas m, modo_pagos q, productos w WHERE p.id_motociclista = m.id_motociclista AND q.id_modopago = p.id_modopago AND w.id_producto = d.id_producto AND p.id_pago = d.id_pago');

        return redirect("admin.pagos",compact('pagos'));  

    }
    public function mostrarPagos()
    {
        $pagos = DB::select('SELECT d.id_detalle as id, d.id_pago as pago, m.name AS name, m.ap AS ap, m.am AS am, p.fecha as fecha, q.name AS modopago, w.name as producto, d.cantidad as cantidad, d.precio as precio FROM detalles_pagos d JOIN pagos p, motociclistas m, modo_pagos q, productos w WHERE p.id_motociclista = m.id_motociclista AND q.id_modopago = p.id_modopago AND w.id_producto = d.id_producto AND p.id_pago = d.id_pago');

        

        //
        /*$pagos = detallesPago::join('pagos','pagos.id_pago', '=', 'detalles_pagos.id_pago')
        ->join('motociclistas', 'pagos.id_motociclista', '=', 'motociclistas.id_motociclista')
        ->join('modo_pagos', 'modo_pagos.id_modopago', '=', 'pagos.id_modopago')
        ->join('productos', 'productos.id_producto', '=', 'detalles_pagos.id_producto')
        ->select('detalles_pagos.id_detalle, motociclistas.name, motociclistas.ap, motociclistas.am, pagos.fecha, modo_pagos.name, productos.name, detalles_pagos.cantidad, detalles_pagos.precio')
        ->get();*/

        return view("admin.Pagos",compact('pagos'));
    }
}
