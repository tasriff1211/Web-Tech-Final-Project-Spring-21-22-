<?php 
        include "Head.php";
?> 


<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="Login.js"></script>

	<meta charset="utf-8">
	<title>Login Form</title>


<?php

 $emailerr=  $passwordErr=  "";
 $email=   $password=   "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {




   if (empty($_POST["email"])) {
      $emailerr = "*email is required";
   }else{
      $email = test_input($_POST["email"]);
   }



   if (empty($_POST["password"])) {
	$passwordErr = "*password is required";
  }else{
	 $password = test_input($_POST["password"]);
  }

  if($email=='admin@mail.com' && $password=='admin'){

    header("location:head.php");

  }
  

  else{

 
   $conn = mysqli_connect('localhost','root','','onlinepharmacy');
   $sql = "SELECT * FROM `user` WHERE email='$email' and password='$password'";


   $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    

    session_start();
    $_SESSION["uid"] = $row["uid"];
    header("location:MyProfile.php");
  }
} 
else {
  if (session_status() == PHP_SESSION_NONE){}
  header("location:login.php");
}



$conn->close();

}



}


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

?>





</head>
<body>

	<h1>Login Form</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="myForm"  onsubmit="return validateForm()">
		<fieldset> 
			<legend>Login Form:</legend>

			<label for="email">email:</label>
			<input type="email" name="email" id="email" value="<?php echo $email;?>">
			<span style="color:red"><?php echo $emailerr; ?></span>

			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<span style="color:red"><?php echo $passwordErr; ?></span>

			<br><br>

			<input type="submit" name="submit" value="Login">
		</fieldset>
	</form>

	<br>

	<p>New user? <a href="Registration.php">Click here</a> for registration.</p>

</body>
</html>


<?php 
        include "Footer.php";
?> 
