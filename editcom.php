<?php
				include('config.php');
				$get=$_GET['id'];
				$result = mysql_query("SELECT * FROM commu where com_id='$get'");

				while($row = mysql_fetch_array($result))
				  {
            $id=$row['com_id'];
				  $title=$row['title'];
				  $sender=$row['sender'];
				  $date=$row['date'];
				  }
?>
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
   <!--para sa add data sa textbox -->
	<SCRIPT language="javascript">
<!--

function addCombo() {
	var textb = document.getElementById("txtCombo");
	var combo = document.getElementById("combo");
	combo.value=combo.value +textb.value + ", ";
	textb.value = "";
}
//-->
</SCRIPT>
	<!--end-->
<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script>
<form action="editcomexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
 Title<br />
   <input name="ttitle" type="text" class="ed form-control" id="category" value="<?php echo $title; ?>" /><input name="tid" type="hidden" class="ed" id="category" value="<?php echo $id; ?>" />
  <br />

  Sender <br />
    <input name="tsender" type="text" id="tsender" class="ed form-control" value="<?php echo $sender; ?>" />
    <br />
  Date<br />
  	<input type="text" name="tdate" class="tcal form-control" value="<?php echo $date; ?>" />
  <br />

 Content: <br />
 <input type="file" name="image" class="ed form-control" required><br />

    <input type="submit" name="Submit" value="save" id="button1" class="btn btn-sm btn-primary" />

</form>
