<?php
$headeritems = array("index.php"=>"Home", "https://github.com/saksham0808"=>"GitHub", "https://facebook.com/saksham08"=>"Facebook", "Arch.pdf"=>"Ace Guide to Arch Linux");
$headerwidth = "3";

$aloo = "index.php";
$_GLOBALS['new'] = "/$aloo";
function echoclass($link) {
	global $filename;
	$itemclass = "";
	if ($link == "Arch.pdf")
		$itemclass = "arch";

	else if (strcmp("/$link", $filename) == false)
		$itemclass = "current";
	return $itemclass;
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

foreach($headeritems as $link=>$dname)
{
	echo '<div class="col-sm-3">
			<a class="' . echoclass($link) . '" href="' . $link . '">' . $dname . '</a>
		  </div>
		';
}

echo '
	</div>
</div>
<br><br>
';
?>
