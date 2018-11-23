@extends('layouts.dashboard')
@section('page_heading', 'Fallas')

@section('section')
@if (App\Falla::count() > 0)
{!! csrf_field() !!}
<div class="row space-bottom">
    <div class="col-sm-12">
        <button class="btn btn-primary pull-right">Nueva Falla</button>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-xs-1 text-center">ID</th>
                    <th class="col-xs-10">Nombre</th>
                    <th class="col-xs-1">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fallas as $falla)
                <tr id="/Fallas/{{$falla->id}}">
                    <td class="text-center align-middle">{{$falla->id}}</td>
                    <td class="align-middle">{{$falla->nombre}}</td>
                    <td class="text-center">
                        <a style="color:#000000" data-toggle="tooltip" title="Modificar nombre de: {{$falla->nombre}}"
                            data-placement="left"><i class="fa fa-2x fa-cog "></i></a>
                        <a style="color:#DD0000" data-toggle="tooltip" title="Eliminar falla: {{$falla->nombre}}"
                            data-placement="left"><i class="fa fa-2x fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="text-center">
    {!! $fallas->render() !!}
</div>
@else
<h1>No hay fallas registradas</h1>
@endif
<script src="{{asset('assets/scripts/CRM/fallas.js')}}"></script>
@endsection
