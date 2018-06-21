<?php include("../db.php"); 

		
		$title = $_REQUEST["title"];
		$title = strip_tags($title);
		$title = mysqli_real_escape_string($connection, $title);
		
		$content = $_REQUEST["content"];
		$content = strip_tags($content);
		$content = mysqli_real_escape_string($connection, $content);
	
		if((strlen($title) > 0) && (strlen($content) > 0)){
				
			$query = "INSERT INTO `news` (`title`, `content`, `pub_time`) VALUES('$title','$content',NOW())";
			
			mysqli_query($connection, $query);
			
			header("Location: ./index.php");
			
			exit();
			
		}

?>
<?php include("./header.php"); ?>
	
				<h3>Добавление новости</h3>
				
				<form method="POST">
				
					<div class="form-group">
						<label for="title" class="form-control-label">Заголовок: </label>
						<input type="text" class="form-control" name="title" id="title" required>
					</div>
					
					<div class="form-group">
						<label for="content" class="form-control-label">Содержимое: </label>
						<textarea class="form-control" name="content" id="content" rows="5" required></textarea>
					</div>
					
					<input type="submit" class="btn btn-success" value="Добавить новость">
				
				</form>
				
<?php include("./footer.php"); ?>	