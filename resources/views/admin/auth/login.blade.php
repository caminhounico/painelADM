@extends('admin.auth.layouts.app')

@section('content')
    <div class="form-container">
        <div class="ui raised very padded container segment">
            <h1 class="ui header">
                <i class="dashboard icon"></i>
                <div class="content">

                    <p class="sub header">Login</p>
                </div>
            </h1>
            <div class="ui divider"></div>


            {{Form::open(['class'=>'ui form custom-form'])}}
            <div class="field">
                <label>Email</label>
                <div class="ui left icon input">
                    <input type="email" name="email" placeholder="Informe seu email..." value="{{old('email')}}"
                    />
                    <i class="user icon"></i>
                </div>
            </div>
            <div class="field">
                <label>Senha</label>
                <div class="ui left icon input">
                    <input type="password" name="password" placeholder="Insira sua senha...">
                    <i class="lock icon"></i>
                </div>
            </div>
            <button type="submit" class="ui basic green button ">
                <i class="sign in icon"></i>Login
            </button>
            <a class="ui basic small button" href="{{ url('/password/reset') }}">
                Esqueceu a senha?
            </a>
            <div class="ui horizontal divider">ou</div>
            <div class="centered-icon">
                <div class="ui facebook button">
                    <i class="facebook icon"></i>
                    Entrar com o Facebook
                </div>
                <div class="ui google plus button">
                    <i class="google icon"></i>
                    Entrar com o Google+
                </div>
            </div>


            {{Form::close()}}
        </div>

        @include('admin.auth.partials.alert')


    </div>




@endsection
