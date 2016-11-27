@extends('admin.auth.layouts.app')

@section('content')

    <div class="form-container">
        <div class="ui container">

            <div class="ui raised fluid segment">
                <h1 class="ui header">

                    <div class="content">
                        Recuperar Senha
                        <p class="sub header">Redefina sua senha!</p>
                    </div>
                </h1>
                <div class="ui divider"></div>


                <form class="ui form custom-form" role="form" method="POST" action="{{ url('/password/reset') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="field">
                        <label>Email</label>
                        <div class="ui left icon input">
                            <input type="email" name="email" placeholder="Informe seu email..." value="{{ $email or old('email')}}" autofocus/>

                            <i class="user icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <label>Senha</label>
                        <div class="ui left icon input">
                            <input id="password" type="password" name="password" >
                            <i class="user icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <label>Confirmar Senha</label>
                        <div class="ui left icon input">
                            <input type="password" name="password_confirmation" id="password_confirmation">
                            <i class="user icon"></i>
                        </div>
                    </div>


                    <button type="submit" class="ui basic green button ">
                        <i class="sign in icon"></i>Enviar
                    </button>


                    <div class="ui hidden clearing divider"></div>

                </form>
            </div>

            @include('admin.auth.partials.alert')

        </div>
    </div>
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">Reset Password</div>--}}

    {{--<div class="panel-body">--}}
    {{--@if (session('status'))--}}
    {{--<div class="alert alert-success">--}}
    {{--{{ session('status') }}--}}
    {{--</div>--}}
    {{--@endif--}}

    {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">--}}
    {{--{{ csrf_field() }}--}}

    {{--<input type="hidden" name="token" value="{{ $token }}">--}}

    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
    {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>--}}

    {{--@if ($errors->has('email'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
    {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}
    {{--<div class="col-md-6">--}}
    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}

    {{--@if ($errors->has('password_confirmation'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<div class="col-md-6 col-md-offset-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--Reset Password--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection
