<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"syllabus/" . $_FILES["image"]["name"]);

			$txlocation="syllabus/" . $_FILES["image"]["name"];
			$txcourse=$_POST['txt_course'];
			$txtitle=$_POST['txt_title'];
			 $txcode=$_POST['txt_code'];
			$txteacher=$_POST['txt_teacher'];
						$txsy=$_POST['txt_sy'];
						$txid=$_POST['txt_id'];




			$update=mysql_query("UPDATE sylla SET  course='$txcourse', ctitle='$txtitle', ccode='$txcode',teacher='$txteacher', sy='$txsy', content='$txlocation' where s_id='$txid'");


			
			  echo "<meta http-equiv='refresh' content='0;URL=syllabus.php' />";

			  exit();


	}


?>
