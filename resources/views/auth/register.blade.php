@extends('gamp')

@section('title') Usuario @endsection
@section('ventana') Usuario @endsection

@section('descripcion') creacion de un nuevo usuario @endsection

@section('titulo')
 <a href="{{asset('index.php/usuarios')}}" class="btn btn-primary"> <i class="fa fa-user"></i> Volver </a>
@endsection

@section('menuUsuario')
 class="active-menu"
@endsection

@section('cuerpo')



<form class="form-horizontal" method="POST" action="{{ route('usuarios') }}">
{{ csrf_field() }}

  <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
    <label for="nombre" class="col-md-4 control-label">Nombres </label>
    <div class="col-md-6">
      <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>
    </div>
  </div>

  <div class="form-group{{ $errors->has('paterno') ? ' has-error' : '' }}">
    <label for="paterno" class="col-md-4 control-label">Ap. Paterno </label>
    <div class="col-md-6">
      <input id="paterno" type="text" class="form-control" name="paterno" value="{{ old('paterno') }}" required>
    </div>
  </div>

  <div class="form-group{{ $errors->has('materno') ? ' has-error' : '' }}">
    <label for="materno" class="col-md-4 control-label">Ap. Materno </label>
    <div class="col-md-6">
      <input id="materno" type="text" class="form-control" name="materno" value="{{ old('materno') }}" required>
    </div>
  </div>

  <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Nombre de Usuario </label>
    <div class="col-md-6">
      <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
      @if ($errors->has('username'))
      <span class="help-block">
        <strong>{{ $errors->first('username') }}</strong>
      </span>
      @endif
    </div>
  </div>

  <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Carnet de Identidad </label>
    <div class="col-md-6">
      <input id="ci" type="text" class="form-control" name="ci" value="{{ old('ci') }}" required autofocus>
      @if ($errors->has('ci'))
      <span class="help-block">
        <strong>{{ $errors->first('ci') }}</strong>
      </span>
      @endif
    </div>
  </div>

  <div class="form-group{{ $errors->has('imei') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">NRO IMEI </label>
    <div class="col-md-6">
      <input id="imei" type="text" class="form-control" name="imei" value="{{ old('imei') }}" required autofocus>
      @if ($errors->has('imei'))
      <span class="help-block">
        <strong>{{ $errors->first('imei') }}</strong>
      </span>
      @endif
    </div>
  </div>

  <div class="form-group{{ $errors->has('unidad') ? ' has-error' : '' }}">
    <label for="unidad" class="col-md-4 control-label">Unidad </label>
    <div class="col-md-6">
      <input id="unidad" type="text" class="form-control" name="unidad" value="{{ old('unidad') }}" required>
    </div>
  </div>

  <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
    <label for="cargo" class="col-md-4 control-label">Cargo </label>
    <div class="col-md-6">
      <input id="cargo" type="text" class="form-control" name="cargo" value="{{ old('cargo') }}" required>
    </div>
  </div>


  <div class="form-group{{ $errors->has('grupo') ? ' has-error' : '' }}">
    <label for="grupo" class="col-md-4 control-label">Grupo</label>
    <div class="col-md-6">
      <select name="grupo" id="grupo">
        <option value="1">Administrador</option>
        <option value="2">Resposable</option>
        <option value="3">Usuario</option>
        <option value="4">Reportes</option>
      </select>
    </div>
  </div>


  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Password</label>
    <div class="col-md-6">
      <input id="password" type="password" class="form-control" name="password" required>
      @if ($errors->has('password'))
      <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
    </div>
  </div>

  <div class="form-group">
    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
    <div class="col-md-6">
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
  </div>

  <div class="form-group">
      <div class="col-md-6 col-md-offset-4">
          <button type="submit" class="btn btn-primary">
              <i class="fa fa-btn fa-user"></i> Registrar
          </button>
          <a href="{{asset('/index.php/usuarios')}}" class="btn btn-warning">
            <i class="fa fa-btn fa-times-circle"></i> Cancelar</a>
      </div>
  </div>

</form>
@endsection
