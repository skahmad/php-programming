<?php
	// uniqid(string, boolean) or you may call md5()

	print "calling uniqid(\"\")\n";
	$userid = uniqid("");
	print "user id : $userid\n";
	print "length of userid : ".strlen($userid)."\n";
	print "-----------------------------\n";

	print "calling uniqid(\"\",FALSE)\n";
	$userid = uniqid("",FALSE);
	print "user id :  $userid\n";
	print "length of $userid : ".strlen($userid)."\n";
	print "-----------------------------\n";


	print "calling uniqid(\"\",TRUE)\n";
	$userid = uniqid("",TRUE);
	print "user id : $userid\n";
	print "length of userid : ".strlen($userid)."\n";
	print "------------------------------\n";

	print "calling uniqid(\"apple\")\n";
	$userid = uniqid("apple");
	print "user id : $userid\n";
	print "length of userid : ".strlen($userid)."\n";
	print "------------------------------\n";


	print "calling md5() method\n";
	$idmd5 = md5("apple");
	print "idmd5 : $idmd5\n";
	print "--------------------------\n";

	$name = 'moon';
	$prompt = 'My Name is ';


	$code = "$prompt .. name print after 3 second\n";
	// sleep(integer) it takes integer argument as second
	// usleep(3000000); it waits 3 seconds, it takes microsecond

	print "$name\n";

	print $code."\n";
	print "Evalute above code\n";
//	eval("$name");

?>

