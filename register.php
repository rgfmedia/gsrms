<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<strong>
	Registration Form
	</strong>
	<hr>
<form action="saveuser.php" method="post">

<input name="name" type="text" id="name" class="form-control" placeholder="FirstName" required />
<br />

<input name="lastname" type="text" id="lastname" class="form-control" placeholder="LastName" required />
<br />

<input name="dept" type="text" id="dept" class="form-control" placeholder="Department" required/>
<br />

<input name="username" type="text" id="username" class="form-control" placeholder="Username" required/>
<br />

<input name="password" type="password" id="password" class="form-control" placeholder="Password" required/>
<br />

<input type="submit" name="reg" value="Submit" class="btn btn-sm btn-primary pull-right" />

</form>
</body>
</html>
