<?php 
include("connection1.php");
//error_reporting(0);
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
	<div class="container-fluid ">
		<div class="row">
			<div class="col-lg-4">
				<?php	
					if(!isset($_SESSION['user_name'])){
						header('location:index.php');
					}
					echo "<marquee> <h3>Welcome <b>".$_SESSION['user_name']." </b>to our store !!!</h3></marquee>";	
									?>
			</div>
			<div class="container-fluid">
				<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
				
			</div>
		
			
			
			<div class="col-lg-4">
				<div id="data_update" align="center">
					
					<div class="collapse" id="update_form_div" align="center">
						<form action="update.php" method="post">   <!--////////////////////    UPDATE FORM     //////////////////////-->
							<div class="table-responsive">
								<table class="table table-striped" id="update_table">
									<tr>
										<td colspan="3">
								<br>			<label id="email_update">UserID:</label>
											<i><input type="email" name="login_email_up" value="<?php echo $_SESSION['email'];?>" id="up_email_box"></i>
										</td>
									</tr>
									<tr>
										<td><label><b>User Name</b></label></td>
										<td><input type="text" name="update_name" id="update_name" value="<?php echo $_SESSION['user_name'];?>"></td>
										<td></td>
									</tr>
									<tr>
										<td><label><b>Old Password</b></label></td>
										<td><input type="password" name="old_password" id="old_password"></td>
										<td><button class="eye" id="eye-btn3" type="button" onclick="eyeblink('old_password','eye-btn3')"><i class="fas fa-eye"></i></button></td>
									</tr>
									<tr>
										<td><label><b>New Password</b></label></td>
										<td><input type="password" name="update_password" id="update_password" ></td>
										<td><button class="eye" id="eye-btn" type="button" onclick="eyeblink('update_password','eye-btn')"><i class="fas fa-eye"></i></button></td>
									</tr>
									<tr>
										<td><label><b>Retype new Password</b></label></td>
										<td><input type="password" name="update_password_retype" id="update_password_retype" ></td>
										<td><button class="eye" id="eye-btn2" type="button" onclick="eyeblink('update_password_retype','eye-btn2')"><i class="fas fa-eye"></i></button></td>
									</tr>
									<tr>
										<td colspan="3" align="center"><input type="submit" name="update_info" class="btn btn-primary" value="Update Info"></td>
									</tr>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<div class="container my-3" style="vertical-align: middle;">
	<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><b><u>Customer Care Helpline</u></b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      	<br>
        <h3>Call Us:</h3>
        <h5><a href="tel:18475555555" target="_top">Click Here To Call Support</a></h5><hr>
        <h3>Email Us:</h3>
        <h5><a href="mailto:smartsupermarket@gmail.com" target="_top">Click Here To Mail Us</a></h5><br>
      </div>
      
    		</div>
  		</div>
	</div>
</div>





	
	<div class="container-fluid">
		<form action="https://paytm.com/">
         <button type="submit" class="btn btn-success fixed-bottom mb-2 mx-1 col col-md-12">Proceed To Checkout</button>
      </form>
			
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>