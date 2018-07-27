<?php
	require 'header.php';
	print "strpos() for find the position of the string in a string$endl";
	print "   int strpos(string \$string, string \$sub_string, int offset);$endl";
	$str = "apple is a fruit.";
	print "1. \$str = \"apple is a fruit.\";$endl";
	print "  ** finding 'is' in the above string$endl";
	print "2. echo strpos(\$str, \"is\");$endl";
	print "  ** ".strpos($str, "is").$endl;
	print "  ** find 'is' after index 4$endl";
	print "3. echo strpos(\$str, \"is\", 4);$endl";
	print "  ** ".strpos($str,"is",4).$endl;
	print "4. echo strpos(\$str,\"is\", 9);$endl";
	print "  ** ".strpos($str, "is",9).$endl;
	print "5. echo strpos(\$str, \"as\");$endl";
	print "  ** ".strpos($str, "as").$endl;
?>
