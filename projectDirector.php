<?php
session_start();
require 'db_connection.php';
	if (!isset($_SESSION['login'])) {
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project Director Main Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body> 
 <div class="container">
 
  <div class="panel panel-default">
    <div class="panel-body">
      
           <div class="jumbotron">
  				<h2 class="text-center"> <?php echo "Welcome " . $_SESSION["login"] . "<br>"; ?></h2>
  			 </div>

                <button type="button" class="btn btn-primary" onClick="location.href='projectDirector.php'">Home</button>
                <button type="button" class="btn btn-primary" onClick="location.href='logout.php'">Logout</button>  
    </div>
  </div>



 <div class="panel panel-default">
    <div class="panel-body">
      <h2>Projects that have been created: </h2>


<ul class="list-group">

    <li class="list-group-item">
    
    <?php

 //$result = mysqli_query($conn, "SELECT * FROM project ");
//$row=mysqli_fetch_assoc($result);
 //if ($row['username']== $_SESSION["login"]){
// echo $row['projectName'];

 //}

$sql = "SELECT * FROM project";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
        echo "<table><tr><th> Project Name </th><th> Owner </th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<tr>";
    	         echo "<td>". $row["projectName"]. "</td>";
    	         echo "<td>" . $row["owner"]."</td>";
    	    "<tr>";

    }
} else {
    echo "0 results";
}

?> 
<button class="btn btn-primary" onClick="location.href='viewScoreDR.php'" >View summary</button>



  </ul>

    </div>
  </div>
  </div>
</body>
</html>
