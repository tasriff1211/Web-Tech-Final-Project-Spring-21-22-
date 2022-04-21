<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Staff Profile</title>
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
	<body style="background-color: skyblue;">

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		Gender: 
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="other">Other
		<br><br>

	Blood Group: 
		<select name="BloodGroup">
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
			<option value="AB+">AB+</option>
		</select>
		<br><br>

	 Date Of Birth: <input type="date" name="dob">
		<br>
		<br>
	Present Address:<textarea name="area"> </textarea>
		<br><br>
	Phone:<input type="tel" name="phone">
		<br><br>
	Email:<input type="Email" name="Email">
		<br><br>
		<input class='button' type="submit" name="submit" value="Save" >
		<br><br><br>

		<?php
	if($_SERVER['REQUEST_METHOD']==='POST')
	{
		
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$BloodGroup=$_POST['BloodGroup'];
		$Email=$_POST['Email'];
		$area=$_POST['area'];
		$phone=$_POST['phone'];
		

		if(empty($gender)){
			echo "Please fill up the Gender";
		}	

		if(empty($dob)){
			echo "Please fill up the BirthDate";
		}
		
		if(empty($BloodGroup)){
			echo "Please fill up the BloodGroup";
		}
		
		if(empty($Email)){
			echo "Please fill up the Email";
		}

		if(empty($phone)){
			echo "Please fill up the PhoneNumber";
		}			
		if(empty($area)){
			echo "Please fill up the Location";
		}
		else{


		echo "<table border='1'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>";
	echo "BloodGroup";
	echo "</th>";
	echo "<th>";
	echo "Gender";
	echo "</th>";
	echo "<th>";
	echo "BirthDate";
	echo "</th>";
	echo "<th>";
	echo "Email";
	echo "</th>";
	echo "<th>";
	echo "Phone";
	echo "</th>";
	echo "<th>";
	echo "Address";
	echo "</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	echo "<tr>";


	echo "<td>";
	echo $_POST['BloodGroup'];
	echo "</td>";
	echo "<td>";
	echo $_POST['gender'];
	echo "</td>";
	echo "<td>";
	echo $_POST['dob'];
	echo "</td>";
	echo "<td>";
	echo $_POST['Email'];
	echo "</td>";
	echo "<td>";
	echo $_POST['phone'];
	echo "</td>";
	echo "<td>";
	echo $_POST['area'];
	echo "</td>";

	echo "</tr>";
	echo "</tbody>";
	echo "</table>";

      }

  }
      

      

	


	?>	

	<br>
	<?php include 'Footer.php'; ?>


</body>
</html>