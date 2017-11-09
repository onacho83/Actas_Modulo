<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fecha_Final;
use Carbon\Carbon;

class Fecha_FinalesController extends Controller
{
    public function index()
    {
    	$fecha_Finales=Fecha_Final::all();
    	return view('admin.fecha_Finales.index')->with(compact('fecha_Finales')); //listado
    }
     public function create()
    {
    	return view('admin.fecha_Finales.create'); //formulario de registro
    }
     public function store(Request $request)
    {
    	//registrar nueva fecha
       // dd($request ->all());
        $date = new Carbon($request->input('fecha_examen'));
       
        $date = $date->format('Y-m-d');


        $fecha_final = new Fecha_Final();
        $fecha_final->fecha_examen = $date;
        $fecha_final->materia_id = $request->input('materia_id');
        $fecha_final->acta_id = $request->input('acta_id');
        $fecha_final->save(); //INSERT

        return redirect('/admin/fecha_Finales');


    }
}
