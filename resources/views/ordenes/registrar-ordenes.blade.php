@extends('layouts.dashboard')
@section('page_heading', 'Registrar Orden')
@section('scripts')
<script src="{{asset('assets/scripts/CRM/Ordenes/Registrar.js')}}"></script>
<script src="{{asset('assets/scripts/CRM/Clientes/Buscar-Clientes.js')}}"></script>
@endsection
@section('section')
<form action="{{ route('OrdenesRegistrar') }}" method="post">
    <div class="row">
        <div class="col-lg-8 row">
            <div class="form-group col-lg-5 col-sm-4">
                <label for="clienteid">ID del Cliente:</label>
                <div class="input-group">
                    <input type="number" name="clienteid" id="clienteid" class="form-control" placeholder="p. ej. 10"
                        required="required">
                    <span class="input-group-addon btn btn-primary" id="buscarcliente">
                        <span class="fa fa-search"></span>
                    </span>
                </div>
            </div>
            <div class="form-group col-lg-7 col-sm-8">
                <label for="clientename">Nombre del Cliente:</label>
                <input type="text" name="clientename" id="clientename" class="form-control" disabled="disabled"
                    data-cliente="datos">
            </div>
            <div class="form-group col-sm-6 col-xs-12">
                <label for="clienteRFC">RFC del Cliente:</label>
                <input type="text" name="clienteRFC" id="clienteRFC" class="form-control" disabled="disabled"
                    data-cliente="datos">
            </div>
            <div class="form-group col-sm-6 col-xs-12">
                <label for="clienteemail">Email del Cliente:</label>
                <input type="email" name="clienteemail" id="clienteemail" class="form-control" disabled="disabled"
                    data-cliente="datos">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="clientedireccion">Dirección del Cliente:</label>
                <textarea type="text" name="clientedireccion" id="clientedireccion" class="form-control" disabled="disabled"
                    data-cliente="datos" style="height:110px;"></textarea>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="form-group col-lg-6 col-md-7 col-sm-8 col-xs-12">
            <label for="entrega">Persona que entrega el equipo (Opcional): </label>
            <input type="text" name="entrega" id="entrega" class="form-control" placeholder="p. ej. Juan Pérez">
        </div>
    </div>
</form>
@endsection
