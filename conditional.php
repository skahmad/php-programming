<?php
	$age = 23;
	if($age >12 and $age<20)
		print "you are teenager.\n";
	else
		print "You are not teenager.\n";

	//multiple statement
	if ($age <20 and $age>12) {
		print "You are teenager.\n";
		print "So you are not parmitted. Sorry!\n";
	}else {
		print "Either you are child or elder.\n";
		print "If you are elder then parmit you.\n";
	}

	// another if-else
	if ($age<13 or $age>19) :
		print "you are not teenager.\n";
		if ($age<13) :
			print "You are child.\n";
		else:
			print "you are 19+\n";
		endif;
	else:
		print "you are teenager.\n";
	endif;


	$name = 'moon light';
	if( $name == 'moon light'):
		print "User found!\n";
		print "User name is : ".$name."\n";
	else:
		print "Sorry user does't exists\n";
	endif;

?>
