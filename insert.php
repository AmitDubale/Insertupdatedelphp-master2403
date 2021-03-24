<?php include('conn.php');

if(isset($_POST['done'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$q = "INSERT INTO `sample`(`username`,`password`) VALUES ('$username','$password')";
	
	$query = mysqli_query($con, $q);
}

 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<center><h3>Contact Form</h3></center>
	<div class="container">
	  <form role="form" action="insert.php" name="done" method="post">
		<label for="fname">Full Name</label>
		<input type="text" id="fname" name="username" placeholder="Your Full Name.." required>

		<label for="lname">Phone Number</label>
		<input type="text" id="lname" name="password" placeholder="Your Phone Number.." required><br>

		<center><button type="submit" id="submit" name="done">Send</button></center>
		
	  </form>
	</div>
	
	<center><h3>Contact Form</h3></center>
	<div class="container">
	 <table class="table table-striped table-hover table-bordered">
		<tr>
			<th>id</th>
			<th>User Name</th>
			<th>Password</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
		<?php
			$q = "select * from sample";
			$query = mysqli_query($con,$q);
			while($res = mysqli_fetch_array($query)){
		?>
		<tr>
			<th><?php echo $res['id']; ?></th>
			<th><?php echo $res['username']; ?></th>
			<th><?php echo $res['password']; ?></th>
			<th><button><a href="delete.php?id=<?php echo $res['id']; ?>">Delete</a></button></th>
			<th><button><a href="update.php?id=<?php echo $res['id']; ?>">Update</a></button></th>
		</tr>
			<?php } ?>
	 </table>
	</div>

</body>
</html>