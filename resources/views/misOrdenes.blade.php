@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Bienvenido')
@section('section')

@section('section')
@if (App\Orden::count() > 0)
{!! csrf_field() !!}

<div class="row">
    <div class="col-sm-12">
        
    </div>
</div>
@else
<h1>No hay órdenes registradas</h1>
@endif
	<div class="row">
		<div class="col-sm-12">
			@section ('cotable_panel_title','Ordenes Autorizadas')
			@section ('cotable_panel_body')
			<table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="align-middle col-xs-1">No. Orden</th>
                    <th class="align-middle col-xs-3">Atendió</th>
                    <th class="align-middle col-xs-2">Ingresó el día</th>
                    <th class="align-middle col-xs-1 text-center">Ver detalles</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ord as $orden)
					@foreach($detalles as $detalle)
						@if( ($detalle->id == $orden->id) && ($detalle->estado != 3) )
							<tr id="/Orden/{{$orden->id}}">
								<td class="align-middle text-center">{{$orden->id}}</td>
								<td class="align-middle">{{$orden->getEmpleadoRecibe->getFullName()}}</td>
								<td class="align-middle">{{$orden->fecha_ingreso}}</td>
								<td class="text-center">
									<a href="{{ route('Detalle', [$detalle->id]) }}" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-2x fa-th-list"></i></a>
								</td>
							</tr>
							@elseif($detalle->id != $orden->id )
						@endif
					@endforeach
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Cambio de estado</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<a href="{{route('Detalle',[1])}}"><button type="button" class="btn btn-primary">Ver los detalles</button></a>
				</div>
				</div>
			</div>
			</div>

@stop
