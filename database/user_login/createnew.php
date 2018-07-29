<!DOCTYPE html>
<html lang="en">
        <head>
                <title>Public Contacts</title>
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
        	<?php
					session_start();
					$username = $_SESSION["username"];
					$flag = false;
				
					if(!isset($username)) {
						print "<div data-role=\"appbar\" class=\"app-bar\">
					<ul class=\"app-bar-menu\">
						<li><a href=\"public_page.php\">Back</a></li>
					</ul>
				</div>";
						print "<h1>You are not authorised user.<br/>You can not create any contact. Sorry!<br/>You need to Login to Create Contacts.</h1>";
						exit();
					}
					print "<div data-role=\"appbar\" class=\"app-bar\">
					<ul class=\"app-bar-menu\">
						<li><a href=\"public_page.php\">Cancel</a></li>
					</ul>
					<ul class=\"app-bar-menu place-right\">
						<li><a href=\"public_page.php\">Home</a></li>
					</ul>
				</div>";
						
				?>
				<h1>Create New Contact</h1>
				<div class="grid form">
				<form action="savecontact.php" method="post" >
					<div class="cell">
						<label>Name</label>
						<div class="input-control text full-size">
							<input type="text" name="name"/>
						</div>
					</div>
					<div class="cell">
						<label>Phone</label>
						<div class="input-control text full-size">
							<input type="text" name="phone"/>
						</div>
					</div>
					<div class="cell">
						<input class="button larg-button info" type="submit" value="Save" />
					</div>
				</form>
				</div>
				
			</div>
        </body>
</html>

