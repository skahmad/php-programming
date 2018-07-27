<?php
	require("header.php");
	$str = "            apple world";
	print "1. \$str = \"           apple world\"$endl";
	print "2. echo \$str : strlen(\$str);$endl";
	print "  ** $str : ".strlen($str).$endl;
	print "  ** removing white space from left end.$endl";
	$trimmed = ltrim($str," ");
	print "3. \$trimmed = ltrim(\$str, \" \");$endl";
	print "4. echo \$trimmed : strlen(\$trimmed);$endl";
	print "  ** $trimmed : ".strlen($trimmed).$endl;
	print "  ** removing apl form left end.\n";
	$trimmed = ltrim($trimmed, "apl");
	print "5. \$trimmed = ltrim(\$trimmed, \"apl\");$endl";
	print "6. echo \$trimmed : strlen(\$trimmed);$endl";
	print "  ** $trimmed : ".strlen($trimmed)."\n";


	$trimmed = trim($str);
	print "7. echo \$trimmed : strlen(\$trimmed);$endl";
	print "  ** $trimmed : ".strlen($trimmed).$endl;
	print "removing 'ldrow' from right end.\n";
	$trimmed = rtrim($trimmed, "dlrow");
	print "8. \$trimmed = rtrim(\$trimmed, \"dlrow\");$endl";
	print "9. echo \$trimmed : strlen(\$trimmed);$endl";
	print "  ** $trimmed : ".strlen($trimmed)."\n";
?>
