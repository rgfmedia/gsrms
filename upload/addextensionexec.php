<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"extension/" . $_FILES["image"]["name"]);

			$location="extension/" . $_FILES["image"]["name"];
			$date=$_POST['date'];
			$title=$_POST['title'];
			$spn=$_POST['spn'];
			$combo=$_POST['combo'];

			$update=mysql_query("INSERT INTO extention (date, title, bene, dept, content)
VALUES
('$date','$title','$spn','$combo','$location')");


			header("location: extension.php");
			exit();


	}


?>
