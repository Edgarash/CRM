@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Califica los servicios')
@section('section')

@section('section')

{!! csrf_field() !!}

<div class="row">
		<div class="col-sm-12">
			@section ('cotable_panel_title','Selecciona una orden Pendiente')
			@section ('cotable_panel_body')
			<table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="align-middle col-xs-1">No. Orden</th>
                    <th class="align-middle col-xs-3">Atendió</th>
                    <th class="align-middle col-xs-2">Ingresó el día</th>
                    <th class="align-middle col-xs-1 text-center">Ver Detalles</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ord as $orden)
                <tr id="/Orden/{{$orden->id}}">
                    <td class="align-middle text-center">{{$orden->id}}</td>
                    <td class="align-middle">{{$orden->getEmpleadoRecibe->getFullName()}}</td>
                    <td class="align-middle">{{$orden->fecha_ingreso}}</td>
					<td class="text-center">
                        <a data-toggle="tooltip" title="Ver detalles" data-placement="left"><i
                                class="fa fa-2x fa-th-list"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>			
		
			<!-- <table class="table table-bordered">
				<thead>
					<tr>
						<th>Equipo</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Garantía</th>
						<th>Estado</th>
						<th>Fecha de Inicio</th>
						<th>Fecha Final</th>
						<th>Empleado asignado</th>
					</tr>
				</thead>
				<tbody>
					<tr class="success">
						<td>Laptop</td>
						<td>Dell</td>
						<td>sq-2929</td>
						<td>2 meses</td>
						<td>Entregado</td>
						<td>12-09-2018</td>
						<td>12-10-2018</td>
						<td>Ramón Orduño Peres</td>
					</tr>
					<tr>
						<td>Impresora</td>
						<td>Canon</td>
						<td>sq229</td>
						<td>No asignada</td>
						<td>Pendiente</td>
						<td>12-09-2018</td>
						<td>12-10-2018</td>
						<td>No asignado</td>
					</tr>
					<tr class="info">
						<td>PC</td>
						<td>HP</td>
						<td>pl2000</td>
						<td>1 mes</td>
						<td>Listo para entregar</td>
						<td>12-09-2018</td>
						<td>12-10-2018</td>
						<td>Ramón Orduño Peres</td>
					</tr>
					<tr>
						<td>Monitor</td>
						<td>Acer</td>
						<td>Desconocido</td>
						<td>No asignada</td>
						<td>Pendiente</td>
						<td>12-09-2018</td>
						<td>Ninguno</td>
						<td>No asignado</td>
					</tr>
					<tr class="warning">
						<td>Laptop</td>
						<td>Dell</td>
						<td>sq-2929</td>
						<td>2 meses</td>
						<td>Esperando Autorización</td>
						<td>04-05-2018</td>
						<td>Ninguno</td>
						<td>Ninguno</td>
					</tr>
					<tr>
						<td>Multifuncional</td>
						<td>HP</td>
						<td>a999a</td>
						<td>No asignada</td>
						<td>Pendiente</td>
						<td>12-09-2018</td>
						<td>12-10-2018</td>
						<td>No asignado</td>
					</tr>
					<tr class="danger">
						<td>Laptop</td>
						<td>Asus</td>
						<td>As09</td>
						<td>Ninguno</td>
						<td>Cancelado</td>
						<td>Ninguno</td>
						<td>Ninguno</td>
						<td>Ninguno</td>
					</tr>
				</tbody>
			</table>	 -->
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
		</div>
	</div>
	</div> 

@stop()