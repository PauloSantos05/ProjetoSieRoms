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

    <title>Nes - Roms Pagina 1</title>
    <link rel="icon" type="text/css" href="imagens/icon roms/roms-icon4.png">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo-nes-roms.css" rel="stylesheet">

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

				<a href="index-nes.php" class="navbar-brand"><span class="img-logo">Nes</span></a>
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
                
                <img src="imagens/roms-imagens/SMB1_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra">Super Mario Bros 1</span>
                <a href="https://drive.google.com/file/d/1NWzDOf4PPsxcVod4dqtKrzOpm7fY5cuS/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>

            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/SMB2_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra">Super Mario Bros 2</span>
                <a href="https://drive.google.com/file/d/1qLWOK0q7f_M8ifuu9l22O29IsgbYZuPe/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/SMB3_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra">Super Mario Bros 3</span>
                <a href="https://drive.google.com/file/d/1rEdmAL4ysr2WXz8wZtCv_5X-yqgXOPCm/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/Battletoads_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra-sm">Battletoads</span>
                <a href="https://drive.google.com/file/d/1Br86EpBCsz1f6ym1WFM7ah05pV47nO27/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/MegaMan_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra">MegaMan</span>
                <a href="https://drive.google.com/file/d/1mJIrQDn0fclnAMXiV10wkw416s9dzpSs/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/DK_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra-sm">Donkey Kong</span>
                <a href="https://drive.google.com/file/d/1aHuNWMmAbg1Xb1gMVuyignovzp-xT5iO/view?usp=sharing" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
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