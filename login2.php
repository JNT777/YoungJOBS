<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <header>

        <div class="background-roxo">
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





    <div class="limiter">
        <div class="container-login100">
            <div class="col-md-6 offset-md-3">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54 ">
                    <form class="login100-form validate-form ">
                        <span class="login100-form-title p-b-49 ">
						Registre-se
					</span>

                        <div class="wrap-input100 validate-input m-b-23 " data-validate="O nome de usuário inválido ">
                            <span class="label-input100 ">Email</span>
                            <input class="input100 " type="text " name="email" placeholder="Digite seu email ">
                            <span class="focus-input100 " data-symbol="&#xf206; "></span>
                        </div>

                        <div class="wrap-input100 validate-input " >
                            <span class="label-input100 ">Senha</span>
                            <input class="input100 " type="password" name="senha" pattern="" placeholder="Digite sua senha ">
                            <span class="focus-input100 " data-symbol="&#xf190; "></span>
                        </div>

                        <div class="text-right p-t-8 p-b-31 ">
                            <a href="# ">
							Esqueceu sua senha?
						</a>
                        </div>

                        <div class="container-login100-form-btn ">
                            <div class="wrap-login100-form-btn ">
                                <div class="login100-form-bgbtn "></div>
                                <button name="submit" type="submit" class="login100-form-btn ">
                                    <a href="vagas_nova.php" class="txt2 "> 
								Entrar
							</button>
                            </div>

                            <div class="txt1 text-center p-t-54 p-b-20 ">
                                <span>
							Cadastre-se Como Candidato ou Empresa
						</span>
                            </div>


                        <div class="container-login100-form-btn ">
                            <div class="wrap-login100-form-btn ">
                                <div class="login100-form-bgbtn "></div>
                                <button class="login100-form-btn ">
                        <a href="cadastrocandidato.php " class="txt2 ">
						 Cadastro Candidato 
						</button>
                            </div>
                            <br><br>
                            <div class="container-login100-form-btn ">
                                <div class="wrap-login100-form-btn ">
                                    <div class="login100-form-bgbtn "></div>
                                    <button class="login100-form-btn ">
                    <a href="cadastroempresa.php " class="txt2 "> 
						Cadastro Empresa
						</button>
                                </div>
                                <br><br>
                                <a class="txt2 ">
						Venha fazer parte e ser um Aprendiz Young
                        </div>
						</a>
                            </div>
                    </form>
                    <div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
                
	<script src="js/main.js"></script>
                </div>
            </div>
        </div>
    </div>
    











<script>var purecookieTitle = "Cookies",
        purecookieDesc = "Ao usar este site, você aceita automaticamente que usamos cookies", purecookieLink = '<a href="Política de Privacidade.html" target="_blank">Política de Privacidade</a> <a href="Termos de Uso.html" target="_blank">e Termos de Uso</a>', purecookieButton = "OK";
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