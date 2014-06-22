<?

function DisplayWiki ($WikiStream){
$wiki = $WikiStream;

$wikiarray = new SimpleXMLElement ( $wiki );
$counter = 0;
if ($wikiarray->query->pages) {
	foreach ( $wikiarray->query->pages->children () as $wikiitem ) {
		if ($counter <= 30) {
			$counter ++;
			foreach ( $wikiitem->attributes () as $a => $b ) {
				if (($a == 'title') || ($a == 'snippet')) {
					echo "<a class='WikiLinks' href='../Category/" . urlencode ( $b ) . ".htm'>" . $b . "</a><br>";
					// $echo=$wikikeywords.$b.", ";
					
					$wikiurls = $wikiurls . "<a href=\"https://www.securepaynet.net/domains/search.aspx?domaintocheck=" . preg_replace ( '/[^a-z0-9]/i', '', $b ) . "&prog_id=488054&isc=archive1\" style=\"color:#0000FF;font-size:12px;\">" . strtolower ( preg_replace ( '/[^a-z0-9]/i', '', $b ) ) . ".com</a><br>";
				}
			}
		}
	}
	echo "<br><br>";
} else {
	$echo = "Nothing related found. :(";
}
}

function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}
?>