<?
	session_start(); 

	$asunto = ($_POST['asunto']); 
	$cuerpo = ($_POST['mensaje']);
	//$destinatario  =  "cei-moncloa@rect.ucm.es"; 
	$destinatario = "ersefa@gmail.com";
	$copia_oculta = "abanet@pas.ucm.es";
	
	//para el envío en formato HTML 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	//dirección del remitente 
	$headers .= "From: " . ($_POST["nombre"]);
	$headers .= "<" . $_POST['email'] . ">\r\n";
	$headers .= "Bcc: " . $copia_oculta . "\r\n";
	$headers .= "Reply-To: " . $_POST["email"] . "\r\n";
	$headers .= "Return-Path: " . $_POST["email"];

	$mailsent = mail($destinatario,$asunto,$cuerpo,$headers);
	
	
	if ($mailsent) {
		$_SESSION['mailSent'] = true;
	} else {
		$_SESSION['mailSent'] = false;
	}
?>

<!-- BY SEFIS -->
<!DOCTYPE html> 
<html lang="es"> 

<!-- HEAD -->
<head>
	<!-- CSS STYLES --> 
	<link type="text/css" media="screen" rel="stylesheet" href="../../css/form.css"/> 
	
	<?php include("../includes/head.php"); ?>

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
				<h3>Si desea más información acerca de la documentación en este sitio web, por favor contacte con nosotros mediante este formulario o envíenos un e-mail a:<br/><br/>
				<a href="mailto:cei-moncloa@rect.ucm.es">cei-moncloa@rect.ucm.es</a></h3><br/><br/>
				<?php if ($_SESSION['mailSent']) { ?>
					<p style='text-align:center; font-size: 1.3em; color:#009900'>Gracias, su mensaje ha sido enviado correctamente.</p>
				<?php } else  { ?>
					<p style='text-align:center; font-size: 1.3em; color:#990011'>Lo sentimos, su mensaje no ha podido enviarse.</p>
				<?php } ?>
			</div>
		</div>
		
		<!-- MARGIN AND FOOT -->
		<?php include("../includes/foot.php"); ?>
	</div>
</body>

</html>