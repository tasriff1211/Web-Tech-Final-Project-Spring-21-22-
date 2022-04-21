<?php
session_start();
if(count($_SESSION)==0){
	header("Location: LogOut.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<style>
	body{
        background-image: url("back.jpg");
    }

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
	<img src="Img1.jpg" height="250" width="250">
	
	

	<link rel="stylesheet" href="style.css">
	
	<h1 style="background-color:Gray;">Welcome to Online Pharmacy</h1>
	
	<ul class="nav justify-content-left py-3 bg-primary">
  
	<li class="nav-item">
    <a class="nav-link text-white text-uppercase active" href="Home.php">Home</a>
  </li>
	<li class="nav-item">
    <a class="nav-link text-white text-uppercase active" href="StaffProfile.php">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white text-uppercase" href="About.php">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white text-uppercase" href="Contact.php">Contact</a>
  </li>
</ul>
	<br>
	<div class="container">
	<h3>Home Page for Staff</h3>
	
	
	<p>Welcome <?php echo $_SESSION['uname'];?></p>
	</div>
	<br><br>

	

	

	<h2 style="background-color:Gray;">Operations</h2>
	
	
	<a class="btn btn-success btn-lg" href="StaffProfile.php" role="button">Invenory</a>
	<a class="btn btn-success btn-lg" href="StaffProfile.php" role="button">Insert Products</a>
	<a class="btn btn-success btn-lg" href="StaffProfile.php" role="button">Remove Products</a>
	<br><br>
	<a class="btn btn-danger btn-lg" href="LogOut.php" role="button">Log out</a>

	

	
	<br><br>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
		

	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<?php include 'Footer.php'; ?>
</body>
</html> 