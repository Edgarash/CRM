@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Bienvenido')
@section('section')

@section('section')
    <h1>Empleados del Sistema</h1>
    <table class = "table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Sucursal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleado as $empleado)
            <tr>
                <th>{{ $empleado->id}}</th>
                <th>{{$empleado->nombre}}</th>
                <th>{{$empleado->apellidos}}</th>
                <th>{{$empleado->email}}</th>
                <th>{{$empleado->sucursal}}</th>
                <th></th>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
