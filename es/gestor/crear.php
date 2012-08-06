<!-- BY SEFIS -->
<!DOCTYPE html> 
<html lang="es"> 

<!-- HEAD -->
<head>
	<?php include("../includes/head.php"); ?>
	
	<!-- CSS STYLES --> 
	<link type="text/css" media="screen" rel="stylesheet" href="../../css/form.css"/> 
	<!-- CSS STYLES --> 
	<link type="text/css" media="screen" rel="stylesheet" href="../../css/form.css"/> 
</head>

<body>
	<!-- CONTAINER -->
	<div id="wraper">
		
		<!-- HEADER AND LOGO -->
		<?php include("../includes/header.php"); ?>
		
		<!-- MENU -->
		<?php include("../includes/navigationGestor.php"); ?>
		
		<!-- CONTENT -->
		<div id="content">
			<div id="innerContent">
				<h1>Gestor de Noticias</h1>
				<h2>Crear</h2>
				
				<div id="createForm">
					<form id="simple-form" action="handler.php" onSubmit="return valida()" method="post" name="formulario">
						<label for="input-1">Titulo</label>
						<input type="text" name="title" id="input-1" />
	 
						<label for="input-2">Fecha</label>
						<input type="text" name="date" id="input-2" />
						
						<label for="input-3">Noticia</label>
						<textarea type="text" rows="10" name="body" id="input-3"></textarea>
	
						<label for="input-4">Fuente</label>
						<input type="text" name="source" id="input-4" />
						
						<label for="input-5">Ámbito</label>
						<input type="text" name="scope" id="input-5" />
						
						<label for="input-6">Nombre Enlace</label>
						<input type="text" name="source" id="input-6" />
						
						<label for="input-7">URL Enlace</label>
						<input type="text" name="source" id="input-7" />
	 
						<input type="submit" name="submit" id="submit" value="Submit" />
					</form>
				</div>
				
			</div>
		</div>
		
		<!-- MARGIN AND FOOT -->
		<?php include("../includes/foot.php"); ?>
	</div>
</body>
</html>