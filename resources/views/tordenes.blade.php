@extends('layouts.dashboard')
@section('title', 'Ordenes')
@section ('page_heading','Órdenes de Reparación')
@section('section')
<div class="row">
    <div class="col-sm-12">
        <div class="panel-body">
            {!! Form::open(['route'=> 'ReporteOrdenes', 'method' => 'GET', 'class'=>'navbar-form navbar-left pull-right']) !!}
            <div class="form-group">
                {!!Form::text('cliente',null,['class'=>'form-control', 'placeholder' => 'Nombre del cliente']) !!}
                {!!Form::text('id',null,['class'=>'form-control', 'placeholder' => 'ID orden']) !!}
            </div>
            <button type="submit" class="btn btn-default btn-primary">Buscar</button>
            {!!Form::close()!!}
        </div>

        <table class="table-condensed table-bordered table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1 text-center">ID</th>
                    <th class="col-xs-4 text-center">Cliente</th>
                    <th class="col-xs-4 text-center">Empleado Recibe</th>
                    <th class="col-xs-4 text-center">Fecha Ingreso</th>
                    <th class="col-sm-1 text-center">Vista previa</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($ordenes as $orden)
                <tr id="Orden-{{$orden->id}}">
                    <td class="text-center align-middle">{{$orden->id}}</td>
                    <td class="text-center align-middle">{{$orden->getCliente->getFullName()}}</td>
                    <td class="text-center align-middle">{{$orden->getEmpleadoRecibe->getFullName()}}</td>
                    <td class=" text-center align-middle">{{$orden->fecha_ingreso}}</td>
                    <td class="text-center">
                        <a target="_blank" href="{{route('ReporteOrden',[$orden->id])}}"><i class="fa fa-file-pdf-o fa-2x"></i></a>
                    </td>
                </tr>
                @endforeach


            </tbody>

        </table>
    </div>
</div>
<div class="text-center">
    {!! $ordenes->appends(compact('cliente', 'id'))->render() !!}
</div>
@stop
