<?
	date_default_timezone_set("Ukraine/Kiev");//указываем серверу временную зону.
	$data = trim($_REQUEST['message']);
	$dt = date("d.m.Y H:i:s");

	if(strlen($data)>0){
		$data = strip_tags($data,"<b><i>");//обрезает все теги, в скобках можно указать исключения!!!
		$data = htmlspecialchars("<div><b>$dt</b> <i>$data</i></div>");//переделывает все теги на спецсимволы
		$old = file_get_contents("data.txt");


		file_put_contents("data.txt", $data.$old);	
		header("Location: /lesson18");//перенаправляем страницу на начало, url при этом не сохраняется, таким образом мы не будем постоянно сохранять данные при обновлении страницы.
		exit();//заканчиваем скрипт
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lesson_18</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container">		
		<h1 class="text-xs-center">Книга отзывов</h1>
		<form method="post">
			<div class="form-group">
				<label for="user_name_id" class="form-control-label">Ваше сообщение: </label>
				<input type="text" name="message" class="form-control" id="message_id" placeholder="Введите сообщение...">
			</div>
			<button type="submit" class="btn btn-primary">Отправить</button>
		</form>			
		<hr>
		<?
		// echo "<pre>";
		include("data.txt");
		// echo "</pre>";
		?>
	</div>
</body>
</html>