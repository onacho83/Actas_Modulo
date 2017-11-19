<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrera extends Model
{
    public function materias()

    {
    	return $this->hasMany(materias::class);
    }
}
