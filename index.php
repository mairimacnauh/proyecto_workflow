<!DOCTYPE html>
<html lang="en">
<head>
	<title>Este es el inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.jumbotron {
		background:  #2471a3;
		color: #fff;
		padding: 20px 0;
	}
</style>
<body>
	<section class="jumbotron">
		<div class="container">
			<h1>Proceso Academico de Inscripción de las Facultades</h1>
		</div>
	</section>
	<header>  
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">       
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="http://www.umsa.bo/web/guest/">UMSA</a>
				</div>
			</div>
		</nav>
	</header>
	<div class="container">
	  <h2>Login</h2>
	  <form class="form-horizontal" method="post" action="bandeja.php">
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="email">Usuario:</label>
	      <div class="col-sm-10">
	        <input type="text" name="usuario" class="form-control" >
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
	      <div class="col-sm-10">          
	        <input name="clave" type="password" class="form-control" id="pwd" placeholder="Enter password">
	      </div>
	    </div>
	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <button name='enviar' value='Iniciar' type="submit" class="btn btn-default">INICIAR</button>
	      </div>
	    </div>
	  </form>
	</div>
</body>
</html>