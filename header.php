<?php
$headeritems = array("index.php"=>"Home", "cv.php"=>"CV", "carousel.php"=>"Photography", "https://github.com/saksham0808"=>"GitHub", "Arch.pdf"=>"Ace Guide to Arch Linux", "contact.php"=>"Contact me");
$headerwidth = "2";

function echoclass($link) {
	global $filename;
	$itemclass = "";
	// This name is long so we want the hover height to be larger
	if ($link == "Arch.pdf")
		$itemclass = "arch";

	// Comparing current file name with link name using regex.
	if (preg_match("/[a-z]+\.php$/", $filename, $matches))
	{
		if(strcmp("$matches[0]", $link)==0)
			$itemclass="current";
	}
	return $itemclass;
}

function echotarget($link) {
	if ($link == "Arch.pdf" || $link == "https://github.com/saksham0808")
		return 'target="_blank"';
}

echo '
<div class="row">
	<div class="col-sm-7">
		<h1>Saksham Sharma <br>
			<small>B.Tech 1st Year, Computer Science and Engineering <br> IIT Kanpur </small>
		</h1>
	</div>
	<div class="col-xs-2">
		<br><br><br>
		<blockquote>Eat.Sleep.Code.</blockquote>
	</div>
	<div class="col-sm-1 img-responsive pull-right box-shadow">
		<br>
		<img src="me.jpg" class="img-rounded" height="140" align="right" id="box-shadow-custom">
	</div>
</div>
<br>
<div class="row bg-primary">
	<div id="navlinks">';

// Display each header item, reading from the associative array defined.
foreach($headeritems as $link=>$dname)
{
	echo '<div class="col-sm-' . $headerwidth . '">
			<a class="' . echoclass($link) . '" ' . echotarget($link) . ' href="' . $link . '">' . $dname . '</a>
		  </div>
		';
}

echo '
	</div>
</div>
<br><br>
';
?>
