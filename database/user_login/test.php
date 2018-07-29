<?php
	require("checkconn.php");
	/*
	$s = "insert into users values('ahmad','moon@light','ahmad.sk98@gmail.com')";
	$st = $conn->query($s);
	*/
	$st = addUser("ahmad","moon@light","ahmad.sk98$gmail.com");
	print $st;
?>
