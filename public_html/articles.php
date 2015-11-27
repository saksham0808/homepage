<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<LINK REL=StyleSheet HREF="css/custom.css" TYPE="text/css">
		<title>Saksham Sharma</title>
	</head>
	<body>
		<div class="container-fluid">
			<?php $filename = $_SERVER['PHP_SELF'];?>
			<?php include 'page_elements/header.php' ?>
			<div class="container">
			<div class="row">
				<!--<div class="col-sm-2"> </div>-->
				<div class="col-sm-12">

					<?php
			          // include markdown content as seperate file for maintainability
					  require_once("../db_data/tech/" . $_GET["name"] . ".md");
	          
	    		      //setup parsedown
			          require_once("helpers/parsedown.php");
			          $parsedown = new parsedown();

			          //parse markdown as html
			          echo $parsedown->text($markdown); 
					?>
					<?php include 'page_elements/comments.php'?>
					<?php include 'page_elements/writeups.php'?>
				</div>	
			</div>
		   </div>
			<?php include 'page_elements/footer.php'?>

	</body>
</html>
