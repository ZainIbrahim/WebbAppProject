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
  <title>View Score</title>
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
  				<h2 class="text-center"> <?php echo "Welcome  " . $_SESSION["login"] . "<br>"; ?></h2>
  			 </div>

        <button type="button" class="btn btn-primary" onClick="location.href='projectManager.php'">Home</button>
        <button type="button" class="btn btn-primary" onClick="location.href='logout.php'">Logout</button>  
    </div>
  </div>



 <div class="panel panel-default">
    <div class="panel-body">
      <h2>Here is your score: </h2>


<ul class="list-group">

    <li class="list-group-item">
      <?php



$sql = "SELECT * FROM qestions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

        echo "<table><tr><th> Project Name </th><th> Section 1 (Maximum Score: 90) </th><th> Section 2 (Maximum Score: 30)  </th><th> Section 3 (Maximum Score: 45)  </th><th> Section 4 (Maximum Score: 25)  </th><th> Section 5 (Maximum Score: 25)  </th><th> Section 6 (Maximum Score: 30)  </th><th> Section 7 (Maximum Score: 75)</th><th> Total (Maximum Score: 320) </th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {

     if( $row['username'] == $_SESSION["login"]) {
     
     echo "<tr>";
    	         echo "<td>". $row["projectName"]. "</td>";
    	        echo "<td>" . $row["section1"]."</td>";
    	         echo "<td>" . $row["section2"]."</td>";
    	         echo "<td>" . $row["section3"]."</td>";
    	         echo "<td>" . $row["section4"]."</td>";
    	    	echo "<td>" . $row["section5"]."</td>";
    	         echo "<td>" . $row["section6"]."</td>";
    	         echo "<td>" . $row["section7"]."</td>";
    	        echo "<td>" . $row["score"]."</td>";

    	    "<tr>";

    	 }

    }
} else {
    echo "0 results";
}

?> 

  </ul>

    </div>
  </div>
  </div>
</body>
</html>
