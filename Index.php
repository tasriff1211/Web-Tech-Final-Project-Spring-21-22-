<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="head.css" />

<script type="text/javascript" src="Search.js"></script>
<style>

body

{
  background-image: url("OnlinePharmacy.png");
  background-color: #cccccc;
 height: 600px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
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
.admin {background-color: #4CAF50;} /* Green */
.staff {background-color: #008CBA;} /* Blue */
.coustomer {background-color: #f44336;} /* Red */ 

  </style>
  
</head>


<div class="topnav">
  <a class="active" href="Homepage.php">Online Pharmacy</a>
  <a href="#"> </a>
  
  
  
  <a class="link" href="#" > About Us </a>
  <a class="link" href="#" >Contact</a>
  
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" name="search" placeholder="Search..." onkeyup="Search(this.value)">
      <button type="submit"><i class="fa fa-search"></i></button>

    </form>
    
  </div>
</div>


<div class="button">


<a href="login.php" class="button">Admin</a><br>
<a href="T_Login.php" class="button">Staff</a><br>
<a href="K_login.php" class="button">Coustomer</a>



</div>

</body>
</html>



  