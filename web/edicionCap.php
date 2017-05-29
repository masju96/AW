<?php
	
	if(isset($_GET['libro'])){
		$id_libro = $_GET['libro'];
	}
	
?>


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
	<?php
		$pagina_actual="EdiciónCap";
		require_once($_SERVER['DOCUMENT_ROOT'] ."/web/php/funciones/genera_cabecera.php");
	?>

<<<<<<< HEAD

	$pagina_actual="EdiciónCap";

	require_once($_SERVER['DOCUMENT_ROOT'] ."/web/php/funciones/consulta.php");
	require_once($_SERVER['DOCUMENT_ROOT'] ."/web/php/funciones/genera_cabecera.php");

	//Me tiene que venir el ID del libro correspondiente al capitulo
	if(isset($_GET["idLibro"])){

		
		$idLibro = $_GET["idLibro"];

		//Compruebo que ese idLibro corresponde al usuario 
		//con una query...


		if(isset($_GET["idCap"])){
			//No es nuevo

			$idCap = $_GET["idCap"];
		  	$query = 'SELECT usuarios.id FROM usuarios, libros WHERE usuarios.id="'.$_SESSION['usuario_actual'].'" AND id_libro="'.$idLibro.'"';

		  	$consulta 	= 	consulta($query);
			$filas 		= 	$consulta->num_rows;
			
			if($filas==0){
				header("Location: 404Error.php");
				exit;
			} else {


				?>

			<div class="container-fluid text-center">    
			<div class="col-sm-10 text-left"> 
				<div class="panel panel-default">
					<div class="panel-heading">
					<?php 

					$query = 'SELECT titulo FROM libros WHERE id_libro="'.$idLibro.'"';
					$consulta = consulta($query);
					//doy por supuesto que obtengo un resultado único
					$datosConsulta = $consulta->fetch_assoc();



					?>
					<p class="h3 panel-title">Capitulo de <?php echo $datosConsulta["titulo"]?></p>

					<?php 

					$query = 'SELECT * FROM capitulos WHERE id_capitulo="'.$idCap.'"';
					$consulta = consulta($query);
					//doy por supuesto que obtengo un resultado único
					$datosConsulta = $consulta->fetch_assoc();



					?>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 text-left"> 
								<form method="post" action=<?php echo '"php/funciones/guarda_capitulo.php?'; ?> > <!--comprobar eso del &...TODO-->
									<span class="input-group-addon glyphicon glyphicon-text-size">Título del capítulo</span>
									<input type="text" class="form-control" id="titulo" name="title" value=<?php echo '"'.$datosConsulta["titulo"].'"'; ?>/> <!--TODO hacerlo campo obligatorio-->
									<br>
									<span class="input-group-addon glyphicon glyphicon-text-size ">Contenido del capítulo</span>
									<textarea class="form-control" id='editor1' name='editor1' rows="10" value=<?php echo '"'.$datosConsulta["cuerpo"].'"'; ?> ></textarea>
									<input type="hidden" name="id" value=<?php echo '"'.$idCap.'"' ?>/>
									<button type="submit" class="btn btn-warning margen-top">Guardar cambios</button>
								</form>
								<!--Se que esto deberia estar en un .js>
								<script type='text/javascript'>
									CKEDITOR.replace ('editor1');
								</script--> 

							</div>
						</div>
					</div>  
				</div>
			</div>
				<?php

			}

		} else {
			//Es nuevo

		  	$query = 'SELECT usuarios.id FROM usuarios, libros WHERE usuarios.id="'.$_SESSION['usuario_actual'].'" AND id_libro="'.$idLibro.'"';

		  	$consulta 	= 	consulta($query);
			$filas 		= 	$consulta->num_rows;
			
			if($filas==0){
				header("Location: 404Error.php");
			} else {

				?>

			<div class="container-fluid text-center">    
=======
	<br>
	<div class="container-fluid text-center">    
		<form id="cap" action="php/funciones/editar_cap.php" method="POST">
>>>>>>> Juan
			<div class="col-sm-10 text-left"> 
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php 
							require_once($_SERVER['DOCUMENT_ROOT'] ."/web/php/funciones/editar_cap.php");
							// Buscamos el nombre del libro
							$nombre = buscar_nombre_libro($id_libro);
							$fila = $nombre->fetch_object();
						?>
						<p class="h3 panel-title">Libro: <?php echo $fila->titulo;?></p>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 text-left"> 
<<<<<<< HEAD
								<form method="post" action=<?php echo '"php/funciones/guarda_capitulo.php"'; ?>>
									<span class="input-group-addon glyphicon glyphicon-text-size">Título del capítulo</span>
									<input type="text" class="form-control" id="titulo" name="title" placeholder="Escribe aquí el título"/>
									<br>
									<span class="input-group-addon glyphicon glyphicon-text-size ">Contenido del capítulo</span>
									<textarea class="form-control" id='editor2' name='editor1' rows="10" placeholder="Erase una vez que se era..."></textarea>
									<input type="hidden" name="idLibro" value=<?php echo '"'.$idLibro.'"' ?>/>
									<button type="submit" class="btn btn-warning margen-top">Añadir capitulo</button>
								</form>
								<!--Se que esto deberia estar en un .js-->
								<!--script type='text/javascript'>
									CKEDITOR.replace ('editor2');
								</script--> 

=======
								<span class="input-group-addon glyphicon glyphicon-text-size">Título del capítulo</span>
								<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escribe aquí el título"/>
								<br>
								<span class="input-group-addon glyphicon glyphicon-text-size ">Contenido del capítulo</span>
								<textarea class="form-control" id='cuerpo' name='cuerpo' rows="10" placeholder="Erase una vez que se era..."></textarea>
								<input type="hidden" id="id_libro" name="id_libro" value="<?php echo $id_libro?>">
								<button type="submit" class="btn btn-warning margen-top">Guardar cambios</button>
>>>>>>> Juan
							</div>
						</div>
					</div>  
				</div>
			</div>
		</form>
		<?php
			require_once($_SERVER['DOCUMENT_ROOT'] ."/web/php/funciones/genera_bloque_derecha.php");
		?>
	</div>

	<?php 
	require_once($_SERVER['DOCUMENT_ROOT'] ."/web/php/funciones/genera_pie.php");
	?>


	<!--Scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/editarCap.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

</body>
</html>