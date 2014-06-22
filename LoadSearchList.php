<? 

include ("TemplateFiles/doHeader.php");
// Load Display Functions
include ("TemplateFiles/DisplayFunctions.php");

loadDatafromRanch ( array (
		"http://dataranch.net/archiver/search.xml?q=" . $q
		), array (
		"search",
) );

DisplayListOfBits($GLOBALS['search']); ?>