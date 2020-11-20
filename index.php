<?php
	//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
    session_start();
?>


<!-- fonte FOOTER https://www.codingnepalweb.com/2020/08/social-media-buttons-with-tooltip-on-hover.html -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Vanessa Lopes">
         <!--Fonts & Icons <link rel="stylesheet" type="text/css" href="assets/css/style.css">-->
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <!--Fonts & Icons -->
	<link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <link
      href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap"
      rel="stylesheet"
    />
    <title> Escolinha de Futebol Coração Valente </title>
    </head>
    <body>

    <header>
     <nav class="navbar">
			<div class="nav-buttons-right">
				<a class="nav-button glow" href="#home">Início</a>
				<a class="nav-button glow" href="sobre.php">Sobre</a>
				<a class="nav-button glow" href="view/faleconosco.php">Fale Conosco</a>
				<a class="nav-button glow" href="view/galeriafotos.php">Galeria de Imagem</a>
                <a class="nav-button glow" href="view/parceiros.php">Parceiros</a>
                <a class="nav-button glow" href="/login.php">Entrar</a>
			</div>
		</nav>
      </header>

     
<!--  home -->
  <section>
  
  <section id="home">
		<div id="main-title-content">
			<div class="glow">
            <img src="assets/img/assets_Logo.png">
							
			</div>
        </div>
           
    </section>
    <div class="text-block">
      <h1 class="text">Bem Vindo ao Site, <br><br>
     Matricule seu Filho=)</h1>
    </h1>
    </div>
<style> 

.text {
      color: #09482d;
      font-family: "Russo One", sans-serif;
      font-size: 20px;
      letter-spacing: 9px;
      /* text-transform: uppercase;  deixa o texto tudo em maiusculo*/ 
      position: relative;
      padding: 2rem 1rem;
      opacity: 0;
      animation: fadeInText 0s 1.1s both;
      margin-top:-20px;
      margin-left:500px;
     
    }

    .text-block {
      position: relative;
      overflow: hidden;
      margin-top:-200px;
      
      
    }

    .text-block:after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #00ff22;
      transform: translateX(-100%);
      animation: enlargeBlock 0.5s 0.6s both, revealBlock 0.5s 1.1s both;
    }

    @keyframes fadeInText {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    @keyframes enlargeBlock {
      from {
        width: 0%;
      }
      to {
        width: 100%;
      }
    }

    @keyframes revealBlock {
      from {
        transform: translateX(0);
      }
      to {
        transform: translateX(100%);
      }
    }

</style>



   <footer>

<div class="menu"> 
<ul style="list-style: none;"> 
<li><a  href="#home" class="over">Inicio</a>  </li>
<li> <a  href="produtos.php" class="over1"> Sobre </a> </li>
<li>  <a  href="#" class="over2"> Fale Conosco </a>  </li>
<li> <a  href="#" class="over3">  Galeria de Imagem </a></li>
<li><a  href="#" class="over4">Parceiros</a>  </li>
</ul>

</div> 
<div class="menufaq"> 
<ul style="list-style: none;"> 
<li><a  href="#home" class="support">Suporte</a>  </li>
<li> <a  href="produtos.php" class="faq"> FAQ</a> </li>
<li>  <a  href="#" class="phone"> Telefones </a>  </li>
<li> <a  href="#" class="email">  E-Mail</a></li>
</ul>
</div> 


<div class="wrapper">
      <div class="icon facebook">
        <div class="tooltip">
Facebook</div>
<span><i class="fab fa-facebook-f"></i></span>
    </div>

<div class="icon instagram">
        <div class="tooltip">
Instagram</div>
<span><i class="fab fa-instagram"></i></span>
      </div>

<div class="icon youtube">
        <div class="tooltip">
YouTube</div>
<span><i class="fab fa-youtube"></i></span>
      </div>
</div>


<div class="direito">
			<a href="#home"><i class="arrow"></i></a>
		</div>
		<div>
			Coração Valente | Todo Direito Reservado - 2020
			
		</div> 
	</footer>
    </body>
</html>

