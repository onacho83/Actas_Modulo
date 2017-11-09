@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actas - Fechas Finales</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <a href="{{ url('/admin/fecha_Finales/create') }}" class="btn btn-primary btn-round">Agregar Fecha</a>
                    
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
                                    <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-user"></i>
                                    </button>
                                    <a href="{{url('/admin/fecha_Finales/'.$fecha_Final->id.'/edit')}}" " rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
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
@endsection
