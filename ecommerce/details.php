
<!DOCTYPE>
<?php

include("functions/functions.php");

?>
<html>
	<head>
		<title> This is the BAINARY House</title>
	    <link rel="stylesheet" href="styles/style.css" media="all"/>	
	</head>
	
	<body>
	<!--main container start from here-->
	<div class="main_wrapper">
		<!--header start from here-->
	<div class="header_wrapper"> 
			<img id="logo" src="images/logo edit.jpg"/>
			<img id="banner" src="images/banner.jpg"/>	
	</div>	
	<!--header ends here-->
	
	<!--navagation start from here-->
	<div class="menubar">
		      
		<ul id="menu">
		
			<li><a href="index.php">Home</a></li>
			<li><a href="all_products.php">All products</a></li>
			<li><a href="customer/my_account.php">My Account</a></li>
			<li><a href="cart.php">Shopping cart</a></li>
			<li><a href="facebook.com/maimunsayyed">Contract us</a></li>
		
		</ul>	
		<div id="form">
		    <form method="get" action="results.php" enctype="multipart/form-data">
			<input type="text" name="user_query" placeholder="search a product"/>
			<input type="submit" name="search" value="search"/>
			</form>
		</div>
			  
	</div>
	<!--navagation ends  here-->
	
	<!--content_wrapper start from here-->
	<div class="content_wrapper"> 
		<div id="sidebar">
			<div id="sidebar_title">Catagory</div>
			<ul id="cats">
			<?php getCats();?>
			
			</ul>
			<div id="sidebar_title">Brands</div>
			<ul id="cats">
			<?php getBrands(); ?>
			
			</ul>
		
		
		</div>
		<div id="content_area">
		
		
			<div id="shopping_cart">
			
			
			<span style="float:right; font-size:18px;padding:5px;line-height:40px;">Welcome Guest! <b style="color:yellow">Shopping Cart -</b>Total Items: Total Price:<a href="cart.php" style="color:yellow;">Go to Cart</a>
			
			
			</span>
			
				
			
			</div>
		
			<div id="products_box">
			<?php
			if(isset($_GET['pro_id'])){
				
				$product_id = $_GET['pro_id'];
				
			$get_pro = "select * from products where product_id='$product_id'";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		
		// but $pro >> here 'p' is small
		
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		$pro_desc = $row_pro['product_desc'];
		
		echo"
				<div id='single_product'>
				
					<h2>$pro_title</h2>
					
					<img src='admin_area/product_images/$pro_image' width='300px' height='300px' />
					
					<p> <b> TK= $pro_price</b> </p>
					<p>$pro_desc</p>
					
					<a href='index.php' style='float:left;'>Go Back</a>
					<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
				
				</div>
		
		";
	}
	}
			
?>		
		</div>
		
		</div>
	</div>
	<!--content_wrapper ends here-->
	
	<!--footer start from here-->
	   
	<div id="footer"> 
	<h2 style="text-align:center;padding-top:30px;">&copy;2016 by www.SMR.com</h2>
	
	</div>
		
	</div>
	<!--footer ends here-->
	
	<!--main container ends here-->
	</body>
</html>