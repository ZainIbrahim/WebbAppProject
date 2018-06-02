<?PHP
session_start();
//connect to the database
require 'db_connection.php';

//get values from index.php
$projectName = $_POST ['projectName'];
$owner= $_POST['owner'];
$financial= $_POST['financial'];
$projectDuration= $_POST['projectDuration'];
$mode= $_POST['mode'];
$username=  $_SESSION["login"] ;


//validating database
	$sql="select * from project where projectName='$projectName'";
	$result=mysqli_query($conn,$sql);
	$array= mysqli_num_rows($result);
	
	if ($array == 0){
		$result= "INSERT INTO project (projectName,owner  , financial, projectDuration, mode, username) 
						VALUES ('$projectName','$owner','$financial','$projectDuration','$mode','$username')";
						mysqli_query($conn, $result);
						echo "Project Created";
	}else{
		echo "Project name already exists, please choose another name.";
	}

?>

<!DOCTYPE HTML>
<html>
    <body>
        <p>Back To Manager Page</p>
        <a href="projectManager.php">
        <input type="submit" value="Project Manager Main Page" name="Back" /></a>
     
    </body>
</html>