<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"ppmp/" . $_FILES["image"]["name"]);

			$pplocation="ppmp/" . $_FILES["image"]["name"];
			$ppsy=$_POST['txt_sy'];
			$ppid=$_POST['txt_id'];



			$update=mysql_query("UPDATE ppmp SET sy='$ppsy', content='$pplocation' where ppmp_id='$ppid'");


			
			  echo "<meta http-equiv='refresh' content='0;URL=ppmp.php' />";
			  exit();


	}


?>
