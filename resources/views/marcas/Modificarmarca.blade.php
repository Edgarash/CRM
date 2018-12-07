@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Modificar Marca ')
@section('section')

@section('section')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('/marcas/'.$marca->id.'/Modificarmarca') }}">
                        @csrf
                        <h1>Modificar Marca</h1>
                        <div class="form-group row">
                            <label for="Marca" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="marca" type="text" class="form-control" name="nombres" value = "{{$marca->nombre}}"required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Modificar') }}
                                </button>
                                <a href="{{route('Marcas')}}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection