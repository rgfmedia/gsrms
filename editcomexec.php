<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"communication/" . $_FILES["image"]["name"]);

			$clocation="communication/" . $_FILES["image"]["name"];
			$ctitle=$_POST['ttitle'];
			$csender=$_POST['tsender'];
			$cdate=$_POST['tdate'];
			$cid=$_POST['tid'];



			$update=mysql_query("UPDATE commu SET  title='$ctitle', sender='$csender', date='$cdate', content='$clocation' where com_id='$cid'");


			
			 echo "<meta http-equiv='refresh' content='0;URL=commu.php' />";

			 exit();


	}


?>
