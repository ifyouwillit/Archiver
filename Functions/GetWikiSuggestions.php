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
					echo "<a class='WikiLinks' href=index.php?q=" . urlencode ( $b ) . ">" . $b . "</a><br>";
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
?>