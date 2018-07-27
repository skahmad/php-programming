<?php
	require("header.php");
	print "string strtoupper(string \$string);$endl";
	print "string strtolower(string \$string);$endl";
	print "string ucfirst(string \$string);$endl";
	print "string lcfirst(string \$string);$endl";
	print "string ucwords(string \$string, string \$delimiter);$endl";
	print "  *** delimiter contain word separator charector.$endl";
	print "string mb_convert_case(string \$string, int \$mode, string \$encoding)$endl";
	print "  *** This method is standerd method for converting case.$endl";
	print "  \$mode = [MB_CASE_UPPER, MB_CASE_LOWER, MB_CASE_TITLE]$endl";
	print "  \$ecnode = [\"utf-8\"] $endl";
	print "-------------------------------------$endl";
	$str1 = "apple world$endl";
	$str2 = "APPLE IS A FRUIT.$endl";
	print "\$str1 = \"apple is a fruit.\";$endl";
	print "\$str2 = \"APPLE IS A FRUIT.\";$endl";
	print "1. echo strtoupper(\$str1);$endl";
	print "  ** ".strtoupper($str1).$endl;
	print "2. echo strtolower(\$str2);$endl";
	print "  ** ".strtolower($str2).$endl;


	print "  ** Upper case first charecter$endl";
	print "3. echo ucfirst(\$str1);$endl";
	print "  ** ".ucfirst($str1).$endl;

	print "** Lower case first charecter.$endl";
	print "4. echo lcfirst(\$str1);$endl";
	print "  ** ".lcfirst($str1).$endl;

	print "** Lower case first charecter.$endl";
        print "4. echo lcfirst(\$str2);$endl";
        print "  ** ".lcfirst($str2).$endl;


	print "** ucwords() for camel case$endl";
	print "5. echo ucwords(\$str1);$endl";
	print "  ** ".ucwords($str1).$endl;

	$newstr = "apple|world|fruit|lemon";
	print "6. \$newstr = \"apple|world|fruit|lemon\";$endl";
	print "  ** Upper case all word first char, word separated by '|'$endl";
	print "7. echo ucwords(\$newstr,\"|\")$endl";
	print "  ** ".ucwords($newstr,"|").$endl;

	$newstr = "apple,world,fruit,lemon";
	print "\$newstr = \"apple,world,fruit,lemon\";$endl";
	print "  ** Upper case all word first char, word separated by ','$endl";
	print "8. echo ucwords(\$newstr,\",\");$endl";
	print "  ** ".ucwords($newstr,",").$endl;


	print "use mb_convert_case() method$endl";
	print "9. echo \$str1;$endl";
	print "  ** $str1$endl";
	print "9. echo mb_convert_case(\$str1,MB_CASE_UPPEP,\"utf-8\");$endl";
	//print "  ** ".mb_convert_case($str1, MB_CASE_UPPER,"UTF-8").$endl;
?>

