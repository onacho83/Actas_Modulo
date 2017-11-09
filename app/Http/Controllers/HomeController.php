<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fecha_Final;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fecha_Finales=Fecha_Final::all();
        return view('home')->with(compact('fecha_Finales')); //listado
    }
}
