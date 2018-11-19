<?php
	//Start session
	session_start();

	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	//unset($_SESSION['SESS_LAST_NAME']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
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
<body>
<div class="main">
	<div class="header">
		<div class="header_resize">
			<div class="menu_nav">
				<ul>

				</ul>
				<div class="clr"></div>
			</div>

			<div class="clr"></div>
			<div class="logo"><h1><img src="images/SDSDSDS.jpg" style="width: 970px; margin-top: -99px; height: 269px;" /></h1></div>
		</div>
	</div>

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

	</head>

	<body>

	<form action="loginexec.php" name="myform" method="post" onsubmit="return validateForm()">


	<table width="364" border="0" align="center" cellpadding="0" cellspacing="0" align='center'>
	  <tr>
	  <td width="97" height="42"><div align="right">UserName:</div></td>
	  <td width="261"><input name="username" type="text" class="txtuser" /></td>
	  </tr>
	  <tr>
	  <td height="37"><div align="right">Password:</div></td>
	  <td><input name="password" type="password" class="txtpassword" /></td>
	  </tr>
	  <tr>
	  <td height="20">&nbsp;</td>
	  <td>not yet a member? register <a rel="facebox" href="register.php">here</a></td>
	  </tr>
	  <tr>
	  <td>&nbsp;</td>
	  <td><input name="" type="submit" value="login" class="loginbut" /></td>
	  </tr>
	</table>

	</form>
	<a rel="facebox" href="addrecords.php"></a></div>
<a rel="facebox" href="addrecords.php"></a>


	<!--
	<div class="content">

		<div class="fbg_resize">
		  <?php if ($_SESSION['SESS_FIRST_NAME']=="admin"){
		  echo '<a rel="facebox" href="addpolicy.php">add policy</a>';
		  }
		  ?>




	<div id="pagewrap">
<div id="search">
        <label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
      </div>
	 <div id="body">
<table cellpadding="1" cellspacing="1" id="resultTable">
          <thead>
            <tr bgcolor="blue" style="margin-bottom:10px;">
              <th> pnu </th>
              <th> title </th>
              <th> br </th>
			  <th> imp_dept </th>
              <th> spn </th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
				<?php
				include('config.php');
				$userid= $_SESSION['SESS_MEMBER_ID'];
				$result = mysql_query("SELECT * FROM policy");

				while($row = mysql_fetch_array($result))
				  {
					echo '<tr>';
					  echo '<td>'.$row['pnu'].'</td>';
					  echo '<td>'.$row['title'].'</td>';
					  echo '<td><div align="center">'.$row['br'].'</div></td>';
					  echo '<td><div align="center">'.$row['combo'].'</div></td>';
					  echo '<td><div align="center">'.$row['spn'].'</div></td>';
					  if ($_SESSION['SESS_FIRST_NAME']=="admin"){
					  echo '<td><div align="center">'.'<a href=download.php?id=' . $row["content"] .'&amp;downloadby=patags>download</a>'.' | '.'<a rel="facebox" href=editpolicy.php?id=' . $row["pol_id"] .'><img src="images/b_edit.png" /></a>'.' </div></td>';
					echo '</tr>';
						}
						if ($_SESSION['SESS_FIRST_NAME']!="admin"){
					  echo '<td><div align="center">'.'<a href=download.php?id=' . $row["content"] .'&amp;downloadby=patags>download</a>'.' </div></td>';
					echo '</tr>';
						}
				  }

				?>
          </tbody>
       </table>
      </div>
    </div>
-->











		  <div class="clr"></div>
	  </div>
	</div>
	<div class="footer">
		<div class="footer_resize">
			<p class="lf">&copy; Copyright SLSU MAIN. Developed by Jazzers  </p>
				<ul class="fmenu">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contacts</a></li>
			</ul><br/>
			<div class="clr"></div>
		</div>
	</div>
</div>
</body>
</html>