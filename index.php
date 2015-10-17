<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content='width=device-width, initial-scale=1' name='viewport'>
	<meta name="Title" content="title">
	<meta name="Description" content="Description">
	<meta name="Keywords" content="keyword, keywords">
	<title>Document</title>

	<script src="<?php bloginfo('template_directory');?>/js/jquery.1.11.1.js"></script>
	<?php /*<link rel="stylesheet/less" type="text/css" href="css/style.less" />*/?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.php" />
	<!--[if lt IE 9]><script type="text/javascript" src="js/html5shiv"></script><![endif]-->
		

	<script src="<?php bloginfo('template_directory');?>/js/modernizr.js"></script>

    <!-- Scripts -->

	<script src="<?php bloginfo('template_directory');?>/js/less.js" type="text/javascript"></script>
	<script>less.watch();</script>

</head>
<body>
<div class="grilla"></div>

<?/*<script src="http://code.jquery.com/jquery-latest.js"></script>*/ // se pasó abajo ?>
<div class="viewport">
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
	<strong>W: </strong><span id="width">Resize to find out!</span><br />
	<strong>H: </strong><span id="height">Resize to find out!</span>        
</div> 

<header>
header
</header>
<div id="slider"></div>
<footer>
	footer
</footer>
<script src="<?php bloginfo('template_directory');?>/js/scripts.js"></script>
<script type="text/javascript">
//**************************************
// JS caonditional load
//**************************************
if( isMobile()){
 	// some code..
} else {
 	$( "#slider" ).load( "<?php bloginfo('template_directory') ?>/slider.php") 
}
</script>
</body>
</html>