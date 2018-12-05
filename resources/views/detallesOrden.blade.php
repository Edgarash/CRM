<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@extends('layouts.dashboard')
@section('title', 'Principal')
@section('page_heading','Detalle de orden')
@section('section')

@section('section')

{!! csrf_field() !!}



<div class="row">
		<div class="col-md-6 center-block">
            <div class="card">

                <div class="card-body">
                   
                        @csrf

                        <div class="row">
							<div class="col-md-6">
								<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Equipo</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">Impresora HP SP-9386J.</h5>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Servicio</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">Mantenimiento Preventivo.</h5>
									</div>
								</div>
							</div>						
                        </div>
						<div class="row">
							<div class="col-md-6">
							<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Fecha Reparación</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">2018-10-30</h5>
									</div>
								</div>
							</div>
							<div class="col-md-6">
							<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Fecha de terminación</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">2018-11-30</h5>
									</div>
								</div>
							</div>
                        </div>

						<div class="row">
							<div class="col-md-6">
							<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Empleado que repara</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">Mylene Rosenbaum</h5>
									</div>
								</div>
							</div>
							<div class="col-md-6">
							<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Emleado que entrega</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">Mylene Rosenbaum</h5>
									</div>
								</div>
							</div>
                        </div>

						<div class="row">
							<div class="col-md-6">
							<div class="card border-primary mb-3" style="max-width: 23rem;">
									<div class="card-header text-lg-center"><h4>Garantía</h4></div>
									<div class="card-body text-primary">
										<h5 class="col.md-12">Si</h5>
									</div>
								</div>
							</div>
                        </div>
						
						
						<div class="row">
							<div class="form-group row mb-0 aling-rigth center-block">
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


@stop()