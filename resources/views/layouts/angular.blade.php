<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title> @yield('etiquetaTitle') </title>
        <link rel="stylesheet" type="text/css" id="theme" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/angular-datatables/datatables.bootstrap.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/angular-datatables/datatables.bootstrap.min.css')}}" />

    </head>
    <body ng-app="SisFa">
      <div class="page-container">
                <div class="page-sidebar">
                    <ul class="x-navigation">

                        <li class="xn-logo">
                            <a href="{{asset('/')}}">SISFA</a>
                            <a href="#" class="x-navigation-control">  </a>
                        </li>
                        <li class="xn-title">MENU</li>

                        <!--
                        <li class="xn-openable">
                            <a href=""><span class="fa fa-user"></span> <span class="xn-text">Usuario</span></a>
                              <ul><li><a href="usuarios">Registro de usuario</a></li></ul>
                              <ul><li><a href="grupos">Grupos</a></li></ul>
                        </li>-->
                        @if(Auth::user()->grupo == 1)
                        <li class="@yield('usuarios')">
                            <a href="{{asset('/usuarios')}}"><span class="fa fa-user"></span> <span class="xn-text">Usuario</span></a>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 2)
                        <li class="@yield('afiliaciones') xn-openable">
                            <a href="#"><span class="fa fa-user-md"></span> <span class="xn-text">Afiliaciones</span></a>
                            <ul>
                              <li><a href="{{asset('afiliacion#/lista')}}"><span class="fa fa-search"></span> Buscar Afiliado</a></li>
                              <li><a href="{{asset('afiliacion#/crear')}}"><span class="fa fa-user"></span> Registrar Nuevo</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 2)
                        <li class="@yield('clientes')">
                            <a href="{{asset('cliente#/lista')}}"><span class="fa fa-users"></span>  <span class="xn-text">Clientes</span></a>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 2)
                        <li class="@yield('consultas') xn-openable">
                            <a href="#"><span class="fa fa-stethoscope"></span> <span class="xn-text">Consultas</span></a>
                            <ul>
                              <li><a href="{{asset('consulta#/lista')}}"><span class="fa fa-money"></span> Facturar Consultas</a></li>
                              <li><a href="{{asset('consulta#/crear')}}"><span class="fa fa-ticket"></span> Nueva Consulta</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 2)
                        <li class="@yield('servicios') xn-openable">
                            <a href="#"><span class="fa fa-medkit"></span> <span class="xn-text">Servicios</span></a>
                            <ul>
                              <li><a href="{{asset('servicio#/lista')}}"><span class="fa fa-money"></span> Facturar Servicios</a></li>
                              <li><a href="{{asset('servicio#/crear')}}"><span class="fa fa-ticket"></span> Venta Servicos/Estudios</a></li>
                              <li><a href="{{asset('servicio#/descargos')}}"><span class="fa fa-chain-broken"></span> Descargos Servicios</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 2)
                        <li class="@yield('facturas') xn-openable">
                            <a href="#"><span class="fa fa-folder-open"></span> <span class="xn-text">Facturas</span></a>
                            <ul>
                              <li><a href="{{asset('factura#/lista')}}"><span class="fa fa-sort-alpha-desc"></span> Lista</a></li>
                              <li><a href="{{asset('factura#/verDiario')}}"><span class="fa fa-file-text"></span> Reportes</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 3)
                        <li class="@yield('facturas')">
                            <a href="{{asset('factura#/listarContabilidad')}}"><span class="fa fa-folder-open"></span> <span class="xn-text">Facturas</span></a>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 2)
                        <li class="@yield('librodeventas')">
                            <a href="{{asset('librodeventas#/crear')}}"><span class="fa fa-book"></span>  <span class="xn-text">Libro de ventas</span></a>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 3)
                        <li class="@yield('librodeventas')">
                            <a href="{{asset('librodeventas#/crear')}}"><span class="fa fa-book"></span>  <span class="xn-text">Libro de ventas</span></a>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 2)
                        <li class="@yield('dosificaciones')">
                            <a href="{{asset('dosificacion#/lista')}}"><span class="fa fa-qrcode"></span> <span class="xn-text">Dosificaciones</span></a>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 1)
                        <li class="@yield('backup')">
                            <a href="{{asset('backup#/lista')}}"><span class="fa fa-database"></span> <span class="xn-text">Copia de Seguridad</span></a>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 1)
                        <li class="@yield('log')">
                            <a href="{{asset('log#/lista')}}"><span class="fa fa-bug"></span> <span class="xn-text">Registro de Sesiones</span></a>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 2)
                        <li class="@yield('reportes')">
                            <a href="{{asset('reportesPdf#/clientes')}}"><span class="fa fa-file-text-o "></span> <span class="xn-text">Reportes</span></a>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 1)
                        <li class="@yield('sfv')">
                            <a href="{{asset('sfv#/testeo')}}"><span class="fa fa-cogs"></span> <span class="xn-text">Testeo SFV</span></a>
                        </li>
                        @endif
                        @if(Auth::user()->grupo == 3)
                        <li class="@yield('reporteContabilidad')">
                            <a href="{{asset('factura#/reporteContabilidad')}}"><span class="fa fa-file-text"></span> Reportes</a>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="page-content">
                    <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                        <li class="xn-icon-button">
                            <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>

                        </li>

                        @if (Auth::check())
                        <li class="pull-right" style="margin-right:150px;">
                              <a href="{{ url('/logout') }}" class="dropdown-toggle" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a href="{{ url('/usuarios/info/ver') }}"><i class="fa fa-btn fa-info-circle"></i>Info</a></li>
                                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                              </ul>
                          </li>
                        @endif


                    </ul>
                    <ul class="breadcrumb">
                      <li>
                        <li><a href="{{url('/')}}">Inicio</a></li>
                      </li>
                      @for($i = 0; $i <= count(Request::segments()); $i++)
                        <li><a href="">{{Request::segment($i)}}</a></li>
                      @endfor
                    </ul>
                    <div class="page-content-wrap">
                      @yield('contenido')
                    </div>
            </div>
          </div>

    </body>

    <script src="{{asset('js/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/jquery/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery/jquery-ui.js')}}"></script>
    <script src="{{asset('js/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/plugins/bootstrap/bootstrap-datepicker.es.min.js')}}"></script>
    <script src="{{asset('js/d3.v3.min.js')}}"></script>

    <script src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>

    <script src="{{asset('js/plugins/knob/jquery.knob.min.js')}}"></script>
    <script src="{{asset('js/plugins/owl/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>

    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/actions.js')}}"></script>

    <script src="{{asset('assets/angular/angular.min.js')}}"></script>

    <script src="{{asset('assets/angular/angular-resource.js')}}"></script>
    <script src="{{asset('assets/angular/angular-route.js')}}"></script>
    <script src="{{asset('assets/angular/angular-animate.js')}}"></script>

    <script src="{{asset('assets/angular-datatables/angular-datatables.min.js')}}"></script>
    <script src="{{asset('assets/angular-datatables/jquery.dataTables.min.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
    @yield('angular')
</html>
