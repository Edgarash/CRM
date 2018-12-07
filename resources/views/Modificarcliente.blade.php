@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Modificar Cliente')
@section('section')

@section('section')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('Modificarcliente') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Tipo Empleado" class="col-md-4 col-form-label text-md-right">{{ __('Empleoyee Kind') }}</label>

                            <div class="col-md-6">
                                <select id="empleador" class="form-control" name="empleador" required>
                                    <option value="Tecnico">Tecnico</option>
                                    <option value="Empleado de Caja">Empleado de Caja</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Empleado de Piso">Empleado de Piso</option>
                                </select>
                            </div>
                            
                        </div>
                        <br>
                        <h1>Informacion del Empleado</h1>
                        
                        <div class="form-group row">
                            <label for="Nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control" name="nombres" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="select" class="form-control" name="apellidos" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Sucursal" class="col-md-4 col-form-label text-md-right">{{ __('Sucursal') }}</label>

                            <div class="col-md-6">
                                <input id="sucursal" type="text" class="form-control" name="sucursal" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Modificar') }}
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