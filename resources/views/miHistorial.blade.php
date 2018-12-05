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
						<th>Equipo</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Garantía</th>
						<th>Estado</th>
						<th>Fecha de Inicio</th>
						<th>Fecha Final</th>
						<th>Empleado asignado</th>
						<th class="align-middle col-xs-1 text-center">Ver Orden</th>
					</tr>
				</thead>
				<tbody>
					<tr class="success">
						<td>Laptop</td>
						<td>Dell</td>
						<td>sq-2929</td>
						<td>Si</td>
						<td>Terminado</td>
						<td>12-09-2018</td>
						<td>12-10-2018</td>
						<td>Ramón Orduño Peres</td>
						<td class="text-center">
                        <a href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-2x fa-th-list"></i></a>
                    </td>
					</tr>
					<tr>
						<td>Impresora</td>
						<td>Canon</td>
						<td>sq229</td>
						<td>Si</td>
						<td>Por Autorizar</td>
						<td>12-09-2018</td>
						<td>12-10-2018</td>
						<td>No asignado</td>
						<td class="text-center">
                        <a href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-2x fa-th-list"></i></a>
                    </td>
					</tr>
					<tr class="info">
						<td>PC</td>
						<td>HP</td>
						<td>pl2000</td>
						<td>Si</td>
						<td>Banco</td>
						<td>12-09-2018</td>
						<td>12-10-2018</td>
						<td>Ramón Orduño Peres</td>
						<td class="text-center">
                        <a href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-2x fa-th-list"></i></a>
                    </td>
					</tr>
					<tr>
						<td>Monitor</td>
						<td>Acer</td>
						<td>Desconocido</td>
						<td>Si</td>
						<td>Por Autorizar</td>
						<td>12-09-2018</td>
						<td>Ninguno</td>
						<td>No asignado</td>
						<td class="text-center">
                        <a href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-2x fa-th-list"></i></a>
                    </td>
					</tr>
					<tr class="warning">
						<td>Laptop</td>
						<td>Dell</td>
						<td>sq-2929</td>
						<td>Si</td>
						<td>Esperando Autorización</td>
						<td>04-05-2018</td>
						<td>Ninguno</td>
						<td>Ninguno</td>
						<td class="text-center">
                        <a href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-2x fa-th-list"></i></a>
                    </td>
					</tr>
					<tr>
						<td><?php $equi = "Multifuncional"; echo ($equi);   ?></td>
						<td> <?php $marca = "HP"; echo ($marca);   ?></td>
						<td> <?php $mod = "a999a"; echo ($mod);   ?></td>
						<td>Si</td>
						<td>Por Autorizar</td>
						<td>12-09-2018</td>
						<td>12-10-2018</td>
						<td>No asignado</td>
						<td class="text-center">
                        <a href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-2x fa-th-list"></i></a>
                    </td>
					</tr>
					<tr class="danger">
						<td><?php $equi = "Laptop"; echo ($equi);   ?></td>
						<td> <?php $marca = "Asus"; echo ($marca);   ?></td>
						<td> <?php $mod = "As09"; echo ($mod);   ?></td>
						<td>Si</td>
						<td>Sin revisión</td>
						<td>12-09-2018</td>
						<td>Ninguno</td>
						<td>Ninguno</td>
						<td class="text-center">
                        <a href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-2x fa-th-list"></i></a>
                    </td>
					</tr>
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
        Equipo: {{ $equi }}, Marca: {{ $marca }}, Modelo: {{ $mod }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a href="{{route('Detalle',[1])}}"><button type="button" class="btn btn-primary">Ver los detalles</button></a>
      </div>
    </div>
  </div>
</div>
            
@stop
