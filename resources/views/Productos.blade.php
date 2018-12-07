@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Productos')
@section('section')

@section('section')
@if (App\Producto::count() > 0)
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
                @foreach ($productos as $producto)
                <tr id="/Producto/{{$producto->id}}">
                    <td class="text-center align-middle">{{$producto->id}}</td>
                    <td class="align-middle">{{$producto->nombre}}</td>
                    <td class="text-center">
                        <a data-toggle="tooltip" title="Modificar nombre de: {{$producto->nombre}}" data-placement="left"><i
                                class="fa fa-2x fa-cog "></i></a>
                        <a data-toggle="tooltip" title="Eliminar falla: {{$producto->nombre}}" data-placement="left"><i
                                class="fa fa-2x fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="text-center">
    <button class="btn btn-primary pull-right" style="margin-top: 20px">Nueva Marca</button>
</div>
@else
<h1>No hay Productos Registrados</h1>
@endif
<script src="{{asset('assets/scripts/CRM/fallas.js')}}"></script>
@endsection