<?php
include('conn.php');
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