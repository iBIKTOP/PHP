<?
	$connect = mysqli_connect('localhost','root','','db2');
	$id = $_REQUEST["id"];
	mysqli_query($connect, "DELETE FROM `messages` WHERE `id`='$id'");
	header("Location: /lesson20/");
	exit();
?>