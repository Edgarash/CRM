@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Estados')
@section('section')

@section('section')
@if (App\Estado::count() > 0)
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
                @foreach ($estados as $estado)
                <tr id="/Estado/{{$estado->id}}">
                    <td class="text-center align-middle">{{$estado->id}}</td>
                    <td class="align-middle">{{$estado->estado}}</td>
                    <td class="text-center">
                        <a href ="{{url('/estados/'.$estado->id.'/Modificarestado')}}" data-toggle="tooltip" title="Modificar nombre de: {{$estado->estado}}" data-placement="left"><i
                                class="fa fa-2x fa-cog "></i></a>
                        <a data-toggle="tooltip" title="Eliminar falla: {{$estado->estado}}" data-placement="left"><i
                                class="fa fa-2x fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="text-center">
    <a href="{{route ('Registrarestado')}}">
        <button class="btn btn-success pull-right" style="margin-top: 20px">Nuevo Estado</button>
    </a>
</div>
@else
<h1>No hay estados registrados</h1>
@endif
<script src="{{asset('assets/scripts/CRM/fallas.js')}}"></script>
@endsection