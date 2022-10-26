<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vagas_nova.css">
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


        
        <section class="melhores-vagas">
            <div class="container">
             <p class="azul">Veja as vagas que lhe interessam</p>
             <h2>Vagas de muitas áreas</h2>
             <div class="cards">


                 <div class="card-item">
                     <img src="img/placa-de-circuito.png" alt="icone vaga">
                     <p class="local-vaga">Barueri, São Paulo</p>
                     <p class="nome-vaga">Técnico em Eletrônica</p>
                     <p class="nome-empresa">Desk Eletronica
                    <br> (11) 63483-4638 <br> contato@deskeletronica.com</p>
                    <button><a href="vaga_de_tecnico_em_eletronica.html">Acessar a Vaga</a></button>
                 </div>
     
     
                 <div class="card-item">
                     <img src="img/linguagem-de-programacao.png" alt="icone vaga">
                     <p class="local-vaga"> Barueri, São Paulo</p>
                     <p class="nome-vaga">Desenvolvedor Web Júnior</p>
                     <p class="nome-empresa">Scenic Brasil <br> (11) 16362-2334 <br> contato@scenicbrasil.com </p>
                     <button><a href="vaga_desenvolvedor_web.html">Acessar a Vaga</a></button>
                 </div>
     
                 
                 <div class="card-item">
                     <img src="img/logistica.png" alt="icone vaga">
                     <p class="local-vaga"> Jandira, São Paulo</p>
                     <p class="nome-vaga">Auxiliar de Logística </p>
                     <p class="nome-empresa"> Spotter LTDA <br>(11) 80564-8288 <br> contato@spotterltda.com </p>
                     <button><a href="vaga_auxiliar_logistico.html">Acessar a Vaga</a></button>
                 </div>
                </div>
            </div>
            </section>


                 <section class="melhores-vagas">
                    <div class="container">
                     <div class="cards">

                        <div class="card-item">
                            <img src="img/administrativo.png" alt="icone vaga">
                            <p class="local-vaga">Carapicuíba, São Paulo</p>
                            <p class="nome-vaga">Auxiliar Administrativo </p>
                            <p class="nome-empresa">União Empreendimentos<br>(11) 30453-1464 <br> contato@
                            uniãoempreendimentos.com </p>
                            <button><a href="vaga_auxiliar_administrativo.html">Acessar a Vaga</a></button>
                        </div>

                        <div class="card-item">
                            <img src="img/contabilidade.png" alt="icone vaga">
                            <p class="local-vaga">Barueri, São Paulo</p>
                            <p class="nome-vaga">Auxiliar Contábil</p>
                            <p class="nome-empresa">Contabilidade Autêntica Ltda<br>(11) 79228-1478<br>contato@contabilidade-autentica.com.br </p>
                            <button><a href="vaga_auxiliar_contabil.html">Acessar a Vaga</a></button>
                        </div>
    
    
                
                        <div class="card-item">
                            <img src="img/estagiario.png" alt="icone vaga">
                            <p class="local-vaga"> Jandira, São Paulo</p>
                            <p class="nome-vaga">Estágio em Serviços Gerais</p>
                            <p class="nome-empresa">Born Talents<br>(11) 80622-3932<br> contato@borntalents.com </p>
                            <button><a href="vaga_estagio_serviços_gerais.html">Acessar a Vaga</a></button>
                        </div>
                    </div>
                </div>
            </section>


        <section class="melhores-vagas">
            <div class="container">
             <div class="cards">

                <div class="card-item">
                    <img src="img/estagiario.png" alt="icone vaga">
                    <p class="local-vaga">Jandira, São Paulo</p>
                    <p class="nome-vaga">Trainee</p>
                    <p class="nome-empresa">Stick LTDA<br>(11) 37864-0526<br>contato@stickltda.com </p>
                    <button><a href="vaga_trainee.html">Acessar a Vaga</a></button>
                </div>



                <div class="card-item">
                    <img src="img/reacao-quimica.png" alt="icone vaga">
                    <p class="local-vaga">Carapicuíba, São Paulo</p>
                    <p class="nome-vaga">Estágio em Química</p>
                    <p class="nome-empresa">WB7 Quimic<br>(11) 58463-0959<br> contato@wb7quimic.com </p>
                        <button><a href="vaga_estagio_em_quimica.html">Acessar a Vaga</a></button>
                </div>

        
                <div class="card-item">
                    <img src="img/administrativo.png" alt="icone vaga">
                    <p class="local-vaga">Barueri, São Paulo</p>
                    <p class="nome-vaga">Estágio em Administração
                    </p>
                    <p class="nome-empresa">Evolve Tecnologia <br>(11) 67950-0078<br> contato@evolvetecnologia.com </p>
                    <button><a href="vaga_estagio_em_administração.html">Acessar a Vaga</a></button>
                </div>
             </div>
           </div>
       </section>

               <section class="melhores-vagas">
                <div class="container">
                 <div class="cards">

        <div class="card-item">
            <img src="img/vendedor.png" alt="icone vaga">
            <p class="local-vaga">Carapicuíba, São Paulo</p>
            <p class="nome-vaga">Vendedor(a)</p>
            <p class="nome-empresa">
                Papelaria Nova Era
                <br>(11) 60091-4026<br>contato@papelarianovaera.com</p>
                <button><a href="vaga_vendedor.html">Acessar a Vaga</a></button>
        </div>



        <div class="card-item">
            <img src="img/financeiro.png" alt="icone vaga">
            <p class="local-vaga">Barueri, São Paulo</p>
            <p class="nome-vaga">Auxiliar Financeiro </p>
            <p class="nome-empresa">Banco Portal<br>(11) 88296-0772<br>contato@bancoportal.com</p>
            <button><a href="vaga_auxiliar_financeiro.html">Acessar a Vaga</a></button>
        </div>



        <div class="card-item">
            <img src="img/aprendiz.png" alt="icone vaga">
            <p class="local-vaga"> Jandira, São Paulo</p>
            <p class="nome-vaga">Jovem Aprendiz</p>
            <p class="nome-empresa">Tw Max<br>(11) 50944-3152<br>contato@twmax.com</p>
            <button><a href="vaga_jovem_aprendiz_tw_max.html">Acessar a Vaga</a></button>
        </div>
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