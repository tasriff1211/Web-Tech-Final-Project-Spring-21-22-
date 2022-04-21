<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Action</title>
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
</style>
<body>
	<h1>Registration Action</h1>
	<?php
	if($_SERVER['REQUEST_METHOD']=="POST"&& (!empty($_POST['fname'])) ){

		$fname=$_POST['fname'];
		$username=$_POST['username'];
		$passcode=$_POST['passcode'];
		$password=$_POST['password']; 



		if(!empty($_POST["passcode"]) && ($_POST["passcode"] == $_POST["password"])) {

		$handle = fopen("Staff.json","a");
		$res=fwrite($handle, json_encode(array('username'=>$username,'password'=>$password,'fullname'=>$fname)). "\n");

		if($res)
		{
			echo "Registration Successful";
		}

		else{
		echo "Error while Saving  !!";
			
		}


	} 
	else{
		echo "confirm password & Entered password are not same";
			
		}

	}
else{
		echo "Please fillup the FullName first !";
			
		}

	?>
	<br>
	<a href="Login.php" class="button">Login</a>
	<a href="Registration.php" class="button">Go Back</a>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


	<br><br><br>
	<?php include 'Footer.php'; ?>
</body>
</html>