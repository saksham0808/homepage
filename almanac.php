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
			<?php include 'header.php' ?>
			<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
					<h2><mark>Almanac<mark></h2>
					<p>
						I would be recording sources I read from, website I visit, tutorials I have followed for, say learning languages etc. Feel free to give this a look and pick whatever interests you :) 
						I hope this section is useful to you.<br>
						Of note, I got the idea for this section from <a href="http://www.srijanshetty.in" target="_blank">srijanshetty.in</a>, the homepage of a senior from my Department at IITK. 
						Well to be honest, I started making this website on seeing his.
					</p>
					<p>
						<h3>Linux</h3>
						<ul>
							<li><a href="http://www.amazon.in/Linux-Bible-Christopher-Negus/dp/111821854X" target="_blank">The Linux Bible</a>: Covers almost all the necessary things you need to know about Linux. I went through this book at a stage when I already knew quite a lot, and still ended up learning a lot more. Of course you can never cover everything about Linux however much you try, but this book strikes a great balance. The only downside (maybe) is that it is based on Fedora/RHEL. You can of course convert this into a good thing by finally getting out to try one of these.</li>
							<li><a href="https://wiki.archlinux.org" target="_blank">The Arch Linux Wiki</a>: This is probably the best source for anyone with basic Linux knowledge to jump onto. Cannot fix something? Cannot get to install something? Broke something? Want to know something? One stop for all the core Linux knowledge. Pro Tip: Try installing Arch atleast once. You would probably learn more about Linux in those few hours than you would learn in a week.</li>
						</ul>
						<h3>Haskell</h3>
						<ul>
							<li><a href="http://www.learnyouahaskell.com" target="_blank">Learn You a Haskell for Great Good</a>: An exceptional tutorial, very friendly and interesting. More tutorials should be like this.</li>
						</ul>
						<h3>Scala</h3>
						<ul>
							<li><a href="http://www.amazon.com/Functional-Programming-Scala-Paul-Chiusano/dp/1617290653" target="_blank">Functional Programming with Scala by Paul Chiusano</a>: I found the exercises in this book pretty good for people new to functional programming. I enjoyed the hours I spent thinking of pure functional solutions to simple tasks (this is where I started with Functional Programming)</li>
						</ul>
						<h3>HTML/CSS/PHP</h3>
						<ul>
							<li><a href="http://www.w3schools.com" target="_blank">w3schools</a>: Probably the best tutorials you can get to get started in web development. I made this site in a day while following the PHP tutorial (just cosmetic changes later on). They give you an interactive editor, a great number of good examples, and cover all the concepts really well. You should really give this a swirl, REALLY.</li>
						</ul>

					
					<?php include 'comments.php'?>
					<?php include 'writeups.php'?>
				</div>	
			</div>
		   </div>
			<?php include 'footer.php'?>

	</body>
</html>
