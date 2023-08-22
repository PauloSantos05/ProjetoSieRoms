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

    <title>Playstation - Home</title>
    <link rel="icon" type="text/css" href="imagens/icon/icon3.png">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo-play.css" rel="stylesheet">

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

				<a href="index-play.php" class="navbar-brand"><span class="img-logo">Playstation</span></a>
			</div><!-- /header -->

			<!-- navbar -->
			<div class="collapse navbar-collapse" id="barra-navegacao">
				<ul class="nav navbar-nav navbar-right">
					<li><a id="a4" href="index-nes.php" class="Fonte-Letra">Nintendo</a></li>
          <li><a id="a" href="index-Msystem.php" class="Fonte-Letra">Master System</a></li>
          <li><a id="a3" href="index.php" class="Fonte-Letra">Super Nintendo</a></li>
					<li><a id="a" href="index-gens.php" class="Fonte-Letra">Mega Drive</a></li>
					<li><a id="a2" href="index-play.php" class="Fonte-Letra">Playstation 1</a></li>
          <li><a id="a5" href="index-play2.php" class="Fonte-Letra">Coming Soon</a></li>
				</ul>

				
			</div><!-- /navbar -->


		</div><!-- container -->
  		
  	</nav><!-- /nav -->

  	<div class="capa">
  		<div class="texto-capa">
        <div>
          <img src="imagens/logo/play-image-download.png" class="imagens-visual">
        </div>
        <br/><br/><br/>
        <a href="https://drive.google.com/open?id=1sE6GdaspHmzbLC3_RQF0H3-tbpNV5i7_" class="btn btn-custom btn-azul btn-md"><span class="glyphicon glyphicon-download"></span> PSX 1.13</a>
        <a href="https://drive.google.com/open?id=19se3ASUxOrLb9GQL_7j7pvfBc46PSV3L" class="btn btn-custom btn-verde btn-md"><span class="glyphicon glyphicon-download"></span> PSX 2.0.5</a>
        <a href="roms-play.php" class="btn btn-custom btn-rosa btn-md"><span class="glyphicon glyphicon-link"></span> Roms</a>
        
        
      </div>
  		
  	</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js" integrity="sha256-ghmTf7XUDqNyD7VnAcX1W0YqD3exkHQZCy0VJCxcrq8=" crossorigin="anonymous"></script>
  </body>
</html>