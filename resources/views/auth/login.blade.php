@extends('layouts.app')
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        #user-rotate {
            /* border: 1px solid black; */
            margin-bottom: 20px;
        }

        .contorno {
            margin: auto;
            width: 8em;
            border: 3px solid #ced4da;
            border-radius: 50%;
        }

        .fa.fa-user {
            animation: girar 1s 1s infinite linear ;
            padding: .3em;
        }

        @keyframes girar {
            100% {
                transform: rotateY(180deg);
            }
        }
    </style>
	 {!! NoCaptcha::renderJs() !!}
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-header">{{ __('Iniciar sesión') }}</div>

                <div class="card-body">
                    <div id="user-rotate" class="text-center" style="color:#3F77BC">
                        <div class="contorno">
                            <i class="fa fa-5x fa-user"></i>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <div class="offset-md-4">
                                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                    <!-- <div class="g-recaptcha" data-sitekey="6LcFZ34UAAAAAD7PVUj-pngs9A39yM0ryZfeF_VK"></div> -->
                                    <div class="col-md-12">
                                        {!! app('captcha')->display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="small text-danger" >
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesión') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>          
        </div>    
    </div>
</div>
    
@endsection
