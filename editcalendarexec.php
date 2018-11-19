<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"calendar/" . $_FILES["image"]["name"]);

			$clocation="calendar/" . $_FILES["image"]["name"];
			$ccals=$_POST['txtcals'];
			$cid=$_POST['txtid'];



			$update=mysql_query("UPDATE calendar SET cals='$ccals', content='$clocation' where cal_id='$cid'");


			
			  echo "<meta http-equiv='refresh' content='0;URL=calendar.php' />";
			 exit();


	}


?>
