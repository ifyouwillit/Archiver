<? 

include ("TemplateFiles/doHeader.php");
// Load Display Functions
include ("TemplateFiles/DisplayFunctions.php");

loadDatafromRanch ( array (
		"http://dataranch.net/archiver/date.xml?q=" . $q
		), array (
		"wiki",
) );

DisplayListOfBits($GLOBALS['search']); ?>