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

    <title>Master System - Roms Pagina 1</title>
    <link rel="icon" type="text/css" href="imagens/icon roms/roms-icon5.png">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo-sega8-roms.css" rel="stylesheet">

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

				<a href="index-Msystem.php" class="navbar-brand"><span class="img-logo">Gens</span></a>
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
                
                <img src="imagens/roms-imagens/Sonic1MS_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra">Sonic the Hedgehog 1</span>
                <a href="https://drive.google.com/file/d/1DPWw1_UUlDNqnt0ca5vAMUS4B9Df65xi/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>

            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/Sonic2MS_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra">Sonic the Hedgehog 2</span>
                <a href="https://drive.google.com/file/d/17pmPw9HQl3vIrA1wHXVcNRKrOVO8ugRF/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/SonicCHMS_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra">Sonic the Hedgehog Chaos</span>
                <a href="https://drive.google.com/file/d/1lUREI3KGMOE2C51UG1koF3idDPCYdMJr/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/alexkidd_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra-sm">Alex Kidd</span>
                <a href="https://drive.google.com/file/d/1LZN6IrVvSOTjobGimUYO1EZ3lQ5Zf9Gk/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/MKMS_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra">Mortal Kombat</span>
                <a href="https://drive.google.com/file/d/1xIvBJGmWEnYyx5MjFg-p2elG4pFDO0OW/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/SonicTTMS_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra-sm">Sonic Triple Trouble</span>
                <a href="https://drive.google.com/file/d/1YgBI1j7fHMo_yLMe5yv3yDTsiEjHLRoh/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
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