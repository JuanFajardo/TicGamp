<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item @yield('trabajo')">
      <a class="nav-link" href="{{ asset('/index.php/Trabajo') }}">
        <i class="ti-desktop  menu-icon"></i>
        <span class="menu-title" accesskey="t"><u>T</u>rabajo</span>
      </a>
    </li>

    <li class="nav-item @yield('bien')">
      <a class="nav-link" href="{{ asset('/index.php/Bien') }}">
        <i class="ti-clipboard  menu-icon"></i>
        <span class="menu-title" accesskey="b"><u>B</u>ienes</span>
      </a>
    </li>

    <li class="nav-item @yield('buscar')">
      <a class="nav-link" href="{{ asset('/index.php/Buscar') }}">
        <i class="ti-write menu-icon"></i>
        <span class="menu-title" accesskey="p"><u>P</u>restamos</span>
      </a>
    </li>

    <li class="nav-item @yield('reporte')">
      <a class="nav-link" href="{{ asset('/index.php/Reporte') }}">
        <i class="ti-bookmark-alt menu-icon"></i>
        <span class="menu-title" accesskey="r"><u>R</u>esportes</span>
      </a>
    </li>

    @if( trim(\Auth::user()->grupo) == "1")
    <li class="nav-item @yield('usuario')">
      <a class="nav-link" href="{{ asset('/index.php/usuarios') }}">
        <i class="ti-user menu-icon"></i>
        <span class="menu-title" accesskey="u"><u>U</u>suarios</span>
      </a>
    </li>
    @endif
  </ul>
</nav>
