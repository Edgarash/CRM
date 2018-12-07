@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Empleados del Sistema')
@section('section')

@if (App\Empleado::count() > 0)
{!! csrf_field() !!}
    <div class="input-group custom-search-form col-sm-4">
        <input type="text" class="form-control" placeholder="Filtrar">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">
                <i class="fa fa-search"></i>
            </button>
        </span>
    </div>
    <br>
    <div class="row">
    <div class="col-sm-12">
        <table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="align-middle col-xs-1 text-center">ID</th>
                    <th class="align-middle col-xs-3">Nombre</th>
                    <th class="align-middle col-xs-3">Apellidos</th>
                    <th class="align-middle col-xs-3">Email</th>
                    <th class="align-middle col-xs-1">Sucursal</th>
                    <th class="align-middle col-xs-2 text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleado as $empleado)
                <tr id="/Empleado/{{$empleado->id}}">
                    <td class="text-center align-middle">{{ $empleado->id}}</td>
                    <td class="align-middle">{{$empleado->nombre}}</td>
                    <td class="align-middle">{{$empleado->apellidos}}</td>
                    <td class="align-middle">{{$empleado->email}}</td>
                    <td class="align-middle">{{$empleado->sucursal}}</td>
                    <td class="text-center">
                        <a href="{{url ('/empleados/'.$empleado->id.'/Modificarempleado')}}" data-toggle="tooltip" title="Modificar datos de: {{$empleado->nombre}}" data-placement="left"><i
                            class="fa fa-2x fa-pencil "></i></a>
                        <a data-toggle="tooltip" title="Eliminar empleado: {{$empleado->nombre}}" data-placement="left"><i
                            class="fa fa-2x fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="text-center">
    <button class="btn btn-primary pull-right" style="margin-top: 20px">Nuevo Empleado</button>
</div>
@else
<h1>No hay Empleados registradas</h1>
@endif
<script src="{{asset('assets/scripts/CRM/empleado.js')}}"></script>
@endsection
