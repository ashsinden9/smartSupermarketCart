<?php
include("connection1.php");
//error_reporting(0);

if($_POST['submit_signup']){
	
	$user_name= $_POST['name'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$mobile=$_POST['mobile'];
	
	if($user_name!="" && $email!="" && $password!=""){
		$query="INSERT INTO people VALUES('$email','$user_name',md5('$password'),'$mobile','0')";
		$data=mysqli_query($conn,$query);			 // query result
		if ($data){
			echo "<p id='data-insert-msg'>You are signed up succesfully. Please return to <a href='index.php'>Login Page</a> to Sign in your Account...</p>";
		}
		else{
			echo "<p id='data-insert-error'>Error signing up</p>";
		}
	}
}
?>
<style type="text/css">
	#data-insert-msg{
		font-size: 26pt; color: green;
	}
	#data-insert-error{
		font-size: 26pt; color: red;
	}
</style>