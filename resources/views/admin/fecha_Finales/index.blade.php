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
                 
                    
                           <!-- panel importar -->
                <div class="panel panel-default">
                  <div class="panel-heading">Importar Archivo</div>
                  <div class="panel-body">

                    <form method="post" action="{{ url('/admin/fecha_Finales/import') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <input type="file" name="archivo" required>
                        
                        <button type="submit" class="btn btn-primary btn-round" > Subir Archivo </button>
                        <a href="{{ url('/admin/fecha_Finales/create') }}" <button class="btn btn-info"></button>>Agregar Fecha</a>
                    </form>
                   

                  </div>
                </div>
                <hr> 



                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Fecha de Examen</th>
                                <th>Materia</th>
                                <th>Acta</th>
                               
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fecha_Finales as $fecha_Final)
                            <tr>
                                <td class="text-center">{{ $fecha_Final ->id }}</td>
                                <td>{{ $fecha_Final ->fecha_examen }}</td>
                                <td>{{ $fecha_Final ->materia_id }}</td>
                                <td>{{ $fecha_Final ->acta_id }}</td>
                              
                                <td class="td-actions text-right">
                                  <form>
                                    <button"{{url('/admin/finales_materia/'.$fecha_Final->id.'/index')}}" " rel="tooltip" title="Editar Fecha" class="btn btn-success btn-simple btn-xs">
                                      <i class="material-icons">search</i>
                                    </button>
                                    <a href="{{url('/admin/fecha_Finales/'.$fecha_Final->id.'/edit')}}" " rel="tooltip" title="Editar Fecha" class="btn btn-success btn-simple btn-xs">
                                      <i class="material-icons">build</i>
                                    </a>
                                     <form method="post" action="{{ url('/admin/fecha_Finales/'.$fecha_Final->id.'/delete')}}">
                                        {{ csrf_field() }}
                                        <button type="submit" rel="tooltip" title="Borrar Fecha" class="btn btn-danger btn-simple btn-xs">
                                       <i class="material-icons">delete_forever</i>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </body>
                    </table>
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
