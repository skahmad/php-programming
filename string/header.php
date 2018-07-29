<?php
	$endl = "\n";
	function isBrowser() {
		if(php_sapi_name() == "cli") {
			$endl = "\n";
			return false;
		}
		else {
			$endl = "<br/>";
			return true;
		}
	}
	/*
	if(isBrowser())
		print "Borwser$NEW_LINE";
	else
		print "CommandLine$NEW_LINE";

	*/
?>

