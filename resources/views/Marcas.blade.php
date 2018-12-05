@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Marcas')
@section('section')

@section('section')
@if (App\Marca::count() > 0)
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
                @foreach ($marcas as $marca)
                <tr id="/Marca/{{$marca->id}}">
                    <td class="text-center align-middle">{{$marca->id}}</td>
                    <td class="align-middle">{{$marca->nombre}}</td>
                    <td class="text-center">
                        <a data-toggle="tooltip" title="Modificar nombre de: {{$marca->nombre}}" data-placement="left"><i
                                class="fa fa-2x fa-cog "></i></a>
                        <a data-toggle="tooltip" title="Eliminar falla: {{$marca->nombre}}" data-placement="left"><i
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
<h1>No hay Marcas Registradas</h1>
@endif
<script src="{{asset('assets/scripts/CRM/fallas.js')}}"></script>
@endsection