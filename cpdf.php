
<?php
  require_once('auth.php');
  include('config.php');
        $get=$_GET['id'];
        $result = mysql_query("SELECT * FROM calendar where cal_id='$get'");

        while($row = mysql_fetch_array($result))
          {  
        $name = $row['content'];
        $filename=  $row['content'];
        header('Content-type: application/octet-stream');
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . basename($filename) . '"');
        header('Content-Transfer-Encoding: binary');
        readfile($name);
          }
   
?>