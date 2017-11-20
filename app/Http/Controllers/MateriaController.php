<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materia;
class MateriaController extends Controller
{
     public function index($id)
	
    {	
        
    	$fecha_materia = Materia::where('nombre', $id)->get();
    	return view('admin.finales_materia.index')->with(compact('materias'));
    	

    }
}
