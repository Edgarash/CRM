@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Bienvenido')
@section('section')

@section('section')
<div class="input-group custom-search-form col-sm-4">
                            <input type="text" class="form-control" placeholder="Filtrar">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div><br>
<div class="row">
	<div class="col-sm-12">
		@section ('cotable_panel_title','Ultimas Ordenes')
		@section ('cotable_panel_body')
		<table class="table table-bordered">
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
		</table>	
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
	</div>
</div>
</div>
@stop
