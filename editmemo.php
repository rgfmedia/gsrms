<?php
				include('config.php');
				$get=$_GET['id'];
				$result = mysql_query("SELECT * FROM momos where memo_id='$get'");

				while($row = mysql_fetch_array($result))
				  {
            $m_id=$row['memo_id'];
				  $date=$row['date'];
				  $title=$row['title'];
				  $spn=$row['official'];
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
	combo.value=combo.value + textb.value + ", ";
	textb.value = "";
}
//-->
</SCRIPT>
	<!--end-->
<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script>
  <label class="text-center">EDIT MEMO</label>

<form action="editmemoexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">

 Date Promulgated <br />
    <input type="hidden" name="m_id" value="<?php echo $m_id; ?>">
  	<input type="text" name="date" class="tcal form-control" value="<?php echo $date; ?>" required/>  <br />

 Title<br />
     <input name="title" type="text" id="title" class="ed form-control" value="<?php echo $title; ?>" required/>
    <br />

 official<br />
      <input name="spn" type="text" id="spn" class="ed form-control" value="<?php echo $spn; ?>" required/>
    <br />

 Office<br />
      <input name="combo" type="text" id="combo" class="ed form-control" value="<?php echo $combo; ?>" required/>
    <br />

 File: <br />
 <input type="file" name="image" class="ed form-control" required><br />

    <input type="submit" name="Submit" value="Update"  class="btn btn-primary btn-md pull-right" />
  

</form>
