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
					<li class="nav-item ">
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
							
                               
                            <li class="nav-item active ">
								<a href="login.php" class="nav-link">Login</a>
                            </li>
                            
				</ul>
			</div>
	</div>

</nav>


<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-12 col-lg-6">
			 <h2>Login</h2> 
			
<!-- this card is for login purpose -->

			 <div class="card">
  <div class="card-body">
					  <form action="validation.php " method="post"> 
                      <div class="form-group">
    <label>Username</label>
    <input type="text" name = "user" class = "form-control" aria-describedby="emailHelp" placeholder="Enter Username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
  </div>
  			<div class="form-group">
    		<label for="exampleInputPassword1">Password</label>
    		<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  					</div>
  			<div class="form-group form-check">
    		<input type="checkbox" class="form-check-input" id="exampleCheck1">
    		<label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
  			</div>
  			<button type="submit" class="btn btn-dark">Login</button>
			</form>
</div>
</div>
		</div>

<!-- this card is for register purpose -->
<div class="col-lg-6">
    <h2>Register</h2> 
		<!-- afterwards change it to register -->
			
			<div class="card">
				<div class="card-body">
				<form action="registration.php" method="post">
  <div class="form-group">
    <label>Username</label>
    <input type="text" name = "user" class = "form-control" aria-describedby="emailHelp" placeholder="Enter Username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address	</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password"  placeholder="Password">
  </div>

<div class="from-group">
	<label for="exampleInputEmail1">Sign in with:</label><br>
	<a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
	<a href="https://accounts.google.com/"><i class="fab fa-google-plus-g"></i></a>
	<small id="emailHelp" class="form-text text-muted">Your personal data will be used to support your experience throughout this website,
		 to manage access to your account,
		 and for other purposes described in our privacy policy.</small><br>
		 <button type="submit" class="btn btn-dark">Signin</button>
</div>
				</div>
			</div>
			<!-- <img src="img/desk.png" alt="" class="img-fluid"> -->
		</div>
	</div>
</div>

<!--- Connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>

</div>


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