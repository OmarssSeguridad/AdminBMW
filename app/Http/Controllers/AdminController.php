<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function admin()
    {
    	return view("admin.dashboard");
    }
    
	public function create(){
    	return view("admin.AltaUsuario");
    }
    public function destroy($id)
    {
        $user= User::find($id);
        if($user==null)
        {
            return view('errors.404');
        }
        $user->delete();
        session()->flash('message','Eliminado Correctamente');
        $user = User::all();
        return view('admin.usuarios',compact('user'));
    }
    public function edit($id)
    {
        $user=User::find($id);
        if($user==null)
        {
            return view('errors.404');
        }
        return view('admin.editarUsuario
            ',compact('user'));
    }
    
    public function update(Request $request, $id)
    {
        $user= User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tipoUser = $request->tipoUser;
        $this->validate($request, [
        'name'=>'required|max:50',
        'email'=>'required',
          ]);
        $user->save(); 
  
        return redirect('/admin/editaUsuario/'.$id);
}    

    public function mostrarUsers()
    {
        $user = User::all();
    	return view("admin.usuarios",compact('user'));
    }

}
