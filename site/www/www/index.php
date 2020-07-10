<!doctype html>
<html>
<head>
<?php 
	require_once "/Functions/functions.php";
	$news = getNews(4);
	$title = "Linkin Park";
	require_once "blocks/head.php";
	

?>
<script type="text/javascript" src="/js/jquery-3.0.0.min.js"></script>

<script type="text/javascript"> 
	$(document).ready(function() {
		$("#PhotoBA").animate({opacity:1}, 700);
		$("#pBG").animate({opacity:1}, 2000);
		$("#go").animate({opacity:1}, 2000);
		
    });


</script>
</head>

<body>
<?php require_once "blocks/header.php"?>
   
<div id="wrapper">
           
       	<?php 
            	for ($i=0; $i<count($news); $i++){
					if($i == 0 )
						 echo '<div id="BigArticle"> <div id="CenterArticles"> <img id="PhotoBA" src="/newsPhoto/'.$news[$i]["id"].'.jpg" alt="">
                	<div id="News">
                    <p id="pBG">'.$news[$i]["intro_text"].'</p>
                    <a href="article.php?id='.$news[$i]["id"].'" title="Читать далее"><div id="go">
                         	Перейти
                         </div></a>
                    </div>
                         
   				</div>	
        </div>';
					else
						{echo '<div id="article"> <img src="/newsPhoto/'.$news[$i]["id"].'.jpg" alt="">
          		<div id="ArticleNews">
                	<p >'.$news[$i]["intro_text"].'</p>
                </div>
                <a href="article.php?id='.$news[$i]["id"].'" title="Читать далее">
                <div id="ArticleGo">
                    Далее
                </div>
                </a>
        </div>';
		}
	
					if ($i == 0)
					echo "<div id=\"Losing\"></div>";
				}
            
            ?>
            
        		
        </div>
        
        
   
   <?php require_once "blocks/footer.php"?>
   
</body>




</html>












