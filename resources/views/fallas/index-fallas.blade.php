@extends('layouts.dashboard')
@section('page_heading', 'Fallas')

@section('section')
<div class="row">
    <div class="col-sm-12">
        <table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-xs-1 text-center">ID</th>
                    <th class="col-xs-10">Nombre</th>
                    <th class="col-xs-1 text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($fallas as $falla)
                <tr id="/Fallas/{{$falla->id}}">
                    <td class="text-center align-middle">{{$falla->id}}</td>
                    <td class="align-middle">{{$falla->nombre}}</td>
                    <td class="text-center">
                        <a data-toggle="tooltip" title="Modificar nombre de: {{$falla->nombre}}" data-placement="left"><i
                                class="fa fa-2x fa-cog "></i></a>
                        <a data-toggle="tooltip" title="Eliminar falla: {{$falla->nombre}}" data-placement="left"><i
                                class="fa fa-2x fa-trash"></i></a>
                    </td>
                </tr>
                @empty
                <tr class="text-center">
                    <td colspan="3">
                        <h4>No hay fallas registradas.</h4>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<div class="text-center">
    
    {!! $fallas->render() !!}
    <button class="btn btn-primary pull-right" style="margin-top: 20px">Nueva Falla</button>
</div>
<script src="{{asset('assets/scripts/CRM/Fallas/Fallas.js')}}"></script>
@endsection
