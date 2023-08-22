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

    <title>RetroTime - Home</title>
    <link rel="icon" type="text/css" href="imagens/icon/icon.png">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo-home.css" rel="stylesheet" media="all">

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

				<a class="navbar-brand btn btn-user" data-toggle="modal" data-target="#janela" ><span class="img-logo">Usuario</span></a>
			</div><!-- /header -->
			
			
			<!-- Janela -->
			<div class="modal" id="janela">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Cabeçalho -->
						<div class="modal-header">
							<button type="button" class="Close" data-dismiss="modal" aria-label="close">
								<span>Fechar</span>
							</button>
						
						</div>
						
						<!-- Corpo -->
						<div class="modal-body">
							<h1>Teste</h1>
						</div>
						<!-- Rodapé -->
						<div class="modal-footer">
							Teste2
						</div>
					</div>
				
				</div>
			</div>

			<!-- navbar -->
			<div class="collapse navbar-collapse" id="barra-navegacao">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index-home.php">Home</a></li>
					
					<li><a href="#">Sair</a></li>
          		
          
				</ul>

				
			</div><!-- /navbar -->


		</div><!-- container -->
  		
  	</nav><!-- /nav -->
	  
		<div class="capa">
			<div class="texto-capa">
			<div>
			  <img src="imagens/logo/links_logo.png" class="imagens-visual"><span style="color: transparent">Links</span>
			</div>
			<br/><br/><br/>
			<a href="index-nes.php" class="btn btn-custom btn-color-nintendo btn-md"><span class="glyphicon glyphicon-link"></span>  Nintendo</a>
			<a href="index-Msystem.php" class="btn btn-custom btn-color-master_system btn-md"><span class="glyphicon glyphicon-link"></span> Master System</a><br/><br/>
			<a href="index.php" class="btn btn-custom2 btn-color-supernintendo btn-md"><span class="glyphicon glyphicon-link"></span> Super Nintendo</a>
			<a href="index-gens.php" class="btn btn-custom2 btn-color-megadrive btn-md"><span class="glyphicon glyphicon-link"></span> Mega Drive</a><br/><br/>
			<a href="index-play.php" class="btn btn-custom2 btn-color-playstationone btn-md"><span class="glyphicon glyphicon-link"></span> Playstation 1</a>



		  </div>
  		
  		</div>
	  
	<footer>
		
	  	<nav class="navbar navbar-fixed-bottom navbar-inverse nav-transparente-bottom">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao2">
					<span class="sr-only">Altenar navegacao</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>		
			</button>
			<div class="collapse navbar-collapse" id="barra-navegacao2">
				<ul class="nav navbar-nav navbar-right">
					<li><a id="a1" href="#"><span data-toggle="tooltip" data-placement="right" title="teste"><img src="imagens/icon/facebook-icon2.png" style="width: 16px;"> Facebook</span></a></li>
					
          			<li><a id="a2" href="#"><span><img src="imagens/icon/twitter-icon2.png" style="
						width: 16px;"> Twitter</span></a></li>
          			
          
				</ul>
			</div>	
		</nav>
	</footer>

    




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	  
	<!-- JavaScript -->
	<script type="text/javascript">
	  $(function) {
		$('[data-toggle="tooltip"]').tooltip()
	}
	</script>
	  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js" integrity="sha256-ghmTf7XUDqNyD7VnAcX1W0YqD3exkHQZCy0VJCxcrq8=" crossorigin="anonymous"></script>
  </body>
</html>