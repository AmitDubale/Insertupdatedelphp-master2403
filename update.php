<?php 
include 'conn.php';

	if(isset($_POST['done'])){
		$id = $_GET['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$q = " update sample set id=$id, username='$username', password='$password' where id=$id ";
	
	$query = mysqli_query($con,$q);

	header('location:display.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<center><h3>Update Contsct Form</h3></center>
	<div class="container">
	  <form role="form" name="done" method="post">
		<label for="fname">Full Name</label>
		<input type="text" id="fname" name="username" placeholder="Your Full Name.." required>

		<label for="lname">Phone Number</label>
		<input type="text" id="lname" name="password" placeholder="Your Phone Number.." required>

		<center><button type="submit" id="submit" name="done">Send</button></center>
		
	  </form>
	</div>
</body>
</html>