@extends('gamp')
@section('title') Usuarios @endsection

@section('titulo')
  <h4> <i class="ti-user menu-icon"></i> Usuarios </h4>
@endsection

@section('usuario')
 active
@endsection

@section('descripcion') Agregar nuevo usuario @endsection

@section('boton')
<a href="{{asset('index.php/usuarios')}}" class="btn btn-success  btn-icon-text btn-rounded" accesskey="v"> <i class="ti-arrow-left menu-icon"></i> <u>V</u>olver </a>
@endsection

@section('cuerpo')
<form class="form-horizontal" method="POST" action="{{ route('usuarios') }}">
{{ csrf_field() }}

<div class="row">
  <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="nombre" class="control-label">Nombres </label>
    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>
  </div>

  <div class="form-group{{ $errors->has('paterno') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="paterno" class="control-label">Ap. Paterno </label>
    <input id="paterno" type="text" class="form-control" name="paterno" value="{{ old('paterno') }}" required>
  </div>

  <div class="form-group{{ $errors->has('materno') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="materno" class="control-label">Ap. Materno </label>
    <input id="materno" type="text" class="form-control" name="materno" value="{{ old('materno') }}" required>
  </div>

</div>

<div class="row">
  <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="name" class="control-label">Nombre de Usuario </label>
    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
    @if ($errors->has('username'))
    <span class="help-block">
      <strong>{{ $errors->first('username') }}</strong>
    </span>
    @endif
  </div>

  <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="name" class="control-label">Carnet de Identidad </label>
    <input id="ci" type="text" class="form-control" name="ci" value="{{ old('ci') }}" required autofocus>
    @if ($errors->has('ci'))
    <span class="help-block">
      <strong>{{ $errors->first('ci') }}</strong>
    </span>
    @endif
  </div>

  <div class="form-group{{ $errors->has('imei') ? ' has-error' : '' }}  col-md-12 col-xl-4">
    <label for="name" class="col-md-4 control-label">NRO IMEI </label>
    <input id="imei" type="text" class="form-control" name="imei" value="{{ old('imei') }}" required autofocus>
    @if ($errors->has('imei'))
    <span class="help-block">
      <strong>{{ $errors->first('imei') }}</strong>
    </span>
    @endif
  </div>
</div>


<div class="row">
  <div class="form-group{{ $errors->has('unidad') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="unidad" class="control-label">Unidad </label>
    <input id="unidad" type="text" class="form-control" name="unidad" value="{{ old('unidad') }}" required>
  </div>

  <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="cargo" class="control-label">Cargo </label>
    <input id="cargo" type="text" class="form-control" name="cargo" value="{{ old('cargo') }}" required>
  </div>

  <div class="form-group{{ $errors->has('grupo') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="grupo" class="control-label">Grupo</label>
    <select name="grupo" id="grupo" class="form-control">
      <option value="1">Administrador</option>
      <option value="2">Resposable</option>
      <option value="3">Usuario</option>
      <option value="4">Reportes</option>
    </select>
  </div>
</div>

<div class="row">
  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-12 col-xl-6">
    <label for="password" class="control-label">Password</label>
    <input id="password" type="password" class="form-control" name="password" required>
    @if ($errors->has('password'))
    <span class="help-block">
      <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
  </div>

  <div class="col-md-12 col-xl-6">
    <label for="password-confirm" class="control-label">Confirm Password</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
  </div>

</div>









  <div class="form-group">
      <div class="col-md-6 col-md-offset-4">
          <button type="submit" class="btn btn-primary btn btn-success  btn-icon-text" accesskey="r">
              <i class="ti-save menu-icon"></i> <u>R</u>egistrar
          </button>
          <a href="{{asset('/index.php/usuarios')}}" class="btn btn-warning btn btn-success  btn-icon-text" accesskey="c">
          <i class="ti-close menu-icon"></i> <u>C</u>ancelar</a>
      </div>
  </div>

</form>
@endsection
