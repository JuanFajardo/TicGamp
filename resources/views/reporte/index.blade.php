@extends('gamp')

@section('title') Reportes @endsection
@section('ventana') Reportes @endsection

@section('descripcion') generacion del reporte semanal mensual cuatrimestral @endsection

@section('titulo')
 <a href="{{asset('index.php/Reporte')}}" class="btn btn-primary"> <i class="fa fa-file"></i> Volver </a>
@endsection

@section('menuReporte')
 class="active-menu"
@endsection

@section('cuerpo')

<form class="" action="{{asset('index.php/Reporte')}}" method="post">
{{ csrf_field() }}
<div class="row">

  <div class="col-md-3">
    <label > <b>Fecha Inicial</b>  </label>
    <input type="date" name="fecha_inicio" id="fecha_inicio" value="" required class="form-control">
  </div>
  <div class="col-md-3">
    <label > <b>Fecha Final</b>  </label>
    <input type="date" name="fecha_fin" id="fecha_fin" value="" required class="form-control">
  </div>
  <div class="col-md-6">
    <br>
    <input type="submit"  id="botonS" name="boton" value="Reporte Semanal" class="btn btn-default">
    <input type="submit"  id="botonM" name="boton" value="Reporte Mensual" class="btn btn-info">
    <input type="submit"  id="botonC" name="boton" value="Reporte Cuatrimestral" class="btn btn-primary">
  </div>
</div>
</form>

@endsection
