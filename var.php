<?php
	/*
	this is multiline comment
	the value of the variable doesn't show when print something using single quotes.
	*/
	/*
		isset(variable1, variable2, ...)
		it returns TRUE if all variable is seted.
		other wise returns FALSE

		unset(var1, var2, ....)
		empty(variable)
		is_null($variable)
		is_array($array);
		is_int($variable)
		is_numeric($variable)
	*/
	print "carriage return \r";
	print "tab \t\n";
	print "back space \b\n";
	$str1 = "variable value doesn't show iside single quote.\n";
	print 'string leteral $str1 :';
	print "$str1\n";

	// interger variable
	$age = 23;
	print 'print $age but is does not show its value.';
	print "\n";
	print "age : $age.\n";
	$age = 25;
	print "after change age : $age.\n";

	// string varibale
	$firstname = "moon";
	$lastname = "light";
	print "first name : $firstname\n";
	print "last name : $lastname\n";
	// look at this statement for add two string
	$name = $firstname.$lastname;
	print "name is : $name\n";

	$age = 52;
	var_dump($age);

	if(empty($age))
		print "Age is not seted!";
	else
		print "Age is : $age\n";

	print"-------------------------------\n";
	print "\n";

	function var_is_seted($var) {
		if(isset($var))
			print "\$variable variale is seted.\n";
		else
			print "\$variable variable is not seted\n";
	}
	function var_is_null($var) {
		if(is_null($var))
			print "\$variable is null\n";
		else
			print "\$variable is not null\n";
	}
	$apple="";
	var_is_seted($apple);
	var_is_null($apple);
	$apple = "apple";
	var_is_seted($apple);
	var_is_null($apple);


	$nullvar = NULL;
	print "\$nullvar --------\n";
	var_is_null($nullvar);
	$nullvar = 123;
	var_is_null($nullvar);
?>
