<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);

	
		
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"br/" . $_FILES["image"]["name"]);
			
			$location="br/" . $_FILES["image"]["name"];
			$brnu=$_POST['brnu'];
			$mnu=$_POST['mnu'];
			$venue=$_POST['venue'];
			$date=$_POST['date'];
			$combo=$_POST['combo'];
			$category=$_POST['category'];
			

			
			$update=mysql_query("INSERT INTO board (br_no, m_no, pitsa, imp_dept, content, venue, category)
VALUES
('$brnu','$mnu','$date','$combo','$location','$venue','$category')");
			
			
			header("location: br.php");
			exit();
		
			
	}


?>
