<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"forms/" . $_FILES["image"]["name"]);

			$location="forms/" . $_FILES["image"]["name"];
			$title=$_POST['title'];
			$combo=$_POST['combo'];





			$update=mysql_query("INSERT INTO forms (title, user, content)
			VALUES
			('$title','$combo','$location')");


			header("location: forms.php");
			exit();


	}


?>
