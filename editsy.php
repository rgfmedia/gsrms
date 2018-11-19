<?php
				include('config.php');
				$get=$_GET['id'];
				$result = mysql_query("SELECT * FROM sylla where s_id='$get'");

				while($row = mysql_fetch_array($result))
				  {
            
				  $course=$row['course'];
				  $title=$row['ctitle'];
				  $code=$row['ccode'];
				  $teacher=$row['teacher'];
          $sy=$row['sy'];
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
	combo.value=combo.value + textb.value + ", ";
	textb.value = "";
}
//-->
</SCRIPT>
	<!--end-->
<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script>
  <label class="text-center">EDIT MEMO</label>

<form action="editsyexe.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">

 Course<br />
    <input type="hidden" name="txt_id" value="<?php echo $get; ?>">
  	<input type="text" name="txt_course" class="tcal form-control" value="<?php echo $course; ?>" />  <br />

 Title<br />
     <input name="txt_title" type="text" id="title" class="ed form-control" value="<?php echo $title; ?>" />
    <br />

 SCode<br />
      <input name="txt_code" type="text" id="spn" class="ed form-control" value="<?php echo $code; ?>" />
    <br />

 Teacher<br />
      <input name="txt_teacher" type="text" id="combo" class="ed form-control" value="<?php echo $teacher; ?>" />
    <br />
 Sy<br />
      <input name="txt_sy" type="text" id="combo" class="ed form-control" value="<?php echo $sy; ?>" />
    <br />

 File: <br />
 <input type="file" name="image" class="ed form-control"><br />

    <input type="submit" name="Submit" value="Update"  class="btn btn-success" />
  

</form>
