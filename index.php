<!DOCTYPE html>
<html>
<head>
	<title>My awesome landing page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
  		<div class=row>
  			<div class="col-lg-6">
  				<h2>Sign In</h2>
  				<form method="POST" action="Authentication.php">
  					<div class="form-group">
  						<label for="email">Email:</label>
  						<input type="email" class="form-control" placeholder="Enter email" name="email">
  					</div>
  					<div class="form-group">
  						<label for="pwd">Password:</label>
  						<input type="password" class="form-control" placeholder="Enter password" name="pwd">
  					</div>
  					<button type="submit" class="btn btn-default">Sign In</button>
  				</form>
  			</div>
  			<div class="col-lg-6">
  				<h2>Sign Up</h2>
  				<form method="POST" action="Authentication.php">
  					<div class="form-group">
  						<label for="email">Email:</label>
  						<input type="email" class="form-control" placeholder="Enter email" name="email">
  					</div>
  					<div class="form-group">
  						<label for="username">Username:</label>
  						<input type="text" class="form-control" placeholder="Enter username" name="username">
  					</div>
  					<div class="form-group">
  						<label for="pwd">Password:</label>
  						<input type="password" class="form-control" placeholder="Enter password" name="pwd">
  					</div>
  					<button type="submit" class="btn btn-default">Sign Up</button>
  				</form>
  			</div>
  		</div>
	</div>
</body>
</html>