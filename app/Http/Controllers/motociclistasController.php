<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motociclistas;
use Illuminate\Mail\Message;
use Mail;

class motociclistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motociclistas = Motociclistas::all();

        return view("admin.motociclistas",compact('motociclistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.AltaMotociclista");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        //Envio de email 
        $name = $request->name;
        $ap = $request->ap;
        $am = $request->am;
        $direccion = $request->direccion;
        $fecNac = $request->fecNac;
        $email = $request->email;
        $telefono = $request->telefono;

        $folio = Motociclistas::select('id_motociclista')->max('id_motociclista'); 
        Mail::send('emails.altaMotociclista', [
                'name'=> $name,
                'ap'=>$ap,
                'am' =>$am,
                'direccion' =>$direccion,
                'fecNac' =>$fecNac,
                'email' =>$email,
                'telefono' => $telefono
            ], function(Message $message)use($request){
            $message->to($request->email,'Sistemas')->subject('Bienvenido');
        });

        return view("admin.altaMotociclista");
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
        $motociclista = Motociclistas::find($id);

        return view('admin.editarMotociclista',compact('motociclista'));
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
            'ap'=>'required|max:30',
            'am'=>'required|max:30',
            'direccion'=>'required|max:50',
            'fecNac'=>'required',
            'email'=>'required',
            'telefono'=>'required|min:6|max:10',
        ]);

        $motociclista = Motociclistas::find($id);

        $motociclista->name = $request->get('name');
        $motociclista->ap = $request->get('ap');
        $motociclista->am = $request->get('am');
        $motociclista->direccion = $request->get('direccion');
        $motociclista->fecNac = $request->get('fecNac');
        $motociclista->email = $request->get('email');
        $motociclista->telefono = $request->get('telefono');

        $motociclista->save(); 
        return redirect()->route('motociclista.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $motociclista= Motociclistas::find($id);
        if($motociclista==null)
        {
            return view('errors.404');
        }
        $motociclista->delete();
        $motociclistas = Motociclistas::all();
        return view("admin.Motociclistas",compact('motociclistas'));    
    }
}
