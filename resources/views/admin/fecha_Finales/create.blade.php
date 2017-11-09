@extends('layouts.app')

@section('content')


        
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Agregar Nueva Fecha</div>

                             
                            <form method="post" action="{{ url('/admin/fecha_Finales') }}">
                                {{ csrf_field() }}

                                <!-- markup -->
                                <input class="datepicker form-control" type="string" name="fecha_examen" />
                               

                                <script>
    $(function() {
        $( "#item_datepicker" ).datepicker({ 
                         dateFormat:'dd/mm/yy',
                         altFormat:'mm/dd/yy',
                         altField:'#elotrocampo'
            } );
    });
    </script>


                                <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Materia ID</label>
                                        <input type="integer" class="form-control" name="materia_id">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Acta ID</label>
                                        <input type="integer" class="form-control" name="acta_id">
                                    </div>
                                </div>

                              <button class="btn btn-success">Registrar Fecha</button>
                               

                            </form>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

@endsection
