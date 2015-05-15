<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
	<style>
		img.displayed {
			display: block;
			margin-left: auto;
			margin-right: auto
		}
	</style>


		<LINK REL=StyleSheet HREF="custom.css" TYPE="text/css">
		<title>Saksham Sharma</title>
	</head>
	<body>
		<div class="container-fluid">

<?php $filename = $_SERVER['PHP_SELF'];?>
<?php include 'header.php' ?>

<script>
$(document).ready(function(){
	 //Activate Carousel
	$("#myCarousel").carousel();
    
	 //Enable Carousel Indicators
	$(".item1").click(function(){
		$("#myCarousel").carousel(0);
	});
	$(".item2").click(function(){
		$("#myCarousel").carousel(1);
	});
	$(".item3").click(function(){
		$("#myCarousel").carousel(2);
	});
	$(".item4").click(function(){
		$("#myCarousel").carousel(3);
	});
	$(".item5").click(function(){
		$("#myCarousel").carousel(3);
	});
	$(".item6").click(function(){
		$("#myCarousel").carousel(3);
	});
    
	 //Enable Carousel Controls
	$(".left").click(function(){
		$("#myCarousel").carousel("prev");
	});
	$(".right").click(function(){
		$("#myCarousel").carousel("next");
	});
});
</script>


		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
<!-- Code for carousel -->
<div class="container" align="center">
  <div id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	  <li class="item1 active"></li>
	  <li class="item2"></li>
	  <li class="item3"></li>
	  <li class="item4"></li>
	  <li class="item5"></li>
	  <li class="item6"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">

	  <div class="item active">
		<img src="images/Fall.jpg" alt="Fall" class="img-rounded displayed" id="box-shadow-custom">
	  </div>

	  <div class="item">
		<img src="images/Juhu.jpg" alt="Juhu" class="img-rounded displayed" id="box-shadow-custom">
	  </div>

	  <div class="item">
		<img src="images/long.jpg" alt="Long way to go" width="460" height="345" class="img-rounded displayed" id="box-shadow-custom">
	  </div>

	  <div class="item">
		<img src="images/Reflections.jpg" alt="Reflections" width="460" height="345" class="img-rounded displayed" id="box-shadow-custom">
	  </div>

	  <div class="item">
		<img src="images/Something for a rainy day.jpg" alt="Cloudy day" width="460" height="345" class="img-rounded displayed" id="box-shadow-custom">
	  </div>

	  <div class="item">
		<img src="images/Science.jpg" alt="Science as it was" width="460" height="345" class="img-rounded displayed" id="box-shadow-custom">
	  </div>

	</div>

	 <!--Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" role="button">
	  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button">
	  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
  </div>
</div>
<!--Code for carousel finish-->
			</div>	
			<div class="col-sm-2"></div>
		</div>

	</body>
</html>
