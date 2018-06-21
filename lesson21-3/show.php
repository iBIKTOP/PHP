<?php include("db.php"); ?>
<?php include("header.php"); ?>
	
		<?php 
			
			$id = intval($_REQUEST["id"]);
			
			$query = "SELECT * FROM `news` WHERE `id` = '$id'";
				
			$result = mysqli_query($connection, $query);
			
			$row = mysqli_fetch_array($result);
		
		?>
	
			<h3><?php echo $row["title"]; ?></h3>
				
			<div>
				<i><i class="fa fa-calendar"></i> <?php echo $row["pub_time"]; ?></i>
			</div>
				
			<div class="text-justify">
				<?php echo $row["content"]; ?>
			</div>
				
<?php include("footer.php"); ?>	