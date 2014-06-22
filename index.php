<!DOCTYPE html>
<?php

// Load Variables
include ("TemplateFiles/doHeader.php");

// Load Display Functions
include ("TemplateFiles/DisplayFunctions.php");

// Load Display Functions
include ("Functions/GetWikiSuggestions.php");

// echo "http://dataranch.net/secondarycategories.php?q=". urlencode($q);
?>
<head>

<title>Welcome to Archiver</title>

<!--Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta Name="Keywords"
	content="archiver, social archive, twitter archive" />
<meta Name="Description"
	content="Archiving digital society
Because your social media should always be yours!" />
<meta property="og:title" content="Welcome to Archiver" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?=curPageURL()?>" />
<meta property="og:site_name" content="Archiver" />
<meta property="fb:admins" content="124527214223945" />
<meta property="og:description"
	content="Archiving digital society
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
					<h1 class="SearchTitle">Welcome to Archiver</h1>
					<div style="float: left; width: 250px; padding: 13px;"></div>
				</div>
				<div style="clear: both;"></div>
			</div>
			<div style="width: 85%; margin-left: auto; margin-right: auto;">
				<center>
					<h2>Archiving digital society Because your social media should
						always be yours!</h2>
						</center>
					<br>
					<img src="bigtrans.gif" width="200" align="left">
					Archiver is a high availability index of social media data from
					over 200 sources across the web. All data is Creative Commons
					licensed data unless otherwise noted, and is randomly selected and
					spidered using 'Bubba' content spider. Social media data is
					particularly great for deep data analysis, CRM integration, user
					profiling, supplemental content, and search engine keyword
					optimization. Data sources with frequently
					updated content are indexed more frequently (i.e. popular micro
					blogs (Twitter) and news sites). The archive is searchable by keyword
					and location.<br><br>
					Use the search functionality to the right, or start by browsing categories on the top of the page!
				<br><br><br>
			</div>
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