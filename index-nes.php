<?php 
	session_start();

	if(!isset($_SESSION['email'])) {
		header('location: index-login.html?erro=2');
	}
	
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nes - Home</title>
    <link rel="icon" type="text/css" href="imagens/icon/icon4.png">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo-nes.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  	<nav class="navbar navbar-fixed-top navbar-inverse nav-transparente">
		<div class="container">
			<!-- header -->
			<div class="navbar-header">
				
				<!-- Botao toggle -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
					<span class="sr-only">Altenar navegacao</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>		
				</button>

				<a href="https://www.nintendo.com/" class="navbar-brand"><span class="img-logo">Nes</span></a>
			</div><!-- /header -->

			<!-- navbar -->
			<div class="collapse navbar-collapse" id="barra-navegacao">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index-nes.php" class="Fonte-Letra">Nintendo</a></li>
          <li><a href="index-Msystem.php" class="Fonte-Letra">Master System</a></li>
          <li><a href="index.php" class="Fonte-Letra">Super Nintendo</a></li>
					<li><a href="index-gens.php" class="Fonte-Letra">Mega Drive</a></li>
					<li><a href="index-play.php" class="Fonte-Letra">Playstation 1</a></li>
				</ul>

				
			</div><!-- /navbar -->


		</div><!-- container -->
  		
  	</nav><!-- /nav -->

  
    
    

  	<div class="capa">
  		<div class="texto-capa">
        <div>
          <img src="imagens/logo/nes-image-download2.png" class="imagens-visual">
        </div>
        <br/><br/><br/>
        <a href="https://drive.google.com/file/d/1D69-xffjqv_vDOfddm9_wedmF0Dfm90i/view?usp=sharing" class="btn btn-custom btn-tomato btn-md"><span class="glyphicon glyphicon-download"></span> Mesen</a>
        <a href="https://drive.google.com/file/d/1b6rCuxJTgM-r0QCn2dhOS23E_KTzPJEf/view?usp=sharing" class="btn btn-custom btn-branco btn-md"><span class="glyphicon glyphicon-download"></span> Nestopia</a><br/><br/>
        <a href="roms-nes.php" class="btn btn-custom2 btn-gold btn-md"><span class="glyphicon glyphicon-link"></span> Roms</a>
        
        
      </div>
  		
  	</div>


    




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js" integrity="sha256-ghmTf7XUDqNyD7VnAcX1W0YqD3exkHQZCy0VJCxcrq8=" crossorigin="anonymous"></script>
  </body>
</html>