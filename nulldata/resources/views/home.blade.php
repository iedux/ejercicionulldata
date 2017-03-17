@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <h1>Personas Registradas</h1>
                <div class="panel-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Fecha Nacimiento</th>
                                <th>Direccion</th>


                            </tr>

                        </thead>
                        <tbody>

                            @foreach($personas as $row)
                                <tr>
                                    <td>{{$row['persona']->persona_id}}</td>
                                    <td>{{$row['persona']->persona_nombre}}</td>
                                    <td>{{$row['persona']->persona_email}}</td>
                                    <td>{{$row['persona']->persona_fecha_nacimiento}}</td>
                                    <td>
                                        @foreach($row['direcciones'] as $direccion)
                                        <b>{{$direccion->direccion_alias}}</b>
                                        <dl class="dl-horizontal">
                                            <dt>Calle</dt><dd>{{$direccion->direccion_calle}}</dd>
                                            <dt>CP</dt><dd>{{$direccion->direccion_cp}}</dd>
                                            <dt>Colonia</dt><dd>{{$direccion->direccion_colonia}}</dd>
                                            <dt>Municipio</dt><dd>{{$direccion->direccion_municipio}}</dd>

                                        </dl>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
