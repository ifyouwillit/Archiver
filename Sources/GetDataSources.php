<?php

include 'Configuration/getQuery.php';
function loadDatafromRanch($sources, $names) {
	// Concurrently receive sources from DataRanch
	$s = microtime ( true );
	$GLOBALS ["names"] = $names;
	$GLOBALS ["loadtime"] = "<br />total time: " . round ( microtime ( true ) - $s, 4 ) . " seconds";
	// Class to run parallel GET requests and return the transfer
	class ParallelGet {
		function __construct($urls) {
			
			// Create get requests for each URL
			$mh = curl_multi_init ();
			foreach ( $urls as $i => $url ) {
				$ch [$i] = curl_init ( $url );
				curl_setopt ( $ch [$i], CURLOPT_RETURNTRANSFER, 1 );
				curl_setopt ( $ch [$i], CURLOPT_USERAGENT, 'Archiver.co Category Suggest - support@worldlifenetworks.com' );
				curl_multi_add_handle ( $mh, $ch [$i] );
			}
			
			// Start performing the request
			do {
				$execReturnValue = curl_multi_exec ( $mh, $runningHandles );
			} while ( $execReturnValue == CURLM_CALL_MULTI_PERFORM );
			// Loop and continue processing the request
			while ( $runningHandles && $execReturnValue == CURLM_OK ) {
				// Wait forever for network
				$numberReady = curl_multi_select ( $mh );
				if ($numberReady != - 1) {
					// Pull in any new data, or at least handle timeouts
					do {
						$execReturnValue = curl_multi_exec ( $mh, $runningHandles );
					} while ( $execReturnValue == CURLM_CALL_MULTI_PERFORM );
				}
			}
			
			// Check for any errors
			if ($execReturnValue != CURLM_OK) {
				trigger_error ( "Curl multi read error $execReturnValue\n", E_USER_WARNING );
			}
			
			// Extract the content
			foreach ( $urls as $i => $url ) {
				// Check for errors
				$curlError = curl_error ( $ch [$i] );
				if ($curlError == "") {
					$res [$i] = curl_multi_getcontent ( $ch [$i] );
				} else {
					print "Curl error on handle $i: $curlError\n";
				}
				// Remove and close the handle
				curl_multi_remove_handle ( $mh, $ch [$i] );
				curl_close ( $ch [$i] );
			}
			// Clean up the curl_multi handle
			curl_multi_close ( $mh );
			
			// Print the response data
			$i = 0;
			foreach ( $GLOBALS ["names"] as $name ) {
				
				$GLOBALS [$name] = $res [$i];
				$i ++;
			}
		}
	}
	
	$urls = $sources;
	$pg = new ParallelGet ( $urls );
}

?>
