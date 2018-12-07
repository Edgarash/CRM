@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Modificar Equipo')
@section('section')

@section('section')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('/equipos/'.$equipo->id.'/Modificarequipo') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="Cliente Id" class="col-md-4 col-form-label text-md-right">{{ __('Cliente_id') }}</label>

                            <div class="col-md-6">
                                <input id="cliente_id" type="text" class="form-control{{ $errors->has('cliente_id') ? ' is-invalid' : '' }}" name="cliente" value="{{$equipo->cliente}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="MarcaID" class="col-md-4 col-form-label text-md-right">{{ __('Marca ID') }}</label>
                            <div class="col-md-6">
                                <input id="marca_id" type="text" class="form-control" name="marca" value="{{$equipo->marca}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Modelo" class="col-md-4 col-form-label text-md-right">{{ __('Modelo') }}</label>
                            <div class="col-md-6">
                                <input id="modelo" type="text" class="form-control" name="modelo" value="{{$equipo->modelo}}" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control" name="descripcion" value="{{$equipo->descripcion}}" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Serie" class="col-md-4 col-form-label text-md-right">{{ __('Serie') }}</label>

                            <div class="col-md-6">
                                <input id="serie" type="text" class="form-control" name="serie" value="{{$equipo->serie}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Garantia" class="col-md-4 col-form-label text-md-right">{{ __('Garantia') }}</label>

                            <div class="col-md-6">
                                <input id="garantia" type="text" class="form-control" name="garantia" value="{{$equipo->garantia}}" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Modificar') }}
                                </button>
                                <a href="{{route('Equipos')}}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection