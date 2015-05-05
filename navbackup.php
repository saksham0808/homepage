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
<nav class="fixed-nav-bar">
<div class="row bg-primary">
	<div id="navlinks1" role="navigation">';

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
</nav>
<br><br>
';
?>
