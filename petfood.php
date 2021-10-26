<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = pg_query($conn, "SELECT * FROM cat_id="P01"" );
			
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
            </div>
        </div>
    </div> <!-- End main content area --