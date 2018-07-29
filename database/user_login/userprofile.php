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
						<li><a href="public_page.php">Home</a></li>
					</ul>
			</div>
			
        	<?php
        			session_start();
					print "<h1>".$_SESSION['username'].", Logout Successfully.</h1>";
					session_unset();
					session_destroy();
			?>
				
			</div>
        </body>
</html>

