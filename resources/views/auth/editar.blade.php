@extends('gamp')

@section('title') Usuarios @endsection

@section('ventana') Usuarios
@endsection
@section('descripcion') editar usuario @endsection
@section('titulo')
   <a href="{{asset('index.php/usuarios')}}" class="btn btn-primary"> <i class="fa fa-user"></i> Volver </a>
   <a href="{{url('usuarios/create')}}" class="btn btn-info " data-target=""> <li class="fa fa-plus"></li> Nuevo </a>
@endsection

@section('menuUsuario')
 class="active-menu"
@endsection


@section('cuerpo')
{!! Form::model($user, ['action'=>['UsuarioController@update', $user->id], 'method'=>'PATCH', 'id'=>'form-create', 'class'=>'form-horizontal', 'role'=>'form', 'autocomplete'=>'off'  ])!!}
  <h4>Datos de usuario</h4>
  <hr>
  <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Nombres</label>
    <div class="col-md-6">
      {!! Form::text('nombre',  old('nombre'), ['id'=>'nombre', 'class'=>'form-control', 'placeholder'=>'Nombres']) !!}
      @if ($errors->has('name'))
        <span class="help-block">{{ $errors->first('nombre') }}</span>
      @endif
    </div>
  </div>
  <div class="form-group{{ $errors->has('paterno') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Ap. Paterno</label>
    <div class="col-md-6">
      {!! Form::text('paterno',  old('paterno'), ['id'=>'paterno', 'class'=>'form-control', 'placeholder'=>'Ap. Paterno']) !!}
      @if ($errors->has('paterno'))
        <span class="help-block">{{ $errors->first('paterno') }}</span>
      @endif
    </div>
  </div>
  <div class="form-group{{ $errors->has('materno') ? ' has-error' : '' }}">
    <label for="materno" class="col-md-4 control-label">Ap. Materno</label>
    <div class="col-md-6">
      {!! Form::text('materno',  old('materno'), ['id'=>'materno', 'class'=>'form-control', 'placeholder'=>'Ap. Materno']) !!}
      @if ($errors->has('materno'))
        <span class="help-block">{{ $errors->first('materno') }}</span>
      @endif
    </div>
  </div>


  <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Carnet de Identidad</label>
    <div class="col-md-6">
      {!! Form::text('ci',  old('ci'), ['id'=>'ci', 'class'=>'form-control', 'placeholder'=>'Carnet de Identidad']) !!}
      @if ($errors->has('ci'))
        <span class="help-block">{{ $errors->first('ci') }}</span>
      @endif
    </div>
  </div>
  <div class="form-group{{ $errors->has('imei') ? ' has-error' : '' }}">
    <label for="imei" class="col-md-4 control-label">IMEI</label>
    <div class="col-md-6">
      {!! Form::text('imei',  old('imei'), ['id'=>'imei', 'class'=>'form-control', 'placeholder'=>'IMEI']) !!}
      @if ($errors->has('imei'))
        <span class="help-block">{{ $errors->first('imei') }}</span>
      @endif
    </div>
  </div>
  <div class="form-group{{ $errors->has('unidad') ? ' has-error' : '' }}">
    <label for="unidad" class="col-md-4 control-label">Unidad</label>
    <div class="col-md-6">
      {!! Form::text('unidad',  old('unidad'), ['id'=>'unidad', 'class'=>'form-control', 'placeholder'=>'Unidad']) !!}
      @if ($errors->has('unidad'))
        <span class="help-block">{{ $errors->first('unidad') }}</span>
      @endif
    </div>
  </div>
  <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
    <label for="cargo" class="col-md-4 control-label">Cargo</label>
    <div class="col-md-6">
      {!! Form::text('cargo',  old('cargo'), ['id'=>'cargo', 'class'=>'form-control', 'placeholder'=>'Cargo']) !!}
      @if ($errors->has('cargo'))
        <span class="help-block">{{ $errors->first('cargo') }}</span>
      @endif
    </div>
  </div>

  <div class="form-group">
    <label for="grupo" class="col-md-4 control-label">Grupo</label>
    <div class="col-md-6">
      {!! Form::select('grupo', ['1'=>'Administrador', '2'=>'Responsable', '3'=>'Usuario', '4'=>'Reportes'], null, ['id'=>'grupo', 'class'=>'form-control']) !!}
    </div>
  </div>
                  <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                      <label for="name" class="col-md-4 control-label">Nombre de Usuario</label>
                      <div class="col-md-6">
                          {!! Form::text('username',  old('name'), ['id'=>'username', 'class'=>'form-control', 'placeholder'=>'Nombre de Usuario']) !!}
                          @if ($errors->has('username'))
                              <span class="help-block">{{ $errors->first('username') }}</span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="col-md-4 control-label">Contraseña</label>
                      <div class="col-md-6">
                          {!! Form::password('password', ['id'=>'password', 'class'=>'form-control', 'placeholder'=>'Clave s3cr3t4']) !!}
                          @if ($errors->has('password'))
                              <span class="help-block">{{ $errors->first('password') }}</span>
                          @endif
                      </div>
                  </div>


                  <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                          <button type="submit" class="btn btn-warning">
                              <i class="fa fa-btn fa-user"></i> Actualizar
                          </button>
                          <a href="{{asset('/index.php/usuarios')}}" class="btn btn-primary">
                            <i class="fa fa-btn fa-times-circle"></i> Cancelar</a>
                      </div>
                  </div>
          {!! Form::close() !!}

@endsection
