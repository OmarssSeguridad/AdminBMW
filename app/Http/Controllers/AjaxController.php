<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motociclistas;
class AjaxController extends Controller
{
    
    public function combo($id_motociclista)
    {		
        $Motociclistas = Motociclistas::select('email')->where('id_motociclista',$id_motociclista)
        		->get();
    	return $Motociclistas;
    }
}
