<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Login form</h1>
		<div class="row">
			<div class="col-4">
			<?php 
			if (isset($error)) {
				echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
			}
			if (isset($correct)) {
				echo '<div class="alert alert-success" role="alert">'.$correct.'</div>';
			}
			?>
				<form method="POST" >
				  <div class="form-group">
				    <label for="username">Username</label>
				    <input name="username" type="text" class="form-control" id="username" value="<?php if (isset($_COOKIE["nam"])) echo $_COOKIE["nam"]; ?>">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input name="password" type="password" class="form-control" id="password" >
				    <input type="checkbox" name="check" value="Remember">Remember me!<br>
				  </div>
				  <button name='submit' type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>