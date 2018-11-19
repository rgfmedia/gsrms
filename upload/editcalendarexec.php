<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"calendar/" . $_FILES["image"]["name"]);

			$location="calendar/" . $_FILES["image"]["name"];
			$title=$_POST['title'];
			$id=$_POST['id'];



			$update=mysql_query("UPDATE calendar SET title='$title', content='$location' where cal_id='$id'");


			header("location: calendar.php");
			exit();


	}


?>
