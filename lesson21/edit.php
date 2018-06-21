<?
	$connect = mysqli_connect('localhost','root','','db2');
	$id = $_REQUEST["id"];
	$res = mysqli_query($connect, "SELECT * FROM `messages` WHERE `id`='$id'");
	$content = mysqli_fetch_array($res);
	$con = $content["content"];
	// header("Location: /lesson20/");
	// exit();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Редактирование:</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<style>
	
		.container {
			margin-top: 20px;			
		}
	
		.container h1 {
			margin: 20px;			
		}
		
		input[type="text"]{
			border: 2px solid #ddd; 	
		}
		
		
		
		.row {
			margin-top: 10px;
			margin-bottom: 10px;
			padding: 10px 0;
			border-radius: 10px;
		}
		
		.row:nth-child(even) {
			background-color: #f5f5f5;			
		}
		
	</style>
</head>
<body>
	<div class="container">		
		<h1 class="text-xs-center">Редактирование:</h1>
		<form method="post">
			<div class="form-group row">
				<label for="message_textbox" class="col-xs-2 col-form-label">
					<b>Ваше сообщение: </b>
				</label>
				<div class="col-xs-8 ">
					<input type="text" name="message" class="form-control" id="message_textbox" placeholder="Введите сообщение..." value="<?=$con?>">
				</div>
				<div class="col-xs-2">
					<input type="submit" name="save" value="Сохранить" class="btn btn-primary">
				</div>
				
			</div>
		</form>
	</div>
</body>
</html>