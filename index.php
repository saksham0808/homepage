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
			<div class="col-sm-2">
				<!--<br><br><br><br>-->
				<!--<ul id="sidebar">-->
					<!--<li>Facebook</li>-->
					<!--//<li>Instagram</li>-->
				<!--</ul>	-->
			</div>
			<div class="col-sm-9">
			
				<h2><mark>Reverie of a coder</mark></h2>
				<?php echo readfile("reverie.txt"); ?>

			</div>	
		</div>

<?php
//$servername = "localhost";
//$username = "root";
//$password = "0808";

//$conn = mysqli_connect($servername, $username, $password);

//if (!$conn) {
    //die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
?>

		<!--<div class="row">-->
		<!--<div class="col-sm-4"></div>-->
		<!--<div class="col-sm-4" align="center">-->
			<!--<br><br>-->
			<!--Like this website? Give me a thumbs up ! Have a nice day ! :)-->
			<!--<form method="post" action="*****">-->
				<!--<input type="image" src="thumbsup.gif" alt="Good work!" name="submit">-->
			<!--</input>	-->
		<!--</div>-->
		<!--<div class="col-sm-4"></div>-->

		<!-- Closing tag for container-fluid follows -->
		</div>
	</body>
</html>
