<?php
				include('config.php');
				$get=$_GET['id'];
				$result = mysql_query("SELECT * FROM profile where pro_id='$get'");

				while($row = mysql_fetch_array($result))
				  {
            $id=$row['pro_id'];
				  $name=$row['name'];
				  $area=$row['area'];
				  
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
<form action="editproexe.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
 Title<br />
   <input name="txtname" type="text" class="ed form-control" id="category" value="<?php echo $name; ?>" /><input name="txtid" type="hidden" class="ed" id="category" value="<?php echo $id; ?>" />
  <br />

  Sender <br />
    <input name="txtarea" type="text" id="tsender" class="ed form-control" value="<?php echo $area; ?>" />
    <br />
  <!-- Date<br />
  	<input type="text" name="tdate" class="tcal form-control" value="<?php echo $date; ?>" />
  <br /> -->

 Content: <br />
 <input type="file" name="image" class="ed form-control" required><br />

    <input type="submit" name="Submit" value="save" id="button1" class="btn btn-sm btn-primary" />

</form>
