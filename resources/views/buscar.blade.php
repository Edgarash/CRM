@extends('layouts.dashboard');
@section('page_heading', 'Buscar')
@section('section')
{{-- Buscar Fallas --}}
<button id="buscarfalla" class="btn btn-lg btn-primary">Buscar Falla</button>
<script src="{{asset('assets/scripts/CRM/Fallas/Buscar-Fallas.js')}}"></script>
{{-- Busar Clientes --}}
<button id="buscarcliente" class="btn btn-lg btn-primary">Buscar Cliente</button>
<script src="{{asset('assets/scripts/CRM/Clientes/Buscar-Clientes.js')}}"></script>
@endsection