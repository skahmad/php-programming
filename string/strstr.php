<?php
	require("header.php");
	print "In this program, I used strstr() method to search sub string
form main string$endl";
	print "method signature : $endl";
	print "  string strstr(string \$string, mixed \$search, bool flag);$endl";
	print "------------------------------------$endl";

	$str= "Hello World PHP Web Application.";
	print "1. \$str = \"Hello World PHP Web Application.\";$endl";
	print "2. echo strstr(\$str, \"Web\");$endl";
	print "  ** ".strstr($str, "Web").$endl;
	print "3. echo strstr(\$str, \"Web\", true).$endl";
	print "  ** ".strstr($str, "Web",true).$endl;

	print "------------------------$endl";
	print "4. \$str = \"My Phone Number is : 1234567890\";$endl";
	$str=  "My Phone Number is : 1234567890";
	print "5. echo strstr(\$str, '3');$endl";
	print "  ** ".strstr($str, '3').$endl;
	print "6. echo strstr(\$str, '3', true);$endl";
	print "  ** ".strstr($str, '3', true).$endl;

	print "7. echo strstr(\$str, \"Number\");$endl";
        print "  ** ".strstr($str, "Number").$endl;
	print "8. echo strstr(\$str, \"number\");$endl";
	print "  ** ".strstr($str, "number").$endl;
	print "  *** 'number' not found in the string.
'number' sub string is present but first charecter is Capital:'Number'.$endl";
	print "In this case I am using stristr() method  for case-insensitive$endl";

	print "9. echo stristr(\$str, \"number\");$endl";
	print "  ** ".stristr($str, "number").$endl;

?>

