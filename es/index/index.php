<!-- BY SEFIS -->
<!DOCTYPE html> 
<html lang="es"> 

<!-- HEAD -->
<head>
	<?php include("../includes/head.php"); ?>
	
	<!-- JQUERY CYCLE -->
	<script type="text/javascript" src="../../js/cycle/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/cycle/jquery.cycle.all.js"></script>
	
	<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.oneSmOnly = true; 
		myMenu.markCurrent = false;
		myMenu.remember = true;  
		myMenu.speed = 3;        
		myMenu.init();
		myMenu.collapseAll();
	};
	// ]]>
	</script>

	<script type="text/javascript">
	$(document).ready(function() {
		$('.indexSlideshow').cycle({
			fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		});
	});
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
				<h1>Campus de Excelencia Internacional</h1>
				<h2>La Energía de la Diversidad</h2>
				<!-- <p>Bienvenidos a la página web de la propuesta de Campus de Excelencia Internacional Campus de Moncloa:
				la Energía de la Diversidad, presentado por las Universidades Complutense y Politécnica de Madrid.</p>
				<p>El proyecto aspira a convertir el Campus de Moncloa en un referente internacional en investigación y formación en las cinco áreas escogidas, haciendo el propio Campus de Moncloa un espacio urbano, saludable y sostenible, integrado en la imagen internacional de la ciudad de Madrid.</p>-->
				<div id="indexLogos">
					<img src="../../images/logos/isciii.png" width="40" />
					<img src="../../images/logos/commadrid.png" width="40" />
					<img src="../../images/logos/ipce.png" width="40" />
					<img src="../../images/logos/aemet.png" width="40" />
					<img src="../../images/logos/inia.png" width="40" />
					<img src="../../images/logos/ciemat.png" width="40" />
					<img src="../../images/logos/clinico.png" width="40" />
					<img src="../../images/logos/csic.png" width="40" />
					<img src="../../images/logos/madrid.png" width="40" />
				</div>
				<div id="indexslide" class="indexSlideshow">
					<img src="../../images/indexGallery/1b.jpg" width="650"  />
					<img src="../../images/indexGallery/2b.jpg" width="650" />
					<img src="../../images/indexGallery/3b.jpg" width="650" />
					<img src="../../images/indexGallery/4b.jpg" width="650"  />
				</div>
			</div>
		</div>
		
		<!-- MARGIN AND FOOT -->
		<?php include("../includes/foot.php"); ?>
	</div>
</body>
</html>