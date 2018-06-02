<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Project</title>
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
    
		<form action="createProjectProcess.php" method ="post">
    <div class="form-group">
      <label for="projectName">Project Name:</label>
      <input type="text" class="form-control" id="projectName" placeholder="Enter project name" name="projectName" required>
    </div>
    <div class="form-group">
      <label for="owner">Owner:</label>
      <input type="text" class="form-control" id="owner" placeholder="who is the owner" name="owner" required>
    </div>
    <div class="form-group">
      <label for="financial">Financial:</label>
      <input type="text" class="form-control" id="financial" placeholder="financial" name="financial" required>
    </div>
    <div class="form-group">
      <label for="projectDuration">Project Duration:</label>
      <input type="text" class="form-control" id="projectDuration" placeholder="Project Duration" name="projectDuration" required>
    </div>
      <div class="form-group">
      <label for="mode">Mode :</label>
      <input type="text" class="form-control" id="mode" placeholder="Insource, Outsource, co-source, unspecified " name="mode" required>
    </div>
  
  <div>  <input type="submit" value="Create Project" />
      <br>
      <br>
      <button type="button" class="button" onClick="location.href='projectManager.php'">Home</button>

      
  </div>
  
    
  </form>
	

	</div>
  </div>
</div>

</body>
</html>
