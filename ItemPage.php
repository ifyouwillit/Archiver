<?php

// Load Variables
include ("TemplateFiles/doHeader.php");

// Load Display Functions
include ("TemplateFiles/DisplayFunctions.php");

// Load Parallel Processed Data
loadDatafromRanch ( array (
		"http://dataranch.net/archiver/bit.xml?id=" . $q), array (
		"search",
) );

?>
<head>

<title><?=$q?> | Archiver</title>

<!--Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<Meta Name="Keywords" content="<?=$q?>, archiver, social archive">
<Meta Name="Description"
	content="Archive of social media posts about <?=$q?> from Twitter, Identica, Statusnet, Brainbird, and other micro-blogging websites.">

<!--Include Display CSS  -->
<link rel="stylesheet" type="text/css" href="CSS/DisplayBitLists.css">
<link rel="stylesheet" type="text/css" href="CSS/Layout.css"> 

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
<? include("Configuration/FacebookHeader.php"); 

if ($searchtype=="UserProfile.php") {
$searchtype="Profile/";
}
if ($searchtype=="Search.php") {
	$searchtype="Category/";
}
if ($searchtype=="LocationList.php") {
	$searchtype="Location/";
}
if ($searchtype=="FollowerList.php") {
	$searchtype="Followers/";
}
if ($searchtype=="DateList.php") {
	$searchtype="Date/";
}
if ($searchtype=="none") {
	$searchtype="/?reference=";
}
?>
<?php echo "&larr; <a href='".$searchtype.$originalsearch.".htm' onclick='parent.$.fancybox.close();'>Back to ".urldecode($originalsearch)."</a>"?>
<br>
<br><center>
<br><br>

<div style="width:300px;margin-left:auto;margin-right:auto;">
</div>

<br>
<?php DisplayBit($GLOBALS['search']); ?>
<br>

<div style="width:300px;margin-left:auto;margin-right:auto;">
</div>

<br><br>
</center>

    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W6VKHP"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W6VKHP');</script>
    <!-- End Google Tag Manager -->

</body>