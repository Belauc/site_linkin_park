<!doctype html>
<html>
<head>
<?php 
	require_once "/Functions/functions.php";
	$title = "Photo";
	require_once "blocks/head.php";
	$dir = 'img/Albom/';
	$images = getPhoto ($dir);

?>
<link href="/css/Event Style.css" rel="stylesheet" type="text/css">
<link href="/css/lightbox.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/js/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="/js/lightbox.min.js"></script>


</head>

<body>
<?php require_once "blocks/header.php"?>
   <div id="Page-wrap-Photo">
   <div id="wrapper">
	<div id="PhotoWrapper">
    <?php	foreach($images as $image):?>
        	<div>
            	<a data-Lightbox="lightbox" href="<?=$dir.$image?>">
                	<img src="<?=$dir.$image?>" alt="">
                </a>
        	</div>
        	<?php endforeach;?>
	</div>
   </div> 
   </div>
   
   <?php require_once "blocks/footer.php"?>
   
</body>




</html>












