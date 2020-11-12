<?php
include 'connection.php';
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
	
	$sql="select * from signup where username='$username' and password='$password'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	
	if($count==1){
	echo '<script>alert("Login Sucessful")</script>'; 	
	}
	else {
		echo '<script>alert("Login Failed")</script>'; 
	}
	}
?>