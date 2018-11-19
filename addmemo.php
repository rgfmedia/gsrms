
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
<form action="addmemoexec.php" method="post" enctype="multipart/form-data" name="addroom" onSubmit="return validateForm()">
 Date Promulgated <br />
 <input type="text" name="date" class="tcal form-control" value="<?php echo date("m/d/Y"); ?>" required />  <br />
  Title<br />
    <input name="title" type="text" id="title" class="ed form-control" required/>
    <br />
 Official <br />
     <input name="spn" type="text" id="spn" class="ed form-control" required/>
    <br />
 Implementing Department <br />
 <input name="combo" type="text" class="ed form-control" id="combo" size="50" required/>
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
 <input name="button" type="button" style="cursor:pointer;" onClick="addCombo()" value="Add" class="btn btn-default" />
<br />

 Content: <br />
 <input type="file" name="image" class="ed form-control" required>


    <input type="submit" name="Submit" value="Save" class="btn btn-success" />


</form>
