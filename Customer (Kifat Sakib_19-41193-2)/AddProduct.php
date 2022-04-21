<!DOCTYPE html>  
<style>
.error {color: #FF0000;}
</style>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Product</title>
</head>



<?php
        include "Head.php";

$pnameErr=  $priceerr= "";
$pname= $price= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["pname"])) {
     $pnameErr = "Madicine name is required";
   }else{
      $pname = test_input($_POST["pname"]);
   }



   if (empty($_POST["price"])) {
      $priceErr = "Price is required";
    }else{
       $price = test_input($_POST["price"]);
    }





   $conn = mysqli_connect('localhost','root','','onlinepharmacy');
   $sql = "INSERT INTO medicine( pname, price ) VALUES('$pname','$price')";
   if (mysqli_query($conn, $sql)) {
       session_start();
       $_SESSION["pname"] = test_input($_POST["pname"]);
       echo "medicine list updated<br>";
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

 
  <div class="loginBox">
   <h2>Add Medicine</h2>
   
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   <p>Medicine Nmae</p>
   	<input type="text" name="pname" placeholder="Medicine Name" value="<?php echo $pname;?>">
      <span class="error"> <?php echo $pnameErr;?></span>
   <p>Price</p>
   	<input type="text" name="price" placeholder="Price" value="<?php echo $price;?>">

    <br>
    <br>
   	<input type="Submit" name="sbmt">


  </form>
  </div>

</body>
</html>

<?php 
        include "Footer.php";
?> 
