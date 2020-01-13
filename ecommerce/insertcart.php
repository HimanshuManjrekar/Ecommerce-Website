<?php
//connection to database
session_start();
  $shopcart =   mysqli_connect('localhost','root','');
  $earphones =  mysqli_connect('localhost','root','');
  $speakers =   mysqli_connect('localhost','root','');
  mysqli_select_db($shopcart,'shopcart');
  mysqli_select_db($earphones,'earphones');
  mysqli_select_db($speakers,'speakers');

  if(isset($_POST["add_to_cart"]))
    {
        if(isset($_SESSION["shopping_cart"]))
      {
          $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
          //get all item detail
            $item_array = array(
                      'item_id'       =>   $_GET["id"],
                      'item_name'     =>   $_POST["hidden_name"],
                      'item_price'    =>   $_POST['hidden_price'],
                      'item_quantity' =>   $_POST["quantity"]
                    );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            //product added then this block 
          echo '<script>alert("Item allready added ")</script>';
          echo '<script>window.location = "insertcart.php"</script>';
        }
    }
else
{
//cart is empty excute this block
            $item_array = array(
                      'item_id'       =>   $_GET["id"],
                      'item_name'     =>   $_POST["hidden_name"],
                      'item_price'    =>   $_POST['hidden_price'],
                      'item_quantity' =>   $_POST["quantity"]
                    );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
}
//Remove item in cart 
if(isset($_GET["action"]))
    {
        if($_GET["action"] == "delete")
    {
          foreach($_SESSION["shopping_cart"] as $key=>$value)
        {
            if($value["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$key]);
                echo '<script>alert("Item removed")</script>';
                echo '<script>window.location="insertcart.php</script>';
            }
            }
        }
    }
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


<?php		
		}
	}
	
	?>

<!--cartdetails-->
<div style="clear: both"> </div>
<h3 class="title2">Order Details </h3>  


<div class="table-responsive">  
<table class="table table-bordered">  
<tr> 
    <th width="40%">Item Name</th>  
    <th width="10%">Quantity</th>  
    <th width="20%">Price</th>  
    <th width="15%">Total</th>  
    <th width="5%">Action</th>  
</tr>  


<?php 
if(!empty($_SESSION["shopping_cart"]))
{
  $total = 0;
  foreach($_SESSION["shopping_cart"] as $key => $value)
{
?>


<tr> 
    <td><?php echo $value['item_name'];?></td>  
    <td><?php echo $value['item_quantity']; ?></td>  
    <td>&#8377;<?php echo $value['item_price'];?></td>  
    <td>&#8377;<?php echo number_format($value["item_quantity"] * $value["item_price"],2);?></td>  
    <td><a href="insertcart.php?action=delete&id=<?php  echo $value['item_id'];?>"><span class="btn btn-danger">Remove</span></a></td>  
</tr>  

<!-- total of the cart -->
<?php $total = $total + ($value["item_quantity"] * $value['item_price']);
}
?>
<tr>  
    <td colspan="3" align="right">Total</td>  
    <td align="right">&#8377;<?php echo number_format($total);?></td>  
    <td></td>  
</tr> 


<?php 
} 
?> 

</table>  
<div class="cartbtnn">
					<div class="btn d-flex">
						
                    <a href="headphones.php" class="btn btn-secondary flex-fill" role="button" aria-pressed="true">Back to shop</a>
                    <a href="checkout.php" class="btn btn-success flex-fill" role="button" aria-pressed="true">Checkout</a>
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