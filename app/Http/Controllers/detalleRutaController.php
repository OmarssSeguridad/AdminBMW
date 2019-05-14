<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detallesRuta;
use App\Rutas;
use App\Imagenes;
use App\Motociclistas;
use DB;
class detalleRutaController extends Controller
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
        $motociclista = Motociclistas::all();
        return view("admin.AltaRuta",compact('motociclista'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $motociclista = Motociclistas::all();
        $ruta= new Rutas();
        $ruta->name= $request->name;
        $ruta->detalle=$request->detalle;
        $ruta->save();
        
        $imagenes= new Imagenes();
        $imagenes->name= $request->evidencia;
        $imagenes->ruta= $request->name;
        $imagenes->save();

        $detalleRuta = new detallesRuta();
        $detalleRuta->id_motociclista= $request->id_motociclista;
        $detalleRuta->id_Ruta= Rutas::select('id_ruta')->max('id_ruta'); 
        $detalleRuta->id_imagenes =Imagenes::select('id_imagenes')->max('id_imagenes'); 
        $detalleRuta->status= 1;
        $detalleRuta->save();

        $this->validate($request, [
           
        ]);
        return view('admin.AltaRuta',compact('motociclista'));
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
    public function destroy($id,$id2,$id3)
    {
        $detalleRuta = detallesRuta::find($id);
        $ruta = Rutas::find($id2);
        $imagen = Imagenes::find($id3);
  
        $detalleRuta->delete();
        $ruta->delete();
        $imagen->delete();

        $ruta = DB::select('SELECT detalles_rutas.id_detalleruta as id,detalles_rutas.id_ruta as idruta ,detalles_rutas.id_imagenes as idimagen , rutas.name as ruta, rutas.detalle as detalle, motociclistas.name as name, motociclistas.ap as ap, motociclistas.am as am, imagenes.name as imagen FROM detalles_rutas JOIN rutas, motociclistas, imagenes WHERE rutas.id_ruta = detalles_rutas.id_ruta AND detalles_rutas.id_motociclista = motociclistas.id_motociclista AND detalles_rutas.id_imagenes = imagenes.id_imagenes');

        return view('admin.rutas', compact('ruta'));

    }
    public function mostrarRutas()
    {
        $ruta = DB::select('SELECT detalles_rutas.id_detalleruta as id,detalles_rutas.id_ruta as idruta ,detalles_rutas.id_imagenes as idimagen , rutas.name as ruta, rutas.detalle as detalle, motociclistas.name as name, motociclistas.ap as ap, motociclistas.am as am, imagenes.name as imagen FROM detalles_rutas JOIN rutas, motociclistas, imagenes WHERE rutas.id_ruta = detalles_rutas.id_ruta AND detalles_rutas.id_motociclista = motociclistas.id_motociclista AND detalles_rutas.id_imagenes = imagenes.id_imagenes');

        return view("admin.Rutas", compact('ruta'));
    }
}
