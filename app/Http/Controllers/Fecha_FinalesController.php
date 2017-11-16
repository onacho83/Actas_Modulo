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
    public function edit($id)
    {
       //prueba return "esto es lo que se edita  $id";
        $fecha_Final=Fecha_Final::find($id);
        return view('admin.fecha_Finales.edit')->with(compact('fecha_Final'));
    }


    public function update(Request $request, $id)
    {
        //registrar nueva fecha
       // dd($request ->all());
        $date = new Carbon($request->input('fecha_examen'));
       
        $date = $date->format('Y-m-d');//formato de fecha año-mes-dia


        $fecha_final =Fecha_Final::find($id);
        $fecha_final->fecha_examen = $date;
        $fecha_final->materia_id = $request->input('materia_id');
        $fecha_final->acta_id = $request->input('acta_id');
        $fecha_final->save(); //UPDATE

        return redirect('/admin/fecha_Finales');//volver a home


    }


    public function destroy($id){

        $fecha_Final=fecha_Final::find($id);
        $fecha_Final->delete();//eliminar registro
        return back();


    }   
}


