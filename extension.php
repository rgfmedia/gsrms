<?php include 'header.php'; ?>
<br>
<div class="container">

<ul class="breadcrumb "><li><a href="home.php"><span class="glyphicon glyphicon-home"> </span> Home</a></li>
	<li>Others</li><li class="active">Extension</li></ul>

<div class="input-group">
 <?php if ($_SESSION['SESS_FIRST_NAME']=="admin"){ echo '<span class="input-group-addon"><a rel="facebox" href="addextension.php"><span class="glyphicon glyphicon-plus"></span></a></span>'; }
					
					  ?>
<input  type="text" name="filter" value="" placeholder="Search here..." id="filter" size="35" class="form-control srch" />
 <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
 </div>
 <table class="table table-bordered">          <thead>
       
            <tr bgcolor="#0e39c2" >
              <th> <font color="white">Date</font></th>
              <th><font color="white">Title</font></th>
              <th><font color="white">Beneficiary </font></th>
               <th><font color="white">Program </font></th>
		      <th class="text-center"><font color="white">Action</font></th>
            </tr>
          </thead>

          <tbody>


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
					  echo '<td><div align="center">'.'<a href=download.php?id=' . $row["content"] .'&amp;downloadby=argie><label type="button"><span class="glyphicon glyphicon-download"></span> Download</label></a>'.' | '.'<a rel="facebox" href=editexe.php?id=' . $row["ext_id"] .'><label type="button"><span class="glyphicon glyphicon-edit"></span> Edit</label></a>'.' | '.'<a href=epdf.php?id=' . $row["ext_id"] .' target="_blank"><label type="button"><span class="glyphicon glyphicon-eye-open"></span> View</label></a>'.'  </div></td>';
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