<?php
	$email="ahmad.sk98@gmail.com";
	$len = strlen($email);
	print "Accessing String from string\n";
	print "----------------------------\n";
	for($i=0; $i<$len; $i++)
		print $email[$i];
	print "\n";

	// trimming string [ removing whitespace ]
	// string trim(string, charlist);
	// string rtrim(string, charlist);
	// string ltrim(string, charlist);
	print "Trimming 'mo' from $email\n";
	$trimmedstring = trim($email,'om');
	print $trimmedstring."\n";

	// changing case
	// strtoupper() , strtolower() , ucfirst()
	// ucwords()
	print "Changing case of email\n";
	print "to uppercase\n";
	print "Email : ".strtoupper($email)."\n";
	print "to lower case\n";
	print "Email : ".strtolower($email)."\n";
	print "to camel case\n";
	print "Email : ".ucfirst($email)."\n";

	


?>
