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
                        <button class="btn btn-primary" data-toggle="tooltip" title="Seleccionar {{$falla->nombre}}"
                            data-placement="left"><i class="fa fa-2x fa-check-circle"></i></button>
                    </td>
                </tr>
                @empty
                <tr class="text-center">
                    <td colspan="3">
                        <h4>No se encontraron fallas.</h4>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
