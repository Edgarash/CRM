@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Modificar Estado')
@section('section')

@section('section')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('/estados/'.$edo->id.'/Modificarestado') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="Nombre Estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                            <div class="col-md-6">
                                <input id="estados" type="text" class="form-control" name="estados" value="{{$edo->estado}}" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Modificar') }}
                                </button>
                                <a href="{{route('Estados')}}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection