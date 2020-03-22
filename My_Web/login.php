<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="styel.css">
</head>
<body style="background: #128184">
   <div class="header">
   	<h2>Login</h2>
   </div>
   <form method="POST" action="login.php">
   	<?php include('errors.php'); ?>
   	<div class="input">
   		<label>Username</label>
   		<input type="text" name="username">
   	</div>
   	<div class="input">
   		<label>Password</label>
   		<input type="password" name="password">
   	</div>
   	<button class="btn" type="submit" name="login">Login</button>
   	<p>
   		Don't have an account? <a href="register.php">Sign_Up</a>
   	</p>
   </form>
</body>
</html>