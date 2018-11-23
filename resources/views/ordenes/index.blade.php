@extends('layouts.dashboard')
@section('page_heading', 'Ordenes')
@section('section')
@if (App\Orden::count() > 0)
{!! csrf_field() !!}
<div class="row">
    <div class="col-sm-12">
        <table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="align-middle col-xs-1 text-center">ID</th>
                    <th class="align-middle col-xs-3">Cliente</th>
                    <th class="align-middle col-xs-3">Atendió</th>
                    <th class="align-middle col-xs-2">Ingresó el día</th>
                    <th class="align-middle col-xs-2 text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ordenes as $orden)
                <tr id="/Orden/{{$orden->id}}">
                    <td class="text-center align-middle">{{$orden->id}}</td>
                    <td class="align-middle">{{$orden->getCliente->getFullName()}}</td>
                    <td class="align-middle">{{$orden->getEmpleadoRecibe->getFullName()}}</td>
                    <td class="align-middle">{{$orden->fecha}}</td>
                    {{-- <td class="text-center"> --}}
                        {{-- <a data-toggle="tooltip" title="Modificar nombre de: {{$falla->nombre}}" data-placement="left"><i --}}
                                {{-- class="fa fa-2x fa-cog "></i></a> --}}
                        {{-- <a data-toggle="tooltip" title="Eliminar falla: {{$falla->nombre}}" data-placement="left"><i --}}
                                {{-- class="fa fa-2x fa-trash"></i></a> --}}
                    {{-- </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="text-center">
    {!! $ordenes->render() !!}
    <button class="btn btn-primary pull-right" style="margin-top: 20px">Nueva Orden</button>
</div>
@else
<h1>No hay órdenes registradas</h1>
@endif
@endsection
