<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>YoungJOBS</title>
    <style>
        .cookieConsentContainer {
            z-index: 999;
            width: 350px;
            min-height: 20px;
            box-sizing: border-box;
            padding: 30px 30px 30px 30px;
            background: #000000;
            overflow: hidden;
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: none
        }

            .cookieConsentContainer .cookieTitle a {
                font-family: OpenSans,arial,sans-serif;
                color: rgb(255, 254, 254);
                font-size: 22px;
                line-height: 20px;
                display: block
            }

            .cookieConsentContainer .cookieDesc p {
                margin: 0;
                padding: 0;
                font-family: OpenSans,arial,sans-serif;
                color: rgb(255, 251, 251);
                font-size: 13px;
                line-height: 20px;
                display: block;
                margin-top: 10px
            }

            .cookieConsentContainer .cookieDesc a {
                font-family: OpenSans,arial,sans-serif;
                color: #fff;
                text-decoration: underline
            }

            .cookieConsentContainer .cookieButton a {
                display: inline-block;
                font-family: OpenSans,arial,sans-serif;
                color: #fff;
                font-size: 14px;
                font-weight: 700;
                margin-top: 14px;
                background: rgb(139, 135, 135);
                box-sizing: border-box;
                padding: 15px 24px;
                text-align: center;
                transition: background .3s
            }

                .cookieConsentContainer .cookieButton a:hover {
                    cursor: pointer;
                    background: #15ffbd
                }

        @media (max-width:980px) {
            .cookieConsentContainer {
                bottom: 0 !important;
                left: 0 !important;
                width: 100% !important
            }
        }
        </style>
</head>
<body>
    <div class="background-roxo">
        <header>

            <div class="container">
                <nav>
                    <div class="logo">
                        <a href="index.php"><img src="img/logo_fundo preto_preview_rev_1.png" alt="logo site" width="100%" height="100%"> </a>
                    </div>
                    <ul class="ul ativo">
                        <li> <a href="index.php"> Home </a></li>
                        <li> <a href="login2.php"> Login </a></li>
                        <li> <a href="vagas_nova.php"> Vagas </a></li>
                        <li> <a href="#"></a></li>
                        <li> <a href="#"></a></li>
                    </ul>
                    <div class="menu-icon">
                        <img src="img/menu.png" alt="icone de menu">
                    </div>
                </nav>
            </div>
        </header>

        <main>
            <div class="container">

                <div class="main-text">
                    <h1>Sua oportunidade <br>na palma da mão</h1>
                    <h2>De um jeito totalmente inovador</h2>

                    <div>
                        <a href="login2.php"><button class="btn-gradiente">Se inscrever agora</button></a>
                        <img src="img/verificado.png" alt="verificado">
                    </div>
                </div>

                <div class="main-img">
                    <img src="img/img1-removebg-preview.png" alt="imagem atrativa">
                </div>
            </div>
        </main>
    </div>


    <section class="resultados">

        <div class="container">
            <div class="resultados-text">
                Ajudando jovens e pequenas empresas com a facilidade <br>e a acessibilidade que só nos disponibilizamos.
            </div>

            <div class="resultados-numero">
                <p>
                    <span>+10 </span> <br> candidatos
                </p>

                <p>
                    <span>+5 </span> <br>funcionários
                </p>

                <p>
                    <span>+10 </span> <br> empresas associadas
                </p>

            </div>
        </div>

    </section>

    <section class="diferencas">
        <div class="container">
            <div class="card">
                <img src="img/novidade.png" alt="inovação">
                <h3 class="titulo">Novidades no Mercado</h3>
                <p>
                    Somos uma das mais novas empresas destinadas a ajudar jovens no mercado de trabalho.
                </p>
            </div>
            <div class="card">
                <img src="img/Variedade.png" alt="Variredade">
                <h3 class="titulo">Variedade de vagas em vários setores</h3>
                <p>Roosteamos mais de 10 vagas em nossa plataforma, vagas destinadas a jovens de 16 a 24 anos.</p>
            </div>
            <div class="card">
                <img src="img/alcance.png" alt="alcance">
                <h3 class="titulo">Alcançamos uma nova área de publicação</h3><p>Oferecemos nosso serviços em Barueri,Carapicuíba e Jandira.</p>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="container">
            <div class="banner-img">
                <img src="img/background.png" alt="quem somos">
            </div>
            <div id="quemsomos" class="banner-text">
                <h2>Quem Somos</h2>
                <p>Somos a YoungJOBS uma nova plataforma no ramo de agências de empregos, mas não somos como as convencionais, sabe o porquê? Vimos em nossas necessidades a possibilidade de criar algo novo que favorece você mesmo , jovem que procura ter sua primeira experiência profissional por  isso criamos a YoungJOBS, para facilitar sua entrada no mercado de trabalho. Mas e a história de não ser mais uma igual as outras. Nós diferenciamos das outras por sermos uma plataforma exclusiva para jovens e ainda atuar em mais de duas cidades da região metropolitana de São Paulo.</p>
                <img src="img/user-happy.png" alt="">
                <p><b>+45 usuarios satisfeitos</b></p>
            </div>
        </div>
        </div>

    </section>

    <section class="melhores-vagas">
        <div class="container">
            <p class="azul">A vaga que você procura está aqui</p>
            <h2>Algumas das Vagas que Publicamos</h2>
            <div class="cards">

                <div class="card-item">
                    <img src="img/aprendiz.png" alt="icone vaga">
                    <p class="local-vaga"> Carapicuíba, São Paulo</p>
                    <p class="nome-vaga">Jovem Aprendiz</p>
                    <p class="nome-empresa"> Mandic Consultoria<br>(11) 67923-9198<br> contato@mandiconsultoria.com </p>
                    <button><a href="vaga_jovem_aprendiz_mandic.html">Acessar a Vaga</a></button>
                </div>


                <div class="card-item">
                    <img src="img/manutencao.png" alt="icone vaga">
                    <p class="local-vaga"> Barueri, São Paulo</p>
                    <p class="nome-vaga">Auxiliar de Manutenção</p>
                    <p class="nome-empresa">Maintenance Tek <br> (11) 63483-4638<br> contato@maintenancetek.com</p>
                    <button><a href="vaga_auxiliar_de_manutenção.html">Acessar a Vaga</a></button>
                </div>


                <div class="card-item">
                    <img src="img/call-center.png" alt="icone vaga">
                    <p class="local-vaga"> Jandira, São Paulo</p>
                    <p class="nome-vaga">Operador de Telemarketing </p>
                    <p class="nome-empresa">Amaze Call Center<br>(11) 63483-4630 <br>  contato@amazetel.com </p>
                    <button><a href="vaga_operador_de_telemarketing.html">Acessar a Vaga</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="resultados">
        <div class="container">
            <div class="resultados-text">
                <p>Publique sua vaga aqui, clique no botão onde você será redirecionado ao formulário para <br>cadastrar sua vaga. Após a vaga ser cadastrada, ela passará por uma análise na plataforma,<br> aonde ocorrendo aprovação a vaga será publicada.
            </div>
            <div class="resultados-numero">
                <h3>Publique Aqui sua Vaga de Emprego</h3></br></br>
                <a href="cadastrovagas.html"><button class="btn-gradiente">Publicar Vagas</button></a><br>
            </div>
        </div>
    </section>
    <footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="Política de Privacidade.html"> Política de Privacidade</a></li>
                <li><a href="Termos de Uso.html">Termos de Uso</a></li>
            </ul>
            <p class="footer-copyright">© 2022 Copyright - YoungJOBS</p>
        </div>
    </footer>
    <script src="JS/maint.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>var purecookieTitle = "Cookies",
        purecookieDesc = "Ao usar este site, você aceita automaticamente que usamos cookies", purecookieLink = '<a href="Política de Privacidade.html" target="_blank">Política de Privacidade</a>', purecookieButton = "OK";
            function pureFadeIn(e, o) {
                var i = document.getElementById(e);
                i.style.opacity = 0, i.style.display = o || "block", function e() { var o = parseFloat(i.style.opacity); (o += .02) > 1 || (i.style.opacity = o, requestAnimationFrame(e)) }()
            } function pureFadeOut(e) {
                var o = document.getElementById(e);
                o.style.opacity = 1, function e() { (o.style.opacity -= .02) < 0 ? o.style.display = "none" : requestAnimationFrame(e) }()
            } function setCookie(e, o, i) { var t = ""; if (i) { var n = new Date; n.setTime(n.getTime() + 24 * i * 60 * 60 * 1e3), t = "; expires=" + n.toUTCString() } document.cookie = e + "=" + (o || "") + t + "; path=/" } function getCookie(e)
            {
                for (var o = e + "=", i = document.cookie.split(";"), t = 0; t < i.length; t++) {
                    for (var n = i[t]; " " == n.charAt(0);
                    )n = n.substring(1, n.length); if (0 == n.indexOf(o)) return n.substring(o.length, n.length)
                } return null
            } function eraseCookie(e) { document.cookie = e + "=; Max-Age=-99999999;" } function cookieConsent() {
                getCookie("purecookieDismiss") || (document.body.innerHTML += '<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>' + purecookieTitle + '</a></div><div class="cookieDesc"><p>' + purecookieDesc + " "
                    + purecookieLink + '</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">' + purecookieButton + "</a></div></div>", pureFadeIn("cookieConsentContainer"))
            } function purecookieDismiss() { setCookie("purecookieDismiss", "1", 7), pureFadeOut("cookieConsentContainer") } window.onload = function () { cookieConsent() };
        </script>
       
</body>
</html>
