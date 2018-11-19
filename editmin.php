<?php
				include('config.php');
				$get=$_GET['id'];
				$result = mysql_query("SELECT * FROM mins where min_id='$get'");
				
				while($row = mysql_fetch_array($result))
				  {
				  $date=$row['date'];
				  $title=$row['title'];
				  $officer=$row['officer'];
				 
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
<form action="editminuteexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
 Date<br />
  <input name="t_date" type="text" class="ed" id="category" value="<?php echo $date; ?>" /><input name="t_id" type="hidden" class="ed" id="category" value="<?php echo $get; ?>" />
  <br />

 Title<br />
  	<input type="text" name="t_title" class="tcal" value="<?php echo $title; ?>" />
  <br />
  Officer<br />
    <input type="text" name="t_officer" class="tcal" value="<?php echo $officer; ?>" />
  <br />
 
 File: <br />
 <input type="file" name="image" class="ed"><br />
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
