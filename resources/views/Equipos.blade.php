@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Equipos')
@section('section')

@section('section')
@if (App\Falla::count() > 0)
{!! csrf_field() !!}
<div class="row">
    <div class="col-sm-12">
        <table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-xs-1 text-center">ID</th>
                    <th class="col-xs-10">Cliente</th>
                    <th class="col-xs-8">Modelo</th>
                    <th class="col-xs-8">Serie</th>
                    <th class="col-xs-1 text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipos as $equipo)
                <tr id="/Equipo/{{$equipo->id}}">
                    <td class="text-center align-middle">{{$equipo->id}}</td>
                    <td class="align-middle">{{$equipo->cliente}}</td>
                    <td class="align-middle">{{$equipo->modelo}}</td>
                    <td class="align-middle">{{$equipo->serie}}</td>
                    <td class="text-center">
                        <a data-toggle="tooltip" title="Modificar nombre de: {{$equipo->cliente}}" data-placement="left"><i
                                class="fa fa-2x fa-cog "></i></a>
                        <a data-toggle="tooltip" title="Eliminar falla: {{$equipo->cliente}}" data-placement="left"><i
                                class="fa fa-2x fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="text-center">
    <button class="btn btn-primary pull-right" style="margin-top: 20px">Nueva Equipo</button>
</div>
@else
<h1>No hay Equipos registrados</h1>
@endif
<script src="{{asset('assets/scripts/CRM/fallas.js')}}"></script>
@endsection