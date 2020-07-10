<!doctype html>
<html>
<head>
<?php 
	require_once "/Functions/functions.php";
	$news = getOneNews (1, $_GET["id"]);
	$title = $news["title"];
	require_once "blocks/head.php";
	

?>
<link href="/css/Event Style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php require_once "blocks/header.php"?>
   <div id="Page-wrap-articles">
	
     
<?php 
            	 
	echo '<div id="FontWrap">
			<img src="img/'.$news["id"].'.jpg" alt="">
			<p>'.$news["full_text"].'</p>
     	</div>';
		
  ?>
    </div>
   
   <?php require_once "blocks/footer.php"?>
   
</body>




</html>































