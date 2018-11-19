<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"memo/" . $_FILES["image"]["name"]);

			$location="memo/" . $_FILES["image"]["name"];
			$date=$_POST['date'];
			$title=$_POST['title'];
			$spn=$_POST['spn'];
			$combo=$_POST['combo'];
			$id=$_POST['id'];



			$update=mysql_query("UPDATE momos SET date='$date', title='$title', official='$spn', combo='$combo', content='$location' where memo_id='$id'");


			header("location: memo.php");
			exit();


	}


?>
