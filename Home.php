<?php include 'header.php'; ?>
<br>
<div class="container">
	<ul class="breadcrumb "><li><a href="home.php"><span class="glyphicon glyphicon-home"> </span> Home</a></li></ul>
	<div class="col-sm-4">
	<?php if ($_SESSION['SESS_FIRST_NAME']=="admin"){ 
		echo '<center><h2>Welcome back, Admin!</h2></center>';
		echo '<hr>';
		echo '<strong>Note:</strong> Click + icon to add files/documents.';
		echo '<hr>';
		
	}
	else{
		echo '<center><h2>Welcome, ';
		echo $_SESSION['SESS_FIRST_NAME'];
		echo '!</h2></center>';
		echo '<hr>';

	}
	?>
	
	<STRONG>Brief knowledge about ARMS</STRONG><br><br>
	<p class="text-justify">
		Automated Records Management System(<strong>ARMS</strong>) is a centralize records software for organization where every files/documents stored in one place. <br><br> ARMS vision is to preserved important files/documents for organization or individual. Our mission is to be one of a reliable and secured records management system.
	</p>
	</div>
	<div class="col-sm-8">
		<img src="images/SDSDSDS.jpg" width="100%">
	</div>
</div>

<br>
<br>
<?php include 'footer.php'; ?>