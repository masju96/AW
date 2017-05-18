<!DOCTYPE html>
<html lang="es">
<head>
	<title>Mi Perfil - Paper Dreams</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/miperfil.css">
</head>

<body>

    <div class="jumbotron" id="banner">
		<div class="text-left">
			<div class="col-sm-2">
				<img id="logo" alt="logo" class="img-responsive"   src="img/logo1.png">
			</div>
			<div class="col-sm-10">
			<p class="h1">Paper Dreams</p>      
				<p>De tus sueños al papel</p>
			</div>
		</div>
		<div id="breadcum-div">
			<ol class="breadcrumb" id="breadcum" >
				<li><a href="index.html">Inicio</a></li>
				<li class="active">Mi Perfil</li>
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

    <!--Perfil-->
    <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-10 text-left"> 
                <div class="jumbotron" id="bloque-inicio">
                   <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
								<img class="img-responsive img-circle" src="img/perfil.jpg" width="200" height="200" alt="Foto de Perfil"/>
                            </div>
                            <div class="col-sm-7">
                                <p class="h2" id="nombre">Paco Pérez</p>
                                <p id="datos">pacop@domain.com <br>
                                Barcelona<br>
                                España</p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <p class="descripcion">Mi nombre es Paco, tengo 30 años. Me encanta leer y cuidar de mi gato.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 sidenav">
              <div class="text-center">
                  <div class="dropdown text-left">
                      <p><a href="misObras.html"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Mis obras</a></p>
                      <p><a href="misSeguidores.html"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Mis seguidores</a></p>
                      <p><a href="siguiendo.html"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Siguiendo</a></p>
                  </div>
              </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
		<p><a id="color-defecto" href="aboutUs.html">Paper Dreams 2017 - Un proyecto realizado por el grupo Bi-Inestables</a></p>
    </footer>
	
	<!--Script-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>