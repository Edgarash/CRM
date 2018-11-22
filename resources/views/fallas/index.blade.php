@extends('layouts.dashboard')
@section('page_heading', 'Fallas')

@section('section')
<div class="col-sm-12">
    <table class="table table-condensed table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="col-xs-1">ID</th>
                <th class="col-xs-10">Nombre</th>
                <th class="col-xs-1">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Falla::all() as $falla)
            <tr id="Falla-{{$falla->id}}">
                <td class="text-center">{{$falla->id}}</td>
                <td class="align-middle">{{$falla->nombre}}</td>
                <td class="text-center">
                    <a href="#" style="color:#000000" data-toggle="tooltip" title="Modificar nombre de: {{$falla->nombre}}"
                        data-placement="left"><i class="fa fa-2x fa-cog "></i></a>
                    <a href="#" style="color:#DD0000" data-toggle="tooltip" title="Eliminar falla: {{$falla->nombre}}"
                        data-placement="left"><i class="fa fa-2x fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>
@endsection
