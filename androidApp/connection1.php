<?php

$server_name="localhost";
$username="root";
$password="";
$dbname="shardaprojectapp";

$conn= mysqli_connect($server_name,$username,$password,$dbname);
if($conn){
	//   Connected
	//echo "connected to db";
}
else{
	//   Not Connected
	die("Connection failed because ".mysqli_connect_error()); //to check the cause of error
}
?>