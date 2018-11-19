<?php

			$name=$_POST['name'];
			$lname=$_POST['lastname'];
			$dep=$_POST['dept'];
			$user=$_POST['username'];
			$pass=$_POST['password'];

include('config.php');
		
		if(isset($user) && $user == "admin")
        {
          echo '<script type="text/javascript">
                         alert("Invalid username, Please use another one!");
                    </script>';
            echo '<script type="text/javascript">
                         window.location = "index.php"
                    </script>';
        }
		else
		{

			$update=mysql_query("INSERT INTO user (name, lastname, department, username, password)VALUES('$name','$lname','$dep','$user','$pass')");

			
	 		echo '<script type="text/javascript">
                         alert("Successfully register, You can login now!");
                    </script>';
		
			 echo '<script type="text/javascript">
                         window.location = "index.php"
                    </script>';

			}	

?>