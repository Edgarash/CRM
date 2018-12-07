@extends('layouts.dashboard')
@section('title', 'Inicio')
@section('page_heading','Bienvenido a Microsistemas Californianos')
@section('section')
 <div class="container">
    <div class = "row display=block">
        <div class ="col-md-7 center-block ">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>
                
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                <div class="item active">
                    <img src="{{ asset('images/1.jpg') }}" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                    <h3>Microsistemas te ofrece</h3>
                                
                                
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('images/2.jpg') }}" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                    <h3>Microsistemas te ofrece</h3>
                            
                                              </div>
                </div>
                
                <div class="item">
                    <img src="{{ asset('images/3.jpg') }}" alt="New York" style="width:100%;">
                    <div class="carousel-caption">
                    <h3>Microsistemas te ofrece</h3>
                            

                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/4.jpg') }}" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                    <h3>Microsistemas te ofrece</h3>
                            
                                              </div>
                </div>
                
                <div class="item">
                    <img src="{{ asset('images/5.jpg') }}""New York" style="width:100%;">
                    <div class="carousel-caption">
                    <h3>Microsistemas te ofrece</h3>
                            

                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/6.jpg') }}" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                    <h3>Microsistemas te ofrece</h3>
                            
                                              </div>
                </div>
                
                <div class="item">
                    <img src="{{ asset('images/7.jpg') }}" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                    <h3>Microsistemas te ofrece</h3>
                            

                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/8.jpg') }}" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                    <h3>Microsistemas te ofrece</h3>
                            
                                              </div>
                </div>
                
            
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

@stop
