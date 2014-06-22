<!DOCTYPE html>
<?php
header("HTTP/1.0 404 Not Found");
?><?php
 
// Load Variables
include ("TemplateFiles/doHeader.php");

// Load Display Functions
include ("TemplateFiles/DisplayFunctions.php");

// Load Display Functions
include ("Functions/GetWikiSuggestions.php");

// Load Parallel Processed Data
loadDatafromRanch ( array (
		"http://syndicatebin.com/syn/1.bin",
		"http://syndicatebin.com/syn/4.bin" 
), array (
		"footer",
		"header" 
) );
// echo "http://dataranch.net/secondarycategories.php?q=". urlencode($q);
?>
<head>

<title>Archiver 404 Error</title> 

<!--Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta Name="Keywords"
	content="archiver, social archive, twitter archive" />
<meta Name="Description"
	content="Archiver 404 Error. Archiving digital society
Because your social media should always be yours!" />
<meta property="og:title" content="Welcome to Archiver" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?=curPageURL()?>" />
<meta property="og:site_name" content="Archiver" />
<meta property="fb:admins" content="124527214223945" />
<meta property="og:description"
	content="Archiver 404 Error. Archiving digital society
Because your social media should always be yours!" />


<!--Include Display CSS  -->
<link rel="stylesheet" type="text/css" href="CSS/DisplayBitLists.css">
<link rel="stylesheet" type="text/css" href="CSS/Layout.css">
<link rel="stylesheet" type="text/css" href="CSS/Main.css">
<link rel="stylesheet" href="CSS/jquery.fancybox.css?v=2.1.3"
	type="text/css" media="screen" />


<!--Include JavaScript  -->
<script src="Scripts/NoImage.js"></script>
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript"
	src="Scripts/jquery.fancybox.pack.js?v=2.1.3"></script>
<script>
$(document).ready(function() {
	$(".fancybox").fancybox();
});
</script>
<?php echo $GLOBALS['header'];?>
</head>

<body>
<? include("Configuration/FacebookHeader.php"); ?>
	<div class="AllPanes">
		<div class="LoginPane">
			<div class="MenuPadding">
				<div style="float: left;">
					<img src="favicon.ico" width=35>
				</div>
				<div
					style="float: left; font-size: 26px; padding: 3px; padding-left: 10px;">The
					Archiver</div>
				<div class="LoginBlock"><?include ("examples/auth.php");?></div>
				<div style="width: 100%; clear: both; padding: 0px; margin: 0px;"></div>
			</div>
		</div>
		<div class="MenuPane">
			<div class="MenuPadding"><?php include ('mindex.php');?></div>
		</div>

		<div class="MiddlePaneBitline">
			<div class="SearchName">
				<div style="clear: both;">
					<h1 class="SearchTitle">ERROR 404, UH OH! BUBBA ATE THAT PAGE! :/</h1>
					
				</div>
				<div style="clear: both;"></div>
			</div>
			<div style="width: 85%; margin-left: auto; margin-right: auto;">
				<center>
					<h2>Oh no! Bubba (the data finding alien) got hungry and ate the page you're looking for.</h2>
						</center>
					<br>
					<img src="bigtrans.gif" width="200" align="left">
The page you've tried to reach is no longer available.  Give the search a try, or click a category from above.
				<br><br><br>
			</div>
		</div>
		<div class="RightPane"><?include ("TemplateFiles/RightBar.php");?></div>

	</div>
	<div style="clear: both; height: 40px;"></div>
	<div
		style="clear: both; text-align: center; background-color: #EEEEEE; width: 100%;"><?php echo $GLOBALS['footer'];?></div>
</body>