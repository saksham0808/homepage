<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<LINK REL=StyleSheet HREF="custom.css" TYPE="text/css">
		<title>Saksham Sharma</title>
	</head>
	<body>
		<div class="container-fluid">

<?php $filename = $_SERVER['PHP_SELF'];?>
<?php

?>
<?php include 'header.php' ?>

		<div class="row">
			<div class="col-sm-2"> </div>
			<div class="col-sm-9">
			
<!-- Markdown version of writing begins -->
<?php
         // include markdown content as seperate file for maintainability
          require_once("mdvoyage.md");
          
          //setup parsedown
          require_once("parsedown.php");
          $parsedown = new parsedown();
          
          //parse markdown as html
          echo $parsedown->text($markdown); 
?>


				<h3 id="writings">My writings: </h3>
				<blockquote><a href="voyage.php">My Voyage through the seas of programming</a></blockquote>
				<blockquote><a href="shell.php">Where there is a shell, there is a way</a></blockquote>
				<blockquote><a href="linuxpro.php">Mod your linux like a pro</a></blockquote>
				<blockquote><a href="Arch.pdf">Ace guide to Arch Linux</a></blockquote>


			</div>	
		</div>

	</body>
</html>
