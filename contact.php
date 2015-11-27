<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<LINK REL=StyleSheet HREF="custom.css" TYPE="text/css">
		<style>
			img.displayed {
				display: block;
				max-width:50%;
				max-height:50%;
				margin-left: auto;
				margin-right: auto;
			}
		</style>
		<title>Saksham Sharma</title>
	</head>
	<body>
		<div class="container-fluid">
			<?php $filename = $_SERVER['PHP_SELF'];?>
			<?php include 'header.php' ?>
			<div class="row">
				<br><br>
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
					<a target="_blank" href="https://in.linkedin.com/pub/saksham-sharma/b2/230/204"><img src="./images/linkedin.png" class="displayed"></a><br>
					<a target="_blank" href="https://github.com/saksham0808"><img src="./images/GitHub.jpg" class="displayed"></a><br>
					<a target="_blank" href="https://facebook.com/saksham08"><img src="./images/facebook.png" class="displayed"></a><br>
					<a target="_blank" href="https://instagram.com/saksham0808"><img src="./images/insta.jpg" class="displayed"></a><br>
				</div>	
				<div class="col-sm-4">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<br><br>
					<?php include 'footer.php' ?>
				</div>
			</div>
		</div>
	</body>
</html>
