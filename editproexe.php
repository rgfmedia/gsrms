<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"profile/" . $_FILES["image"]["name"]);

			$plocation="profile/" . $_FILES["image"]["name"];
			$tname=$_POST['txtname'];
			$tarea=$_POST['txtarea'];
			// $cdate=$_POST['tdate'];
			$pid=$_POST['txtid'];



			$update=mysql_query("UPDATE profile SET  name='$tname', area='$tarea',  content='$plocation' where pro_id='$pid'");


			
			  echo "<meta http-equiv='refresh' content='0;URL=profile.php' />";

			  exit();


	}


?>
