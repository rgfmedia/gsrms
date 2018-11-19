<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"research/" . $_FILES["image"]["name"]);

			$txtlocation="research/" . $_FILES["image"]["name"];
			$txttitle=$_POST['txtitle'];
			$txtpropenent=$_POST['txproponent'];
			 $txtdate=$_POST['txdate'];
			$txtid=$_POST['txid'];



			$update=mysql_query("UPDATE research SET  date='$txtdate', title='$txttitle', proponent='$txtpropenent', content='$txtlocation' where res_id='$txtid'");


			
			    echo "<meta http-equiv='refresh' content='0;URL=research.php' />";

			   exit();


	}


?>
