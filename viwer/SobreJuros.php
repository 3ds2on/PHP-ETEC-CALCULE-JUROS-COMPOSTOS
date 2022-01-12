<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>JUROS COMPOSTOS - Calcule juros compostos de forma simples.</title>
  <meta http-equiv="Content-Type" content="text/html" charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="sortcut icon" href="../images/favicon.gif" type="image/gif" />;
  
  <link href="grid/simple-grid.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- <script type="text/javascript" src="js/funcoes.js"></script> --->
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>		
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>var purecookieTitle="Cookies.",purecookieDesc="Ao usar este site, você aceita automaticamente o uso de cookies?",purecookieLink='<a href="PoliticaPrivacidade.php" target="_blank">Política de Privacidade</a>',purecookieButton="Entendido";function pureFadeIn(e,o){var i=document.getElementById(e);i.style.opacity=0,i.style.display=o||"block",function e(){var o=parseFloat(i.style.opacity);(o+=.02)>1||(i.style.opacity=o,requestAnimationFrame(e))}()}function pureFadeOut(e){var o=document.getElementById(e);o.style.opacity=1,function e(){(o.style.opacity-=.02)<0?o.style.display="none":requestAnimationFrame(e)}()}function setCookie(e,o,i){var t="";if(i){var n=new Date;n.setTime(n.getTime()+24*i*60*60*1e3),t="; expires="+n.toUTCString()}document.cookie=e+"="+(o||"")+t+"; path=/"}function getCookie(e){for(var o=e+"=",i=document.cookie.split(";"),t=0;t<i.length;t++){for(var n=i[t];" "==n.charAt(0);)n=n.substring(1,n.length);if(0==n.indexOf(o))return n.substring(o.length,n.length)}return null}function eraseCookie(e){document.cookie=e+"=; Max-Age=-99999999;"}function cookieConsent(){getCookie("purecookieDismiss")||(document.body.innerHTML+='<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>'+purecookieTitle+'</a></div><div class="cookieDesc"><p>'+purecookieDesc+" "+purecookieLink+'</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">'+purecookieButton+"</a></div></div>",pureFadeIn("cookieConsentContainer"))}function purecookieDismiss(){setCookie("purecookieDismiss","1",7),pureFadeOut("cookieConsentContainer")}window.onload=function(){cookieConsent()};</script>

<style>
.cookieConsentContainer{z-index:999;width:350px;min-height:20px;box-sizing:border-box;padding:30px 30px 30px 30px;background:#232323;overflow:hidden;position:fixed;bottom:30px;right:30px;display:none}.cookieConsentContainer .cookieTitle a{font-family:OpenSans,arial,sans-serif;color:#fff;font-size:22px;line-height:20px;display:block}.cookieConsentContainer .cookieDesc p{margin:0;padding:0;font-family:OpenSans,arial,sans-serif;color:#fff;font-size:13px;line-height:20px;display:block;margin-top:10px}.cookieConsentContainer .cookieDesc a{font-family:OpenSans,arial,sans-serif;color:#fff;text-decoration:underline}.cookieConsentContainer .cookieButton a{display:inline-block;font-family:OpenSans,arial,sans-serif;color:#fff;font-size:14px;font-weight:700;margin-top:14px;background:#000;box-sizing:border-box;padding:15px 24px;text-align:center;transition:background .3s}.cookieConsentContainer .cookieButton a:hover{cursor:pointer;background:#3e9b67}@media (max-width:980px){.cookieConsentContainer{bottom:0!important;left:0!important;width:100%!important}}

p.c {
  white-space: pre;
}
  
[data-tooltip] {
  position: relative;
  font-weight: bold;
}

[data-tooltip]:after {
  display: none;
  position: absolute;
  top: -5px;
  padding: 5px;
  border-radius: 3px;
  left: calc(100% + 2px);
  content: attr(data-tooltip);
  white-space: nowrap;
  background-color: #0095ff;
  color: White;
  data-toggle="tooltip" 
  data-placement="top"
}

[data-tooltip]:hover:after {
  display: block;
}
  
h6 {
  height:900px;
}
.fixed {
  position: fixed;
  left: 145rem;
  top: 16rem;
}

h4 {
  height:900px;
}
.fixed4 {
  position: fixed;
  left: 150rem;
  top: 37rem;
}

h10 {
  height:900px;
}
.col-3 {
  position: relative;
  left: 30rem;
  width: 23%;
}

.col-sm-8 {
  width: 43%;
}




  #my_form_pai {
	display: none;
	}
  #my_form_filho {
	display: none;
	}

  
  hr{
    border-top: 1px dashed #24405d;
    border-bottom: 1px solid #24405d;
    color: #fff;
    background-color: #fff;
    height: 8px;
  }
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #24405d;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #24405d;
    font-size: 50px;
  }
  .logo {
    color: #24405d;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #24405d;
  }
  .carousel-indicators li {
    border-color: #24405d;
  }
  .carousel-indicators li.active {
    background-color: #24405d;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #24405d; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #24405d;
    background-color: #fff !important;
    color: #24405d;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #24405d !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h10 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #24405d;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #24405d;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #24405d !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #24405d;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  
<!-- Inicio do menu suspenso SAIBA MAIS --->

.dropdown li a {
  position: relative;
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  background-color: #24405d !important;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown:hover .dropdown-content {display: block;}

<!-- Fim do menu suspenso SAIBA MAIS --->
  
  </style>
</head>

<!-- Container (Interação com o Stile CSS) -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- Container (PROPAGANDA GOOGLE) -->
<h6 class="fixed">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Coluna -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7779498209865308"
     data-ad-slot="9246957871"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</h6>

<!-- Container (COTAÇAO MOEDAS) -->
<div id="slot_bottom_fixed" style="position: fixed; margin-top:350px; margin-left:1510px;">
	<div style="width: 100%; max-width: 970px; margin: auto;">
		<div id="ad-fechar" onclick="document.getElementById('slot_bottom_fixed').style.display = 'none';">
		Fechar X
		</div>
	</div>
	
<iframe height="400" width="220" src="https://ssltools.forexprostools.com/currency-converter/index.php?from=12&to=35&force_lang=12"></iframe><br/><table width="197"><tr><td><span style="font-size: 11px;color: #333333;text-decoration: none;">Conversor de Moedas fornecido por <a href="https://br.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com Brasil</a>.</span></td></tr></table>
</div>


<!-- Container (Barra superior) -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li><a href=HomeJurosHora.php>HORA</a></li>
        <li><a href=HomeJurosDia.php>DIARIO</a></li>
        <li><a href=HomeJurosSemanal.php>SEMANAL</a></li>
        <li><a href=HomeJurosMes.php>MENSAL</a></li>
		<li><a href=HomeJurosAnual.php>ANUAL</a></li>
        <li><a href="#JurosContato">FALE CONOSCO</a></li>
		<li class="dropdown">
				<a> SAIBA MAIS </a>
				<div class="dropdown-content">
				<a href="QuemSomos.php">QUEM SOMOS</a>
				<a href="SobreJuros.php">SOBRE JUROS</a>
				<a href="SobreUsabilidade.php">SOBRE USABILIDADE</a>
				<a href="PoliticaPrivacidade.php">POLÍTICA DE PRIVACIDADE</a>
				<a href="TermosDeUso.php">TERMOS DE USO</a>
				</div>
		</li>
      </ul>
    </div>
  </div>
</nav>

<!-- Container (Descrição superior da pagina) -->
<div class="jumbotron text-center">
  <h1>JUROS COMPOSTOS</h1> 
  <p>Calcule juros por hora, diario, semanal, mensal e anual.</p> 
</div>


<!-- Container (TermosUso Section) -->
<div id="TermosUso" class="container-fluid">
	    <div class="col-sm-8">
        <center>	                 
<h2>ENTENDA O QUE É JUROS COMPOSTOS</h2>            
<p>Essa palavrinha Juros já faz parte do nosso cotidiano, quando compramos parcelado, por exemplo, podemos ter a vigência de juros compostos.</p>

<p>Os juros compostos são considerados a oitava maravilha do mundo, não podemos verificar se isso é verdade para todos, pois muitos ganham e perdem por conta disso, mas é uma maneira realmente boa de ver seu dinheiro crescer sem fazer nada.</p>

<p>Em termos simples, os juros compostos são o princípio pelo qual os juros que você ganha também rendem juros, e os juros sobre esses juros rendem juros. Quanto maior for o seu saldo, maiores serão os números de juros, graças ao crescimento exponencial.</p>

<p>Os juros compostos são um meio de calcular os juros em que o acréscimo dos juros ao longo do tempo é adicionado ao valor principal. Você não só ganha juros sobre o valor principal, mas também ganha juros sobre os seus juros. Isso acontece como resultado de economizar seu interesse em vez de retirá-lo.</p>

<p>Juros compostos geralmente se aplicam a contas de poupança e empréstimos, mas também podem se aplicar a um financiamento ou emprestimo. Você concorda em pedir emprestado ou economizar dinheiro durante um determinado período e, durante esse tempo, os juros são acumulados e compostos. Os juros compostos também são acumulados em uma frequência definida, seja diária, semanal, trimestral ou anual.</p>
        </center>  
    </div>
</div>

<center>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-gw-3+1f-3d+2z"
     data-ad-client="ca-pub-7779498209865308"
     data-ad-slot="1858674016"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>

<footer class="container-fluid text-center"><a href="../index.php" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a></footer>
<hr/>

<!-- Container (JurosContato Section) -->
<div id="JurosContato" class="container-fluid bg-grey">
  <h2 class="text-center">DEIXE O SEU FEEDBACK</h2>
      
	<center>
	<form action="../controller/Email.php" method="post">        
      <!-- caixa para o nome -->
      <p class="nome">
        <input id="txtnome" name="txtnome" type="text" placeholder="Seu Nome" value="" size="30" maxlength="245" required="required"><br>
      </p>
      <!-- caixa para o email -->
      <p class="email">
        <input id="txtemails" name="txtemails" type="email" placeholder="Seu Email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"><br>
      </p>
      <!-- caixa da mensagem -->
      <p class="mensagem">
        <textarea id="txtmensagem" name="txtmensagem" type="msg" placeholder="Sua Mensagem" value="" size="100" maxlength="2000" aria-describedby="email-notes" required="required"></textarea>
      </p>
      <!-- botão -->
      <p class="enviar">
		<input type="button"  name="btnEmail" value="Enviar" onclick="getEmail();" class="btn btn-danger" style="border:none;background-color:#b4918f" />
      </p>
	  <p>
	  <div id="ResultadoEmail"></div>
      </p>
    </form>

	  <p>
      </p>	
	  <p>
      </p>	
	  
    <!----REDES SOCIAIS---->
    <section id="footer">
      <div class="footer container">
		<h2 class="text-center">MÍDIAS SOCIAIS</h2>
        <div class="social-icon">

            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>  <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a> <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>  <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/youtube.png"/></a>
   
        </div>
      </div>
    </section>
    <!----REDES SOCIAIS---->
	</center>
	
</div>

<!-- Container (PROPAGANDA GOOGLE) -->
<div id="slot_bottom_fixed_2" style="position: fixed; left: 0; bottom: 0;
	width: 100%; text-align: center; margin: auto">
	<div style="width: 100%; max-width: 970px; margin: auto;">
		<div id="ad-fechar" onclick="document.getElementById('slot_bottom_fixed_2').style.display = 'none';">
			Fechar X</div>
	</div>
	
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Barra -->
	<ins class="adsbygoogle"
		style="display:block"
		data-ad-client="ca-pub-7779498209865308"
		data-ad-slot="2312161666"
		data-ad-format="auto"
		data-full-width-responsive="true"></ins>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	
	<span class="clear"></span>
</div>

<footer class="container-fluid text-center">
  <a href="../index.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Desenvolvido por... <a href="https://www.github.com/3ds2on" title="Visit 3ds2on">www.3ds2on.com</a></p>
</footer>


<script type="text/javascript" charset="UTF-8">
//JAVA SCRIPT REFERENTE AO BOOTSTRAP
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
 
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  }); 
  
})
	
	
//MASCARA PARA OS CAMPOS DE MOEDA
    function moeda(a, e, r, t) {
        let n = ""
          , h = j = 0
          , u = tamanho2 = 0
          , l = ajd2 = ""
          , o = window.Event ? t.which : t.keyCode;
        if (13 == o || 8 == o)
            return !0;
        if (n = String.fromCharCode(o),
        -1 == "0123456789".indexOf(n))
            return !1;
        for (u = a.value.length,
        h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
            ;
        for (l = ""; h < u; h++)
            -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
        if (l += n,
        0 == (u = l.length) && (a.value = ""),
        1 == u && (a.value = "0" + r + "0" + l),
        2 == u && (a.value = "0" + r + l),
        u > 2) {
            for (ajd2 = "",
            j = 0,
            h = u - 3; h >= 0; h--)
                3 == j && (ajd2 += e,
                j = 0),
                ajd2 += l.charAt(h),
                j++;
            for (a.value = "",
            tamanho2 = ajd2.length,
            h = tamanho2 - 1; h >= 0; h--)
                a.value += ajd2.charAt(h);
            a.value += r + l.substr(u - 2, u)
        }
        return !1
    }
		
		
function SomenteNumero(e) {
    var tecla = (window.event) ? event.keyCode : e.which;
    if ((tecla > 47 && tecla < 58)) return true;
    else {
        if (tecla == 8 || tecla == 0 || tecla == 44 || tecla == 13) return true;
        else return false;
         }
    }
        
    var input = document.getElementById('NR_PESO');
    var oldVal = '';
    input.addEventListener('keyup', function () {
        var parts = this.value.split(',');
        if (parts && parts[1] && parts[1].length > 3) this.value = oldVal;
        oldVal = this.value;
    });
		
		
	
/**
  * Função para criar um objeto XMLHTTPRequest
  */
 function CriaRequest() {
     try{
         request = new XMLHttpRequest();
     }catch (IEAtual){

         try{
             request = new ActiveXObject("Msxml2.XMLHTTP");
         }catch(IEAntigo){

             try{
                 request = new ActiveXObject("Microsoft.XMLHTTP");
             }catch(falha){
                 request = false;
             }
         }
     }

     if (!request)
         alert("Seu Navegador não suporta Ajax!");
     else
         return request;
 }
 
 

 
 
  function CriaRequestGastos() {
     try{
         request = new XMLHttpRequest();
     }catch (IEAtual){

         try{
             request = new ActiveXObject("Msxml2.XMLHTTP");
         }catch(IEAntigo){

             try{
                 request = new ActiveXObject("Microsoft.XMLHTTP");
             }catch(falha){
                 request = false;
             }
         }
     }

     if (!request)
         alert("Seu Navegador não suporta Ajax!");
     else
         return request;
 }
 
/**
  * Função para enviar os dados
  */
 function getHora() {

     // Declaração de Variáveis
     var ValorInicialHora = document.getElementById("txtValorInicialHora").value;
	 var PorcentagemHora = document.getElementById("txtPorcentagemHora").value;
	 var dateinicialDataHora = document.getElementById("txtdateinicialDataHora").value;
	 var datefinalDataHora = document.getElementById("txtdatefinalDataHora").value;
	 var dateinicialHora = document.getElementById("txtdateinicialHora").value;
	 var datefinalHora = document.getElementById("txtdatefinalHora").value;
	 var result = document.getElementById("ResultadoHora");
     var xmlreq = CriaRequest();

     // Exibi a imagem de progresso
     result.innerHTML = '<img src="../images/carregando_1.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_2.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_3.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_4.jpg"/>';

     // Iniciar uma requisição
     xmlreq.open("GET", "../controller/Hora.php?txtValorInicialHora=" + ValorInicialHora + "&txtPorcentagemHora="  + PorcentagemHora + "&txtdateinicialDataHora=" + dateinicialDataHora + "&txtdatefinalDataHora=" + datefinalDataHora+ "&txtdateinicialHora=" + dateinicialHora + "&txtdatefinalHora=" + datefinalHora, true);

     // Atribui uma função para ser executada sempre que houver uma mudança de ado
     xmlreq.onreadystatechange = function(){

         // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
         if (xmlreq.readyState == 4) {

             // Verifica se o arquivo foi encontrado com sucesso
             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
 }


/**
  * Função para enviar os dados
  */
 function getDia() {

     // Declaração de Variáveis
     var valorInicialDia = document.getElementById("txtValorInicialDia").value;
	 var porcentagemDia = document.getElementById("txtPorcentagemDia").value;
	 var dateinicialDia = document.getElementById("txtdateinicialDia").value;
	 var datefinalDia = document.getElementById("txtdatefinalDia").value;
     var result = document.getElementById("ResultadoDiario");
     var xmlreq = CriaRequest();

     // Exibi a imagem de progresso
     result.innerHTML = '<img src="../images/carregando_1.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_2.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_3.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_4.jpg"/>';

     // Iniciar uma requisição
     xmlreq.open("GET", "../controller/Diario.php?txtValorInicialDia=" + valorInicialDia + "&txtPorcentagemDia="  + porcentagemDia + "&txtdateinicialDia=" + dateinicialDia + "&txtdatefinalDia=" + datefinalDia, true);

     // Atribui uma função para ser executada sempre que houver uma mudança de ado
     xmlreq.onreadystatechange = function(){

         // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
         if (xmlreq.readyState == 4) {

             // Verifica se o arquivo foi encontrado com sucesso
             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
 }
 
 
/**
  * Função para enviar os dados
  */
 function getSemana() {

     // Declaração de Variáveis
     var valorInicialSemanal = document.getElementById("txtValorInicialSemanal").value;
	 var porcentagemSemanal = document.getElementById("txtPorcentagemSemanal").value;
	 var dateinicialSemanal = document.getElementById("txtdateinicialSemanal").value;
	 var datefinalSemanal = document.getElementById("txtdatefinalSemanal").value;
     var result = document.getElementById("ResultadoSemanal");
     var xmlreq = CriaRequest();

     // Exibi a imagem de progresso
     result.innerHTML = '<img src="../images/carregando_1.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_2.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_3.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_4.jpg"/>';

     // Iniciar uma requisição
     xmlreq.open("GET", "../controller/Semanal.php?txtValorInicialSemanal=" + valorInicialSemanal + "&txtPorcentagemSemanal="  + porcentagemSemanal + "&txtdateinicialSemanal=" + dateinicialSemanal + "&txtdatefinalSemanal=" + datefinalSemanal, true);

     // Atribui uma função para ser executada sempre que houver uma mudança de ado
     xmlreq.onreadystatechange = function(){

         // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
         if (xmlreq.readyState == 4) {

             // Verifica se o arquivo foi encontrado com sucesso
             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
 }
 
 
/**
  * Função para enviar os dados
  */
 function getMes() {

     // Declaração de Variáveis
     var valorInicialMes = document.getElementById("txtValorInicialMes").value;
	 var porcentagemMes = document.getElementById("txtPorcentagemMes").value;
	 var dateinicialMes = document.getElementById("txtdateinicialMes").value;
	 var datefinalMes = document.getElementById("txtdatefinalMes").value;
     var result = document.getElementById("ResultadoMes");
     var xmlreq = CriaRequest();

     // Exibi a imagem de progresso
     result.innerHTML = '<img src="../images/carregando_1.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_2.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_3.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_4.jpg"/>';

     // Iniciar uma requisição
     xmlreq.open("GET", "../controller/Mensal.php?txtValorInicialMensal=" + valorInicialMes + "&txtPorcentagemMensal="  + porcentagemMes + "&txtdateinicialMensal=" + dateinicialMes + "&txtdatefinalMensal=" + datefinalMes, true);

     // Atribui uma função para ser executada sempre que houver uma mudança de ado
     xmlreq.onreadystatechange = function(){

         // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
         if (xmlreq.readyState == 4) {

             // Verifica se o arquivo foi encontrado com sucesso
             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
 }
 
 
/**
  * Função para enviar os dados
  */
 function getAno() {

     // Declaração de Variáveis
     var valorInicialAno = document.getElementById("txtValorInicialAno").value;
	 var PorcentagemAno = document.getElementById("txtPorcentagemAno").value;
	 var dateinicialAno = document.getElementById("txtdateinicialAno").value;
	 var datefinalAno = document.getElementById("txtdatefinalAno").value;
     var result = document.getElementById("ResultadoAno");
     var xmlreq = CriaRequest();

     // Exibi a imagem de progresso
     result.innerHTML = '<img src="../images/carregando_1.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_2.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_3.jpg"/>';
	 result.innerHTML = '<img src="../images/carregando_4.jpg"/>';

     // Iniciar uma requisição
     xmlreq.open("GET", "../controller/Anual.php?txtValorInicialAno=" + valorInicialAno + "&txtPorcentagemAno="  + PorcentagemAno + "&txtdateinicialAno=" + dateinicialAno + "&txtdatefinalAno=" + datefinalAno, true);

     // Atribui uma função para ser executada sempre que houver uma mudança de ado
     xmlreq.onreadystatechange = function(){

         // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
         if (xmlreq.readyState == 4) {

             // Verifica se o arquivo foi encontrado com sucesso
             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
 }
 
 
 
/**
  * Função para enviar os dados
  */
 function getEmail() {

     // Declaração de Variáveis
	 var nome = document.getElementById("txtnome").value;
	 var emails = document.getElementById("txtemails").value;
	 var mensagem = document.getElementById("txtmensagem").value;
     var result = document.getElementById("ResultadoEmail");
     var xmlreq = CriaRequest();
	 
	 
	 if(nome.trim() == '' | emails.trim() == '' | mensagem.trim() == ''){
	 alert('Por gentileza, informe todos os campos !!!');
	 return;
     }
	 else{

     // Exibi a imagem de progresso
     result.innerHTML = 'AGUARDE';
	 result.innerHTML = 'ENVIANDO';

     // Iniciar uma requisição
     xmlreq.open("GET", "../controller/Email.php?txtnome=" + nome + "&txtemails=" + emails + "&txtmensagem=" + mensagem, true);

     // Atribui uma função para ser executada sempre que houver uma mudança de ado
     xmlreq.onreadystatechange = function(){

         // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
         if (xmlreq.readyState == 4) {

             // Verifica se o arquivo foi encontrado com sucesso
             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
    }
 } 
 
 
</script>

</body>
</html>