<?php
	require_once('auth.php');
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
				    <ul>
									    <li><a href="Home.php">Home</a></li>
										<li><a href="calendar.php">GS Calendar</a></li>
										<li><a href="syllabus.php">Syllabus</a></li>
										<li><a href="ppmp.php">PPMP</a></li>
										<li><a href="minute2.php">Minutes</a></li>
										<li class="active"><a href="extension.php">Extension</a></li>
										<li><a href="index.php">Logout</a></li>
				</ul>
				</ul>
				<div class="clr"></div>
			</div>

			<div class="clr"></div>
			<div class="logo"><h1><img src="images/SDSDSDS.jpg" style="width: 970px; margin-top: -99px; height: 269px;" /></h1></div>
		</div>
	</div>
	<div class="content">

		<div class="fbg_resize">


	<div id="pagewrap">

	 <div id="body">
<table cellpadding="1" cellspacing="1" id="resultTable">
          <thead>
            <tr bgcolor="0c2883" style="margin-bottom:10px;">
					            	<th align=left>
					            	<?php if ($_SESSION['SESS_FIRST_NAME']=="admin"){
					  					  echo '<a rel="facebox" href="addextension.php"><input name="button" type="button" style="cursor:pointer;" value="ADD FILES"/></a>';
					  					  }
					  					  ?>
					  			</th>
					  			<th colspan=4 align=left>&nbsp;&nbsp;&nbsp;<label for="filter"><font color="white" size=3>Search</font></label> <input type="text" name="filter" value="" id="filter" size="35"/></th>
					            	</tr>
            <tr bgcolor="#0e39c2" style="margin-bottom:10px;">
              <th> <font color="white">Date</font></th>
              <th><font color="white">Title</font></th>
              <th><font color="white">Beneficiary </font></th>
               <th><font color="white">Program </font></th>
		      <th><font color="white">Action</font></th>
            </tr>
          </thead>

          <tbody>
          <!--
				<?php
				include('config.php');
				$userid= $_SESSION['SESS_MEMBER_ID'];
				$result = mysql_query("SELECT * FROM momos");

				while($row = mysql_fetch_array($result))
				  {
					echo '<tr>';
					  echo '<td>'.$row['date'].'</td>';
					  echo '<td>'.$row['title'].'</td>';
					  echo '<td><div align="center">'.$row['official'].'</div></td>';
					  echo '<td><div align="center">'.$row['combo'].'</div></td>';
					  if ($_SESSION['SESS_FIRST_NAME']=="admin"){
					  echo '<td><div align="center">'.'<a href=download.php?id=' . $row["content"] .'&amp;downloadby=James>download</a>'.' | '.'<a rel="facebox" href=editpolicy.php?id=' . $row["memo_id"] .'><img src="images/b_edit.png" /></a>'.' </div></td>';
					echo '</tr>';
						}
						if ($_SESSION['SESS_FIRST_NAME']!="admin"){
					  echo '<td><div align="center">'.'<a href=download.php?id=' . $row["content"] .'&amp;downloadby=James>download</a>'.' </div></td>';
					echo '</tr>';
						}
				  }

				?> -->

		<?php
				include('config.php');
				$result = mysql_query("SELECT * FROM extention");

				while($row = mysql_fetch_array($result))
				  {
					echo '<tr>';
					  echo '<td>'.$row['date'].'</td>';
					  echo '<td>'.$row['title'].'</td>';
					   echo '<td>'.$row['bene'].'</td>';
					    echo '<td>'.$row['dept'].'</td>';
					  if ($_SESSION['SESS_FIRST_NAME']=="admin"){
					  echo '<td><div align="center">'.'<a href=download.php?id=' . $row["content"] .'&amp;downloadby=argie>download</a>'.' | '.'<a rel="facebox" href=editmemo.php?id=' . $row["ext_id"] .'><img src="images/b_edit.png" /></a>'.' </div></td>';
					echo '</tr>';
						}
					  if ($_SESSION['SESS_FIRST_NAME']!="admin"){
					  echo '<td><div align="center">'.'<a href=download.php?id=' . $row["content"] .'&amp;downloadby=argie>download</a>'.' </div></td>';
					echo '</tr>';
					}
				  }

				?>
          </tbody>
       </table>
      </div>
    </div>












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