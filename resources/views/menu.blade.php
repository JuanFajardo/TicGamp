<nav class="navbar-default navbar-side" role="navigation">
<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a @yield('menuTrabajo') href="{{asset('index.php/Trabajo')}}"><i class="fa fa-desktop"></i> Trabajos</a>
            </li>
            <li>
                <a @yield('menuBien') href="{{asset('index.php/Bien')}}"><i class="fa fa-bar-chart-o"></i> Bienes </a>
            </li>
            <li>
                <a @yield('menuPrestamo') href="{{asset('index.php/Prestamo')}}"><i class="fa fa-qrcode"></i> Prestamos </a>
            </li>
            <li>
                <a @yield('menuReporte') href="{{asset('index.php/Reporte')}}"><i class="fa fa-file"></i> Resportes</a>
            </li>

            <li>
                <a @yield('menuUsuario') href="{{asset('index.php/usuarios')}}"><i class="fa fa-user"></i> Usuarios</a>
            </li>

        </ul>
    </div>
</nav>
