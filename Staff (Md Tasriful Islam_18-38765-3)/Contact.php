<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>

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

<body style="background-color: skyblue;">

<h1 style="background-color:Gray;">Contact with Admin</h1>
<div class="container">
    <h3>Md. Tasriful Islam</h3>
	<h3>Road: 13; House: 211; Bashundhara R/A, Dhaka 1000</h3>
	<h3>Phone no: 017171717</h3>
</div>
	<h1>Or,</h1>
	<br><br>
	Staff Name:<input type="name" name="name">
	<br><br>
	<h3>Subject:</h3>
	<label for="msg"></label>
	<textarea style="resize: none" cols="150" rows="2"></textarea>

	<h3>Message:</h3>
	<label for="msg"></label>
	<textarea style="resize: none" cols="150" rows="6"></textarea>
	<br><br>
	<a href="Home.php" class="button">Send</a>
    <br><br>
    <?php include 'Footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
</body>
</html>