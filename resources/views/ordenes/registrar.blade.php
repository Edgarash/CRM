@extends('layouts.dashboard')
@section('page_heading', 'Registrar Orden')
@section('scripts')
<script src="{{asset('assets/scripts/CRM/Ordenes/Registrar.js')}}"></script>
<script src="{{asset('assets/scripts/CRM/Clientes/Buscar-Clientes.js')}}"></script>
@endsection
@section('section')
<form action="{{ route('OrdenesRegistrar') }}" method="post">
    <div class="form-group col-lg-2 col-md-3 col-sm-4 col-xs-6">
        <label for="clienteid">ID del Cliente:</label>
        <div class="input-group">
            <input type="number" name="clienteid" id="clienteid" class="form-control" placeholder="p. ej. 10" required="required">
            <span class="input-group-addon btn btn-primary" id="buscarcliente">
                <span class="fa fa-search"></span>
            </span>
        </div>
    </div>
    <div class="form-group col-lg-5 col-md-4 col-sm-4 col-xs-12">
        <label for="clientename">Nombre del Cliente:</label>
        <input type="text" name="clientename" id="clientename" class="form-control" disabled="disabled">
    </div>
    <div class="form-group col-lg-5 col-md-4 col-sm-4 col-xs-12">
        <label for="clienteRFC">RFC del Cliente:</label>
        <input type="text" name="clienteRFC" id="clienteRFC" class="form-control" disabled="disabled">
    </div>
</form>
@endsection
