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

    <title>Play - Roms Pagina 1</title>
    <link rel="icon" type="text/css" href="imagens/icon roms/roms-icon3.png">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo-play-roms.css" rel="stylesheet">

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
					<li><a id="a4" href="index-nes.php">Nintendo</a></li>
          <li><a id="a" href="index-Msystem.php">Master System</a></li>
          <li><a id="a3" href="index.php">Super Nintendo</a></li>
					<li><a id="a" href="index-gens.php">Mega Drive</a></li>
					<li><a id="a2" href="index-play.php">Playstation 1</a></li>
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
                
                <img src="imagens/roms-imagens/Crash_Bandicoot_1_capa.png" id="size-image" class="img-responsive">
                <span id="letra">Crash Bandicoot</span>
                <a href="https://www.dropbox.com/sh/i1uh5rzxkci86gl/AACsVdOHDElcpE-V6vEFphYRa?dl=0" type="button" id="download" class="btn btn-custom btn-success2 a">Download</a>
              </div>

            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/Crash_Bandicoot_2_capa.jpg" id="size-image" class="img-responsive">
                <span id="letra">Crash Bandicoot 2</span>
                <a href="https://www.dropbox.com/s/5pmnwnk8kihgrny/Crash-Bandicoot-2-Cortex-Strikes-Back-%28PT-BR%29.torrent?dl=0" type="button" id="torrent" class="btn btn-custom btn-success2 a">Torrent</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/Crash_Bandicoot_3_capa.png" id="size-image" class="img-responsive">
                <span id="letra">Crash Bandicoot 3</span>
                <a href="https://www.dropbox.com/s/z70w0fag1592jcj/Crash-Bandicoot-3-Warped-%28PT-BR%29.torrent?dl=0" type="button" id="torrent-fix" class="btn btn-custom btn-success2 a">Torrent</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/Crash_Bandicoot_TR_capa.png" id="size-image" class="img-responsive">
                <span id="letra-sm">Crash Bandicoot Team Racing</span>
                <a href="https://www.dropbox.com/s/99i5fpt1xyb1ngd/Crash-Team-Racing-%28PT-BR%29.torrent?dl=0" type="button" id="torrent-fix-2" class="btn btn-custom btn-success2 a">Torrent</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/Gran_Turismo_2_capa.png" id="size-image" class="img-responsive">
                <span id="letra">Gran Turismo 2</span>
                <a href="https://www.dropbox.com/sh/yn9nv809u9o79ko/AACbe-MEooPxIZLOsFwlxdVta?dl=0" type="button" id="download-fix" class="btn btn-custom btn-success2 a">Download</a>
              </div>
              
            </div>
            <div class="row roms">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="imagens/roms-imagens/Re_3_capa.jfif" id="size-image" class="img-responsive">
                <span id="letra-sm">Resident Evil 3</span>
                <a href="https://www.dropbox.com/s/4yx4tza5il66688/Resident%2BEvil%2B3%2B-%2BNemesis%2B%28BR%29.bin.torrent?dl=0" type="button" id="torrent" class="btn btn-custom btn-success2 a">Torrent</a>
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