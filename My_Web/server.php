<?php
  session_start();
  //variable seclaration 
  $name= "";
  $username= "";
  $password= "";
  $email= "";
  $errors = array();
  $_SESSTION['success'] = "";
  $db = mysqli_connect('localhost', 'root', '', 'mywebsite');
  //receive all input values from the form
if (isset($_POST['reg_user'])){
	$name=mysqli_real_escape_string($db, $_POST['name']);
	$username=mysqli_real_escape_string($db, $_POST['username']);
	$email=mysqli_real_escape_string($db, $_POST['email']);
	$password_1=mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2=mysqli_real_escape_string($db, $_POST['password_2']);
	//check empty stack 
	if(empty($name)){array_push($errors, "Full Name Is Required");}
	if(empty($username)){array_push($errors, "Username Is Required");}
	if(empty($email)){array_push($errors, "Email Is Required");}
	if(empty($password_1)){array_push($errors, "Password Is Required");}

	if($password_1 != $password_2){
		array_push($errors, "Password not Match");
	}

    if(count($errors)==0){
    	$password=md5($password_1);
    	$query ="INSERT INTO users(name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
    	mysqli_query($db, $query);
    	$_SESSTION['username']=$username;
    	$_SESSTION['success'] = "Register Successfull";
    	header('location: home.php');
    }
}

//login user
  if (isset($_POST['login'])){
  	$username=mysqli_real_escape_string($db, $_POST['username']);
  	$password=mysqli_real_escape_string($db, $_POST['password']);
  	if(empty($username)){array_push($errors, "Username Is Required");}

	if(empty($password)){array_push($errors, "Password Is Required");}
	 if(count($errors)==0){
    	$password=md5($password);
        $query ="SELECT * FROM users WHERE username ='$username' AND password = '$password'";
        $results = mysqli_query($db , $query);
        if (!$results) {
    die(mysqli_error($db));
}
        if (mysqli_num_rows($results) == 1) {
        	$_SESSTION['username'] =$username;
        	$_SESSTION['success'] ="Login is succesed";
        	header('location: home.php');
        }else{
        	array_push($errors, "Error in username or password");
        }
        
    
    }
    	}
?>