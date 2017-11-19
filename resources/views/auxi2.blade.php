@extends('layouts.app')

{{$fecha_Final->materia_id}}
@section('title', 'Bienvenido a Modulo Carreras')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('https://www.coodex.es/wp-content/uploads/2014/08/diseno-paginas-web-alicante.jpg');">
</div>

 <div class="main main-raised">
    <div class="container">

        <div class="section">
                <div class="panel-heading text-center"><h3>Modificar Carrera</h3></div>
                         
                    <form method="post" action="{{ url('carreras/'.$carreras->id.'/edit') }}">
                        {{ csrf_field() }}

                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="control-label">ID Carrera</label>
                                <input type="number" class="form-control" name="id"  value="{{$carreras->id}}">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Nombre de Carrera</label>
                                <input type="text" class="form-control" name="nombre" value="{{$carreras->nombre}}">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Descripción</label>
                                <input type="text" class="form-control" name="descripcion" value="{{$carreras->descripcion}}">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Estado</label>
                                <input type="number" class="form-control" name="estado" value="{{$carreras->estado}}">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Institución</label>
                                <input type="number" class="form-control" name="institucion" value="{{$carreras->institucion}}">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Observación</label>
                                <input type="text" class="form-control" name="observaciones" value="{{$carreras->observaciones}}">
                            </div>
                        </div>

                        <div class="col-sm-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Resolución</label>
                                    <input type="number" class="form-control" name="resolucion" value="{{$carreras->resolucion}}" >
                                </div>
                            </div>






                      <button class="btn btn-primary btn-sm">Guardar</button>
                       

                    </form>


                        <a href="{{url('carreras')}}" class="btn btn-primary btn-sm">Regresar a Carreras</a> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
        

<!--     <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                 <ul>
                    <li>
                        <a href="http://www.creative-tim.com">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="http://presentation.creative-tim.com">
                           About Us
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                           Blog
                        </a>
                    </li>
                    <li>
                        <a href="http://www.creative-tim.com/license">
                            Licenses
                        </a>
                    </li>
                </ul> 
            </nav>
            <div class="copyright pull-right">
                &copy; 2016, made with <i class="fa fa-heart heart"></i> by Creative Tim
            </div>
        </div>
    </footer>
 -->
</div>
@endsection

