<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     if(auth()->user()->tipoUser=='admin'){
          return redirect()->route('admin');
        }

    if(auth()->user()->tipoUser=='user'){
          return redirect()->route('user');
        }
    }
}
