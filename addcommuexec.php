<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"communication/" . $_FILES["image"]["name"]);

			$location="communication/" . $_FILES["image"]["name"];
			$title=$_POST['title'];
			$date=$_POST['date'];
			$combo=$_POST['combo'];





			$update=mysql_query("INSERT INTO commu (date, title, sender, content)
			VALUES
			('$date','$title','$combo','$location')");


			header("location: commu.php");
	exit();


	}


?>
