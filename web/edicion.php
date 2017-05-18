<!DOCTYPE html>
<html lang="es">
<head>
	<title>Paper Dreams</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo2.css">
	<link rel="stylesheet" href="css/estilobusq.css">
	<link rel="stylesheet" href="css/edicionStyle.css">
</head>
<body>

	<div class="jumbotron" id="banner">
		<div class="text-left">
			<div class="col-sm-2">
				<img id="logo" alt="" src="img/logo1.png">
			</div>
			<div class="col-sm-10">
				<p class="h1">Paper Dreams</p>      
				<p>De tus sueños al papel</p>
			</div>
		</div>
		<div id="breadcum-div">
			<ol class="breadcrumb" id="breadcum" >
				<li><a href="index.html">Inicio</a></li>
				<li><a href="misObras.html">Mis Obras</a></li>
				<li class="active">Edición</li>
			</ol>
		</div>
	</div> <!--jumbotron-->

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
					<form class="navbar-form navbar-left input-group-btn" role="search">
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
		<div class="col-sm-10 text-left"> 
			<div class="panel panel-default margen-top">
				<div class="panel-heading">
					<p class="h3 panel-title">Edición</p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-3 text-center">
							<img class="img-edicion" alt="" src="img/portadas/portada.png">
							<button type="button" class="btn btn-info margen-top">Editar imagen</button>
						</div>
						<div class="col-sm-9 text-left"> 
							<form method="post" action="">
								<span class="input-group-addon glyphicon glyphicon-text-size">Título</span>
								<input type="text" class="form-control" id="titulo" name="title" placeholder="Escribe aquí el título"/>
								<br>
								<span class="input-group-addon glyphicon glyphicon-text-size ">Sinopsis</span>
								<textarea  class="form-control" id='editor1' name='editor1' rows="10" placeholder="Erase una vez que se era..."></textarea>
							</form>
							<script type='text/javascript'>
								CKEDITOR.replace ('editor1');
							</script> 
							<button type="button" onclick="window.location.href='edicionCap.html'" class="btn btn-info margen-top"> Añadir capítulo</button>
							<button type="button" class="btn btn-info margen-top" data-toggle="collapse" data-target="#lCap">Desplegar lista de capitulos</button>
							<div id="lCap" class="collapse margen-top">
								<div class="list-group">
									<a href="edicionCap.html" class="list-group-item">
										<p class="h4 list-group-item-heading">Capitulo 1</p>
										<p class="list-group-item-text">Erase una vez que se era... la historia comienza y empieza la aventura.</p>
									</a>
									<a href="edicionCap.html" class="list-group-item">
										<p class="h4 list-group-item-heading">Capitulo 2</p>
										<p class="list-group-item-text">Nuestro viandante llega a Asturias, donde pasará un fin de semana de locura.</p>
									</a>
								</div>
							</div> 
						</div>
					</div>
				</div>  
			</div>
			<div class="col-sm-12 text-center">
			<button type="button" class="btn btn-warning margen-bottom">Guardar cambios realizados</button>
			</div>
		</div>
		<div class="col-sm-2 sidenav">
			<div class="dropdown text-left">
				<p><a href="misObras.html"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Mis obras</a></p>
				<p><a href="misSeguidores.html"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Mis seguidores</a></p>
				<p><a href="miPerfil.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mi perfil</a></p>
			</div>
		</div>
	</div>

	<footer class="container-fluid text-center">
		<p><a id="color-defecto" href="aboutUs.html">Paper Dreams 2017 - Un proyecto realizado por el grupo Bi-Inestables</a></p>
	</footer>

	<!--Scripts-->
	<script type="text/javascript" src="js/goTo.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

</body>
</html>