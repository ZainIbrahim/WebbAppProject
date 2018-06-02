<?PHP
// Inialize session
session_start();

//connect to the database
require 'db_connection.php';

//get values from index.php
$username= $_POST['username'];
$password= $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' and password='$password'");
$row=mysqli_fetch_assoc($result);
	if ($row['username']==$username && $row['password']== $password ){	
       				 // Set username session variable
      				  $_SESSION['login'] = $_POST['username'];
			if ($row['position'] == 'ProjectDirector'){
				//echo "welcome ".$row['username'] ."you are Project director";
										header ("Location:projectDirector.php");

			}
			elseif ($row['position'] == 'projectManager'){
					//echo "welcome ".$row['username'] ."you are Project Manager";

        				// Jump to secured page
						header ("Location:projectManager.php");
			}elseif ($row['position'] == 'admin'){
				//echo "welcome ".$row['username'] ."you are admin";
					header ("Location:admin.php");

			}
			//echo"log in success!!! welcome  " .$row['username'];
		} else {
	echo "Error";
}
?>

<!DOCTYPE HTML>
<html>
    <body>
        <p>Back To Login Page</p>
        <a href="login.php"><input type="submit" value="login" name="Back" /></a>
     
    </body>
</html>