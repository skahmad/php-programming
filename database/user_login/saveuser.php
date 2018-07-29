<!DOCTYPE html>
<html lang="en">
        <head>
                <title>Sign Up</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
                <!--
                <link rel="stylesheet" href="http://localhost/cdn/metro/v3/css/metro-all.min.css"/> -->
                <link rel="stylesheet"  href="http://localhost/cdn/metro/v3/css/metro.css"/>
                <script src="http://localhost/cdn/jquery/jquery.js"></script>
                <srcipt src="http://localhost/cdn/metro/v3/js/metro.js"></scrip>
                <link rel="stylesheet" href="style.css"/>
        </head>
        <body>
        	<div class="">
		    	<div data-role="appbar" class="app-bar">
					<ul class="app-bar-menu">
						<li><a href="public_page.php">Home</a></li>
					</ul>
				</div>
				<?php
					require("checkconn.php");
					$name = $_POST['name'];
					$password = $_POST['authkey'];
					$email = $_POST['email'];
					
					$s = "insert into $usrtable values('$name','$password','$email');";
					$sts = $conn->query($s);
					if($sts)
						print "<h1>User Account '".$name."' create Successfully.</h1>";
					else
						 print "<h1>User Account '".$name."' Create Error!</h1>";

				?>

			</div>
        </body>
</html>

