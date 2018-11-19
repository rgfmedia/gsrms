<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"extension/" . $_FILES["image"]["name"]);

			$ttxlocation="extension/" . $_FILES["image"]["name"];
			$ttxdate=$_POST['tt_date'];
			$ttxtitle=$_POST['tt_title'];
			$ttxbene=$_POST['tt_bene'];
			$ttxdept=$_POST['tt_dept'];
			$ttxid=$_POST['tt_id'];



			$update=mysql_query("UPDATE extention SET date='$ttxdate', title='$ttxtitle', bene='$ttxbene', dept='$ttxdept', content='$ttxlocation' where ext_id='$ttxid'");

			// echo "<scrip> alert('Updated');</script>";
			 echo "<meta http-equiv='refresh' content='0;URL=extension.php' />";
			
			// exit();
			 

	}


?>
