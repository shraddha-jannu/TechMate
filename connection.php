<?php
	//to clear the warninng msgs
	error_reporting(0);
	$con = mysqli_connect('localhost', 'root', '','techmate');
	
	//creating variables
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phoneNum = $_POST['phoneNum'];
	$password = $_POST['password'];

	// database insert SQL code
	$sql = "INSERT INTO `registration` (`name`, `username`, `email`, `phoneNum`, `password`) VALUES ('$name', '$username', '$email', '$phoneNum','$password')";

	// insert in database 
	$rs = mysqli_query($con, $sql);

	if($rs)
	{
		include 'DashbordHtml.html';
		//echo "Done";
	}
	else{
		echo"not done";
	}
?>