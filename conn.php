<?php
$servername="localhost";
$username="root";
$password="";
$dbname="emailsend_db.sql";
$con = mysqli_connect($servername,$username,$password,$dbname);

if($con){
	echo "Connection Ok";
}
else
{
	die("connection Erroe".mysqli_connect_errno());
}


?>