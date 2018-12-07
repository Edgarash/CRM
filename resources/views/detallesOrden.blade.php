	 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/jquery-confirm/jquery-confirm.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/views.css") }}" />
    @yield('styles')
    {{-- JQuery --}}
    <script src="{{ asset('assets/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
    <script src="{{ asset('assets/jquery-confirm/jquery-confirm.min.js') }}"></script>

	 <style>
		.half-rule { 
		margin-left: 0;
		text-align: left;
		width: 50%;
		}
	</style>

@section('title', 'Principal')
@section('page_heading','Detalle de orden')


{!! csrf_field() !!}



<div class="row">
		<div class="col-md-12 center-block">
            <div class="card">

                <div class="card-body">
                   
                        @csrf
						@foreach ($detalles as $detalle)
                        <div class="row">
							<div class="col-md-6">
								<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Equipo</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">{{ $detalle->getEquipo->getMarca->nombre }}</h5>
									</div>
								</div> 
							</div>
							<div class="col-md-6">
								<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Modelo</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">{{ $detalle->getEquipo->modelo }}</h5>
									</div>
								</div>
							</div>		
                        </div>
						
						<div class="row">
							<div class="col-md-6">
							<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Fecha de Entrega</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">{{ $detalle->fecha_entrega }}</h5>
									</div>
								</div>
							</div>
							<div class="col-md-6">
							<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Fecha de terminación</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">{{ $detalle->fecha_terminado }}</h5>
									</div>
								</div>
							</div>
                        </div>

						<div class="row">
							<div class="col-md-6">
							<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Empleado que repara</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12"></h5>
									</div>
								</div>
							</div>
							<div class="col-md-6">
							<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Emleado que entrega</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12"></h5>
									</div>
								</div>
							</div>
                        </div>

						<div class="row">
							<div class="col-md-6">
							<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Garantía</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">@if( $detalle->garantia == 1) Si @elseif($detalle->garantia == 0) No @endif</h5>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Servicio</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">{{ $detalle->getServicio->servicio }}</h5>
									</div>
								</div>
							</div>		

                        </div>

						<hr class="half-rule"/>
						
						
						@endforeach
						<div class="row center-block">
							<div class="form-group row mb-0 center-block">
								<div class="col-md-8 offset-md-4">
									<a href="{{ url('misOrdenes') }}"><button href="" class="btn btn-primary">
										{{ __('Aceptar') }}
									</button></a>
								</div>
							</div>				
						</div>
                </div>
            </div>          
        </div>  
</div> 

