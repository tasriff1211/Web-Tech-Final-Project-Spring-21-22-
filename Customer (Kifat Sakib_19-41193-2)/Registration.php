<!DOCTYPE html>  
<style>
.error {color: #FF0000;}
</style>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Registration</title>
</head>



<?php
        include "Head.php";

$fnameErr=  $emailerr= $lnameErr= $pword1Err= $pword2Err=  "";
$fname= $email=  $lname= $pword1=  $pword2=   "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["fname"])) {
     $fnameErr = "*Firstname is required";
   }else{
      $fname = test_input($_POST["fname"]);
   }



   if (empty($_POST["lname"])) {
      $lnameErr = "*Lastname is required";
    }else{
       $lname = test_input($_POST["lname"]);
    }



   if (empty($_POST["email"])) {
      $emailerr = "*email is required";
   }else{
      $email = test_input($_POST["email"]);
   }

   if (empty($_POST["pword1"])) {
      $pword1Err = "You must enter a password";
   }else{
      $pword1 = test_input($_POST["pword1"]);
   }




   $pwordCheck = test_input($_POST["pword2"]);
   if (empty($_POST["pword2"])) {
      $pword2Err = "Re-enter the password";
   }
   else if($pword1!=$pwordCheck){
      $pword2Err = "Password didn't match";

   }
   else{
      $pword2 = test_input($_POST["pword2"]);
   }



   $dob = test_input($_POST["dob"]);

   $conn = mysqli_connect('localhost','root','','onlinepharmacy');
   $sql = "INSERT INTO user(fname, lname, dob, email, password ) VALUES('$fname','$lname', '$dob', '$email', '$pword2')";
   if (mysqli_query($conn, $sql)) {
       session_start();
       $_SESSION["fname"] = test_input($_POST["fname"]);
       echo "Registration Accepted<br>";
   }
  
  






}


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

 





?>






<body>


 <div class:div>
   <h2>Registration</h2>
   
<form   align-content: center; method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      <p>First Name</p>
         <input type="text" name="fname" placeholder="Firstname" value="<?php echo $fname;?>">
         <span class="error"> <?php echo $fnameErr;?></span>
      <p>Last Name</p>
         <input type="text" name="lname" placeholder="Lastname" value="<?php echo $fname;?>">
         <span class="error"> <?php echo $lnameErr;?></span>
      <p>Date Of Birth</p>
         <input type="date" name="dob" >
      <p>E-mail Address</p>
         <input type="email" name="email" placeholder="e-mail" value="<?php echo $email;?>">
         <span class="error"> <?php echo $emailerr;?></span>
      <p>Password<p>
      <input type="Password" name="pword1" placeholder="Create Password"  value="<?php echo $pword1;?>">
      <span class="error"> <?php echo $pword1Err;?></span>
      
      <p>Re-enter Password</p>
      <input type="password" name="pword2" Placeholder="Confirm Password"  value="<?php echo $pword2;?>">
      <span class="error"> <?php echo $pword2Err;?></span>

      <br>
      <br>
         <input type="Submit" name="sbmt">
   
   <p>Already have an account? <a href="Login.php">Log In</a></p>

</form>

 
</div>

</body>
</html>

<?php 
        include "Footer.php";
?> 
