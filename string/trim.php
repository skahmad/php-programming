<?php
	require("header.php");
	$str = "  Hello, Welcome to my Github Repository.  ";
	print "1. \$str = \"  Hello, Welcome to my Github Repository. \"$endl";
	print "2. echo strlen(\$str);$endl";
	print "  ** ".strlen($str).$endl;
	print "  [removine white space from start and end of the string.]$endl";
	print "3. \$trimmed = trim(\$str);$endl";
	$trimmed = trim($str);
	print "4. echo strlen(\$trimmed);$endl";
	print "  ** ".strlen($trimmed).$endl;
	print "4. echo \$trimmed;$endl";
	print "  ** $trimmed$endl";
	print "4. strlen(\$trimmed);$endl";
	print "  ** ".strlen($trimmed).$endl;
?>
