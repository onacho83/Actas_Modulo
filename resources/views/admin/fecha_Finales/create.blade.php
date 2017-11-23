@extends('layouts.app')

@section('title', 'Actas')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('https://www.coodex.es/wp-content/uploads/2014/08/diseno-paginas-web-alicante.jpg');">
    </div>

     <div class="main main-raised">
        <div class="container">

            <div class="section">
                    <div class="panel-heading text-center"><h1>Actas</h1></div>
                     

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">

                            {{ session('status') }}
                        </div>
                    @endif
                   <!-- markup -->
                   @if ($errors->any())
                 
                    <div class="alert alert-danger">
    <div class="container-fluid">
      <div class="alert-icon">
        <i class="material-icons">error_outline</i>
      </div>
     
                    <b>Error en el registro de fecha</b> 
    
                    @foreach ($errors->all() as $error)
                    <li> {{$error}}</li>
                    @endforeach

    </div>
</div>
                   </div>
                   @endif

                   <form method="post" action="{{ url('/admin/fecha_Finales') }}">
                                {{ csrf_field() }}

                                <!-- markup -->
                                <input class="datepicker form-control" type="string" name="fecha_examen" />
                               


                               <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Materia ID</label>
                                        <input type="integer" class="form-control" name="materia_id" value="{{old('materia_id')}}">
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Acta ID</label>
                                        <input type="integer" class="form-control" name="acta_id" value="{{old('acta_id')}}">
                                    </div>
                                </div>
                               

                              <button class="btn btn-success">Registrar Fecha</button>
                               

                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    <footer class="footer">
        <div class="container">
           
           
        </div>
    </footer>

</div>
@endsection
