<?php
    include('server.php');
    session_start();
    if(isset($_POST['login'])){
        $username=$_POST['name'];
        $password=$_POST['password'];
        $query="SELECT * FROM user WHERE user_name='$username' and password='$password'";
        $sql=mysqli_query($conn,$query);
        if(mysqli_num_rows($sql)>0){
                $_SESSION['username']=$username;
                $_SESSION['password']=$password;
                header('location:home.php');
        }
        else{
            echo $sql;
            echo "User does not exist";
        }
        
    }

?>

<!DOCTYPE>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="">
		<div class="input_group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Your username">
		</div>
		<div class="input_group">
			<label>Password</label>
			<input type="password" name="password1" placeholder="Your password">
		</div>
		<div class="input_group">
			<button type="submit" name="Login" class="btn">Login</button>
		</div>
		<p>
			Not yet registered? <a href="register.php">Sign up</a>
		</p>
		
	</form>
	
	</body>
</html>
