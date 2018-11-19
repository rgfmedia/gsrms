<?php
	//Start session
	session_start();

	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	//unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  lang="en">
<head>
<title>Automated RMS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script> 

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script> 
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script> 
</head>
<style type="text/css">
  a{
    text-decoration: none;
    te
  }
  body{
        padding-top: 100px;
      }
      .panel{
      	width: 250px;
      	margin: auto;
      }
      .btn{
      margin-left: 5px;
      }
      .panel-heading{
      	background-color: green;
      }
</style>


	<script type="text/javascript">
	function validateForm()
	{
	var x=document.forms["myform"]["username"].value;
	if (x==null || x=="")
	  {
	  alert("Username must be filled out");
	  return false;
	  }

	var x=document.forms["myform"]["password"].value;
	if (x==null || x=="")
	  {
	  alert("Password must be filled out");
	  return false;
	  }
	}
	</script>
	<body class="body-index">

	


	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">

		<header>
		<center><img src="images/logo.png" width="100" height="100"></center>	
		
		<center>Automated Records Mgnt System</center>

		<br>
		</header>
			<form action="loginexec.php" name="myform" method="post" onsubmit="return validateForm()">
				<div class="panel panel-primary">
					 <div class="panel-heading"><strong>Please Login</strong></div> 
					<div class="panel-body">
					<div class="form-group">
						<!-- <label><span class="glyphicon glyphicon-user"></span> Username</label> -->
						<input class="form-control" type="text" name="username" placeholder="Username" required autofocus>
					</div>
					<div class="form-group">
						<!-- <label><span class="glyphicon glyphicon-lock"></span> Password</label> -->
						<input class="form-control" type="password" name="password" placeholder="Password" required>
					</div>
					<button type="submit" class="btn btn-primary btn-md pull-right" name="">Login</button>  <a rel="facebox" href="register.php"><button class="btn btn-md btn-primary pull-right">Register</button></a></label>
					</div>
					<!--<div class="panel-footer"></div>-->
				</div>
			</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
<br>
<br>
<br>
<footer class="text-center container">
	<span class=""><!-- &copy; Copyright SLSU MAIN</span> | --> 
Designed by: <a href="https://www.facebook.com/rgfmedia" target="_blank"><strong>RGF Media</strong></a></span>
</footer>
</body>
</html>