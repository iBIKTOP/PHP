<?
	$file = file("content.txt");//file_get_contents
	// echo "<pre>";
	// 	var_dump($file);//ИЛИ МОЖНО ИСПОЛЬЗОВАТЬ print_r
	// echo "</pre>";

	echo "<table>";
	foreach ($file as $value) {
			$arr = explode("-|-", $value);//explode - разрезает нашу строку и создает массив
			echo "<tr>";
			foreach ($arr as $value) {
					echo "<td>$value</td>";
			}
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
