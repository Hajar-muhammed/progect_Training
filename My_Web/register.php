<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="styel.css">
</head>
<body style="background: #128184">
	<h1 style="color: black; 
	text-align: center;">Jion Us!</h2>
	<div class="header">
   <h2>Register</h2>
   </div>
   	<form method="POST" action="register.php">
   		<?php include('errors.php'); ?>
   		<div class="input">
   			<label>Full Name</label>
   			<input type="text" name="name">
   		</div>
   		<div class="input">
   			<label>User Name</label>
   			<input type="text" name="username">
   		</div>
   		<div class="input">
   			<label>Email</label>
   			<input type="email" name="email" >
   		</div>
   		<div class="input">
   			<label>Password</label>
   			<input type="password" name="password_1>
   		</div>
   		<div class="input">
   			<label>Re_Password</label>
   			<input type="password" name="password_2">
   		</div>
   		<div>
   			<button type="submit" class="btn" name="reg_user">Register</button>
   		</div>
   		<p>
   			Have Account? <a href="login.php">Login</a>
   		</p>


   	</form>
   
</body>
</html>