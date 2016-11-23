<html>
<head>
    <title>semantic teste</title>



    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Outline" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>
<body>
<header>
    <div class="ui one column grid">
        <div class="ui small monitor only column">
            <div class="ui top fixed menu inverted ">
                <div class="ui container header-menu">
                    <div class="item">
                        <img class="" src="/assets/css/images/logo.png">
                    </div>
                    <div class="right menu">
                        <a class="item active">Home</a>
                        <a class="item">Sobre</a>
                        <a class="item">Produtos</a>
                        <a class="item">Contato</a>
                        <a class="item a-login" href="{{route('admin.login')}}"><i class="sign in icon"></i> Login</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui column mobile tablet only">
            <div class="ui top fixed menu inverted">
                <div class="item">
                    <img class="" src="/assets/css/images/logo.png">
                </div>
                <div class="right menu">
                    <div class="ui item dropdown">
                        <i class="tasks icon"></i>
                        <div class="menu">
                            <div class="item" data-value="drop"><a href="">Home</a></div>
                            <div class="item" data-value="drop"><a href="">Sobre</a></div>
                            <div class="item" data-value="drop"><a href="">Produtos</a></div>
                            <div class="item" data-value="drop"><a href="">Contato</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui column">
            <div class="header-bg">
                <div class="ui centered grid">
                    <div class="row main-logo">
                        <h1 class="center aligned">The WEB Systems</h1>
                    </div>
                    <div class="center aligned row">
                        <p class="tagline">:: anywhere ::</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<main class="main-container">
    <div class="ui hidden divider"></div>
    <article class="ui container">
        <h1 class="ui header">
            <i class="child icon"></i>
            <div class="content">
                Tecnologia para todos!
                <div class="sub header">
                    <p class="tagline"> em qualquer lugar...</p>
                </div>
            </div>
        </h1>
        <img class="ui left floated  bordered rounded image size-img-container" src="/assets/css/images/users.jpg"
             title=""/>
        <p class="article-txt">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de
            impressos, e vem sendo
            utilizado desde o século XVI quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou
            para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao
            salto
        </p>
    </article>

    <div class="ui clearing section divider"></div>

    <article class="ui container">
        <h1 class="ui header">
            <i class="area chart icon"></i>
            <div class="content">
                Sistemas Personalizados,
                <div class="sub header">
                    <p class="tagline">...ajustado sob-medida!</p>
                </div>
            </div>
        </h1>
        <img class="ui right floated bordered rounded image size-img-container" src="/assets/css/images/pc-app.jpg" title=""/>

        <p class="article-txt">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de
            impressos, e vem sendo
            utilizado desde o século XVI quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou
            para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao
            salto
        </p>
    </article>

    <div class="ui hidden clearing divider "></div>

    <article class="ui products content">
        <div class="ui hidden divider"></div>
        <div class="ui center aligned products container">
            <h1 class="ui icon inverted header">
                <i class="product hunt icon"></i>
                <div class="content">
                    Produtos
                    <div class="sub header">
                        <p class="tagline">...alguns dos nossos sistemas.</p>
                    </div>
                </div>
            </h1>
            <div class="products-list">
                <p>
                    <img src="/assets/css/images/ws-cond-logo.png" alt="">
                    <img src="/assets/css/images/ws-cond-logo.png" alt="">
                    <img src="/assets/css/images/ws-cond-logo.png" alt="">
                    <img src="/assets/css/images/ws-cond-logo.png" alt="">
                </p>
                <a src="#" class="ui inverted button">Ver &nbsp&nbsp <i class="plus icon"></i></a>
            </div>
        </div>
    </article>
    <article class="ui prefooter content ">
        <div class="ui container">
            <h1 style="display: none;">The Web Systems nas Redes Sociais!</h1>
        </div>
    </article>
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

<script src="/assets/js/style.js"></script>

</body>
</html>