<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$username=$_POST['username'];
		$password=$_POST['password'];

		$handle = fopen("Staff.json","r");
		$data=fread($handle, filesize("Staff.json"));
		$data=explode("\n", $data);
		$isValid = false;
		for($i=0;$i<count($data)-1;$i++){
			$json= json_decode($data[$i]);
			if($username===$json->username and $password===$json->password){
				$isValid=true;
				break;
			}
		}
		if($isValid){
			session_start();
			$_SESSION['uname']=$username;
			header("Location: Home.php?uname=".$username);
		}
		else{
	
			//echo "<b>Login Failed !!</b>";

			echo '<div style="font-size:1.25em;color:#0e3c68;font-weight:bold;">Login Failed !! <span style="font-size:1.25em;color:#0e3c68;font-weight:bold;">'.$precio_digital.'</span></div>';
		}

	}

	
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Login Action</title>

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
		<br><br>
	<a href="Login.php" class="button">Login</a> 
	<a href="Registration.php" class="button">Registration</a>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


	<br><br><br>
	<?php include 'Footer.php'; ?>
	</body>
	</html>