
<?php include 'header.php'; ?>
<br>
<div class="container">

<ul class="breadcrumb "><li><a href="home.php"><span class="glyphicon glyphicon-home"> </span> Home</a></li><li class="active">Communication</li></ul>

<div class="input-group">
 <?php if ($_SESSION['SESS_FIRST_NAME']=="admin"){ echo '<span class="input-group-addon"><a rel="facebox" href="addcommu.php"><span class="glyphicon glyphicon-plus"></span></a></span>'; }
					
					  ?>
<input  type="text" name="filter" value="" placeholder="Search here..." id="filter" size="35" class="form-control srch" />
 <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
 </div>


<table class="table table-bordered">
          <thead>

            
             <tr bgcolor="#0e39c2">
              <th><font color="white"> Date </font></th>
              <th><font color="white">Title</font> </th>
              <th> <font color="white">Sender</font></th>
              <th class="text-center" ><font color="white">Action</font></th>
            </tr>
          </thead>

          <tbody>


		<?php
				include('config.php');
				$result = mysql_query("SELECT * FROM commu");

				while($row = mysql_fetch_array($result))
				  {
					echo '<tr>';
					  echo '<td>'.$row['date'].'</td>';
					  echo '<td>'.$row['title'].'</td>';
					  echo '<td>'.$row['sender'].'</td>';
					  if ($_SESSION['SESS_FIRST_NAME']=="admin"){
					  echo '<td><div align="center">'.'<a href=download.php?id=' . $row["content"] .'&amp;downloadby=argie><label type="button"><span class="glyphicon glyphicon-download"></span> Download</label></a>'.' | '.'<a rel="facebox" href=editcom.php?id=' . $row["com_id"] .'><label type="button"><span class="glyphicon glyphicon-edit"></span> Edit</label></a>'.' | '.'<a href=cpreview.php?id=' . $row["com_id"] .' target="_blank"><label type="button"><span class="glyphicon glyphicon-eye-open"></span> View</label></a>'.' </div></td>';
					echo '</tr>';
						}
					  if ($_SESSION['SESS_FIRST_NAME']!="admin"){
					  echo '<td><div align="center">'.'<a href=download.php?id=' . $row["content"] .'&amp;downloadby=argie><label><span class="glyphicon glyphicon-download"></span> Download</label></a>'.' </div></td>';
					echo '</tr>';
					}
				  }

				?>
          </tbody>
       </table>
       </div>

    <?php include 'footer.php'; ?>