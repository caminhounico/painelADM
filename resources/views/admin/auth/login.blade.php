@extends('admin.auth.layouts.app')

@section('content')
    <div class="form-container">
        <div class="ui container ">

            <div class="ui raised segment form-segnment">
                <h1 class="ui header">
                    <i class="dashboard icon"></i>
                    <div class="content">
                        Painel Administrativo
                        <p class="sub header">Insira suas credenciais para entrar.</p>
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
                        <input type="password" name="password" placeholder="Insira sua senha..." >
                        <i class="lock icon"></i>
                    </div>
                </div>
                <button type="submit" class="ui basic green button">
                    <i class="sign in icon"></i>Login
                </button>
                <a class="ui basic small button" href="{{ url('/password/reset') }}">
                    Esqueceu a senha?
                </a>
                <div class="ui right floated blue labeled icon button">
                    <i class="facebook icon"></i>
                    Entrar com o Facebook
                </div>
                <div class="ui hidden clearing divider"></div>
                {{Form::close()}}

            </div>
        </div>
    </div>



@endsection
