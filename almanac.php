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
					
					<h2>Some great Linux packages and hacks</h2>
					<ul>
						<li><a href="https://wiki.archlinux.org/index.php/Wine" target="_blank">Office 2010 on Linux with Wine</a>: Use Windows just for Office, because LibreOffice etc run out of steam sometime or the other? Read up here about how to install Office 2010 on Linux, and yes, it works perfectly. A tip: Install the packages mentioned here to install office, then use PlayOnLinux to install office finally. Keeps things streamlined.</li>
						<li><a href="http://www.playonlinux.com" target="_blank">PlayOnLinux</a>: A really cool tool to get some Windows softwares working on Linux. Is basically a wrapper for Wine, but contains scripts written by people who got some really cool softwares working, and handles all the dependencies itself. Neat !</li>
						<li><a href="https://cmus.github.io" target="_blank">CMUS</a>: A really nice Music Player for your terminal. There comes a time in almost every Linux lover's life when he/she wants to move all common tasks to the terminal and/or have Vim key bindings to accompany it. Remember CMUS when you reach there.</li>
						<li><a href="https://wiki.archlinux.org/index.php/Ranger" target="_blank">Ranger</a>: A cool and really fast file manager for the terminal, which really doesn't feel like terminal. You may think file managers need to stay graphical, but your opinion might change on seeing this. It can do almost all, if not all your tasks faster than the graphical ones. Do check it out.</li>
					</ul>


					<h2>Tutorials and Books</h2>
					<p>
						<h3>Linux</h3>
						<ul>
							<li><a href="http://www.amazon.in/Linux-Bible-Christopher-Negus/dp/111821854X" target="_blank">The Linux Bible</a>: Covers almost all the necessary things you need to know about Linux. I went through this book at a stage when I already knew quite a lot, and still ended up learning a lot more. Of course you can never cover everything about Linux however much you try, but this book strikes a great balance. The only downside (maybe) is that it is based on Fedora/RHEL. You can of course convert this into a good thing by finally getting out to try one of these.</li>
							<li><a href="https://wiki.archlinux.org" target="_blank">The Arch Linux Wiki</a>: This is probably the best source for anyone with basic Linux knowledge to jump onto. Cannot fix something? Cannot get to install something? Broke something? Want to know something? One stop for all the core Linux knowledge. Pro Tip: Try installing Arch atleast once. You would probably learn more about Linux in those few hours than you would learn in a week.</li>
						</ul>
						<h3>Haskell</h3>
						<ul>
							<li><a href="http://www.learnyouahaskell.com" target="_blank">Learn You a Haskell for Great Good</a>: An exceptional tutorial, very friendly and interesting. More tutorials should be like this.</li>
							<li><a href="https://wiki.haskell.org/H-99:_Ninety-Nine_Haskell_Problems" target="_blank">99 Haskell Problems</a>: Keep looking at a few exercises here once in a while. Interesting.</li>
							<li><a href="http://dmi3s.blogspot.in/2012/07/how-to-learn-haskell.html" target="_blank">How to learn Haskell</a>: This isn't a tutorial but a guide about how to learn it, Nice effort.</li>
							<li><a href="https://wiki.haskell.org/Hitchhikers_guide_to_Haskell" target="_blank">Hitchhiker's Guido to Haskell</a>: I just started reading this, but this one is promising too.</li>
						</ul>
						Of note, just don't end up confused about what to read from where. I would say go through 'Learn you a Haskell' first. Then Hitchhiker would be a good step.
						<h3>Scala</h3>
						<ul>
							<li><a href="http://www.amazon.com/Functional-Programming-Scala-Paul-Chiusano/dp/1617290653" target="_blank">Functional Programming with Scala by Paul Chiusano</a>: I found the exercises in this book pretty good for people new to functional programming. I enjoyed the hours I spent thinking of pure functional solutions to simple tasks (this is where I started with Functional Programming)</li>
							<li><a href="https://www.twitter.github.io/scala_school" target="_blank">Twitter Scala School</a>: A bit for the more experienced programmers.</li>
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
