<?php include("db.php"); ?>
<?php include("header.php"); ?>
	
	<h3>Последние новости</h3>
				
	<ul class="list-group">
	
	<?php 
			$query = "SELECT * FROM `news` ORDER BY `pub_time` DESC";
				
			$result = mysqli_query($connection, $query);
				
			while($row = mysqli_fetch_array($result)){
	?>
			<li class="list-group-item">
				<span class="tag tag-default tag-pill float-xs-right">
					<i class="fa fa-calendar"></i> 
					<?php echo $row["pub_time"]; ?>
				</span>
				<a href="./show.php?id=<?php echo $row["id"]; ?>">
					<i class="fa fa-file-text-o"></i> 
					<?php echo $row["title"]; ?>
				</a>
			</li>
				
	<?php 
			}	
	?>
					
	</ul>
				
<?php include("footer.php"); ?>	