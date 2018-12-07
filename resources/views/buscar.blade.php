@extends('layouts.dashboard');
@section('page_heading', 'Buscar')
@section('scripts')
<script src="{{asset('assets/scripts/CRM/Fallas/Buscar-Fallas.js')}}"></script>
<script src="{{asset('assets/scripts/CRM/Clientes/Buscar-Clientes.js')}}"></script>
@endsection
@section('section')
{{-- Buscar Fallas --}}
{{-- Busar Clientes --}}
<button id="buscarcliente" class="btn btn-lg btn-primary">Buscar Cliente</button>
<button id="buscarfalla" class="btn btn-lg btn-primary">Buscar Falla</button>

@endsection
