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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Send SMS from PHP using textlocal</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Smart SuperMarket</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Order Summary</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Settings
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"  data-toggle="collapse" data-target="#update_form_div" class="btn btn-info">Update Account</a>
          
          <a href="delete.php" class="dropdown-item" onclick='return confirm("Are you sure you want to delete your account???");'>Delete Account</a>
          <div class="dropdown-divider"></div>
            <a href="verifyotp.php" class="dropdown-item">
  Verify Your Mobile No.
</a>
        </div>
      </li>
      <li class="nav-item">
        
      </li>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="faq.php">FAQ's</a>
      </li>
      <li class="nav-item">
       <!--  <a href="#" class="nav-link" data-toggle="modal" data-target="#basicmodal" >Contact Us</a> -->
        <a href="#" class="nav-link" data-toggle="modal" data-target="#basicModal">
  Contact Us
</a>
      </li>
      <li class="nav-item">
        <a href="logout.php" class="nav-link" onclick='return confirm("Are you sure you want to Logout ?");'>Logout</a>
      </li>
    </ul>
   
  </div>
</nav>
<div class="container">
<h1 class="text-center">Verify Your Mobile Number</h1>
<hr>
	<div class="row">
	  <div class="col-md-9 col-md-offset-2">
		<?php
			if(isset($_POST['sendopt'])) {
				require('textlocal.class.php');
				require('credentials.php');

				$textlocal = new Textlocal(false, false, API_KEY);

                // You can access MOBILE from credential.php
				// $numbers = array(MOBILE);
                // Access enter mobile number in input box
                $numbers = array($_POST['mobile']);

				$sender = 'TXTLCL';
				$otp = mt_rand(10000, 99999);
				$message = "Hello " . $_POST['uname'] . " This is your OTP: " . $otp;

				try {
				    $result = $textlocal->sendSms($numbers, $message, $sender);
				    setcookie('otp', $otp);
				    echo "OTP successfully send..";
				} catch (Exception $e) {
				    die('Error: ' . $e->getMessage());
				}
			}

			if(isset($_POST['verifyotp'])) { 
				$otp = $_POST['otp'];
				if($_COOKIE['otp'] == $otp) {
					echo "Congratulation, Your mobile is verified.";
				} else {
					echo "Please enter correct otp.";
				}
			}
		?>
	</div>
    <div class="container">
    <div class="col-md-9 col-md-offset-2">
        <form role="form" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="uname">Name</label>
                    <input type="text" class="form-control" id="uname" name="uname" value="" maxlength="10" placeholder="Enter your name" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="" maxlength="10" placeholder="Enter valid mobile number" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendopt" class="btn btn-lg btn-success btn-block">Send OTP</button>
                </div>
            </div>
            </form>
            <form method="POST" action="">
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="otp">OTP</label>
                    <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" maxlength="5" required="">
                </div>
            </div>
             <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="verifyotp" class="btn btn-lg btn-info btn-block">Verify</button>
                </div>
            </div>
        </form>
	</div>
  </div>
 
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>