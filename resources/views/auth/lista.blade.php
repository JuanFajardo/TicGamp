@extends('gamp')

@section('title') Usuarios @endsection

@section('titulo')
  <h4> <i class="ti-user menu-icon"></i> Usuarios </h4>
 @endsection

@section('usuario')
 active
@endsection

@section('descripcion') Administracion de los usuario @endsection

@section('boton')
<a href="{{asset('index.php/usuarios')}}" class="btn btn-success  btn-icon-text btn-rounded" accesskey="v"> <i class="ti-arrow-left menu-icon"></i> <u>V</u>olver </a>
<a   href="{{ url('usuarios/create') }}"  class="nuevo btn btn-primary btn-icon-text btn-rounded" accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> <u>N</u>uevo </a>
@endsection

@section('cuerpo')
  <table class="table table-hover compact" id="datosTabla">
    <thead style="background-color:#343a40; color:#fff;">
      <tr>
        <th>Nombres y Apellidos</th>
        <th>Usuario</th>
        <th>Unidad / Cargo</th>
        <th>Grupo</th>
        <th>imei</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($usuarios as $usuario)
      <tr>
        <td>{{$usuario->nombre}} {{$usuario->paterno}} {{$usuario->materno}}</td>
        <td>{{$usuario->username}}</td>
        <td>{{$usuario->unidad}} / {{$usuario->cargo}}</td>
        <td>{{$usuario->grupo}}</td>
        <td>{{$usuario->imei}}</td>
        <td><a href="{{ url('usuarios/'.$usuario->id.'/edit') }}" class="btn btn-warning btn-icon-text" > <i class="ti-pencil menu-icon" aria-hidden="true"></i>  </a></td>
      </tr>
      @endforeach
    </tbody>
    <tfoot class="thead-dark">
      <tr>
        <th>Nombres y Apellidos</th>
        <th>Usuario</th>
        <th>Unidad / Cargo</th>
        <th>Grupo</th>
        <th>imei</th>
        <th>Editar</th>
      </tr>
    </tfoot>

  </table>

@endsection

@section('js')
<script type="text/javascript">
  $('#datosTabla').DataTable({
      "order": [[ 0, 'asc']],
      "language": {
          "bDeferRender": true,
          "sEmtpyTable": "No ay registros",
          "decimal": ",",
          "thousands": ".",
          "lengthMenu": "Mostrar _MENU_  ",
          "zeroRecords": "No se encontro nada,  lo siento",
          "info": "  ",
          "infoEmpty": "No ay entradas permitidas",
          "search": "Buscar ",
          "infoFiltered": "(Busqueda de _MAX_ registros en total)",
          "oPaginate":{
              "sLast":"Final",
              "sFirst":"Principio",
              "sNext":"Siguiente",
              "sPrevious":"Anterior"
          }
      }
  });
</script>
@endsection
