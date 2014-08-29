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
	<link rel="stylesheet" media="screen and (min-width: 600px)" href="css/style.less" type="text/less" />
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

holi <br>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos doloremque, vero maiores ab minus similique a optio! Ipsam quod fugiat ducimus ipsum incidunt, vel sit, nobis minus! Totam, modi, atque. <br>
<a href="#">test de enlace</a><br>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere consequatur possimus quia, laboriosam, voluptatum dolorum perferendis assumenda repellat accusantium magni consequuntur fugiat quibusdam dicta, soluta harum expedita non a ab.
</body>
</html>