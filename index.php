<?php

// Load Variables
include ("TemplateFiles/doHeader.php");

// Load Display Functions
include ("TemplateFiles/DisplayFunctions.php");

// Load Display Functions
include ("Functions/GetWikiSuggestions.php");

// Load Parallel Processed Data
loadDatafromRanch ( array (
		"http://dataranch.net/archiver/search.xml?q=" . $q,
		"http://en.wikipedia.org/w/api.php?action=query&generator=search&gsrsearch=" . urlencode ( $q ) . "&format=xml"
), array (
		"search",
		"wiki"
) );

?>
<head>
<!--Unicode Me -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!--Include Display CSS  -->
<link rel="stylesheet" type="text/css" href="CSS/DisplayBitLists.css">
<link rel="stylesheet" type="text/css" href="CSS/Layout.css">
<link rel="stylesheet" type="text/css" href="CSS/Main.css">
</head>

<body>
	<div class="AllPanes">
	<div class="LoginPane"><div class="MenuPadding">Login</div></div>
	<div class="MenuPane"><div class="MenuPadding">This is where the menu goes</div></div>
	
	<div class="LeftPane"><div class="LeftPanePadding">Related to <?=$q?><hr><?php DisplayWiki($GLOBALS['wiki']); ?></div></div>
		<div class="MiddlePane">
			<div class="SearchName">
				<h1 class="SearchTitle"><?=strtoupper($q)?></h1>
			</div>

<?php DisplayListOfBits($GLOBALS['search']); ?>
</div>
		<div class="RightPane"><?include ("TemplateFiles/RightBar.php");?></div>

	</div>

</body>