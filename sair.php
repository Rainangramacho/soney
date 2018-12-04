<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);



?>



<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Our Song</title>
		<link rel = "shortcut icon" type = "imagem/x-icon" href = "imagens/icone_twitter.png"/>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
	button{
     width: 35%;
		 height:40px;
	}
	.jumbotron{
       text-align: center;
	}

	</style>
		
	</head>

	<body>

		
	        
		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	           <a href="index.php">
	          <img src="imagens/icone_twitter.png" style="width:10%"/>
			  </a>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
						<div class="col-md-12">
				    		
			
						</form>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>



	    <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron" >
	        <h1>Our Song</h1>
					<p>Esperamos que você volte em breve!</p>
					<a href="index.php">
						<button type="buttom" class="btn btn-primary">Voltar para a Home page</button>
						
					</a>
	      </div>

	      <div class="clearfix"></div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>