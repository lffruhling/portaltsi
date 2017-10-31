@extends('layouts.app')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{url("/")}}"><b>{{ config('app.name', 'Portal TSI') }}</b> | Login</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Criar Nova Conta</p>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Nome Completo" name="name" value="{{ old('name') }}" required autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Senha"  name="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Repetir Senha" name="password_confirmation" required>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-xs-push-8">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{route("login")}}" class="text-center">Já tenho um usuário!</a>
        </div>
        <!-- /.form-box -->
    </div>
@endsection
