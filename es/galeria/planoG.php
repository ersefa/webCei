<!-- BY SEFIS -->
<!DOCTYPE html> 
<html lang="es"> 

<!-- HEAD -->
<head>
	<?php include("../includes/head.php"); ?>

	<!-- GOOGLE MAPS --> 
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
	  function initialize() {
		var latlng = new google.maps.LatLng(40.446327, -3.727541);
		var myOptions = {
		  zoom: 15,
		  center: latlng,
		  mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(document.getElementById("map"), myOptions);
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
				<h1>Callejero</h1>
				
				<!-- GOOGLE MAP -->
				<div id="map"></div> 
				<script>initialize();</script>
			</div>
		</div>
		
		<!-- MARGIN AND FOOT -->
		<?php include("../includes/foot.php"); ?>
	</div>
</body>

</html>