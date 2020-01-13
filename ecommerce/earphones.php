<?php
	session_start();
	$con = mysqli_connect("localhost", "root", "" , "earphones");
?>
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
					<li class="nav-item active">
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
<!--- Image Slider -->
<div class="carousel slide" id="slides" data-ride="carousel">
	<!--ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul-->
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/earintro.jpg" alt="">
			<div class="carousel-caption">
			
			</div>
		</div>
		
	</div>
</div>
<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row Welcome text-center">
		<div class="col-12">
			<h1 class="display-5">Earphones.</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">Earphones are lightweight and portable, making them the ideal companions for day-to-day listening. Choose from a 
				range of sound optimized earbuds, each designed to provide a comfortable and dependable fit.
</p>
		</div>
	</div>
</div>

<!--products-->
<div class="row">
<?PHP

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'earphones');

	// if($con){
	// 	echo "connection succussful";
	// }else{
	// 	echo "no connection";
	// }


	$query = " SELECT * FROM `earphones` order by id ASC ";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($product = mysqli_fetch_array($queryfire)){ 

	

			?>

<div class="col-lg-3 col-md-3 col-sm-12">
			
<form method = "post" action="insertcart.php?action=add&id=<?php echo $product["id"];?>">
				<div class="card">
					

					<div class="card-body">
						 <img src="<?php echo
					 $product['image'];  ?>" alt="<?php echo
					 $product['name'];  ?>" class="img-fluid mb-2" >
						<h6 class="card-title  text-dark p-2 text-uppercase"> <?php echo
					 $product['name'];  ?>   </h6>
					 <h6> &#8377; <?php echo $product['price'];  ?><span> (<?php echo $product['discount'];  ?>% off) </span> </h6> 

					 <h6 class="badge badge-success"> 4.4 <i class="fa fa-star"> </i> </h6>

					 <input type="text" name="quantity" class="form-control" placeholder="Quantity">
					 <input type="hidden" name="hidden_name" value="<?php echo $product['name'] ?>" />
                     <input type="hidden" name="hidden_image" value="<?php echo $product['image'];?>">
 					 <input type="hidden" name="hidden_price" value="<?php echo $product['price'];?>">
					</div>
					<div class="cartbtnn">
					<div class="btn d-flex">
						
						<button type="submit" name="add_to_cart" class="btn btn-secondary flex-fill">Add to cart</button>
					</div>
		</div>


				</div>
			</form>

		</div>

		
	<?php		
		}
	}
	
	?>
</div>
<a href="insertcart.php" class="btn btn-primary flex-fill" role="button" aria-pressed="true"> View Cart</a>
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