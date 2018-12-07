@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Servicios')
@section('section')

@section('section')
@if (App\Servicio::count() > 0)
{!! csrf_field() !!}
<div class="row">
    <div class="col-sm-12">
        <table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-xs-1 text-center">ID</th>
                    <th class="col-xs-10">Nombre</th>
                    <th class="col-xs-1 text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicios as $servicio)
                <tr id="/Servicio/{{$servicio->id}}">
                    <td class="text-center align-middle">{{$servicio->id}}</td>
                    <td class="align-middle">{{$servicio->servicio}}</td>
                    <td class="text-center">
                        <a href="{{url('/servicios/'.$servicio->id.'/Modificarservicio')}}" data-toggle="tooltip" title="Modificar nombre de: {{$servicio->servicio}}" data-placement="left"><i
                                class="fa fa-2x fa-pencil "></i></a>
                        <a data-toggle="tooltip" title="Eliminar falla: {{$servicio->servicio}}" data-placement="left"><i
                                class="fa fa-2x fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="text-center">
    <a href="{{route ('Registrarservicio')}}">
        <button class="btn btn-primary pull-right" style="margin-top: 20px">Nuevo Servicio</button>
    </a>
</div>
@else
<h1>No hay Servicios Registradas</h1>
@endif
<script src="{{asset('assets/scripts/CRM/fallas.js')}}"></script>
@endsection