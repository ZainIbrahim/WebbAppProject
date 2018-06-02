<?PHP

//connect to the database
require 'db_connection.php';

//get values from index.php
$name = $_POST ['name'];
$username= $_POST['username'];
$password= $_POST['password'];
$position= $_POST['position'];

//validating database
if (ctype_alnum( $username)){
	$sql="select * from users where username='$username'";
	$result=mysqli_query($conn,$sql);
	$array= mysqli_num_rows($result);
	
	if ($array == 0){
		$result= "INSERT INTO users (name,username  , password, position) 
						VALUES ('$name','$username','$password','$position')";
						mysqli_query($conn, $result);
						echo "new user created";
						

	}else{
		echo "that username already exists";
	}
}else {
	echo "invalidname";
}
?>
				<div class="container">
					<a href="login.php"><p>Click here to log in .</p> </a> 
				</div>