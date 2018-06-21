<?php 
	
	$message 	= $_REQUEST["message"];

	if(strlen($message) > 0 && $_COOKIE["label"]!="black"){
		$message = strip_tags($message);
		$date = date("H:i:s d.m.Y");
		$message = "<div><b>$date</b> $message</div>";
		file_put_contents("data.txt", $message, FILE_APPEND);
		
		setcookie("label","black", time()+5);

		header("Location: /lesson21");
		exit();
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container">		
		<h1 class="text-xs-center">Книга отзывов</h1>
		<?if ($_COOKIE["label"]!="black"){?>
			<form>
				<div class="form-group">
					<label for="user_name_id" class="form-control-label">Ваше сообщение: </label>
					<input type="text" name="message" class="form-control" id="message_id" placeholder="Введите сообщение...">
				</div>
				<button type="submit" name="submit_button" class="btn btn-primary">Отправить</button>
			</form>		
		<?}?>	
		<hr>

		
		<?php @include("data.txt"); ?>

	</div>
</body>
</html>