@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Autorizaciones')
@section('section')

@section('section')

{!! csrf_field() !!}

<div class="row">
		<div class="col-sm-12">
			@section ('cotable_panel_title','Ordenes pendientes a autorizar')
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
					@foreach($detalles as $detalle)
							@if( ($detalle->id == $orden->id) && ($detalle->estado == 3) )
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

			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
		</div>
	</div>
	</div> 

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Seguro que desea autorizar esta orden?</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<a href=""><button type="button" class="btn btn-primary">Autorizar</button></a>
				</div>
				</div>
			</div>
			</div>

@stop()