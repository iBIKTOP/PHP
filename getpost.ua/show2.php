<!DOCTYPE html>
<html>
<head>
	<title>show</title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>

<?
	//$file = file("content.txt");//file_get_contents
	// echo "<pre>";
	// 	var_dump($file);//ИЛИ МОЖНО ИСПОЛЬЗОВАТЬ print_r
	// echo "</pre>";

	$mysqli = new PDO('mysql:host=localhost;dbname=db','root','');//подключаем базу
	$mysqli->query("SET NAMES 'utf8'");//кодировка
	$success = $mysqli->prepare("SELECT * FROM users");//выбрать все значения с таблицы
	$success->execute();//выполнить действия 
	$arr = $success->fetchAll(PDO::FETCH_ASSOC);//разбивает обьект и передает его в виде массива
	// echo "<pre>";
	// 	var_dump($arr);//ИЛИ МОЖНО ИСПОЛЬЗОВАТЬ print_r
	// echo "</pre>";

	echo "<table>";
	foreach ($arr as $value) {
		echo "<tr>";
		echo "<td>".$value['id']."</td>";
		echo "<td>".$value['date']."</td>";
		echo "<td>".$value['name']."</td>";
		echo "<td>".$value['phone']."</td>";
		echo "</tr>";
	}	
	
	echo "</table>";
?>

<style type="text/css">
	table, td{
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>
