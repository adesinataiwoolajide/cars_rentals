<?php 
    include("header.php");
    $slug = $_GET['slug'];
    $details = $car->getSingleCar($slug);
    
?>
 <!-- Breadcromb Area Start -->
 <section class="gauto-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>Product Details</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="./">Home</a></li>
                        <li><i class="fa fa-table"></i></li>
                        <li><a href="car_details?slug=<?php echo $slug ?>"><?php echo $details['name'] ?> Details</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Product Details Page Start -->
      <section class="gauto-product-details section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="product-details-image">
                     <img src="<?php echo 'assets/cars/'. $details['car_image'] ?>" alt="product" />
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="product-details-text">
                     <h3><?php echo $details['name'] ?></h3>
                     <div class="car-rating">
                        <ul>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star-half-o"></i></li>
                        </ul>
                       
                     </div>
                     <div class="single-pro-page-para">
                        <p>Description: <?php echo $details['name'] ?></p>
                        <p>Capacity: <?php echo $details['capacity'] ?> Person</p>
                        <p>Facilities: <?php echo $details['facilities'] ?></p>

                        <p>Color: <?php echo $details['color'] ?></p>
                            <?php 
                            $status = $details['status'];
                            if($status ==1){ ?>
                                <p style="color: green">Status: Available</p><?php
                            }elseif($status ==2 ){ ?>
                                
                                <p style="color: red">Status: Booked</p><?php
                            }else{
                                echo 'STatus: Not Available';
                            } ?> 
                        <p><?php echo $details['name'] ?></p>
                     </div>
                     <div class="single-shop-price">
                        <p>Price: &#8358;<?php echo number_format($details['price']) ?><span>/ Day</span></p>
                        <p class="qnt">Quantity:<input value="1" type="number"></p>
                     </div>
                     <div class="single-shop-page-btn">
                        <?php 
                        $status = $details['status'];
                        if($status ==1){ ?>
                            <a href="#" class="gauto-btn"><i class="fa fa-shopping-cart"></i> book the car</a><?php 
                        }else{?>
                            <a href="" class="gauto-btn"><i class="fa fa-cancel"></i> Not available for bookings</a><?php 
                        } ?>
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Product Details Page End -->
       
       
      <!-- Related Products Area Start -->
      <section class="gauto-related-products section_b_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>products</h4>
                     <h2>related products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <div class="product-item">
                     <div class="product-image">
                        <a href="#">
                        <img src="assets/img/product-2.jpg" alt="product 1" />
                        </a>
                     </div>
                     <div class="product-text">
                        <div class="product-title">
                           <h3><a href="#">Car disk brake</a></h3>
                           <p>$80.00</p>
                        </div>
                        <div class="product-action">
                           <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </section>
      <!-- Related Products Area End -->

<?php 
    include("footer.php");
?>c