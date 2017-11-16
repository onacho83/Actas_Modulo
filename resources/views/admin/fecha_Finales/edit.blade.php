@extends('layouts.app')

@section('content')


        
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Cambiar Datos</div>

                             
                            <form method="post" action="{{ url('/admin/fecha_Finales/'.$fecha_Final->id.'/edit') }}">
                                {{ csrf_field() }}

                                <!-- markup -->
                                <input class="datepicker form-control" type="string" name="fecha_examen" value="{{$fecha_Final->fecha_examen}}" />
                               
                                <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Materia ID</label>
                                        <input type="integer" class="form-control" name="materia_id" value="{{$fecha_Final->materia_id}}">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Acta ID</label>
                                        <input type="integer" class="form-control" name="acta_id" value="{{$fecha_Final->acta_id}}">
                                    </div>
                                </div>

                              <button class="btn btn-success">Guardar Cambios</button>

                              <a href="{{ url('/admin/fecha_Finales') }}" class="btn btn-default"> Cancelar </a>
                               

                            </form>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

@endsection
