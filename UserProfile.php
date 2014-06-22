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
		"http://dataranch.net/archiver/user.xml?sn=" . $q,
		"http://dataranch.net/secondarycategory.php?q=" . urlencode ( $q ),
		"http://dataranch.net/primarycategories.php?q=" . urlencode ( $q ) 
), array (
		"userinfo",
		"secondarycategories",
		"primarycategories" 
) );

GetUserInfo ( $GLOBALS ['userinfo'] );
?>
<head>

<title><?=$GLOBALS['archiverprofileuserscreenname']?> (<?=$GLOBALS['archiverprofileusername']?>) Profile | Archiver</title>

<!--Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META Name="author" CONTENT="<?=$GLOBALS['archiverprofileusername']?>" />
<meta Name="Keywords"
	content="<?=$GLOBALS['archiverprofileuserscreenname']?>, <?=$GLOBALS['archiverprofileusername']?>, archiver, social archive" />
<meta Name="Description"
	content="<?=$GLOBALS['archiverprofileuserdescription']?>" />
<meta property="og:title" content="<?=$q?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?=curPageURL()?>" />
<meta property="og:site_name" content="Archiver" />
<meta property="fb:admins" content="124527214223945" />
<meta property="og:description"
	content="<?=$GLOBALS['archiverprofileuserdescription']?>" />

<!--Include Display CSS  -->
<link rel="stylesheet" type="text/css" href="../CSS/DisplayBitLists.css">
<link rel="stylesheet" type="text/css" href="../CSS/Layout.css">
<link rel="stylesheet" type="text/css" href="../CSS/Main.css">
<link rel="stylesheet" href="../CSS/jquery.fancybox.css?v=2.1.3"
	type="text/css" media="screen" />

<!--Include JavaScript  -->
<script src="../Scripts/NoImage.js"></script>
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

<body>
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

		<div itemscope itemtype="http://data-vocabulary.org/Person" class="LeftPaneProfile">

			<img
				itemprop="photo" src="https://api.twitter.com/1/users/profile_image?screen_name=<?=$GLOBALS['archiverprofileuserscreenname']?>&size=original"
				onerror="onImgErrorBig(this)" width="100%">
	
			<div class="ContentItem">
				<b>Name</b><h2 itemprop="name" style="font-size:14px;padding:0px;margin:0px;font-weight:normal;"><?=$GLOBALS['archiverprofileusername']?></h2></div>
			<div class="ContentItem">
				<b>About</b><h2 itemprop="role" style="font-size:14px;padding:0px;margin:0px;font-weight:normal;"><?=$GLOBALS['archiverprofileuserdescription']?></h2></div>
			<div class="ContentItem">
				<b>Username / Handle</b><h2 itemprop="nickname" style="font-size:14px;padding:0px;margin:0px;font-weight:normal;"><?=$GLOBALS['archiverprofileuserscreenname']?></h2></div>

			<div class="ContentItem">
				<b>Website</b>
	<?php if ($GLOBALS['archiverprofileuserurl']<>'') { ?><br>
				<a class="WikiLinks"
					href="<?=urldecode($GLOBALS['archiverprofileuserurl'])?>"
					target="_blank"><?=urldecode($GLOBALS['archiverprofileuserurl'])?></a> <a href="http://publicip.me/dns.php?url=<?=parse_url(urldecode($GLOBALS['archiverprofileuserurl']),PHP_URL_HOST)?>" target="_blank" style="font-size:10px;color:white;">[DNS Info]</a><?php } ?>
	<br>
				<a class="WikiLinks"
					href="https://www.securepaynet.net/domains/search.aspx?domaintocheck=<?=$GLOBALS['archiverprofileuserscreenname']?>&prog_id=488054&isc=archive1"
					target="_blank">http://<?=$GLOBALS['archiverprofileuserscreenname']?>.com</a>
	<?php if ($GLOBALS['archiverprofileusername']<>'') { ?><br>
				<a class="WikiLinks"
					href="https://www.securepaynet.net/domains/search.aspx?domaintocheck=<?=preg_replace("/[^A-Za-z0-9]/", '', $GLOBALS['archiverprofileusername'])?>&prog_id=488054&isc=archive1"
					target="_blank">http://<?=preg_replace("/[^A-Za-z0-9]/", '', $GLOBALS['archiverprofileusername'])?>.com</a><?php } ?></div>
			<div class="ContentItem">
				<b>Location</b><br><a itemprop="address" href="http://archiver.co/Location/<?=urlencode($GLOBALS['archiverprofileuserlocation'])?>.htm" class="WikiLinks"><?=$GLOBALS['archiverprofileuserlocation']?></a></div> 
			<div class="ContentItem">
				<? include("UserAd.php"); ?>
			</div>
			<div class="ContentItem">
				<b>What's Public About <?=$GLOBALS['archiverprofileusername']?></b><br>
				<a class="WikiLinks"
					href="http://whatspublic.me/<?=urlencode($GLOBALS['archiverprofileusername'])?>"><?=$GLOBALS['archiverprofileusername']?></a>
				| <a class="WikiLinks"
					href="http://whatspublic.me/<?=urlencode($GLOBALS['archiverprofileuserscreenname'])?>"><?=$GLOBALS['archiverprofileuserscreenname']?></a>
			</div>

			<div class="ContentItem">
				<b><?=$GLOBALS['archiverprofileusername']?> in the News</b><br>
				<a class="WikiLinks"
					href="http://noozly.com/topic/<?=urlencode($GLOBALS['archiverprofileusername'])?>" target="_blank">[Noozly]</a>
									<a class="WikiLinks"
					href="http://www.cnn.com/search/?query=<?=urlencode($GLOBALS['archiverprofileusername'])?>&x=0&y=0&primaryType=mixed&sortBy=relevance&intl=false" target="_blank">[CNN]</a>
						<a class="WikiLinks"
					href="https://www.google.com/search?hl=en&gl=us&tbm=nws&q=<?=urlencode($GLOBALS['archiverprofileusername'])?>&oq=<?=urlencode($GLOBALS['archiverprofileusername'])?>&x=0&y=0&primaryType=mixed&sortBy=relevance&intl=false" target="_blank">[Google]</a>

			
			</div>
		</div>
		<div class="MiddlePaneProfile">
			
			<div class="SearchName">
				<div style="clear: both;">
					<h1 class="SearchTitle"><?=$GLOBALS['archiverprofileuserscreenname']?> (<?=$GLOBALS['archiverprofileusername']?>)</h1><? include("Disqus.php") ?>
					<div style="float: left; width: 250px; padding: 13px;">
					
					</div>
				</div>
				<div style="clear: both;"></div>
			</div>

<? include ('Scripts/HorizontalAd.php');?>
<? DisplayListOfBitsProfile($GLOBALS['userinfo']); ?>
<? include ('Scripts/HorizontalAd.php');?>
</div>


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

	<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
</body>