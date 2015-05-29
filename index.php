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

<script type="text/javascript">
$(document).ready(function(){
  $(window).on('scroll',function() {
    var scrolltop = $(this).scrollTop();
 
    if(scrolltop >= 215) {
      $('#navbackup').fadeIn(250);
    }
     
    else if(scrolltop <= 210) {
      $('#navbackup').fadeOut(250);
    }
  });
});
</script>


	</head>
	<body>
		<div class="container-fluid">
			<?php $filename = $_SERVER['PHP_SELF'];?>
			<?php include 'header.php' ?>
			<div class="container">
				<div class="row">
					<!--<div class="col-sm-2"></div>-->
					<div class="col-sm-12">	
						<h2><mark>Reveries of a programmer</mark></h2>
						<?php echo readfile("reverie.txt"); ?>
						<?php include 'writeups.php'?>
						<?php include 'comments.php'?>
					</div>	
				</div>
			</div>
			<?php include 'footer.php' ?>
		</div>
	</body>
</html>
