<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fecha_Final;
use Carbon\Carbon;
use DateTime;


use Excel;

class Fecha_FinalesController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        $fecha_examen= Carbon::now('America/Argentina/Buenos_Aires');
        $messages=[
                     'fecha_examen.required'=> 'Debe ingresar una fecha posterior a la de hoy',
                     
                     'materia_id.required'=> 'Debe ingresar un id de materia ',
                     'acta_id.required'=> 'Debe ingresar id para el acta menos a 3 digitos'


        ];
        $rules= [
                'fecha_examen'=>'required|date|after:tomorrow',
                'materia_id'=> 'required',
                'acta_id'=> 'required|numeric|min:1|max:99'
        ];
        $this->validate($request, $rules, $messages);
    	//registrar nueva fecha
        
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


    public function update(Request $request,$id)
    {
        $fecha_examen= Carbon::now('America/Argentina/Buenos_Aires');
         $messages=[
                'fecha_examen.required'=> 'Debe ingresar una fecha posterior a la de hoy',
                'materia_id.required'=> 'Debe ingresar un id de materia ',
                'acta_id.required'=> 'Debe ingresar un acta'


        ];
        $rules= [
                'fecha_examen'=> 'required|date|after:tomorrow',
                'materia_id'=> 'required',
                'acta_id'=> 'required|numeric|min:1'
        ];
        $this->validate($request, $rules, $messages);
        //registrar nueva fecha
       // dd($request ->all());
       // $date= Carbon::now('America/Argentina/Buenos_Aires')-addDays(+1);

        $date = new Carbon($request->input('fecha_examen'));
        
        $date = $date->format('Y-m-d');//formato de fecha año-mes-dia



        
        $fecha_final =Fecha_Final::find($id);
        $fecha_final->fecha_examen = $date;

        $fecha_final->materia_id = $request->input('materia_id');
        $fecha_final->acta_id = $request->input('acta_id');
        $fecha_final->save(); //UPDATE

        return redirect('/admin/fecha_Finales');

    }

    public function import(Request $request)
        {

        // guardar el archivo

        $file = $request->file('archivo');
        $path = public_path();
        $filename = uniqid() . $file->getClientOriginalName();
        $file->move($path, $filename);

        //leer archivo e importar archivo

        Excel::load($filename, function($archivo)
        {

            $result=$archivo->get();

            foreach ($result as $key => $value)
            {

            // echo $value->fecha_examen.'<br>';
            $fecha_final = new Fecha_Final();
            $fecha_final->fecha_examen = $value->fecha_examen;
            $fecha_final->materia_id = $value->materia_id;
            $fecha_final->acta_id = $value->acta_id;
            $fecha_final->save(); //INSERT

            }
        })->get();
        return redirect('/admin/fecha_Finales');//volver a home
        }


        public function importcsv(Request $request)
        {
            $file = $request->file('archivoCsv');

            $file = fopen($file,"r");
          
           while(! feof($file))
              {
               $datos=fgetcsv($file, 0 ,  ";" ,'"', "\n" );
               if (trim($datos[0]) != '') {
        
               
               $fecha=Carbon::createFromFormat('d/m/Y',$datos[4]);
               
                $fecha_final = new Fecha_Final();
                $fecha_final->fecha_examen = $fecha;
                $fecha_final->materia_id = substr($datos[1], -2);
                $fecha_final->acta_id = $datos[0];
                $fecha_final->save(); //INSERT
              }
            }
            fclose($file);
         
        }


    public function destroy($id){
        
        $fecha_Final=fecha_Final::find($id);
        $fecha_Final->delete();//eliminar registro
        return back();


    }   
}


