<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>

body{
        background-image: url("aw.jpg");
    }

	.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}	
</style>

<body>


	<img src="Img1.jpg" height="250" width="250">
	<h1 style="color:Green;">Login for Staff</h1>
	
	<form action="LoginAction.php" method="POST">

		Username:<input type="text" name="username">
		<br><br>
		Password:<input type="Password" name="password">
		<br><br>
		<input class='button' type="submit" name="submit" value="Login">

		<br>

	
	<br>
	Don't have account ? <a href="Registration.php" class="button">Sign Up</a>
	<br>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


	<br>
	<?php include 'Footer.php'; ?>


</body>
</html>