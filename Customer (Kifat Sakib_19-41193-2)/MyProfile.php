<?php

        include "Head2.php";

session_start();



 $id=$_SESSION['uid'];

//  echo $id;


$conn = mysqli_connect('localhost','root','','onlinepharmacy');
   $sql = "SELECT * FROM `user` WHERE uid='$id' ";
   $result = $conn->query($sql);

   $row = $result->fetch_assoc();
//    echo  " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Profile</title>

</head>
<body>

	<h1>Welcome : <?php echo    $row["fname"]; ?></h1>

	
	<ul>
		<li><a href="">Menu</a></li>
		<li><a href="">History</a></li>
		<li><a href="logout.php">Logout</a></li>
		
	</ul>


	<h1>Profile details : </h1>
	<h1>First name : <?php echo    $row["fname"]; ?></h1>
	<h1>Last name : <?php echo    $row["lname"]; ?></h1>
	<h1>Date of birth : <?php echo    $row["dob"]; ?></h1>
	<h1>Email : <?php echo    $row["email"]; ?></h1>





</body>
</html>

<?php 
        include "Footer.php";
?> 
