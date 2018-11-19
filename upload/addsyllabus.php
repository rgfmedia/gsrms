
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
<form action="addsyllabusexec.php" method="post" enctype="multipart/form-data" name="addroom" onSubmit="return validateForm()">
 Course <br />
  <?php
 include('config.php');
 $name= mysql_query("select * from area");

 echo '<select name="course"  id="course" class="ed">';
 echo '<option selected="selected">Select</option>';
  while($res= mysql_fetch_assoc($name))
 {

 echo '<option>';
 echo $res['department'];
 echo'</option>';
 }
 echo'</select>';



?><br>

  Subject<br />
    <input name="title" type="text" id="title" class="ed" />
    <br />
 Code <br />
     <input name="code" type="text" id="code" class="ed"/>
    <br />
 Teacher <br />
 <input name="teacher" type="text" class="ed" id="teacher" size="50" />

 <br />
  School Year <br />
  <input name="sy" type="text" class="ed" id="sy" size="50" />

  <br />


 Content: <br />
 <input type="file" name="image" class="ed"><br />


    <input type="submit" name="Submit" value="save" id="button1" />

</form>
