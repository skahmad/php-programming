<?php
	require("header.php");
	print "In this program, I used 'substr()' method to extract particuler charecters form sttring.$endl";
	print "Method Signature is : $endl";
	print "  string substr(string \$string, int \$start, int \$length);$endl";
	print "------------------------------------------$endl";
	$str = "Hello World!";
	print "1. \$str= \"Hello World!\";$endl";
	print "2. echo substr(\$str,0,5);$endl";
	print "  ** ".substr($str,0,5).$endl;
	print "3. echo substr(\$str,5,strlen(\$str));$endl";
	print "  ** ".substr($str,5,strlen($str)).$endl;
	print "4. echo substr(\$str,-3);$endl";
	print "  ** ".substr($str,-3).$endl;
	print "5. echo substr(\$str,-6);$endl";
	print "  ** ".substr($str,-6).$endl;
	print "6. echo substr(\$str,-6,2);$endl";
	print "  ** ".substr($str, -6, 3).$endl;
?>

