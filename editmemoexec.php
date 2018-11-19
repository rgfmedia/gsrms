<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"memo/" . $_FILES["image"]["name"]);

			$elocation="memo/" . $_FILES["image"]["name"];
			$edate=$_POST['date'];
			$etitle=$_POST['title'];
			$espn=$_POST['spn'];
			$ecombo=$_POST['combo'];
			$eid=$_POST['m_id'];



			$update=mysql_query("UPDATE momos SET date='$edate', title='$etitle', official='$espn', combo='$ecombo', content='$elocation' where memo_id='$eid'");

			// echo "<scrip> alert('Updated');</script>";
			 echo "<meta http-equiv='refresh' content='0;URL=memo.php' />";
			
			// exit();


	}


?>
