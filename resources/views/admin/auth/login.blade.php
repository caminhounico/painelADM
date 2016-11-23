@extends('admin.auth.layouts.app')

@section('content')
    <div class="ui container">


        <h1 class="ui header">
            <i class="dashboard icon"></i>
            <div class="content">
                Painel Administrativo
                <p class="sub header">Insira suas credenciais para entrar.</p>
            </div>
        </h1>
        <div class="ui divider"></div>
    </div>



    <div class="ui container">
        <div class="ui two column middle aligned very relaxed stackable grid">


            <div class="column">

                {{Form::open(['class'=>'ui form'])}}


                <div class="field">
                    <label>Email</label>
                    <div class="ui left icon input">
                        <input type="email" name="email" placeholder="Informe seu email..." value="{{old('email')}}"
                               required/>
                        <i class="user icon"></i>
                    </div>
                </div>


                <div class="field">
                    <label>Senha</label>
                    <div class="ui left icon input">
                        <input type="password" name="password" placeholder="Insira sua senha..." required>
                        <i class="lock icon"></i>
                    </div>
                </div>
                <button type="submit" class="ui red button">
                    <i class="sign in icon"></i>Login
                </button>
                <a class="ui basic small button" href="{{ url('/password/reset') }}">
                    Esqueceu a senha?
                </a>


                {{Form::close()}}

            </div>


            <div class="center aligned column">
                <div class="ui blue labeled icon button">
                    <i class="facebook icon"></i>
                    Entrar com o Facebook
                </div>
            </div>
        </div>
    </div>
@endsection
