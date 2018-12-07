@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Te mostramos tu historial')
@section('section')
<div class="row">
    <div class="col-sm-12">
    @section ('cotable_panel_title','Ultimas Ordenes')
           
		<table class="table table-bordered">
            <thead>
                <tr>
                    <th class="align-middle col-xs-1">Equipo</th>
                    <th class="align-middle col-xs-1">Marca</th>
                    <th class="align-middle col-xs-2">Modelo</th>
                    <th class="align-middle col-xs-1 text-center">Garantía</th>
					<th class="align-middle col-xs-2">Estado</th>
					<th class="align-middle col-xs-2">Fecha de Inicio</th>
					<th class="align-middle col-xs-2">Fecha Final</th>
					<th class="align-middle col-xs-2">Empleado asignado</th>
					<th class="align-middle col-xs-2">Ver Orden</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ord as $orden)
					@foreach($detalles as $detalle)
						@if( $detalle->id == $orden->id )
							@if( $detalle->getEstado->estado == "Banco") <tr id="/Orden/{{$orden->id}}" class="info" ><th class="align-middle col-xs-1">{{ $detalle->getEquipo->getMarca->nombre }}</th>  
							@elseif( $detalle->getEstado->estado == "Terminado") <tr id="/Orden/{{$orden->id}}" class="warning" ><th class="align-middle col-xs-1">{{ $detalle->getEquipo->getMarca->nombre }}</th> 
							@elseif( $detalle->getEstado->estado == "Entregado") <tr id="/Orden/{{$orden->id}}" class="success" ><th class="align-middle col-xs-1">{{ $detalle->getEquipo->getMarca->nombre }}</th>
							@elseif( $detalle->getEstado->estado == "Sin Revisión") <tr id="/Orden/{{$orden->id}}" class="danger" ><th class="align-middle col-xs-1">{{ $detalle->getEquipo->getMarca->nombre }}</th> 
							@elseif( $detalle->getEstado->estado != "Sin Revisión") <tr id="/Orden/{{$orden->id}}" class="" ><th class="align-middle col-xs-1">{{ $detalle->getEquipo->getMarca->nombre }}</th> 
							 @endif
							
								<td class="align-middle">{{ $detalle->getEquipo->getMarca->nombre }}</td>
								<td class="align-middle">{{ $detalle->getEquipo->modelo }}</td>
								<td class="align-middle text-center">@if( $detalle->garantia == 1) Si @elseif($detalle->garantia == 0) No @endif</td>
								<td class="align-middle">{{ $detalle->getEstado->estado }}</td>
								<td class="align-middle">@if( $detalle->fecha_entrega != "") {{$detalle->fecha_entrega}} @elseif($detalle->fecha_entrega == "") No definida @endif </td>
								<td class="align-middle">@if( $detalle->fecha_terminado != "") {{$detalle->fecha_terminado}} @elseif($detalle->fecha_terminado == "") No definida @endif </td>
								<td class="align-middle">@if(is_null($detalle->getEmpleadoEntrega) ) Empleado no asignado  @elseif(is_null($detalle->getEmpleadoEntrega) == false) {{$detalle->getEmpleadoEntrega->getFullName()}}  @endif </td>
								<td class="text-center">
                        			<a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-2x fa-th-list"></i></a>
                    			</td>					
							</tr>
							@elseif($detalle->id != $orden->id )
						@endif
					@endforeach
                @endforeach
            </tbody>
        </table>

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
