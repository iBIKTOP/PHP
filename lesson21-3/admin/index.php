<?php include("../db.php"); ?>
<?php include("./header.php"); ?>
	
				<h3>Последние новости | <a href="./add.php" class="btn btn-success btn-sm"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Добавить</a></h3>
				
				<div class="list-group">
				<?php 

				$query = "SELECT * FROM `news` ORDER BY `pub_time` DESC";
				
				$result = mysqli_query($connection, $query);
				
				while($row = mysqli_fetch_array($result)){
				?>
					<div class="list-group-item clearfix">

						<span>
							<?php echo $row["title"]; ?>
							<i>(<?php echo $row["pub_time"]; ?>)</i>
						</span>
						
						<span class="pull-right">
							<a href="../show.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-info">
								<i class="fa fa-eye"></i> Просмотреть
							</a>
							<a href="./edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-warning">
								<i class="fa fa-pencil-square-o"></i> Редактировать
							</a>	
							<a href="./delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-danger">
								<i class="fa fa-trash-o"></i> Удалить
							</a>	
						</span>
						
					</div>
				
				<?php }	?>
					
				</div>

<?php include("./footer.php"); ?>	