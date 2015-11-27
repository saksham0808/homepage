<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<LINK REL=StyleSheet HREF="/css/custom.css" TYPE="text/css">
		<title>Saksham Sharma</title>
	</head>
	<body>
		<div class="container-fluid">
			<?php $filename = $_SERVER['PHP_SELF'];?>
			<?php include 'page_elements/header.php' ?>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">	
						<h2><mark>Reveries of a programmer</mark></h2>
						<br><p><h4>Hello, Namaste, Bonjour!</h4></p>
						<p>
						I am a soon-to-be sophomore student of Computer Science and Engineering at the Indian Institute of Technology, Kanpur; also known as IIT Kanpur.<br></p>
						<p>
						Some would say I am one of the good coders of my batch. Trying not to sound too complacent, I believe I am, am always coding up something new, this website being one of them, coded it up all from scratch to have a good grip over web-development. Well, I wanted to make a website I could be proud of for a while, and not look back at it to think it is kiddish.</p>
						<p>Getting back to the topic, I feel my journey into the world of coding has been an exceptional one. From a person who didn't even know arrays ( yep! ) when he came to college, to a person coding complete websites from scratch and such stuff, yes it has been extraordinary. <br>
						I figured it would be a good idea if my journey through the world of code is penned down. 
						</p>
						<br>
						<p><h4>Some bits about me and my computing preferences:</h4></p>
						<div class="bits">
							<p>I'm a fun loving, tall, lanky guy who codes 80% of the time of the day, mostly with classic rock playing on my headphones.</p>
							<p>Apart from coding, I am into PC gaming, badminton, photography and literature.</p>
							<p>I recently rekindled my interest in writing and poetry. Would be posting some things here soon in the musings section.</p>
						</div>
						<div class="bits">
							<br>
							<span>I <3 Linux, All of it</span>
							<p>Yes, I love Linux. Literally everything about it. I have installed Arch linux (my favorite, forever. Period.) around 25-30 times, in different scenarios, on different laptops, and thus have a well rounded experience.
							Not just install, I tend to customize it a lot, have a look at 'my-rc-files' repo on my git.
							</p>
							<br>
							<span>The king of text editors (in my opinion): Vim</span>
							<p>Vim is my favorite (wait, not just favorite, ONLY) text editor. One vim for everything under the sun. My vimrc is quite a decent looking one too. 
							Try giving it a look for some good ideas about how to get more productive with vim. I believe everyone would find something useful in there. It's there in the above mentioned repo.</p>
							<br>
							<span>Desktop Manager and ways to stay productive on Linux</span>
							<p>My favorite Desktop Window manager for Linux is i3wm, it's easy to customize once you get the hang of it, and tiling keeps my productivity at the peak at all times.
							If you haven't tried i3 before, I urge you to try it atleast once. Of note, you would take atleast a few hours to get used to it. In my case, I have it tweaked up to a large extent.
							I no longer feel comfortable in normal Desktop managers now. Besides, being able to ditch the mouse totally (courtesy Vimium and Vimerator plugins for Chrome and Firefox respectively) is a huge boon.
							Oh, and i3 as got great multi-monitor support, you would feel totally at home on a multi monitor setup within seconds (personal experience). If you are trying to become a seasoned and productive Linux user, I feel these things would serve you well.
							<br>
							I also like the GNOME Desktop Environment, although it is heavy and resouce hungry. It can be made to look exceptionally good looking, and yet be powerful. If tiling is not your cup of tea (or if you can do with the ShellShape plugin for GNOME shell), try GNOME 3 (Yes, you Ubuntu users still stuck on Unity, you too).
							</p>
							<br>
							<span>Photography</span>
							<p>Although I spend too much time coding, I tend to be on the lookout for photogenic scenes whenever I leave my room. Have a look at some of my Amatuer photographs <mark><a href="/carousel.php">here</a></mark>.</p>
							<br>
						</div>

						<?php include 'page_elements/writeups.php'?>
						<?php include 'page_elements/comments.php'?>
					</div>	
				</div>
			</div>
			<?php include 'page_elements/footer.php' ?>
		</div>
	</body>
</html>
