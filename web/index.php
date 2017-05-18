<!DOCTYPE html>
<html lang="es">
<head>
	<title>Paper Dreams</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo2.css">
</head>
<body>
	<div class="jumbotron" id="banner">
		<div class="text-left">
			<div class="col-sm-2">
				<img id="logo" class="img-responsive" alt="" src="img/logo1.png">
			</div>
			<div class="col-sm-10">
				<p class="h1">Paper Dreams</p>      
				<p>De tus sueños al papel</p>
			</div>
		</div>
		<div id="breadcum-div">
			<ol class="breadcrumb" id="breadcum">
				<li class="active">Inicio</li>
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
				<a class="navbar-brand actual" href="#">Inicio</a>
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
				<div class="jumbotron" id="bloque-inicio">
					<p class="h1" id="text-bloque-inicio">Escritores, Diseñadores!</p>
					<p id="par-bloque-inicio">Empieza a escribir desde ahora mismo. Sube tus creaciones y demuestra a la comunidad lo que vales</p>
					<p>
						<a class="btn btn-primary btn-lg" href="edicion.html" role="button">Escribe</a>
						<a class="btn btn-primary btn-lg" href="edicionFoto.html" role="button">Dibuja</a>
					</p>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<p class="panel-title h3">Más valorados</p>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail efecto-redondo">
								<a href="visualizacionLibro.html">
								<img src="img/logo2.png" alt="" class="imgP img-responsive">
								<div class="caption">
								<p>Valorado1</p>
								</div>
								</a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail efecto-redondo">
									<a href="visualizacionLibro.html">
										<img src="img/logo2.png" alt="" class="imgP img-responsive">
										<div class="caption">
											<p>Valorado2</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail efecto-redondo">
									<a href="visualizacionLibro.html">
										<img class="imgP img-responsive" alt="" src="img/logo2.png">
										<div class="caption">
											<p>valorado3</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail efecto-redondo">
									<a href="visualizacionLibro.html">
										<img src="img/logo2.png" alt="" class="imgP img-responsive">
										<div class="caption">
											<p>valorado4</p>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-center">
								<div class="btn-group" role="group" aria-label="...">
									<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Prev</button>
									<button type="button" class="btn btn-default">Next<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
								</div>
							</div>
						</div>
					</div> <!--panel-body-->
				</div> <!--panel panel-default-->
			</div> <!--col-sm-10 text-left-->
			<div class="col-sm-2 sidenav">
				<div class="row">
					<button class="btn btn-default dropdown-toggle engordar redondear" type="button" id="logInButton">
						Inicia sesión
					</button>
				</div>
				<div class="row">
					<button class="btn btn-default dropdown-toggle engordar redondear" type="button" id="registerButton">
						Regístrarse
					</button>
				</div>
			</div> <!--col-sm-2 sidenav-->
		</div> <!--row-->
	</div> <!--container-fluid-->

	<footer class="container-fluid text-center">
		<p><a id="color-defecto" href="aboutUs.html">Paper Dreams 2017 - Un proyecto realizado por el grupo Bi-Inestables</a></p>
	</footer>

	
		<!--//BLOQUE COOKIES-->
	<div id="barraaceptacion" style="display: block;">
	    <div class="inner">
	    	<a href="javascript:void(0);" class="ok" onclick="PonerCookie();"><b>OK</b></a> |  
	        Solicitamos su permiso para obtener datos estadísticos de su navegación en esta web, en cumplimiento del Real 
	        Decreto-ley 13/2012. Si continúa navegando consideramos que acepta el uso de cookies.
	    </div>
	</div>
	 
	<script>
	function getCookie(c_name){
	    var c_value = document.cookie;
	    var c_start = c_value.indexOf(" " + c_name + "=");
	    if (c_start == -1){
	        c_start = c_value.indexOf(c_name + "=");
	    }
	    if (c_start == -1){
	        c_value = null;
	    }else{
	        c_start = c_value.indexOf("=", c_start) + 1;
	        var c_end = c_value.indexOf(";", c_start);
	        if (c_end == -1){
	            c_end = c_value.length;
	        }
	        c_value = unescape(c_value.substring(c_start,c_end));
	    }
	    return c_value;
	}
	 
	function setCookie(c_name,value,exdays){
	    var exdate=new Date();
	    exdate.setDate(exdate.getDate() + exdays);
	    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	    document.cookie=c_name + "=" + c_value;
	}
	 
	if(getCookie('tiendaaviso')!="1"){
	    document.getElementById("barraaceptacion").style.display="block";
	}
	function PonerCookie(){
	    setCookie('tiendaaviso','1',365);
	    document.getElementById("barraaceptacion").style.display="none";
	}
	</script>
<!--//FIN BLOQUE COOKIES-->

	<!--Scripts-->
	<script type="text/javascript" src="js/goTo.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</body>
</html>