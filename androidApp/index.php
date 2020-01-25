<?php
include("connection1.php");
//include("signup.php");
//error_reporting(0);
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/668dd02108.js"></script>
	<link rel="stylesheet" type="text/css" href="loader.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Text&display=swap" rel="stylesheet">

	<style type="text/css">
		body {
			background-color: royalblue;
			margin: 0;
			padding: 0;
			background-image: url("https://live.staticflickr.com/873/40741025184_b584f0307e_b.jpg");
			background-size: 100% 250%;
			background-position: center center;
			
		}
		#main-container{
			background: linear-gradient(rgba(255,255,255,0.7),rgba(255,255,255,0.5));
			border: 4px solid white;
			border-radius: 25px;
			margin-top: 180px;
		}
		#sign-in-form{
			padding-left: 25px;
			padding-right: 25px;
			padding-top:5px;
			padding-bottom: 5px; 
		}
		#login-table{
			background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));
			width: 280px;
		}
		#login-table input{
			background-color: transparent;
			border-color: transparent;
			border-bottom:1px solid blue;
			outline-color: transparent;
		}
		#login-btn{
			background-color: blue;
			color: white;
			border:1px solid white;
			border-bottom: transparent;
		}
		#eye-btn{
			color: white;
			background-color: transparent;
			border:1px solid transparent;
			border-bottom: 1px solid blue;
			outline-color: transparent;
		}
		#login-password{
			width: 157px;
		}
	</style>
</head>

<body>

	
	<div class="container">
		<!--Row 1-->
		<div class="row">
			
			<div class="col-lg-3 my-3"></div>
			
			<div class="col-lg-6 my-3" id="main-container" style="padding-bottom: 20px">
				<h1 align="center" style="font-weight: bold; font-family: 'Cinzel Decorative', cursive;"><u>SIGN IN</u></h1>
				<br><br>
				<!--  SIGN IN FORM  -->
				<form id="sign-in-form" method="post" action="logincode.php">
					<table align="center" id="login-table">
						<tr align="center"><td style="font-size: 12pt; color: white;"><input type="text" name="login_email" placeholder="Username..." required=""/></td></tr>
						<tr align="center"><td style="font-size: 12pt; color: white; width:100px;"><input type="password" name="login_password" placeholder="password" id="login-password" required="" />	<button id="eye-btn" type="button">	<i class="fas fa-eye"></i></button>	</td></tr>
						
						<tr align="center"><td><input type="submit" name="login_submit" value="Log In" id="login-btn"></td></tr>
						<tr><td><hr style="border:0.5px solid blue; padding-left:0; margin-top: 0.5px;margin-bottom: 0.5px;"></td></tr>
						<tr align="center"><td><button type="button" data-toggle="modal" data-target="#sign-up" style="background-color: transparent; border-color: transparent; outline: none; margin-bottom: 5px; color: white">Sign Up ?</button></td></tr>
					</table>
				</form>
			</div>
			
			<div class="col-lg-3"></div>
		
		</div>
		
	</div>
	






		

	<!--  SIGN UP FORM  -->
	<div id="sign-up" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header"><h1 class="modal-title" align="center" style="font-variant: small-caps;"><p style="font-family: 'Libre Caslon Text', serif;">SIGN UP</p></h1></div>
               <div class="modal-body">
               		<form id="sign-up-form"  method="post" action="signup.php">
               			<table align="center">
               				<tr><td><label>Name</label></td>	<td><input type="text" id="name" name="name" placeholder="Shaksham Agarwal" required=""></td></tr>
               				<tr><td><label>Contact No.</label></td>	<td><input type="text" name="mobile" id="mobile" placeholder="98********" required="" maxlength="10"></td></tr>
               				
               				<tr><td><label>Email ID</label></td>	<td><input type="Email" name="email" placeholder="abc@gmail.com" required=""></td></tr>
               				<tr><td><label>Password</label></td>	<td><input type="password" name="password" required=""></td>	</tr>

               				<tr align="center"><td colspan="2"><input type="submit" name="submit_signup" value="submit"></td></tr><br>
               				<tr><td>
               				<div class="modal-footer">
               					<a href="index.php">Already an account?</a></td>
               					</tr>
               				</div>	
               			</table>
               		</form>
               </div>
            </div>
        </div>
    </div>


<script>
	
document.getElementById("eye-btn").addEventListener('click',function eyeblink(){
		let status=document.getElementById("login-password").type;
		if(status=="password"){ 
			document.getElementById("login-password").type="text"; 
			document.querySelector("#eye-btn").innerHTML="<i class='fas fa-eye-slash'></i>"; 
		}
		else{
			document.getElementById("login-password").type="password"; 
			document.querySelector("#eye-btn").innerHTML="<i class='fas fa-eye'></i>"; 
		}
	});

</script>
	</body>

</html>