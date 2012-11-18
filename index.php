<?php

//Load Variables
include ("TemplateFiles/doHeader.php");

//Load Display Functions
include ("TemplateFiles/DisplayFunctions.php");

?>
<head>
<!--Include Display CSS  -->
<link rel="stylesheet" type="text/css" href="Display.css">
</head>

<body>
<?

//Load Parallel Processed Data
loadDatafromRanch(array("http://dataranch.net/archiver/search.xml?q=".$q), array("search"));

//Display List of Bits
DisplayListOfBits($GLOBALS['search']);


?>
</body>