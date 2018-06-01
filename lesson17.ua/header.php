<!DOCTYPE html>
<html>
<head>
	<title>lesson_17</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<style type="text/css">
		.container, .jumbotron{
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<?
		function act($file){
			if($_SERVER[SCRIPT_NAME] == "/$file.php")
				{
					echo "active";
				}
		}
	?>
	<div class="container">
		<ul class="nav nav-pills">
		  <li class="nav-item">
		    <a class="nav-link <?act("index")?>" href="index.php">Главная</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link <?act("products")?>" href="products.php">Продукция</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link <?act("contacts")?>" href="contacts.php">Контакты</a>
		  </li>
		</ul>
		<div class="jumbotron jumbotron-fluid">
		  <div class="container">
		    <h1 class="display-4">Fluid jumbotron</h1>
		    <p class="lead">Это модифицированный jumbotron, который занимает все горизонтальное пространство своего родителя.</p>
		  </div>
		</div>
<hr>