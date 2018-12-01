@extends('layouts.dashboard')
@section('page_heading', 'Clientes')
@section('section')
<div class="row">
    <div class="col-sm-12">
        <table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-sm-1 text-center">ID</th>
                    <th class="col-sm-4">Nombre</th>
                    <th class="col-sm-4">Email</th>
                    <th class="col-sm-2 text-center">Teléfono</th>
                    <th class="col-sm-1 text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clientes as $cliente)
                <tr id="/Clientes/{{$cliente->id}}" class="align-middle">
                    <td class="text-center">{{$cliente->id}}</td>
                    <td>{{$cliente->getFullName()}}</td>
                    <td>{{$cliente->email}}</td>
                    <td class="text-center">{{$cliente->telefono}}</td>
                    <td class="text-center">
                        <a data-toggle="tooltip" title="Ver detalle" data-placement="top"><i class="fa fa-2x fa-info-circle"></i></a>
                    </td>
                </tr>
                @empty
                <tr class="text-center">
                    <td colspan="5">
                        <h4>No hay clientes registrados.</h4>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<div class="text-center">
    {!! $clientes->render() !!}
</div>
@endsection
