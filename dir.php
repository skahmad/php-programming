<?php
	print "Current Working Directory is : ".getcwd()."\n";
	$d = dir(getcwd());
	$dircounter = 0;
	$filecounter = 0;
	while(($file = $d->read()) !== false) {
		if( ($file != '.') and ($file != '..')) {
			if(is_dir($file)) {
				print "d\t";
				$dircounter++;
			}else {
				print "f\t";
				$filecounter++;
			}
			print "$file\n";
		}
	}
	print "total files : $filecounter\n";
	print "total directory : $dircounter\n";
?>

