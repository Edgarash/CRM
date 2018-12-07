@extends('layouts.dashboard')
@section('title', 'Productividad por Técnico')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/bootstrap-datetimepicker.min.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('assets/scripts/moment.min.js') }}"></script>
<script src="{{ asset('assets/scripts/locale/es.js') }}"></script>
<script src="{{ asset('assets/scripts/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{asset('/assets/scripts/fechas.js')}}"></script>
@endsection
@section ('page_heading','Productividad por Técnico')
@section('section')
<form method="GET">

    <div class="form-group col-sm-3">
        <label for="tecnico">Nombre del técnico</label>
        <br>
        <select class="form-control" id="selTecnico" name="selTecnico">
            <option value="" selected>Todos</option>
            @foreach ($tecnicos as $tecnico)
                <option value="{{$tecnico->id}}" {{$selTecnico == $tecnico->id ? 'selected' : ''}}>{{$tecnico->getFullName()}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-3">
        <label for="tecnico">Estado</label>
        <br>
        <select class="form-control" id="selEstado" name="selEstado">
                <option value="" selected>Todos</option>
            @foreach ($estados as $estado)
                <option value="{{$estado->id}}" {{$selEstado == $estado->id ? 'selected' : ''}}>{{$estado->estado}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-2">
            <label for="fechaInicio">Fecha Inicial:</label>
        <div class='input-group date' id='datetimepicker6' type="dtp">
            <input type='text' id='fechaInicio' name="fechaInicio" class="form-control" value="{{ $fechaInicio != null ? $fechaInicio : '' }}" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
    <div class="form-group col-sm-2">
        <label for="fechaFinal">Fecha Final:</label>
        <div class='input-group date' id='datetimepicker7' type="dtp">
            <input type='text' id="fechaFinal" name="fechaFinal" class="form-control" value="{{ $fechaFinal != null ? $fechaFinal : '' }}"/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
    <div class="form-group col-sm-2" style="padding-top:25px">
        <button name="buscar" type="submit" class="btn btn-primary col-sm-12"><i class="fa fa-search"></i> Buscar</button>
    </div>
</form>
<div class="form-group col-sm-12">
    <table class="table table-striped table-condensed table-hover table-bordered">
        <thead>
            <tr>
                <th class="col-sm-1 text-center">ID Orden</th>
                <th class="col-sm-3">Técnico</th>
                <th class="col-sm-2">Categoría</th>
                <th class="col-sm-1">Marca</th>
                <th class="col-sm-1">Modelo</th>
                <th class="col-sm-1">Estado</th>
                <th class="col-sm-2 text-center">Fecha de Reparación</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($equipos as $equipo)
                <tr>
                    <td class="text-center">{{ $equipo->id }}</td>
                    <td>{{App\Empleado::find($equipo->empleado_repara)->getFullName()}}</td>
                    <!--<td>$equipo->categoria</td>-->
                    <td>{{ App\Equipo::find($equipo->equipo)->descripcion }}</td>
                    <td>{{ App\Marca::find(App\Equipo::find($equipo->equipo)->marca)->nombre }}</td>
                    <td>{{ App\Equipo::find($equipo->equipo)->modelo }}</td>
                    <td>{{ App\Estado::find($equipo->estado)->estado}}</td>
                    <td class="text-center">{{ $equipo->fecha_terminado }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">
                        <h4>No se encontraron equipos.</h4>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="text-center col-sm-8 col-sm-offset-2">
        {!! $equipos->appends(compact(
            'tecnicos', 'estados', 'equipos', 'selEstado',
            'selTecnico', 'fechaInicio', 'fechaFinal'
        ))->render() !!}
    </div>
    <div class="form-group col-sm-2">
        <form id="formReporte" method="post" action="{{route('ReporteProductividad-Reporte')}}" target="_blank">
            @csrf
            <input type="hidden" name="selTecnico" value="{{$selTecnico}}">
            <input type="hidden" name="selEstado" value="{{$selEstado}}">
            <input type="hidden" name="fechaInicio" value="{{$fechaInicio}}">
            <input type="hidden" name="fechaFinal" value="{{$fechaFinal}}">
            <button name="reporte" type="submit"  class="btn btn-primary pull-right" style="margin:20px 0;">Ver Reporte <i class="fa fa-bar-chart-o fa-fw"></i></button>
        </form>
    </div>
</div>
@stop
