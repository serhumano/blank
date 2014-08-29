<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content='width=device-width, initial-scale=1' name='viewport'>
	<meta name="Title" content="title">
	<meta name="Description" content="Description">
	<meta name="Keywords" content="keyword, keywords">
	<title>Document</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" media="screen" href="css/style.less" type="text/less" />
	<!--[if lt IE 9]><script type="text/javascript" src="js/html5shiv"></script><![endif]-->
		

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,600' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="js/modernizr.js"></script>

    <!-- Scripts -->
	<script src="js/less.js" type="text/javascript"></script>
	<script>sless.watch();</script>
</head>
<body>
<div class="grilla"></div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
	$(document).ready(function(e) {
		showViewportSize();   
	});
	$(window).resize(function(e) {
		showViewportSize();
	});
	function showViewportSize() {
		var the_width = $(window).width();
		var the_height = $(window).height();                 
		$('#width').text(the_width);
		$('#height').text(the_height);
	}
</script>
<div class="viewport">
	<strong>W: </strong><span id="width">Resize to find out!</span><br />
	<strong>H: </strong><span id="height">Resize to find out!</span>        
</div> 

<header>
	<div class="top">
		<div class="logo">Logo</div>
		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">La empresa</a></li>
				<li><a href="#">Servicios</a></li>
				<li><a href="#">Proyectos</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</nav>
	</div><!-- top -->
	<div class="hslider">
		hslider
	</div><!-- hslider -->
	<div class="hbarra">
		hbarra
	</div><!-- hbarra -->
</header>
<div class="contenedor">
	<section class="hproyectos">
		hproyectos
	</section><!-- hproyectos -->
</div><!-- contenedor -->
<div class="contenedor">
	<section class="hquienes">
		hquienes
	</section><!-- hquienes -->
	<section class="hnovedades">
		hnovedades
	</section>
</div><!-- contenedor -->
<div class="contenedor">
	<section>
		hcontacto
	</section><!-- hcontacto -->
</div><!-- contenedor -->
<footer>
	footer
</footer>
</body>
</html>