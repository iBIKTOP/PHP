<html>
<head>
	<meta charset="utf-8">
	<title>Форма заказа</title>
	<style>
		body { padding:0; margin:0 auto;  font-family: 'Calibri'; width:800px; }
		h1 { text-align: center; }
		form {text-align: center;}
	</style>
	<?

		$name = $_REQUEST["user_name"];
		$email = $_REQUEST["user_email"];
		$order = $_REQUEST["user_order"];
		$msg = "$name | $email | $order";
		mail("admin@i.ua", "Тема письма", $msg);

	?>
</head>
<body>
	<h1>Форма заказа</h1>	
	<hr>

		<form>
			<p>Имя: <input type="text" name="user_name"> </p>
			<p>Email: <input type="email" name="user_email"> </p>
			<p>Описание заказа: <br> <textarea name="user_order" rows="10" cols="45"></textarea></p>
			<input type="submit" name="send_button" value="Отправить">
		</form>
	
</body>
</html>