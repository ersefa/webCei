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
			<div id="submenu">
				<h3>Índice</h3>
				<ul>
					<?php
						$sqlScopes  = "select * from scopes order by 'order'";
						$scopesResult = mysql_query($sqlScopes);
						while($row = mysql_fetch_array($scopesResult)) {
							echo '<li><a href="#section'.$row["order"].'">'.$row["title"].'</a></li>';
						}
					?>
				</ul>
			</div>
			<div id="innerContent2">
				<div id="news">
					<h1>Campus de Excelencia Internacional</h1>
					<h2>Noticias</h2>
					<br />
					<?php 
						$sqlScopes  = "select * from scopes order by 'order'";
						$scopesResult = mysql_query($sqlScopes);
						// Bucle exterior para recorrer ámbitos 
						while ($rowScope = mysql_fetch_array($scopesResult)){
							echo '<h3 id="section'.$rowScope["order"].'">'.$rowScope["title"].'</h3>';
						
							$sqlNews  = "select *, DATE_FORMAT(startDate, '%d-%m-%Y') as newStartDate, DATE_FORMAT(endDate, ' - %d-%m-%Y') as newEndDate  from news where scope = " .$rowScope["order"];
							$newsResult = mysql_query($sqlNews);
							while($rowNews = mysql_fetch_array($newsResult)) { 
								echo '<h4>'.$rowNews["title"].'</h4>';
								echo '<b>'.$rowNews["newStartDate"].'</b>';
								echo '<b>'.$rowNews["newEndDate"].'</b>';
								echo '<br /><br />';
								echo $rowNews["body"];
								echo '<br /><br />';
								echo '<b>Ámbito: </b>';
								echo $rowScope["title"];
								echo '. <b> Fuente: </b>';
								echo $rowNews["source"];
								echo '.<br />';
								echo '<b>Enlaces: </b><br /><br /><div id="links">';
								
								$sqlUrl = "select * from links where news = ". $rowNews["id"];
								$urlResultados = mysql_query($sqlUrl);
								while ($url = mysql_fetch_array($urlResultados)){
									echo '<b>'.$url["note"].' </b><a href="'. $url["url"]. '" target="_blank">'.$url["title"]. '</a>';
									echo '<br /><br />';
								}
								echo '</div><br /><br />';
							}
						}
					?>
				</div>
			</div>
		</div>
		
		<!-- MARGIN AND FOOT -->
		<?php include("../includes/foot.php"); ?>
	</div>
</body>

</html>