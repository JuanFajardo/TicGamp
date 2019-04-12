@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">username</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                            <label for="titulo" class="col-md-4 control-label">titulo</label>
                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">nombre</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('paterno') ? ' has-error' : '' }}">
                            <label for="paterno" class="col-md-4 control-label">paterno</label>
                            <div class="col-md-6">
                                <input id="paterno" type="text" class="form-control" name="paterno" value="{{ old('paterno') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('materno') ? ' has-error' : '' }}">
                            <label for="materno" class="col-md-4 control-label">materno</label>
                            <div class="col-md-6">
                                <input id="materno" type="text" class="form-control" name="materno" value="{{ old('materno') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }}">
                            <label for="ci" class="col-md-4 control-label">ci</label>
                            <div class="col-md-6">
                                <input id="ci" type="text" class="form-control" name="ci" value="{{ old('ci') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('imei') ? ' has-error' : '' }}">
                            <label for="imei" class="col-md-4 control-label">imei</label>
                            <div class="col-md-6">
                                <input id="imei" type="text" class="form-control" name="imei" value="{{ old('imei') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
                            <label for="cargo" class="col-md-4 control-label">cargo</label>
                            <div class="col-md-6">
                                <input id="cargo" type="text" class="form-control" name="cargo" value="{{ old('cargo') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('grupo') ? ' has-error' : '' }}">
                            <label for="grupo" class="col-md-4 control-label">grupo</label>
                            <div class="col-md-6">
                                <input id="grupo" type="text" class="form-control" name="grupo" value="{{ old('grupo') }}" required autofocus>
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
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
