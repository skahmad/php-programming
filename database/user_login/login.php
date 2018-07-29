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
		    	<div data-role="appbar" class="app-bar">
					<ul class="app-bar-menu">
						<li><a href="public_page.php">Back</a></li>
					</ul>
					<ul class="app-bar-menu place-right">
						<li><a href="signup.php">Signup</a></li>
					</ul>
				</div>
				
				<?php
					session_destroy();
				?>
				
			</div>
			<div class="container page-content">
				<div class="grid form">
				<form action="signin.php" method="post">
					<div class="cell">
						<label>User Name</label>
						<div class="input-control text full-size">
							<input type="text" name="name"/>
						</div>
					</div>
					<div class="cell">
						<label>Password</label>
						<div class="input-control password full-size">
							<input type="password" name="authkey"/>
						</div>
					</div>
					<div class="cell">
						<input class="button larg-button primary" type="submit" value="Login" />
					</div>
				</form>
				</div>
			</div>
        </body>
</html>

