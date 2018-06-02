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
  <title>Admin Main Page</title>
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
 
  <?php //panel for logout and welcome text --------------------------------------------------?>   

  <div class="panel panel-default">
    <div class="panel-body">
      
           <div class="jumbotron">
  				<h2 class="text-center"> <?php echo "Welcome Admin " . $_SESSION["login"] . "<br>"; ?></h2>
  			 </div>
                <button type="button" class="btn btn-primary" onClick="location.href='admin.php'">Home</button>
                <button type="button" class="btn btn-primary" onClick="location.href='logout.php'">Logout</button>  
    </div>
  </div>


 <?php //panel for users ----------------------------------------------------------?>   

 <div class="panel panel-default">
    <div class="panel-body">
      <h2>users: </h2>


<ul class="list-group">

    <li class="list-group-item">
    
    <?php


$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th> Name </th><th> User Name </th><th> Password </th><th> Position </th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	      
    	       //  echo "<br>  Name: ". $row["name"]."  User Name: ". $row["username"]." Password: ". $row["password"]. " position : ". $row["position"]."<br>" ;
    	      echo "<tr>";
    	         echo "<td>". $row["name"]. "</td>";
    	         echo "<td>" . $row["username"]."</td>";
    	          echo "<td>". $row["password"]."</td>";
    	         echo "<td>". $row["position"]."</td>";
    	    echo "</tr>";  
    	 

    }
        echo "</table>";

    
} else {
    echo "0 results";
}

?> 
    <!-- <button class="btn btn-primary">delete project</button></li 
     <form action="deleteUser.php" name="form2" method="post">
	<input type= "text" name ="del" placeholder="Enter User Name">
    <input type="submit" value="Delete This User" />
</form>
    
  -->  
    
  </ul>

    </div>
  </div>
  
  
   <?php //panel for projects ----------------------------------------------------------?>   

 <div class="panel panel-default">
    <div class="panel-body">
      <h2>The projects that have been created: </h2>


<ul class="list-group">

    <li class="list-group-item">
    
    <?php


$sql = "SELECT * FROM project";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th> Project Name </th><th> Owner  </th><th>Finalcial </th><th> Project Duration </th><th> Mode  </th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	         //echo "<br>  Project Name: ". $row["projectName"]."  Owner: ". $row["owner"]." financial: ". $row["financial"]. " Project Duration : ". $row["projectDuration"]. " Mode : ". $row["mode"]."<br>";
    	          echo "<tr>";
    	         echo "<td>". $row["projectName"]. "</td>";
    	         echo "<td>" . $row["owner"]."</td>";
    	          echo "<td>". $row["financial"]."</td>";
    	         echo "<td>". $row["projectDuration"]."</td>";
    	            echo "<td>". $row["mode"]."</td>";

    	    echo "</tr>";  

    }   
    echo "</table>";
    
} else {
    echo "0 results";
}

?> 


<!--
<button class="btn btn-primary">View summary</button>
     <button class="btn btn-primary">delete project</button>
          <button class="btn btn-primary">update project</button></li>
-->

  </ul>

    </div>
  </div>
  </ul>


<?php //panel for updation the whole project details ----------------------------------------------------------?>   

 <div class="panel panel-default">
    <div class="panel-body">
      <h2>Update project: </h2>


<ul class="list-group">

    <li class="list-group-item">



     <button class="btn btn-primary">update  questions</button>



  </ul>

    </div>
  </div>
  
    </div>
  </div>
  </div>
</body>
</html>
