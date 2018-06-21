<?php include("../db.php"); 

		$id = intval($_REQUEST["id"]);
		
		$title = $_REQUEST["title"];
		$title = strip_tags($title);
		$title = mysqli_real_escape_string($connection, $title);
		
		$content = $_REQUEST["content"];
		$content = strip_tags($content);
		$content = mysqli_real_escape_string($connection, $content);
	
		if((strlen($title) > 0) && (strlen($content) > 0)){
				
			$query = "UPDATE `news` SET `title` = '$title', `content` = '$content' WHERE `id` = '$id'";
			
			mysqli_query($connection, $query);
			
			header("Location: ./index.php");
			
			exit();
			
		}
			
		$query = "SELECT * FROM `news` WHERE `id` = '$id'";
			
		$result = mysqli_query($connection, $query);
			
		$row = mysqli_fetch_array($result);

?>
<?php include("./header.php"); ?>
	
				<h3>Редактирование новости</h3>
				
				<form method="POST">
				
					<div class="form-group">
						<label for="title" class="form-control-label">Заголовок: </label>
						<input type="text" class="form-control" name="title" id="title" value="<?php echo $row["title"]; ?>">
					</div>
					
					<div class="form-group">
						<label for="content" class="form-control-label">Содержимое: </label>
						<textarea class="form-control" name="content" id="content" rows="5"><?php echo $row["content"]; ?></textarea>
					</div>
					
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<input type="submit" class="btn btn-success" value="Сохранить изменения">
				
				</form>
				
<?php include("./footer.php"); ?>	