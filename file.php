<?php
	print "This is the file program.\n";
	print "-------------------------\n";

	print "reading file content:file.php\n";
	$content = readfile('file.php');
	print $content."\n";
	print "size of fle.php : ".filesize('file.php')." bytes\n";

?>
