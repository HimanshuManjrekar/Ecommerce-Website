<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Urbanears</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.php"><img src="img/" alt="">URBANEARS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>

			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a href="headphones.php" class="nav-link">Headphones</a>
					</li>
					<li class="nav-item ">
							<a href="earphones.php" class="nav-link">Earphones</a>
                        </li>
                        <li class="nav-item ">
									<a href="speakers.php" class="nav-link">Speakers</a>
                                </li>
						
							<li class="nav-item ">
									<a href="aboutus.php" class="nav-link">About Us</a>
								</li>
							
                               
                            <li class="nav-item ">
								<a href="login.php" class="nav-link">Login</a>
                            </li>
                            
				</ul>
			</div>
	</div>

</nav>

<!-- checkout form -->
<div class="container">
<form name = "form1" action="afcheckout.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">First Name</label>
      <input type="Text"  name = "firstname" class="form-control" id="inputEmail4" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputLname">Last Name</label>
      <input type="Text" name = "lastname" class="form-control" id="inputPassword4" placeholder="Lastname">
    </div>
  </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name = "email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name = "add" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name = "city" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" name="state" class="form-control">
        <option selected>Choose...</option>
        <option>Maharashtra</option>
        <option>Goa</option>
        <option>Karnataka</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text"  name="zipcode " class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Cash on delivery
      </label>
    </div>
  </div>
  <button type="submit" name="submit1" class="btn btn-primary">Order</button>
</form>
</div>
<!-- end of form -->

<?php

if(isset($post["submit"]))
{
    $con = mysqli_connect("localhost", "root", "" , "chekout");
    mysqli_select_db($con,"checkout");
    
$firstname = $_POST['firstname'];
$email = $_POST['email'];


$q = "select * from checkout where firstname = '$firstname' && email = '$email' ";


$qy = " insert into ckeckout(firstname , email ) values ('$firstname' , '$email' ) ";
    mysqli_query($con, $qy);
    // mysqli_query($link,"INSERT into checkout VALUES('','$_POST[firstname]',
    //                                                     '$_POST[lastname]',
    //                                                     '$_POST[email]',
    //                                                     '$_POST[address]',
    //                                                     '$_POST[city]',
    //                                                     '$_POST[zipcode]')");
}
?>


<!--- Footer -->
<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				
                <hr class="light">
                <h6>Urban Ears</h6>
				<pre></pre>
				<p>about us</p>
				<p>contact</p>
				<p>queries</p>
			</div>

            <div class="col-md-4">
				
                <hr class="light">
                <h6>Customer Service</h6>
				<pre></pre>
				<p>Exchange and Return</p>
				<p>Shipment times and charges</p>
				<p>Help center</p>
            </div>
            <div class="col-md-4">
				
                <hr class="light">
                <h6>2019.ALL RIGHTS RESERVED.ORG</h6>
				
			</div>
        </div>
        
	</div>
</footer>



</body>
</html>