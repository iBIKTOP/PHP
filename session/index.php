<?
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Работа с SESSION</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	if(isset($_POST['send'])){
		$_SESSION['name'] = strip_tags(trim($_POST['name']));
	}
	if (!isset($_SESSION['name'])||$_SESSION['name']==''){?>
		<form method="post" action="">
			<input type="text" name="name"> 
			<button type="submit" name="send">SEND</button>
		</form>
	<?php
	}
	else{
		echo "Hello, ".$_SESSION['name'];
	}
	?>
</body>
</html>