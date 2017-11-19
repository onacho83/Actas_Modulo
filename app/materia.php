<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    public function carrera(){

    	return $this->belongsTo(carrera::class);
    }
}
