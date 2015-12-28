<!DOCTYPE html>
<html lang="en">
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta name="Title" content="title">
	<meta name="Description" content="Description">
	<meta name="Keywords" content="keyword, keywords">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta content='width=device-width, initial-scale=1' name='viewport'>
	<?php /* 
	<meta name="viewport" content="width=device-width" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	*/ ?>
	<META http-equiv="X-UA-Compatible" content="IE=edge" />

	<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
		wp_title( '|', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		?>
	</title>
	<?php //wp_head(); ?>
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<script src="<?php bloginfo('template_directory');?>/js/jquery.1.11.1.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.php" />
	<?php /*
	<link rel="stylesheet" type="text/css" media="(min-width: 400px)" href="<?php bloginfo('template_directory');?>/style_movil.php" />
	<link rel="stylesheet" type="text/css" media="(min-width: 960px)" href="<?php bloginfo('template_directory');?>/style_desk.php" />
	*/ ?>
	
	<!--[if IE]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style_ie.php" /><![endif]-->
	<!--[if lt IE 9]><script type="text/javascript" src="js/html5shiv"></script><![endif]-->
		
</head>
<body>
<div class="grilla"></div>
<?php
/*<script src="http://code.jquery.com/jquery-latest.js"></script>*/ // se pasó abajo
?>
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
<script src="<?php bloginfo('template_directory');?>/scripts.php"></script>
</body>
</html>