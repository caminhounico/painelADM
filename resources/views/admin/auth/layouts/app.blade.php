<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Styles -->
    <link href="assets/admin/css/style.css" rel="stylesheet">


</head>
<body>

<header>
    <nav class="ui inverted top attached menu">
        <div class="item">
            <img class="" src="/assets/css/images/logo.png">
        </div>
    </nav>
</header>


<main class="form-bg">

    @yield('content')




</main>
<footer class="content footer">
    <div class="ui container">
        <h1 class="ui inverted header">
            <i class="mail icon"></i>
            <div class="content">
                Contato
                <div class="sub header">
                    <p class="tagline">...duvidas, sugestões? Estamos aqui!</p>
                </div>
            </div>
        </h1>
        <div class="footer-contactform">
            <div class="ui hidden divider"></div>
            <form class="ui large form" method="post">
                <div class="field"><label for="name"><input name="name" type="text" class="ui inverted input"
                                                            placeholder="Nome:"></label></div>
                <div class="field"><label for="email"><input name="email" type="email" class="ui inverted input"
                                                             placeholder="Email:"></label></div>
                <div class="field"><textarea name="message" class="ui text" placeholder="Mensagem:"></textarea></div>
                <div class="field">
                    <button class="ui inverted button" value="form_send">Enviar</button>
                </div>
            </form>
        </div>
        <div class="footer-contacttext">
            <p><i class="mail icon"></i><b>Telefone: </b>+55 31 987105486 | 31 986756081</p>
            <p><i class="volume control phone icon"></i><b>Email: </b>contato@theweb.systems</p>
            <p><i class="volume control phone icon"></i><b>Endereço: </b>Rua Dos Limoeiros 66 AP 4401, 35171-230 -
                Coronel Fabriciano/MG - Brasil<br>
            <div class="footer-maps">
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.750526482263!2d-42.600316034491485!3d-19.50936613684066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa555ae4e6228af%3A0xe4c724526f72be07!2sCel.+Fabriciano+-+MG%2C+35171-230!5e0!3m2!1spt-BR!2sbr!4v1478649380100"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="ui hidden clearing divider "></div>

</footer>
<div  class="ui center aligned container"><i class="copyright icon"></i>2016  -  WEB Systems</div>



{{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
{{--<!-- Left Side Of Navbar -->--}}
{{--<ul class="nav navbar-nav">--}}
{{--&nbsp;--}}
{{--</ul>--}}

{{--<!-- Right Side Of Navbar -->--}}
{{--<ul class="nav navbar-nav navbar-right">--}}
{{--<!-- Authentication Links -->--}}
{{--@if (Auth::guest())--}}
{{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
{{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
{{--@else--}}
{{--<li class="dropdown">--}}
{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
{{--{{ Auth::user()->name }} <span class="caret"></span>--}}
{{--</a>--}}

{{--<ul class="dropdown-menu" role="menu">--}}
{{--<li>--}}
{{--<a href="{{ url('/logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--Logout--}}
{{--</a>--}}

{{--<form id="logout-form" action="{{ url('/logout') }}" method="POST"--}}
{{--style="display: none;">--}}
{{--{{ csrf_field() }}--}}
{{--</form>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--@endif--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}




<!-- Scripts -->
<script src="assets/admin/js/script.js"></script>
</body>
</html>
