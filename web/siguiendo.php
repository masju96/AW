<!DOCTYPE html>
<html lang="es">
<head>
	<title>Siguiendo - Paper Dreams</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo2.css">
</head>
<body>

	<div class="jumbotron" id="banner">
		<div class="text-left">
			<div class="col-sm-2">
				<img id="logo" alt="logo" src="img/logo1.png">
			</div>
			<div class="col-sm-10">
				<p class="h1">Paper Dreams</p>      
				<p>De tus sueños al papel</p>
			</div>
		</div>
		<div id="breadcum-div">
			<ol class="breadcrumb" id="breadcum">
				<li><a href="index.html">Inicio</a></li>
				<li><a href="miPerfil.html">Mi Perfil</a></li>
				<li class="active">Siguiendo</li>
			</ol>
		</div>
	</div>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="index.html">Inicio</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="categorias.html">Categorías</a></li>
					<li><a href="contacto.html">Contacto</a></li>
					<li><a href="aboutUs.html">About Us</a></li>
				</ul>
				<div class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left input-group-btn" role="search" action="result-busqueda.html">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button id="buscador" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>Buscar</button>
					</form>
				</div>
			</div>
		</div>
	</nav>
  
	<div class="container-fluid text-center">    
		<div class="row content">
			<div class="col-sm-10 text-left"> 
				<div class="panel panel-default" id="bloque-inicio">
					<div class="panel-heading">
						<p class="h3 panel-title">Siguiendo</p>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail efecto-redondo">
									<a href="vistaUsuario.html">
										<img src="img/logo2.png" alt="logo" class="imgP">
										<div class="caption text-center">
											<p>Nombre1</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail efecto-redondo">
									<a href="vistaUsuario.html">
										<img src="img/logo2.png" alt="" class="imgP">
										<div class="caption">
											<p>Nombre2</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail efecto-redondo">
									<a href="vistaUsuario.html">
										<img class="imgP"  alt="" src="img/logo2.png">
										<div class="caption">
											<p>Nombre3</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail efecto-redondo">
									<a href="vistaUsuario.html">
										<img src="img/logo2.png" alt="" class="imgP">
										<div class="caption">
											<p>Nombre4</p>
										</div>
									</a>
								</div>
							</div>
						</div> <!--row-->
						<div class="row">
							<div class="col-sm-12 text-center">
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Prev</button>
									<button type="button" class="btn btn-default">Next<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
								</div>
							</div>
						</div> 
					</div> <!--panel body--> 
				</div> <!---bloque inicio-->
			</div> <!--col-sm-10-->
			<div class="col-sm-2 sidenav">
				<div class="dropdown text-left">
					<p><a href="misObras.html"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Mis obras</a></p>
					<p><a href="misSeguidores.html"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Mis seguidores</a></p>
					<p><a href="miPerfil.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mi perfil</a></p>
				</div>
			</div>
		</div> <!--row content-->
	</div> <!--container-fluid-->

	<footer class="container-fluid text-center">
		<p><a id="color-defecto" href="aboutUs.html">Paper Dreams 2017 - Un proyecto realizado por el grupo Bi-Inestables</a></p>
	</footer>

	<!--Scripts-->
	<script type="text/javascript" src="./js/goTo.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>