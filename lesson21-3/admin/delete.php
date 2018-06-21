<?php 

	include("../db.php"); 
	
	$id = intval($_REQUEST["id"]);
			
	$query = "DELETE FROM `news` WHERE `id` = '$id' LIMIT 1";
				
	mysqli_query($connection, $query);
	
	header("Location: ./index.php");
			

?>