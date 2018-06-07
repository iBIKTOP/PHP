<!DOCTYPE html>
<html>
<head>
	<title>lessons</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
		// echo "<pre>";
		// 	print_r($_POST);
		// echo "</pre>";
		
		if(count($_POST)>0){
			$name = trim($_POST["name"]);//trim - обрезает пробелы в начале и в конце строки
			$phone = trim($_POST["phone"]);
			$dt = date("Y-m-d H:i:s");

			if(strlen($name)<2){//strlen - в php проверка длинны строки
				$msg = "Введите имя подлиннее!";
			}
			elseif (!is_numeric($phone)) {//is_numeric - в php проверка на число, возвращает boolean
				$msg = "Не коректно введен номер телефона!";
			}
			else{			
				//file_put_contents("content.txt", "$dt-|-$name-|-$phone\r\n", FILE_APPEND); //записываем в файл
				//$mysqli = new mysqli("localhost","root","","db");
    			//$mysqli->query("SET NAMES 'utf8'");
    			// $success = $mysqli->query ("INSERT INTO `users`(`name`, `phone`,`date`) VALUES ('name','123456','12.05.2018')");

				$mysqli = new PDO('mysql:host=localhost;dbname=db','root','');
    			$mysqli->prepare("SET NAMES 'utf8'");
    			$success = $mysqli->prepare("INSERT INTO users (name,phone,date) VALUES(:name,:phone,:date)");
    			$arr = ['name'=>$name, 'phone'=>$phone, 'date'=>$dt];
    			$success->execute($arr);
    			//echo $success;//если добавилось то выведит 1


				$msg = "Ваша заявка принята, спасибо, Вам перезвонят!";
			}
		}
		else{
			$name = '';
			$phone = '';
			$msg = "Заполните поля выше!";
		}
	?>

	<form method="POST">
		login<br>
		<input type="text" name="name" value="<?=$_POST["name"]?>" placeholder="Пример: Иван"><br>
		phone<br>
		<input type="text" name="phone" value="<?=$_POST["phone"]?>" placeholder="Пример: 050-666-99-66"><br>
		<input type="submit" value="Отправить"><br>
		<span style="color: red;"><?=$msg?></span>
	</form>
</body>
</html>


