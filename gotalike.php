<?php
$file = fopen("likes.txt", "r");
$strlikes = fread($file, filesize("likes.txt"));
fclose($file);

$likes = intval($strlikes) + 1;

$file = fopen("likes.txt", "w");
$abc = "baa";
fwrite($file, $abc);
fclose($file);
echo 'Hello';
echo '<br>Likes ought to be ' . $likes . ' now.';
?>
