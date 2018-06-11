<!DOCTYPE html>
<html>
<head>
	<title>lesson_19</title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>

<H1>База данных</H1>

<?
	$connect = mysqli_connect("localhost", "root","","bd");
	$p = "SELECT * FROM `friends`";
	$result = mysqli_query($connect, $p);
	while($row = mysqli_fetch_array($result)){//mysqli_fetch_array - берет строку из таблицы и возвращает массив
		echo $row['name'];
		echo " - ";
		echo $row['age'];
		echo "<br>";
	} 

	$connect = mysql_connect('localhost','root','');
	$bd = mysql_select_db('bd');
	mysql_set_charset('utf8');//mysql_query("SET NAME 'utf8'");
	if(!$connect || !$bd){//проверка на подключение
		exit(mysql_error());
	}
	$result = mysql_query("SELECT * FROM `friends`");
	while($row = mysql_fetch_array($result)){//mysqli_fetch_array - берет строку из таблицы и возвращает массив
		echo $row['name'];
		echo " - ";
		echo $row['age'];
		echo "<br>";
	} 
	mysql_close();
?>