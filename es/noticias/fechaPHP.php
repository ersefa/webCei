<?php
	/* Archivo de Login PHP */

	session_start(); // Iniciar sesión
	
	/* Configuración global para BBDD */	
	include('../../php/config.php');
	
	$config = new Config();
	
	$_SESSION["dbadress"] = $config->getDBadress();
	$_SESSION["dbname"] = $config->getDBname();
	$_SESSION["dbuser"] = $config->getDBuser();
	$_SESSION["dbpwd"] = $config->getDBpwd();
	
	
	$error = false;
	
	/* Inicio de conexión con la BBDD */	
	$con = mysql_connect($_SESSION["dbadress"], $_SESSION["dbuser"], $_SESSION["dbpwd"]);
	if (!$con) {
		$errorMsg = "Could not connect: " . mysql_error();
		$error = true;
	}
	mysql_select_db($_SESSION["dbname"],$con);
	
	/* Parametros recibidos desde el formulario */
	/* $user = $_POST["user"];
	$password = $_POST["pwd"]; */
		
	
	
	/* Instrucciones SQL para las diversas peticiones de datos */
	$sqlNews  = "SELECT Id FROM News";
	$resultNews = mysql_query($sqlNews);
	$_SESSION["newsId"] = $resultNews;
	
?>

<!-- BY SEFIS -->
<!DOCTYPE html> 
<html lang="es"> 

<!-- HEAD -->
<head>
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
				<?php 
					foreach ($_SESSION["newsId"] as $value) {
						echo "Valor: $value <br />\n";
					}
				?>
			</div>
		</div>
		
		<!-- MARGIN AND FOOT -->
		<?php include("../includes/foot.php"); ?>
	</div>
</body>

</html>