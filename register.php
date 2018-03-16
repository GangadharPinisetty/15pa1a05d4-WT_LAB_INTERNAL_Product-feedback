<?php include('server.php');
    session_start();
    if(isset($_POST['sub'])){
        $username=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="INSERT INTO `user`(`user_name`,`email`,`password`) VALUES('$username','$email','$password')";
        mysqli_query($conn,$query);
        header('location:login.php');
    }

?>

<!DOCTYPE>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>	
	<form method="POST" action="">

		<div class="input_group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Your name">
		</div>
		<div class="input_group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Email">
		</div>
		<div class="input_group">
			<label>Password</label>
			<input type="password" name="password1" placeholder="Your Password" id="password" required>
		</div>
		<div class="input_group">
			<label>Confirm Password</label>
			<input type="password" name="password2" placeholder="Re-enter Password" id="confirmpassword" required>
		</div>
		<div class="input_group">
			<button type="submit"  onclick="validatePassword()" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Log in</a>
		</p>
	</form>
</body>
</html>
