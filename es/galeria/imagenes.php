<!-- BY SEFIS -->
<!DOCTYPE html> 
<html lang="es"> 

<!-- HEAD -->
<head>
	<?php include("../includes/head.php"); ?>

	<!-- Script SlideShow2 -->
	<link rel="stylesheet" type="text/css" href="../../js/slideshow/css/slideshow.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../../js/slideshow/css/lightbox.css" media="screen" />

	<script type="text/javascript" src="../../js/slideshow/js/mootools.js"></script>
	<script type="text/javascript" src="../../js/slideshow/js/slideshow.js"></script>
	<script type="text/javascript" src="../../js/slideshow/js/lightbox.js"></script>
	<script type="text/javascript">		
	//<![CDATA[
	  window.addEvent('domready', function(){
		var data = {
		  '1.jpg': { caption: 'Foto 1' }, 
		  '2.jpg': { caption: 'Foto 2' }, 
		  '3.jpg': { caption: 'Foto 3' }, 
		  '4.jpg': { caption: 'Foto 4' },
		  '5.jpg': { caption: 'Foto 5' },
		  '6.jpg': { caption: 'Foto 6' },
		  '7.jpg': { caption: 'Foto 7' },
		  '8.jpg': { caption: 'Foto 8' },
		  '9.jpg': { caption: 'Foto 9' }
		};
		var myShow = new Slideshow('show', data, { captions: true, controller: true, delay: 3000, height: 350, width:500, hu: '../../images/gallery/', thumbnails: true, linked: true});
		var box = new Lightbox({ 
			  'onClose': function(){ this.pause(false); }.bind(myShow), 
			  'onOpen': function(){ this.pause(true); }.bind(myShow) 
		});
	  });
	//]]>
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
			<h1>Galería</h1>
				<div id="show" class="slideshow">
					<a rel="lightbox" href="../../images/gallery/1.jpg">
						<img src="../../images/gallery/1.jpg" width="400" height="300" alt="Slideshow 2! Example 2: Integration with Lightbox" />
					</a>
				</div>
			</div>
		</div>
		
		<!-- MARGIN AND FOOT -->
		<?php include("../includes/foot.php"); ?>
	</div>
	
</body>

</html>