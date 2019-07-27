@extends('gamp')

@section('title') Trabajos @endsection

@section('titulo')
  <h4> <i class="ti-bookmark-alt menu-icon"></i> Reportes </h4>
 @endsection

@section('reporte')
 active
@endsection

@section('descripcion') Administracion de los trabajos @endsection

@section('boton')
<a href="{{asset('index.php/Reporte')}}" class="btn btn-success  btn-icon-text btn-rounded" accesskey="v"> <i class="ti-arrow-left menu-icon"></i> <u>V</u>olver </a>
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

    <button type="submit" name="boton" id="botonS" accesskey="s" value="Reporte Semanal" class="btn btn-default btn-icon-text"> <i class="ti-printer menu-icon"></i> Reporte <u>S</u>emanal</button>
    <button type="submit" name="boton" id="botonM" accesskey="m" value="Reporte Mensual" class="btn btn-info btn-icon-text"> <i class="ti-printer menu-icon"></i> Reporte <u>M</u>ensual</button>
    <button type="submit" name="boton" id="botonC" accesskey="c" value="Reporte Cuatrimestral"  class="btn btn-primary btn-icon-text"> <i class="ti-printer menu-icon"></i> Reporte <u>C</u>uatrimestral</button>


  </div>
</div>
</form>

@endsection
