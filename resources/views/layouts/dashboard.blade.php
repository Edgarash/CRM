@extends('layouts.plane')


<style>
    .logo{
        transition: all .2s ease-in-out;
    }
    .logo:hover{
    transform: scale(1.1); 
    }
    </style>
@section('body')

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('/') }}">
                <img class="logo" src="/images/logo2.png" alt="Microsistemas" srcset=""
                    style="width:220px;height:40px;top:-8px;position:relative"></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            {{-- <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li> --}}
            <!-- /.dropdown -->
            {{-- <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 1</strong>
                                    <span class="pull-right text-muted">40% Complete</span>
                                </p>

                                <div>
                                    @include('widgets.progress', array('animated'=> true, 'class'=>'success',
                                    'value'=>'40'))
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 2</strong>
                                    <span class="pull-right text-muted">20% Complete</span>
                                </p>

                                <div>
                                    @include('widgets.progress', array('animated'=> true, 'class'=>'info',
                                    'value'=>'20'))
                                    <span class="sr-only">20% Complete</span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 3</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>

                                <div>
                                    @include('widgets.progress', array('animated'=> true, 'class'=>'warning',
                                    'value'=>'60'))
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 4</strong>
                                    <span class="pull-right text-muted">80% Complete</span>
                                </p>

                                <div>
                                    @include('widgets.progress', array('animated'=> true,'class'=>'danger',
                                    'value'=>'80'))
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Tasks</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li> --}}
            <!-- /.dropdown -->
           <!-- <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a a href="#" class="fa fa-user "> {{ Auth::user()->email }}</a>

                    </li>

                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>

                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                   <!-- <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    <li>
                    <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                        <a href="{{ url ('/') }}"><i class="fa fa-home fa-fw"></i> Inicio</a>
                    </li>
                    @if(Auth::user()->empleado == 1)
                    <li>
                        <a href="#"><i class="fa fa-edit fa-fw"></i> Órdenes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li {{ (Request::is(route('OrdenesRegistrar')) ? 'class="active"' : '') }}>
                                <a href="{{ route('OrdenesRegistrar') }}">Crear Orden</a>
                            </li>
                            <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                <a href="{{ url (route('Ordenes') ) }}">Ver Ordenes</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-folder fa-fw"></i> Reportes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li {{ (Request::is(route('ReporteOrdenes')) ? 'class="active"' : '') }}>
                                <a href="{{ route('ReporteOrdenes') }}"><i class="fa fa-file-text fa-fw"></i>Órdenes de
                                    reparación</a>
                            </li>
                            <li {{ (Request::is(route('ReporteProductividad')) ? 'class="active"' : '') }}>
                                <a href="{{ route('ReporteProductividad') }}"><i class="fa fa-bar-chart-o fa-fw"></i>Productividad
                                    por Técnico</a>
                            </li>
                            <li {{ (Request::is(route('ReporteEquiposEstado')) ? 'class="active"' : '') }}>
                                <a href="{{ route('ReporteEquiposEstado') }}"><i class="fa fa-file-text-o fa-fw"></i>Equipos
                                    por estado</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Catálogos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li {{ (Request::is(route('Fallas')) ? 'class="active"' : '') }}>
                                <a href="{{ route('Fallas') }}">Fallas</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    @else()

                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            <li {{ (Request::is('/misOrdenes') ? 'class="active"' : '') }}>
                                <a class="fa fa-edit" href="{{ url ('misOrdenes' ) }}"> Mis Ordenes <span class="fa arrow"></span></a>

                            </li>

                            <ul class="nav nav-third-level">
                                <li>
                                    <a class="fa fa-history" href="{{ url ('miHistorial' ) }}"> Historial de consultas</a>
                                </li>
                            </ul>

                            <li>
                                <a class="fa fa-history" href="#"> Historial de Modificaciones</a>
                            </li>
                            <li>
                                <a class="fa fa-history" href="{{ url ('miHistorial' ) }}"> Historial de Modificaciones</a>
                            </li>
                            <!-- <li>
                                <a class = "fa fa-star" href="{{ route('Servicios_Calificados') }}"> Calificar Servicio</a>
                                </li> -->
                            <li>
                                <a class="fa fa-thumbs-o-up" href="{{ route('Autorizaciones') }}"> Autorización de
                                    cambios en el presupuesto/cotización</a>
                            </li>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
                </li>
                @endif()
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">@yield('page_heading')</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        @yield('section')
        <!-- /#page-wrapper -->
        
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

<!--<footer class="page-footer font-small blue pt-4">
    <p class="text-center">Microsistemas Californianos S.A. de C.V. Isabel La Católica, Zona Central, 23000, La Paz, B.C.S.</p>
    <p class="text-center"></p>
</footer>-->
<!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small azulito pt-4 fixed-bottom">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-center fixed-bottom ">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3 text-center">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Microsistemas Californianos</h5>
          <p>Microsistemas Californianos, S. A. de C. V. es una empresa dedicada a las ciencias computacionales desde la comercialización de Equipos de Computo y accesorios, hasta la investigación y desarrollo de programas de punto de venta.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3 text-center">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Contacto</h5>
          <p><i class="fa fa-map-marker"></i> Isabel La Católica, Zona Central, 23000, La Paz, B.C.S.</p>
          <p><i class="fa fa-phone"></i> (612)122 83 44 </p>
          <p><i class="fa fa-envelope-o"></i> ventas@miscrosis.com.mx </p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">Microsistemas Californianos S.A de C.V © 2018 Copyright:
      <a href="http://www.microsis.com.mx/webmicro/inicio/index.html"> microsis.com.mx</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

@stop
