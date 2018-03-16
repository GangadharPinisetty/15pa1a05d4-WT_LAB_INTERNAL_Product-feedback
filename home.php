<?php include('server.php');
    session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>Product Feedback</h1>
		<ln><a href="login.php">Log in</a></ln>
		<ln><a href="register.php">Register</a></ln>
		<h3>Products For Feedback:</h3>
		<?php 
                    
                    $qry = "SELECT * FROM `product`";
                    $sql = mysqli_query($conn,$qry);
                    if(mysqli_num_rows($sql)>0) { 
                        while($row=mysqli_fetch_assoc($sql)) { 
                           $imagepath ="uploads/".$row["photo"];
                           $productlink = "view.php?rid=".$row['pid']; 
                           $name = $row['name'];
                           $description = $row['description'];
                           echo "<li>";
                           echo "<img src='$imagepath' width='50%' height='50%'>";
                           echo "<h3><a href='$productlink'>$name</a></h3>";
                           echo "<p>$description</p>";
                           echo "</li>";
                        } 
                    }
         ?>
		
	</body>
</html>
