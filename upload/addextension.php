
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
<form action="addextensionexec.php" method="post" enctype="multipart/form-data" name="addroom" onSubmit="return validateForm()">
 Date Promulgated <br />
 <input type="text" name="date" class="tcal" value="<?php echo date("m/d/Y"); ?>" />  <br />
  Title<br />
    <input name="title" type="text" id="title" class="ed" size="40" />
    <br />
  Beneficiary: <br />
     <input name="spn" type="text" id="spn" class="ed" size="40"/>
    <br />
  Implementing Department <br />

  <!-- <?php
  include('config.php');
  $name= mysql_query("select * from area");

  echo '<select name="combo"  id="combo" class="ed">';
  echo '<option selected="selected">Select Program</option>';
   while($res= mysql_fetch_assoc($name))
  {

  echo '<option>';
  echo $res['department'];
  echo'</option>';
  }
  echo'</select>';



?>-->
<select name="combo" id="combo" class="ed">
<option>MM</option>
<option>MAT</option>
<option>MTE</option>
<option>MSIT</option>
<option>PhDTM</option>
</select>
</br>
  Content: <br />
 <input type="file" name="image" class="ed"><br />


    <input type="submit" name="Submit" value="save" id="button1" />

</form>
