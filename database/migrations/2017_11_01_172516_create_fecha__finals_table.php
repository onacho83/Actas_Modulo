<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFechaFinalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fecha__finals', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_examen')->nullable();
            $table->integer('materia_id')->nullable();
            $table->integer('acta_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fecha__finals');
    }
}


 // fechas_finales:
 //    _attributes:   { phpName: FechaFinal }
 //    id:            { type: INTEGER, primaryKey: true, autoIncrement: true, required: true }
 //    fecha_examen:  { type: DATE, required: true }
 //    materia_id:    { type: INTEGER, required: true, foreignTable: materia, foreignReference: id }
 //    acta_id:       { type: INTEGER, required: false, foreignTable: actas, foreignReference: id }
 //    cerrada_at:    { type: TIMESTAMP, required: false }
 //    cerrada_by_id: { type: INTEGER, required: false, foreignTable: sf_guard_user, foreignReference: id }
 //    created_at:    ~
 //    created_by_id: { type: INTEGER, required: true, foreignTable: sf_guard_user, foreignReference: id }
 //    updated_at:    ~
 //    updated_by_id: { type: INTEGER, required: false, foreignTable: sf_guard_user, foreignReference: id }
 //    deleted_at:    { type: TIMESTAMP, required: false }
 //    deleted_by_id: { type: INTEGER, required: false, foreignTable: sf_guard_user, foreignReference: id }