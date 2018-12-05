<div class="row">
    <div class="col-sm-12">
        <table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-sm-1 text-center">ID</th>
                    <th class="col-sm-5">Nombre</th>
                    <th class="col-sm-5">Email</th>
                    <th class="col-sm-1">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clientes as $cliente)
                <tr id="/Cliente/{{$cliente->id}}">
                    <td class="text-center align-middle">{{$cliente->id}}</td>
                    <td class="align-middle">{{$cliente->getFullName()}}</td>
                    <td class="align-middle">{{$cliente->email}}</td>
                    <td class="text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" title="Seleccionar {{$cliente->nombre}}"
                            data-placement="left"><i class="fa fa-2x fa-check-circle"></i></button>
                    </td>
                </tr>
                @empty
                <tr class="text-center">
                    <td colspan="4">
                        <h4>No se encontraron clientes.</h4>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="text-center" style="position: relative; top:-20px">
        {!! $clientes->render() !!}
    </div>
</div>
