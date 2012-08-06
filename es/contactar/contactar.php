<!-- BY SEFIS -->
<!DOCTYPE html> 
<html lang="es"> 

<!-- HEAD -->
<head>
	<!-- CSS STYLES --> 
	<link type="text/css" media="screen" rel="stylesheet" href="../../css/form.css"/> 
	
	<?php include("../includes/head.php"); ?>
	
	<script>
		function valida(){ 
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var address = document.formulario.email.value;
		var errorDiv = document.getElementById("contactError");
		
		//valido nombre 
		if (document.formulario.nombre.value.length==0){ 
			errorDiv.innerHTML = "<p style='font-size: 1.3em; color:#990011'>" + "Debe introducir su nombre." + "</p>";
			document.formulario.nombre.focus();
			return false; 
		} 
		
		//valido email
		if (document.formulario.email.value.length==0){ 
			errorDiv.innerHTML = "<p style='font-size: 1.3em; color:#990011'>" + "Tiene que escribir su email" + "</p>";
			document.formulario.email.focus();
			return false;
		}  

		if(reg.test(address) == false) {
			errorDiv.innerHTML = "<p style='font-size: 1.3em; color:#990011'>" + "El email introducido no es correcto" + "</p>";
			document.formulario.email.focus();
			return false;
		}
		
		
		//valido asunto
		if (document.formulario.asunto.value.length==0){ 
			errorDiv.innerHTML = "<p style='font-size: 1.3em; color:#990011'>" + "Tiene que escribir el asunto" + "</p>";
			document.formulario.asunto.focus();
			return false; 
		 } 
		
		//valido mensaje
		if (document.formulario.mensaje.value.length==0){ 
			errorDiv.innerHTML = "<p style='font-size: 1.3em; color:#990011'>" + "Tiene que escribir el cuerpo del mensaje" + "</p>";
			document.formulario.mensaje.focus();
			return false; 
		} 

		//el formulario se envia 
		/* document.formulario.submit(); */
		return true;
	} 
	</script>

</head>

<body>
	<!-- CONTAINER -->
	<div id="wraper">
		
		<!-- HEADER AND LOGO -->
		<?php include("../includes/header.php"); ?>
		
		<!-- MENU -->
		<?php include("../includes/navigationEs.php"); ?>
		
		<!-- CONTENT -->
		<div id="content">
			<div id="innerContent">
				<h1>¿Alguna pregunta?</h1>
				<div id="contactLeft">
					<h3>Si desea más información acerca de la documentación en este sitio web, por favor contacte con nosotros mediante este formulario o envíenos un e-mail a:<br/><br/>
					<a href="mailto:cei-moncloa@rect.ucm.es">cei-moncloa@rect.ucm.es</a></h3>
					<div id="contactError">
					</div>
				</div>
				<div id="form">
					<form id="simple-form" action="handler.php" onSubmit="return valida()" method="post" name="formulario">
						<label for="input-1">Nombre</label>
						<input type="text" name="nombre" id="input-1" />
	 
						<label for="input-2">E-mail</label>
						<input type="text" name="email" id="input-2" />
						
						<label for="input-3">Asunto</label>
						<input type="text" name="asunto" id="input-3" />
						
						<label for="input-5">Mensaje</label>
						<textarea type="text" rows="10" name="mensaje" id="input-4"></textarea>
	 
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