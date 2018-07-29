<?php
	$names = array();
	// pushing item to array[$names]
	print "Pushing 4 item ...\n";
	print "array_push(arrayname, value)\n";
	print "e.g : array_push(\$names, 'ahmad')\n";
	array_push($names, "ahmad");
	array_push($names, "tarikul");
	array_push($names, "ruhul");
	array_push($names, True);

	print_r($names);

	// removing item from array
	print "popping 1 item ...\n";
	array_pop($names);
	print_r($names);

	// another way to push item to array
	print "pushing 1 item to array in another way\n";
	print "\$names[] = 'akram'\n";
	$names[] = "akram";
	array_push($names,'akash');
	print_r($names);

	print "Pushing 3 item together to array\n";
	print "e.g: array_push(\$names,'akhtar','moon','light')\n";
	array_push($names, "akhtar","moon","light");
	print_r($names);
	
?>
