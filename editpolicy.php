<?php
				include('config.php');
				$get=$_GET['id'];
				$result = mysql_query("SELECT * FROM policy where pol_id='$get'");
				
				while($row = mysql_fetch_array($result))
				  {
				  $pnu=$row['pnu'];
				  $title=$row['title'];
				  $br=$row['br'];
				  $spn=$row['spn'];
				  $sbn=$row['sbn'];
				  $date=$row['date'];
				  $combo=$row['combo'];
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
<form action="editpolicyexec.php" method="post" enctype="multipart/form-data" name="addroom" onSubmit="return validateForm()">
 Policy Number <br />
  <input name="pnu" type="text" class="ed" id="pnu" value="<?php echo $pnu; ?>" /><input name="id" type="text" class="ed" id="pnu" value="<?php echo $get; ?>" />
  <br />
 Title<br />
    <input name="title" type="text" id="title" class="ed" onKeyPress="return isNumberKey(event)" value="<?php echo $title; ?>" />
    <br />
 Br Number <br />
    <input name="br" type="text" id="br" class="ed" onKeyPress="return isNumberKey(event)" value="<?php echo $br; ?>" />
    <br />
	Supersede Policy Number <br />
    <input name="spn" type="text" id="spn" class="ed" onKeyPress="return isNumberKey(event)" value="<?php echo $spn; ?>" />
    <br />
 Supersede BR Number <br />
    <input name="sbn" type="text" id="sbn" class="ed" onKeyPress="return isNumberKey(event)" value="<?php echo $sbn; ?>" />
    <br />
 Date Promulgated <br />
  	<input type="text" name="date" class="tcal" value="<?php echo $date; ?>" />  <br />
	
 Implementing Department <br />
 <input name="combo" type="text" class="ed" id="combo" size="50" value="<?php echo $combo; ?>" />
 <?php
include('config.php');
$name= mysql_query("select * from departments");

echo '<select name="txtCombo"  id="txtCombo" class="ed">';
echo '<option selected="selected">Select</option>';
 while($res= mysql_fetch_assoc($name))
{

echo '<option>';
echo $res['department'];
echo'</option>';
}
echo'</select>';



?>
 <input name="button" type="button" style="cursor:pointer;" onClick="addCombo()" value="Add" id="button1" />
<br />
 
 Content: <br />
 <input type="file" name="image" class="ed"><br />
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
