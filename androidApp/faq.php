<?php 
include("connection1.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>FAQ's</title>
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
           <a class="dropdown-item" href="#">Verify Your Mobile No.</a>
        </div>
      </li>
      <li class="nav-item">
        
      </li>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="#">FAQ's</a>
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




<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          How is shopping at Smart SuperMarket different from what you may be used to?
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        We pride ourselves on going to great lengths in order to provide each of the communities that we are part of with the flavors that they love and recall from “back home.” In fact, it is our passion! We devote aisles of space to international grocery and dairy/frozen items as well as including a full-service fish market within most of our stores. Our stores reside and are part of many different neighborhoods, each vibrant with numerous ethnicities and nationalities, and their corresponding cultures and flavors. It’s a culinary adventure when you shop our supermarket!
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Do you have weekly specials or sales on your products?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Yes, weekly, our circulars reflect amazing sales as well as low prices on thousands of products each and every day.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Do you sell regular groceries too?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        While we take a great deal of effort, care and joy in tracking down hard to find items from all over the world, we also provide staple items, which can be found in most mainstream supermarkets. In addition, we take pride in our own Bogopa brand, a product line which contains high-quality items, such as macaroni and cheese, rice, canned mixed vegetables and ketchup, to name just a few. So we are able to serve as a one-stop shopping experience for our customers.
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         Do you have customer service?
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
        Of course! Our friendly and knowledgeable customer services reps are available to answer your questions 24/7/365.
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         What’s your return policy?
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
        Return any of our products--no questions asked--within 30 days of purchase. We even pay return shipping.
      </div>
    </div>
  </div>
  
  
    <div class="card">
    <div class="card-header" id="headingSix">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
         What guarantees freshness for the products?
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
        Smart Supermarket strives to provide the products that are fresh and systems are kept in place to source the best products and safely consign them to you. We don't stock the products but place once we receive orders. Even though we don't deny that it involves time we at Tredy Foods believe that centralising the whole despatch process would lead to economies of scale and allow quality check , aggregating the products would add value to the customers who wish to procure different products from different sources instead of routing the orders to the respective vendors.
      </div>
    </div>
  </div>
  
  
</div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>