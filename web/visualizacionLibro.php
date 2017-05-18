<!DOCTYPE html>
<html lang="es">
<head>
	<title>Paper Dreams</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo2.css">
	<link rel="stylesheet" href="css/visualizacion.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
	<link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
		      	<li><a href="categorias.html">Obras</a></li>
		      	<li class="active">En el corazón...</li>
	    	</ol>
	  	</div>
	</div>

	<nav class=" header navbar navbar-inverse">
	  	<div class="container-fluid">
	    	<div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    	<span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			    </button>
	      		<a class="navbar-brand" href="./index.html">Inicio</a>
	    	</div>
	    	<div class="collapse navbar-collapse" id="myNavbar">
	      		<ul class="nav navbar-nav">
	        		<li><a href="./categorias.html">Categorias</a></li>
	        		<li><a href="./contacto.html">Contacto</a></li>
	        		<li><a href="./aboutUs.html">About Us</a></li>
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

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-10 text-left">    
				<div class="row">
			  		<img class="col-sm-6 text-left img-responsive center-block" id="portada" alt="" src="img/portadas/portada.png">
			  		<div class="text-center">
			    		<p class="h3"> En el corazón de los que lloran</p>
			    		<div id="sipnopsis">
			    			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo? </p>
			    		</div>
			  		</div> 
			  		<div id="opciones">
				  		<div class="col-sm-2 text-left"> 
				  			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Comenta</button>
				  		</div>
				  		<div class="col-sm-2 text-left">
				  			<button type="button"  id="leer" class="btn btn-primary btn-lg opciones">Leer</button> 
				  		</div>
				  		<div id="estrellas" class="text-center">
							<input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="1" data-size="xs">
				  		</div>
				  	</div>
			    </div> 
				<div class="row">     
					<!-- Contenedor Principal -->
				    <div class="comments-container">
						<p class="h1"> Comentarios </p>
						<ul id="comments-list" class="comments-list">
							<li>
								<div class="comment-main-level">
									<!-- Avatar -->
									<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
									<!-- Contenedor del Comentario -->
									<div class="comment-box">
										<div class="comment-head">
											<p class="comment-name by-author h6"><a href="http://miPerfil.html">Simpah_elEterno</a></p>
											<span>hace 20 minutos</span>
											<span class="fa fa-reply botones-comentario"> </span>
											<span class="fa fa-heart botones-comentario"> </span>
										</div>
										<div class="comment-content">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
										</div>
									</div>
								</div>
								<!-- Respuestas de los comentarios -->
								<ul class="comments-list reply-list">
									<li>
										<!-- Avatar -->
										<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
										<!-- Contenedor del Comentario -->
										<div class="comment-box">
											<div class="comment-head">
												<h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
												<span>hace 10 minutos</span>
												<span class="fa fa-reply botones-comentario"> </span>
												<span class="fa fa-heart botones-comentario"> </span>
											</div>
											<div class="comment-content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
											</div>
										</div>
									</li>
									<li>
										<!-- Avatar -->
										<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
										<!-- Contenedor del Comentario -->
										<div class="comment-box">
											<div class="comment-head">
												<h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
												<span>hace 10 minutos</span>
												<span class="fa fa-reply botones-comentario"> </span>
												<span class="fa fa-heart botones-comentario"> </span>
											</div>
											<div class="comment-content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li>
								<div class="comment-main-level">
									<!-- Avatar -->
									<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
									<!-- Contenedor del Comentario -->
									<div class="comment-box">
										<div class="comment-head">
											<h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
											<span>hace 10 minutos</span>
											<span class="fa fa-reply botones-comentario"> </span>
											<span class="fa fa-heart botones-comentario"> </span>
										</div>
										<div class="comment-content">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<nav class="text-center" aria-label="Page navigation">
					  	<ul class="pagination">
					    	<li>
					      		<a href="#" aria-label="Previous">
					      	  		<span aria-hidden="true">&laquo;</span>
					     	 	</a>
					   	 	</li>
					    	<li><a href="#">1</a></li>
					    	<li><a href="#">2</a></li>
					    	<li><a href="#">3</a></li>
					    	<li><a href="#">4</a></li>
					    	<li><a href="#">5</a></li>
					    	<li>
					      		<a href="#" aria-label="Next">
					        		<span aria-hidden="true">&raquo;</span>
					      		</a>
					    	</li>
					  	</ul>
					</nav>
				</div>
			</div>

			<div class="sidenav col-sm-2 text- center">
				<div class="botones">
			    	<button class="btn btn-default dropdown-toggle engordar redondear" type="button" id="logInButton">
			      		Inicia sesión
			    	</button>
				</div>
				<div class="botones">
			    	<button class="btn btn-default dropdown-toggle engordar redondear" type="button" id="registerButton">
			      		Registrarse
			    	</button>
				</div>
			</div>
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content widget-area ">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<p class=" h4 modal-title">Comenta</p>
					</div>
					<form class="form_comment">
						<div class="modal-body">
							<textarea id="edicion_comentario" placeholder="¿Qué piensas de la historia?"></textarea>
						</div>
						<div class="modal-footer container-fluid">
							<ul>
								<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><span class="fa fa-music"></span></a></li>
								<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><span class="fa fa-video-camera"></span></a></li>
								<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sound Record"><span class="fa fa-microphone"></span></a></li>
								<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><span class="fa fa-picture-o"></span></a></li>
							</ul>
							<button type="submit" class="btn btn-success green"><span class="fa fa-share"></span>Comentar</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div>

	<footer class="footer text-center">
		<p><a id="color-defecto" href="aboutUs.html">Paper Dreams 2017 - Un proyecto realizado por el grupo Bi-Inestables</a></p>
	</footer>

	<!-- scripts -->
	<script src="js/goTo.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/star-rating.js" type="text/javascript"></script>
</body>
</html>