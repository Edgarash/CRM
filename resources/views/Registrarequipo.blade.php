@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Registro de Equipo')
@section('section')

@section('section')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('Agregarequipo') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="Cliente" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>

                            <div class="col-md-6">
                                <input id="cliente" type="text" class="form-control{{ $errors->has('cliente_id') ? ' is-invalid' : '' }}" name="cliente" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Marca" class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>
                            <div class="col-md-6">
                                <input id="marca" type="text" class="form-control" name="marca" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Modelo" class="col-md-4 col-form-label text-md-right">{{ __('Modelo') }}</label>
                            <div class="col-md-6">
                                <input id="modelo" type="text" class="form-control" name="modelo" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <input id="Descripcion" type="text" class="form-control" name="descripcion" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Serie" class="col-md-4 col-form-label text-md-right">{{ __('Serie') }}</label>

                            <div class="col-md-6">
                                <input id="serie" type="text" class="form-control" name="serie" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Garantia" class="col-md-4 col-form-label text-md-right">{{ __('Garantia') }}</label>

                            <div class="col-md-6">
                                <input id="garantia" type="text" class="form-control" name="garantia" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Registar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection