<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>

<head>
	<meta  charset="iso-8859-1" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/Style.css" rel="stylesheet" type="text/css" />
	<link href="css/petmart.css" rel="stylesheet" type="text/css" />
	<link href="css/product.css" rel="stylesheet" type="text/css" />
	<link href="css/title.css" rel="stylesheet" type="text/css" />
	<link href="hiadmin.css" rel="stylesheet" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
	<!--[if IE 6]>
		<link href="css/ie6.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 7]>
        <link href="css/ie7.css" rel="stylesheet" type="text/css" />  
	<![endif]-->
</head>
<?php
    include_once("connection.php");
?>
<body>

	<div id="body">
	<div class="w3-content w3-display-container">
	<img class="mySlides" src="images/mew.pink.jpg" style="width:100%">
  <img class="mySlides" src="images/cat1.jpg" style="width:100%">
  <img class="mySlides" src="images/mew.jpg" style="width:100%">




  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            
                <div class="col-md-4">
                    <div class="latest-product">
                        <h2 class="section-title">Dog Food</h2>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = pg_query($conn, "SELECT * FROM public.product WHERE cat_id='P01'" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . pg_error($conn));
                            }
		
			            
			                while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
				            ?>
				            <!--Một sản phẩm -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="images/<?php echo $row['pro_image']?>" width="150" height="150">
                                    <div class="product-hover">
                                        <a href="index.php=<?php echo  $row['product_id']?>" class="add-to-cart-link" ><i class="fa fa-shopping-cart"></i> Buy it</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=menu&ma=<?php echo  $row['product_id']?>"><?php echo  $row['product_name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['price']?></ins><del></del>
                                </div> 
                            </div>
                
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="latest-product">
                        <h2 class="section-title">Cat Food</h2>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = pg_query($conn, "SELECT * FROM public.product WHERE cat_id='C01'" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . pg_error($conn));
                            }
		
			            
			                while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
				            ?>
				            <!--Một sản phẩm -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="images/<?php echo $row['pro_image']?>" width="150" height="150">
                                    <div class="product-hover">
                                        <a href="index.php=<?php echo  $row['product_id']?>" class="add-to-cart-link" ><i class="fa fa-shopping-cart"></i> Buy it</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=menu&ma=<?php echo  $row['product_id']?>"><?php echo  $row['product_name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['price']?></ins><del></del>
                                </div> 
                            </div>
                
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="latest-product">
                        <h2 class="section-title">Pet shampoo</h2>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = pg_query($conn, "SELECT * FROM public.product WHERE Cat_ID='S01'" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . pg_error($conn));
                            }
		
			            
			                while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
				            ?>
				            <!--Một sản phẩm -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="images/<?php echo $row['Pro_image']?>" width="150" height="150">
                                    <div class="product-hover">
                                        <a href="index.php=<?php echo  $row['Product_ID']?>" class="add-to-cart-link" ><i class="fa fa-shopping-cart"></i> Buy it</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=menu&ma=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?></ins><del></del>
                                </div> 
                            </div>
                
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            
        </div>
    </div> <!-- End main content area -->
</body>
</html>