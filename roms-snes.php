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

    <title>Snes - Roms Pagina 1</title>
    <link rel="icon" type="text/css" href="imagens/icon roms/roms-icon1.jpg">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo-snes-roms.css" rel="stylesheet">

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

				<a href="index.php" class="navbar-brand"><span class="img-logo">Snes</span></a>
			</div><!-- /header -->

			<!-- navbar -->
			<div class="collapse navbar-collapse" id="barra-navegacao">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index-nes.php">Nintendo</a></li>
          <li><a href="index-Msystem.php">Master System</a></li>
          <li><a href="index.php">Super Nintendo</a></li>
					<li><a href="index-gens.php">Mega Drive</a></li>
					<li><a href="index-play.php">Playstation 1</a></li>
				</ul>

				
			</div><!-- /navbar -->


		</div><!-- container -->
  		
  	</nav><!-- /nav -->

  	

    <section id="servicos">
      <div class="container">
        <div class="row">

          <!-- roms -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


            <div class="row roms">
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                <img src="imagens/roms-imagens/mario-world.jpg" id="size-image" class="img-responsive">
                <span id="letra">Super Mario World</span>
                <a href="https://drive.google.com/file/d/1WyYPcap47NVUZFXCQ_Z9ZHH0CgiAIVxX/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>

            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/all-stars.jpg" id="size-image" class="img-responsive">
                <span id="letra">Super Mario All-Stars</span>
                <a href="https://drive.google.com/file/d/1JmPzFZsv4h4Mb4gyp0bC4aZbLN1RpAcn/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/superbomberman1.jpg" id="size-image" class="img-responsive">
                <span id="letra">Super Bomberman 1</span>
                <a href="https://drive.google.com/file/d/1CzOThxDVJfbdRWEqobk4CMzo5hKrWph2/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/ultimate_mortal_kombat_3.jpg" id="size-image" class="img-responsive">
                <span id="letra-sm">Ultimate Mortal Kombat 3</span>
                <a href="https://drive.google.com/file/d/1xWtI2h-d-nuNe2TW5EdixoqmwLVuzk5X/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/superbomberman2.jpg" id="size-image" class="img-responsive">
                <span id="letra">Super Bomberman 2</span>
                <a href="https://drive.google.com/file/d/1i3ZZku1dcR3VxGbDaB7yJOCuLszQOQDx/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/dkc1.jpg" id="size-image" class="img-responsive">
                <span id="letra-sm">Donkey Kong Country 1</span>
                <a href="https://drive.google.com/file/d/1ZiW-EOr6xF1iOYAdEtltiDlXVua5hIWV/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>


            
          </div>

          
        </div>
        
      </div>
    </section>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>