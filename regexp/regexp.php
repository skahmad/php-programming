<?php
	print "Regular Expression\n";
	print "------------------\n";


	$string = "apple world, java is a Object Oriented Porgramming Language.";
	//print $string;

	if(ereg('object$',$string)) :
		print "condition is true\n";
	else:
		print "condition is false\n";
	endif;

	print "\n------------------------------\n";
?>

