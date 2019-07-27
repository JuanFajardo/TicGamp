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
{!! Form::model($user, ['action'=>['UsuarioController@update', $user->id], 'method'=>'PATCH', 'id'=>'form-create', 'class'=>'form-horizontal', 'role'=>'form', 'autocomplete'=>'off'  ])!!}
<h4>Datos de usuario para actualizar</h4>
<hr>
<div class="row">
  <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="name" class="control-label">Nombres</label>
    {!! Form::text('nombre',  old('nombre'), ['id'=>'nombre', 'class'=>'form-control', 'placeholder'=>'Nombres']) !!}
    @if ($errors->has('name'))
      <span class="help-block">{{ $errors->first('nombre') }}</span>
    @endif
  </div>

  <div class="form-group{{ $errors->has('paterno') ? ' has-error' : '' }}  col-md-12 col-xl-4">">
    <label for="name" class="control-label">Ap. Paterno</label>
    {!! Form::text('paterno',  old('paterno'), ['id'=>'paterno', 'class'=>'form-control', 'placeholder'=>'Ap. Paterno']) !!}
    @if ($errors->has('paterno'))
      <span class="help-block">{{ $errors->first('paterno') }}</span>
    @endif
  </div>

  <div class="form-group{{ $errors->has('materno') ? ' has-error' : '' }}  col-md-12 col-xl-4">">
    <label for="materno" class="control-label">Ap. Materno</label>
    {!! Form::text('materno',  old('materno'), ['id'=>'materno', 'class'=>'form-control', 'placeholder'=>'Ap. Materno']) !!}
    @if ($errors->has('materno'))
      <span class="help-block">{{ $errors->first('materno') }}</span>
    @endif
  </div>
</div>

<div class="row">

  <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="name" class="control-label">Carnet de Identidad</label>
      {!! Form::text('ci',  old('ci'), ['id'=>'ci', 'class'=>'form-control', 'placeholder'=>'Carnet de Identidad']) !!}
      @if ($errors->has('ci'))
        <span class="help-block">{{ $errors->first('ci') }}</span>
      @endif
  </div>
  <div class="form-group{{ $errors->has('imei') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="imei" class="control-label">IMEI</label>
    {!! Form::text('imei',  old('imei'), ['id'=>'imei', 'class'=>'form-control', 'placeholder'=>'IMEI']) !!}
    @if ($errors->has('imei'))
      <span class="help-block">{{ $errors->first('imei') }}</span>
    @endif
  </div>
  <div class="form-group{{ $errors->has('unidad') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="unidad" class="control-label">Unidad</label>
    {!! Form::text('unidad',  old('unidad'), ['id'=>'unidad', 'class'=>'form-control', 'placeholder'=>'Unidad']) !!}
    @if ($errors->has('unidad'))
      <span class="help-block">{{ $errors->first('unidad') }}</span>
    @endif
  </div>

</div>


<div class="row">
  <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }} col-md-12 col-xl-4">
    <label for="cargo" class="control-label">Cargo</label>
    {!! Form::text('cargo',  old('cargo'), ['id'=>'cargo', 'class'=>'form-control', 'placeholder'=>'Cargo']) !!}
    @if ($errors->has('cargo'))
      <span class="help-block">{{ $errors->first('cargo') }}</span>
    @endif
  </div>

  <div class="form-group  col-md-12 col-xl-4">
    <label for="grupo" class="control-label">Grupo</label>
    {!! Form::select('grupo', ['1'=>'Administrador', '2'=>'Responsable', '3'=>'Usuario', '4'=>'Reportes'], null, ['id'=>'grupo', 'class'=>'form-control']) !!}
  </div>

  <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}  col-md-12 col-xl-4">
    <label for="name" class="control-label">Nombre de Usuario</label>
    {!! Form::text('username',  old('name'), ['id'=>'username', 'class'=>'form-control', 'placeholder'=>'Nombre de Usuario']) !!}
    @if ($errors->has('username'))
      <span class="help-block">{{ $errors->first('username') }}</span>
    @endif
  </div>
</div>

<div class="row">
  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}  col-md-12 col-xl-6">
    <label for="password" class="col-md-4 control-label">Contraseña</label>
    {!! Form::password('password', ['id'=>'password', 'class'=>'form-control', 'placeholder'=>'Clave s3cr3t4']) !!}
    @if ($errors->has('password'))
      <span class="help-block">{{ $errors->first('password') }}</span>
    @endif
  </div>

  <div class="form-group   col-md-12 col-xl-4">
    <br>
    <button type="submit" class="btn btn-warning btn-text-icon" accesskey="a"> <i class="ti-save menu-icon"></i> <u>A</u>ctualizar </button>
    <a href="{{asset('/index.php/usuarios')}}" class="btn btn-primary btn-text-icon" accesskey="c"> <i class="ti-close menu-icon"></i> <u>C</u>ancelar</a>
  </div>
</div>

{!! Form::close() !!}

@endsection
