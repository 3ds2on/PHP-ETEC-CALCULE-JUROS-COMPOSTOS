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
  width: 60%;
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

<!-- Container (PoliticaPrivacidade Section) -->
<div id="PoliticaPrivacidade" class="container-fluid">
	<div class="col-sm-8">
          <center>	                 
<h2>Política Privacidade</h2> <p>A sua privacidade é importante para nós. É política do Juros Compostos Online respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site <a href=juroscompostos.online>Juros Compostos Online</a>, e outros sites que possuímos e operamos.</p> <p>Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado. </p> <p>Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados.</p> <p>Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.</p> <p>O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas <a href='https://politicaprivacidade.com' target='_BLANK'>políticas de privacidade</a>. </p> <p>Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.</p> <p>O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto connosco.</p> <h2>Política de Cookies Juros Compostos Online</h2> <h10>O que são cookies?</h10><p>Como é prática comum em quase todos os sites profissionais, este site usa cookies, que são pequenos arquivos baixados no seu computador, para melhorar sua experiência. Esta página descreve quais informações eles coletam, como as usamos e por que às vezes precisamos armazenar esses cookies. Também compartilharemos como você pode impedir que esses cookies sejam armazenados, no entanto, isso pode fazer o downgrade ou 'quebrar' certos elementos da funcionalidade do site.</p> <h10>Como usamos os cookies?</h10> <p>Utilizamos cookies por vários motivos, detalhados abaixo. Infelizmente, na maioria dos casos, não existem opções padrão do setor para desativar os cookies sem desativar completamente a funcionalidade e os recursos que eles adicionam a este site. É recomendável que você deixe todos os cookies se não tiver certeza se precisa ou não deles, caso sejam usados ​​para fornecer um serviço que você usa.</p> <h10>Desativar cookies</h10> <p>Você pode impedir a configuração de cookies ajustando as configurações do seu navegador (consulte a Ajuda do navegador para saber como fazer isso). Esteja ciente de que a desativação de cookies afetará a funcionalidade deste e de muitos outros sites que você visita. A desativação de cookies geralmente resultará na desativação de determinadas funcionalidades e recursos deste site. Portanto, é recomendável que você não desative os cookies.</p> <h10>Cookies que definimos</h10> <ul> <li>     Cookies relacionados à conta<br><br> Se você criar uma conta connosco, usaremos cookies para o gerenciamento do processo de inscrição e administração geral. Esses cookies geralmente serão excluídos quando você sair do sistema, porém, em alguns     casos, eles poderão permanecer posteriormente para lembrar as preferências do seu site ao sair.<br><br> </li> <li>     Cookies relacionados ao login<br><br> Utilizamos cookies quando você está logado, para que possamos lembrar dessa ação. Isso evita que você precise fazer login sempre que visitar uma nova página. Esses cookies são normalmente removidos ou limpos     quando você efetua logout para garantir que você possa acessar apenas a recursos e áreas restritas ao efetuar login.<br><br> </li> <li>     Cookies relacionados a boletins por e-mail<br><br> Este site oferece serviços de assinatura de boletim informativo ou e-mail e os cookies podem ser usados ​​para lembrar se você já está registrado e se deve mostrar determinadas notificações     válidas apenas para usuários inscritos / não inscritos.<br><br> </li> <li>     Pedidos processando cookies relacionados<br><br> Este site oferece facilidades de comércio eletrônico ou pagamento e alguns cookies são essenciais para garantir que seu pedido seja lembrado entre as páginas, para que possamos processá-lo adequadamente.<br><br> </li> <li>     Cookies relacionados a pesquisas<br><br> Periodicamente, oferecemos pesquisas e questionários para fornecer informações interessantes, ferramentas úteis ou para entender nossa base de usuários com mais precisão. Essas pesquisas podem usar cookies     para lembrar quem já participou numa pesquisa ou para fornecer resultados precisos após a alteração das páginas.<br><br> </li> <li>     Cookies relacionados a formulários<br><br> Quando você envia dados por meio de um formulário como os encontrados nas páginas de contacto ou nos formulários de comentários, os cookies podem ser configurados para lembrar os detalhes do usuário     para correspondência futura.<br><br> </li> <li>     Cookies de preferências do site<br><br> Para proporcionar uma ótima experiência neste site, fornecemos a funcionalidade para definir suas preferências de como esse site é executado quando você o usa. Para lembrar suas preferências, precisamos     definir cookies para que essas informações possam ser chamadas sempre que você interagir com uma página for afetada por suas preferências.<br> </li> </ul> <h10>Cookies de Terceiros</h10> <p>Em alguns casos especiais, também usamos cookies fornecidos por terceiros confiáveis. A seção a seguir detalha quais cookies de terceiros você pode encontrar através deste site.</p> <ul> <li>     Este site usa o Google Analytics, que é uma das soluções de análise mais difundidas e confiáveis ​​da Web, para nos ajudar a entender como você usa o site e como podemos melhorar sua experiência. Esses cookies podem rastrear itens como quanto tempo     você gasta no site e as páginas visitadas, para que possamos continuar produzindo conteúdo atraente. </li> </ul> <p>Para mais informações sobre cookies do Google Analytics, consulte a página oficial do Google Analytics.</p> <ul> <li>     As análises de terceiros são usadas para rastrear e medir o uso deste site, para que possamos continuar produzindo conteúdo atrativo. Esses cookies podem rastrear itens como o tempo que você passa no site ou as páginas visitadas, o que nos ajuda a entender     como podemos melhorar o site para você.</li> <li>     Periodicamente, testamos novos recursos e fazemos alterações subtis na maneira como o site se apresenta. Quando ainda estamos testando novos recursos, esses cookies podem ser usados ​​para garantir que você receba uma experiência consistente enquanto     estiver no site, enquanto entendemos quais otimizações os nossos usuários mais apreciam.</li> <li>     À medida que vendemos produtos, é importante entendermos as estatísticas sobre quantos visitantes de nosso site realmente compram e, portanto, esse é o tipo de dados que esses cookies rastrearão. Isso é importante para você, pois significa que podemos     fazer previsões de negócios com precisão que nos permitem analizar nossos custos de publicidade e produtos para garantir o melhor preço possível.</li> <li>     O serviço Google AdSense que usamos para veicular publicidade usa um cookie DoubleClick para veicular anúncios mais relevantes em toda a Web e limitar o número de vezes que um determinado anúncio é exibido para você.<br>     Para mais informações sobre o Google AdSense, consulte as FAQs oficiais sobre privacidade do Google AdSense. </li> <li>     Utilizamos anúncios para compensar os custos de funcionamento deste site e fornecer financiamento para futuros desenvolvimentos. Os cookies de publicidade comportamental usados ​​por este site foram projetados para garantir que você forneça os anúncios     mais relevantes sempre que possível, rastreando anonimamente seus interesses e apresentando coisas semelhantes que possam ser do seu interesse.</li> <li>Vários parceiros anunciam em nosso nome e os cookies de rastreamento de afiliados simplesmente nos permitem ver se nossos clientes acessaram o site através de um dos sites de nossos parceiros, para que possamos creditá-los adequadamente e, quando     aplicável, permitir que nossos parceiros afiliados ofereçam qualquer promoção que pode fornecê-lo para fazer uma compra. </li> </ul> <h10>Compromisso do Usuário</h10>         <p>O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o Juros Compostos Online oferece no site e com caráter enunciativo, mas não limitativo:</p>                 <ul> <li>A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;</li> <li>B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, ou apostas desportivas (ex.:<a href='https://ondeapostar.pt/review/moosh-portugal/'> Moosh</a>), jogos de sorte e azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</li> <li>C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do Juros Compostos Online, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li> </ul>                 <h10>Mais informações</h10> <p>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.</p> <p>Esta política é efetiva a partir de <strong>May</strong>/<strong>2021</strong>.</p>
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