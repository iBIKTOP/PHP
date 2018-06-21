<?
	$count = $_COOKIE["count"];
	$count++;

	setcookie("count", $count, time() + 3*24*60*60);

?>
<h1>Coocie counter: <?=$count?></h1>