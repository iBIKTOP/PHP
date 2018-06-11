<?
	$connect = mysqli_connect('localhost','root','','db2');

	$data = htmlspecialchars(strip_tags(trim($_REQUEST["message"])));
	$data = mysqli_real_escape_string($connect, $data);// эта функция экранирует символы.
	if(strlen($data)>3){
		$q = "INSERT INTO `messages` (`content`,`publish`) VALUES ('$data',NOW())"; //NOW()-время в sql
		mysqli_query($connect, $q);
		header("Location: /lesson20/");
		exit();
	}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Комментарии + База данных</title>
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
		<h1 class="text-xs-center">Комментарии + База данных</h1>
		<form method="post">
			<div class="form-group row">
				<label for="message_textbox" class="col-xs-2 col-form-label">
					<b>Ваше сообщение: </b>
				</label>
				<div class="col-xs-8 ">
					<input type="text" name="message" class="form-control" id="message_textbox" placeholder="Введите сообщение...">
				</div>
				<div class="col-xs-2">
					<input type="submit" value="Отправить" class="btn btn-primary">
				</div>
				
			</div>
		</form>			
		<hr>
			
		<!--   ********************   Вывод данных из БД   ************************    -->
		<?php
			if($_REQUEST["show"]=="all"){
				$db = mysqli_query($connect, 'SELECT * FROM `messages` ORDER BY `publish` DESC');
			}else $db = mysqli_query($connect, 'SELECT * FROM `messages` ORDER BY `publish` DESC LIMIT 5');
			// if(!$connect || !$db){
			// }
			while ($row = mysqli_fetch_array($db)) {?>		
				<!-- Разметка одного сообщения -->
				<div class="row">
				
					<div class="col-xs-2">
						<b><?echo $row['publish']?></b>
					</div>	
					
					<div class="col-xs-8 ">
						<i><?echo $row['content']?></i>
					</div>
					
					<div class="col-xs-2">
						<a href="del.php?id=<?=$row['id']; ?>" class="btn btn-danger">Удалить</a>
					</div>	
					
				</div>
				<!-- Конец разметки одного сообщения -->
		<?php } ?> <!-- закрываем цыкл -->

		<hr>

		<?
			if($_REQUEST["show"]=="all"){ ?>
				<div class="col-xs-12 text-xs-center">
					<a href="/lesson20/" class="btn btn-info">Показать НЕ всё</a>
				</div>
			<?}else{?>
				<div class="col-xs-12 text-xs-center">
					<a href="/lesson20/?show=all" class="btn btn-info">Показать всё</a>
				</div>
			<?}
		?>

		
		
	</div>
</body>
</html>