@extends('layouts.app')

@section('content')

<div class="header header-filter" style="background-image: url('https://www.coodex.es/wp-content/uploads/2014/08/diseno-paginas-web-alicante.jpg');">
</div>

 <div class="main main-raised">
    <div class="container">

        <div class="section">
                <div class="panel-heading text-center"><h3>Modificar Fecha</h3></div>
                         
                   
        
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Cambiar Datos - "{{ $fecha_Final->id }}"</div>
                                  @if ($errors->any())
                 
                    <div class="alert alert-danger">
                  <div class="container-fluid">
      <div class="alert-icon">
        <i class="material-icons">error_outline</i>
      </div>
     
                    <b>Error en la edicion de fecha</b> 
    
                    @foreach ($errors->all() as $error)
                    <li> {{$error}}</li>
                    @endforeach

    </div>
</div>
                   </div>
                   @endif
                             
                            <form method="post" action="{{ url('/admin/fecha_Finales/'.$fecha_Final->id.'/edit') }}">
                                {{ csrf_field() }}

                                <!-- markup -->
                                <input class="datepicker form-control" type="string" name="fecha_examen" value="{{old('materia_id', $fecha_Final->fecha_examen)}}"/>
                               

                                


                                <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Materia ID</label>
                                        <input type="integer" class="form-control" name="materia_id" value="{{old('materia_id', $fecha_Final->materia_id)}}">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Acta ID</label>
                                        <input type="integer" class="form-control" name="acta_id" value="{{ old('acta_id', $fecha_Final->acta_id)}}">
                                    </div>
                                </div>

                            
                                     <button class="btn btn-info btn-sm">Guardar Cambios</button>
                            </form>
                             <a href="{{url('admin/fecha_Finales')}}" class="btn btn-default btn-sm">Regresar a Actas</a> 





                            </div>
                        </div>

                    </div>
                </div>

            </div>
        

@endsection
