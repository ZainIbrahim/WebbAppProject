<?PHP
session_start();

//connect to the database
require 'db_connection.php';
$data= $_POST['data'];

// sql to delete a record
$sql = "SELECT projectName FROM project WHERE projectName = '$data'";
$query= mysqli_query($conn, $sql);


$array= mysqli_fetch_array ($query);
if ($array>=1) {
	$_SESSION ['projectNameForDb'] = $_POST ['data'];
	  //  echo "Record deleted successfully";
					header ("Location:questionsPage.php");
} else {
	echo "please enter the correct project name OR";
        
}
?>
<!DOCTYPE HTML>
<html>
    <body>
        <p>Go To Project Manager Main Page</p>
        <a href="projectManager.php"><input type="submit" value="Back to Project Manager Main Page" name="Back" /></a>
     
    </body>
</html>









