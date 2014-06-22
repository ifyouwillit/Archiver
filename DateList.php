<!DOCTYPE html>
<?php

// Load Variables
include ("TemplateFiles/doHeader.php");

// Load Display Functions
include ("TemplateFiles/DisplayFunctions.php");

// Load Display Functions
include ("Functions/GetWikiSuggestions.php"); 

// Load Parallel Processed Data
loadDatafromRanch ( array (
		"http://en.wikipedia.org/w/api.php?action=query&generator=search&gsrsearch=" . urlencode ( $q ) . "&format=xml",
), array (
		"wiki",
) );

?>
<head>

<script type="text/javascript">
	function getXMLHttp() {
		var xmlHttp

		try {
			//Firefox, Opera 8.0+, Safari
			xmlHttp = new XMLHttpRequest();
		} catch(e) {
			//Internet Explorer
			try {
				xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				try {
					xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch(e) {
					alert("Your browser does not support AJAX!")
					return false;
				}
			}
		}
		return xmlHttp;
	}

	function MakeRequest(page, divname) {
		var xmlHttp = getXMLHttp();

		xmlHttp.onreadystatechange = function() {
			if (xmlHttp.readyState == 4) {
				HandleResponse(xmlHttp.responseText, divname);
			}
		}

		xmlHttp.open("GET", page, true);
		xmlHttp.send(null);
	}

	function HandleResponse(response, whatdiv) {
		document.getElementById(whatdiv).innerHTML = response;
	}

</script>

<title>Archive from <?=date('M d, Y',strtotime($q))?> | Archiver</title>

<!--Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta Name="Keywords"
	content="<?=date('M d, Y',strtotime($q))?>, archiver, social archive" />
<meta Name="Description"
	content="Archive of social media posts from <?=date('M d, Y',strtotime($q))?> from Twitter, Identica, Statusnet, Brainbird, and other micro-blogging websites." />
<meta property="og:title"
	content="Archive from <?=date('M d, Y',strtotime($q))?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?=curPageURL()?>" />
<meta property="og:site_name" content="Archiver" />
<meta property="fb:admins" content="124527214223945" />
<meta property="og:description"
	content="Archive of social media posts from <?=date('M d, Y',strtotime($q))?> from Twitter, Identica, Statusnet, Brainbird, and other micro-blogging websites." />

<!--Include Display CSS  -->
<link rel="stylesheet" type="text/css" href="../CSS/DisplayBitLists.css">
<link rel="stylesheet" type="text/css" href="../CSS/Layout.css">
<link rel="stylesheet" type="text/css" href="../CSS/Main.css">
<link rel="stylesheet" href="../CSS/jquery.fancybox.css?v=2.1.3"
	type="text/css" media="screen" />

<!--Include JavaScript  -->
<script src="Scripts/NoImage.js"></script>
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript"
	src="../Scripts/jquery.fancybox.pack.js?v=2.1.3"></script>
<script>
$(document).ready(function() {
	$(".fancybox").fancybox();
});
</script>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W6QJPG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W6QJPG');</script>
<!-- End Google Tag Manager -->
</head>

<body onload='MakeRequest("http://archiver.co/LoadDateList.php?q=<?=$q?>", "whatdiv");'> 
<? include("Configuration/FacebookHeader.php"); ?>
	<div class="AllPanes">
		<div class="LoginPane">
			<div class="MenuPadding">
			<div style="float: left;">
					<a href="/"><img src="../favicon.ico" width="35" border="0"></a> 
				</div>
				<div
					style="float: left; font-size: 26px; padding: 3px; padding-left: 10px;">The
					Archiver</div>
				<div class="LoginBlock"><?include ("examples/auth.php");?></div>
				<div style="width: 100%; clear: both;"></div>
			</div>
		</div>
		<div class="MenuPane">
			<div class="MenuPadding"><?php include ('m.php');?></div>
		</div>

		<div class="LeftPane">
			<div class="LeftPanePadding">Related to <?=$q?><hr><?php DisplayWiki($GLOBALS['wiki']); ?></div>
		</div>
		<div class="MiddlePane">

			<div class="SearchName">
				<div style="clear: both;">
					<h1 class="SearchTitle">ARCHIVE FROM <?=strtoupper(date('M d, Y',strtotime($q)))?></h1><? include("Disqus.php") ?>
					 
				</div>
				<div style="clear: both;"></div>
			</div>
			
			
<? include ('Scripts/HorizontalAd.php');?>
<div id="whatdiv"></div>
<? include ('Scripts/HorizontalAd.php');?>
</div>
		<div class="RightPane"><?include ("TemplateFiles/RightBar.php");?></div>

	</div>
	<div style="clear: both; height: 40px;"></div>
	<div
		style="clear: both; text-align: center; background-color: #EEEEEE; width: 100%;">
    <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W6VKHP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W6VKHP');</script>
<!-- End Google Tag Manager -->    
        </div>
</body>