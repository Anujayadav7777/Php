<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Php</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include'./menu.php';
include'./logo.php';


?>	
<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/slider1.jpeg" width="920" height="450" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">About </a></h2>
				<p class="meta"><span class="date">June 06, 2021</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
                PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.
                PHP 7 is the latest stable release. 
				</div>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->


        <?php
        include'./sidebar.php';

        ?>
        <div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
include'./footer.php';
?>