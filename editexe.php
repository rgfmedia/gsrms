<?php
				include('config.php');
				$get=$_GET['id'];
				$result = mysql_query("SELECT * FROM extention where ext_id='$get'");

				while($row = mysql_fetch_array($result))
				  {
            
				  $date=$row['date'];
				  $title=$row['title'];
				  $bene=$row['bene'];
				  $dept=$row['dept'];
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


<form action="editexee.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">

 Date Promulgated <br />
    <input type="hidden" name="tt_id" value="<?php echo $get; ?>">
  	<input type="text" name="tt_date" class="tcal form-control" value="<?php echo $date; ?>" />  <br />

 Title<br />
     <input name="tt_title" type="text" id="title" class="ed form-control" value="<?php echo $title; ?>" />
    <br />

 official<br />
      <input name="tt_bene" type="text" id="spn" class="ed form-control" value="<?php echo $bene; ?>" />
    <br />

 Office<br />
      <input name="tt_dept" type="text" id="combo" class="ed form-control" value="<?php echo $dept; ?>" />
    <br />

 Content: <br />
 <input type="file" name="image" class="ed form-control"><br />

    <input type="submit" name="Submit" value="Update"  class="btn btn-success" />
  

</form>
