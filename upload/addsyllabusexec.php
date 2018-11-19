<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"syllabus/" . $_FILES["image"]["name"]);

			$location="syllabus/" . $_FILES["image"]["name"];
			$course=$_POST['course'];
			$title=$_POST['title'];
			$codes=$_POST['code'];
			$teacher=$_POST['teacher'];
			$sy=$_POST['sy'];





			$update=mysql_query("INSERT INTO sylla (course, ctitle, ccode, teacher, sy, content)
VALUES
('$course','$title','$codes','$teacher','$sy','$location')");


			header("location: syllabus.php");
			exit();


	}


?>
