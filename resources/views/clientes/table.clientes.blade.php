<div class="row">
    <div class="col-sm-12">
        @if (count($clientes) == 0)
        <div class="text-center">
            <h1>No hay Clientes</h1>
        </div>
        @else
        <table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="">Nombre</th>
                    <th class="text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr id="/Fallas/{{$cliente->id}}">
                    <td class="text-center align-middle">{{$cliente->id}}</td>
                    <td class="align-middle">{{$cliente->nombre}}</td>
                    <td class="text-center">
                        @if (!Request::is('*/Buscar'))
                        <a data-toggle="tooltip" title="Modificar: {{$cliente->nombre}}" data-placement="left"><i
                                class="fa fa-2x fa-cog "></i></a>
                        <a data-toggle="tooltip" title="Eliminar: {{$cliente->nombre}}" data-placement="left"><i
                                class="fa fa-2x fa-trash"></i></a>
                        @else
                        <button class="btn btn-primary" data-toggle="tooltip" title="Seleccionar {{$cliente->nombre}}"
                            data-placement="left"><i class="fa fa-2x fa-check-circle"></i></button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
