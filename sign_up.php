<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .container .panel {

    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);

}
</style>
</head>
<body> 
 
<div class="container">


  <div class="panel panel-default">
    <div class="panel-body">
    <div class="jumbotron">
  				<h3 class="text-center">  Sign up   </h3>
  			 </div>
		<form action="signUpProcessPage.php" method ="post">
		<div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name" required>
    </div>
    <div class="form-group">
      <label for="username">username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
    </div>
	
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
    </div>
    
		 <div class="radio-inline">
      <label><input type="radio" name="position" value ="projectManager">Project manager</label>
    </div>
    <div class="radio-inline">
      <label><input type="radio" name="position" value ="ProjectDirector"> Project director</label>
    </div>
    <div class="radio-inline ">
      <label><input type="radio" name="position"  value ="admin"> Admin</label>
    </div>
  
  <div>  <input type="submit" value="Sign up" /></div>
    
  </form>
	

	</div>
  </div>
</div>

</body>
</html>
