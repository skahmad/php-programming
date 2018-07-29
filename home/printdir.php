<?php
	// printing content of the directory 
	function printd($directory) {
		if(!is_dir($directory))
			return;

		$list = scandir($directory);
		foreach($list as $content) {
			print $content."\n";
		}
	}







?>
