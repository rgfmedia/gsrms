<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"research/" . $_FILES["image"]["name"]);

			$location="research/" . $_FILES["image"]["name"];
			$date=$_POST['date'];
			$title=$_POST['title'];
			$spn=$_POST['spn'];

			$update=mysql_query("INSERT INTO research (date, title, proponent, content)
VALUES
('$date','$title','$spn','$location')");


			header("location: research.php");
			exit();


	}


?>
