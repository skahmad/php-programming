<?php
	$fruite = "apple";
	print "fruite name is : $fruite\n";
	print "** passing the fruit to the switch statement.\n";
	switch($fruite) {
		case 'apple': print "** case 1 is for apple.\n";break;
		case 'banana': print "** case 2 is for banana.\n";break;
		case 'orange': print "** case 3 is for Orange.\n";break;
		default: print "** this is default for all fruite.\n";break;
	}
?>
