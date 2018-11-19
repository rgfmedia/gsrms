<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"forms/" . $_FILES["image"]["name"]);

			$flocation="forms/" . $_FILES["image"]["name"];
			$ftitle=$_POST['ftitle'];
			$fuser=$_POST['fuser'];
			// $cdate=$_POST['tdate'];
			$fid=$_POST['fid'];



			$update=mysql_query("UPDATE forms SET  title='$ftitle', user='$fuser',  content='$flocation' where f_id='$fid'");


			
			  echo "<meta http-equiv='refresh' content='0;URL=forms.php' />";

			  exit();


	}


?>
