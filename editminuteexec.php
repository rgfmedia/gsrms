<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);

	
		
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"minutes/" . $_FILES["image"]["name"]);
			
			$ttlocation="minutes/" . $_FILES["image"]["name"];
			$ttdate=$_POST['t_date'];
			$tttitle=$_POST['t_title'];
			$ttofficer=$_POST['t_officer'];
			$ttid=$_POST['t_id'];
			

			
			$update=mysql_query("UPDATE mins SET date='$ttdate', title='$tttitle', officer='$ttofficer', content='$ttlocation' where min_id='$ttid'");
			
			
			header("location: minute2.php");
			exit();
		
			
	}


?>
