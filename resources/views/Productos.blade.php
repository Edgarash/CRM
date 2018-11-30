@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Bienvenido')
@section('section')

@section('section')
    <h1>Productos de la Tienda</h1>
    <table class = "table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Cantidad</th>
                <th>Sucursal</th>
                <th>Acciones</th>
            </tr>
        </thead>
    </table>
@stop