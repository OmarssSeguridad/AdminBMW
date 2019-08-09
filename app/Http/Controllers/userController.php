<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
use Illuminate\Mail\Message;


class UserController extends Controller
{

    public function create(){
    	return view("admin.AltaUsuario");
    }
	
	public function store(Request $request)
    {
        $user = new User;   
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tipoUser = $request->tipoUser;
        $user->password = bcrypt($request->password);

        $this->validate($request, [
            'name'=>'required|max:30',
            'email'=>'required',
            'tipoUser'=>'required',
            'password'=>'required|min:6|max:30',
        ]);

        $user->save(); 
        $name = $request->name;
        $email = $request->email;
        $tipoUser = $request->tipoUser;

        Mail::send('emails.altaUser', [
                'name'=> $name,

                'email' => $email,
                'tipoUser' => $tipoUser
            ], function(Message $message)use($request){
            $message->to($request->email, $request->name)->subject('Bienvenido');
        });

        return view("admin.altaUsuario");
    

    }

    
}
