<?php include 'inc/header.php'; ?>
<?php include 'inc/slider.php'; ?>

<?php
  
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $quantity = $_POST['quantity'];
    $id = $_POST['productId'];
    $dirAddCart = $ct->addToCartDir($quantity, $id);
  }
?>

<?php 
 if(!isset($_GET["id"])){
   echo "<meta http-equiv='refresh' content='0;URL=?id=Home'/>";
 }
?>

  <!-- Fashio Sale block Start  -->
  <div id="fashion-sale">
    <div class="container">
      <div class="row">
        <div class="col-md-12 fashion">
          <div class="box">
            <div id="fashion-product" class="owl-carousel fashion-product">
                <?php   
                 $getCat = $cat->gatAllCat(); 
                  if($getCat){
                  while($result = $getCat->fetch_assoc()){ ?>
              <div class="item">
                <div class="product-block ">
                  <div class="image"> <a href="productbycat.php?catid=<?php echo $result['catId']?>"><img class="img-responsive" title="pursh" alt="pursh" src="images/product/pro1.png"></a> </div>
                  <div class="product-details">
                    <div class="product-name">
                      <h3><a href="#">Cosmetics</a></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-block ">
                  <div class="image"> <a href="productbycat.php?catid=<?php echo $result['catId']?>"><img class="img-responsive" title="sandle" alt="sandal" src="images/product/pro2.png"></a> </div>
                  <div class="product-details">
                    <div class="product-name">
                      <h3><a href="#">Jewelry</a></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-block ">
                  <div class="image"> <a href="productbycat.php?catid=<?php echo $result['catId']?>"><img class="img-responsive" title="jeans" alt="jeans" src="images/product/pro3.png"></a> </div>
                  <div class="product-details">
                    <div class="product-name">
                      <h3><a href="#">Smart TV </a></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-block ">
                  <div class="image"> <a href="productbycat.php?catid=<?php echo $result['catId']?>"><img class="img-responsive" title="jeans" alt="jeans" src="images/product/pro4.png"></a> </div>
                  <div class="product-details">
                    <div class="product-name">
                      <h3><a href="#">Cellphones</a></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-block ">
                  <div class="image"> <a href="productbycat.php?catid=<?php echo $result['catId']?>"><img class="img-responsive" title="jeans" alt="jeans" src="images/product/pro5.png"></a> </div>
                  <div class="product-details">
                    <div class="product-name">
                      <h3><a href="#">Handbags</a></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-block ">
                  <div class="image"> <a href="productbycat.php?catid=<?php echo $result['catId']?>"><img class="img-responsive" title="jeans" alt="jeans" src="images/product/pro6.png"></a> </div>
                  <div class="product-details">
                    <div class="product-name">
                      <h3><a href="#">Electronics</a></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-block ">
                  <div class="image"> <a href="productbycat.php?catid=<?php echo $result['catId']?>"><img class="img-responsive" title="pursh" alt="pursh" src="images/product/pro7.png"></a> </div>
                  <div class="product-details">
                    <div class="product-name">
                      <h3><a href="#">Fashion </a></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-block ">
                  <div class="image"> <a href="productbycat.php?catid=<?php echo $result['catId']?>"><img class="img-responsive" title="sandle" alt="sandal" src="images/product/pro4.png"></a> </div>
                  <div class="product-details">
                    <div class="product-name">
                      <h3><a href="#">Cellphones </a></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-block ">
                  <div class="image"> <a href="productbycat.php?catid=<?php echo $result['catId']?>"><img class="img-responsive" title="jeans" alt="jeans" src="images/product/pro5.png"></a> </div>
                  <div class="product-details">
                    <div class="product-name">
                      <h3><a href="#">Handbags</a></h3>
                    </div>
                  </div>
                </div>
              </div>
              <?php } }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fashio Sale block End  --> 
  
 <!-- 3 CMS Block Start -->
  <div id="cms">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <?php 
            $hedbtomsms = $sms->headBottSms();
            if($hedbtomsms){
                $i=0;
                $x =0;
                while($result = $hedbtomsms->fetch_assoc()){
                $i++; $x++;?>    
              <div class= "cms-block<?php echo $x;?> col-sm-4 col-sm-12">
                <div class="stf"><?php echo $result['smsTitle']?></div>
                <p><?php echo $result['smsBody']?></p>
              </div>
        <?php } }?>  
        </div>
      </div>
    </div>
  </div>
  <!-- 3 CMS Block End --> 
  
  
  
  <!-- Featured Products block Start  -->
  <div id="Featured">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="Featured-Products-title">
            <h2 class="tf">Trending Now!<span> Get Our Best Prices </span></h2>
          </div>
          <div class= "customNavigation"> <a class="btn featured_prev prev"><i class="fa fa-angle-left"></i></a> <a class="btn featured_next next"><i class="fa fa-angle-right"></i></a> </div>
          <div class="box">
            <div id="featured-products" class="owl-carousel">
              <?php   
                 $getNpd = $pd->gatFeaturadProduct(); 
                 if($getNpd){
                   $i;
                   while($result = $getNpd->fetch_assoc()){
                   $i++; ?> 
                
              <div class="item">
                <div class="product-block ">
                  <div class="image"> <a href="product-detail-view.php?proid=<?php echo $result['productId']?>">
                      <img class="img-responsive" title="<?php echo $fm->textShorten($result['productName'],50);?>" alt="<?php echo $fm->textShorten($result['productName'],40);?>" width="250" height="300" src="Admin/<?php echo $result['image']?>"></a> </div>
                  <div class="product-details">
                    <div class="product-name">
                      <h3><a href="product-detail-view.php?proid=<?php echo $result['productId']?>"><?php echo $fm->textShorten($result['productName'],40);?></a></h3>
                    </div>
                    <div class="price"> <span class="price-old">$<?php echo $result['Rprice']?></span> <span class="price-new">$<?php echo $result['price']?></span> </div>
                         <div class="price">    <?php if(isset($addCart)){ echo $addCart; }?></div>
                    <div class="product-hov">
                      <ul>
                        <li class="wish"><a href="product-detail-view.php?proid=<?php echo $result['productId']?>" ></a></li>
                        
                        <li class="addtocart"> 
                        <form action="" method="post">
           
                        <input type="hidden" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="quantity">
                        <input type="hidden" class="input-text qty" title="Qty" value="<?php echo $result['productId']?>" maxlength="8" id="qty" name="productId">
                    <?php 
                        if($result['quantity'] == 0){?>
                      <button type="submit" name="wlist" class="btn-default">Add to Wishlist</button>
                     <?php }else{?>
                      <button type="submit" name="submit" class="btn-default">Add to Cart</button>
                     <?php }?>
                    </form>
                        </li>
                        <li class="compare"><a href="product-detail-view.php?proid=<?php echo $result['productId']?>" ></a></li>
                      </ul>
                      <div class="review"> <span class="rate"> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star"></i> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php }}?>	
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Featured Products block End  --> 
  
  <div id="Featured">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="Featured-Products-title">
            <h2 class="tf">Trending Now!<span> Get Our Best Prices </span></h2>
          </div>
             <!--Pagination-->
<?php
	$per_page = 8;
	if(isset($_GET["page"])){
		$page = $_GET["page"];
	} else {
		$page=1;
	}
	$start_form = ($page-1) * $per_page;

?>
<!--End Pagination-->       
            <div class="product-grid-view">
              <ul>
                 <?php   
                 $getNpd = $pd->gatNProduct($start_form, $per_page); 
                 if($getNpd){
                   $i;
                   while($result = $getNpd->fetch_assoc()){
                   $i++; ?> 
                <li>
                  <div class="item col-md-3 col-sm-4 col-xs-4">
                    <div class="product-block ">
                      <div class="image"> <a href="product-detail-view.php?proid=<?php echo $result['productId']?>"><img width="281" height="366"  class="img-responsive" title="<?php echo $result['productName']?>" alt="<?php echo $result['productName']?>" src="Admin/<?php echo $result['image']?>"></a> </div>
                      <div class="product-details">
                        <div class="product-name">
                          <h4><a href="product-detail-view.php?proid=<?php echo $result['productId']?>"><?php echo $fm->textShorten($result['productName'],60)?> </a></h4>
                        </div>
                        <div class="price"> <span class="price-old">$<?php echo $result['Rprice']?></span> <span class="price-new">$<?php echo $result['price']?></span> </div>
                        <div class="product-hov">
                          <ul>
                            <li class="wish"><a href="product-detail-view.php?proid=<?php echo $result['productId']?>"></a></li>
                            <li class="addtocart"> 
                        <form action="" method="post">
           
                        <input type="hidden" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="quantity">
                        <input type="hidden" class="input-text qty" title="Qty" value="<?php echo $result['productId']?>" maxlength="8" id="qty" name="productId">
                    <?php 
                        if($result['quantity'] == 0){?>
                      <button type="submit" name="wlist" class="btn-default">Add to Wishlist</button>
                     <?php }else{?>
                      <button type="submit" name="submit" class="btn-default">Add to Cart</button>
                     <?php }?>
                    </form>
                        </li>
                            <li class="compare"><a href="product-detail-view.php?proid=<?php echo $result['productId']?>"></a></li>
                          </ul>
                          <div class="review"> <span class="rate"> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star"></i> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
    
		<?php } ?>
              </ul>
            </div>
                      
    <!--Pagination-->
    
     </div>
          <div class="row">
            <div class="pagination-bar">
              <ul>
	<?php 
	$couFromFpd = $pd->couFromNProduct();
	
	$total_rows = mysqli_num_rows($couFromFpd);
	
	$total_pages = ceil($total_rows/$per_page);
	
    echo "<li><a href='index.php?page=1'><i class='fa fa-angle-left'></i></a></li>";
	for ($i=1; $i <= $total_pages; $i++) { 
	    echo "<li><a href='index.php?page=".$i."'>".$i."</a></li>";
	}

echo "<li><a href='index.php?page=$total_pages'><i class='fa fa-angle-right'></i></a></li>";?>
  
            
          </div>
          <!-- right block end  --> 
          <?php }else{
		    echo "Women's Product Not Found";
		}?>	
        </div>
            
         </div>
      </div>
    </div>
  </div>   

  
  <!-- CMS Banner & Video block Start  -->
  <div id="video">
    <div class="container">
      <div class=" cms-video-bg">
        <div class="col-md-4">
          <div class="cms-banner">
            <p>Latest Offers & Deals Every Single Day</p>
            <h4>30% off</h4>
            <p> Save big with the best further shopping deals and discounts</p>
            <button type="button" class="btn btn-default">Shop Now</button>
          </div>
        </div>
        <!-- video start -->
        <div class="col-md-8 video">
          <video controls>
            <source src="video/Fashion_Film.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
          </video>
        </div>
        <!-- video end --> 
      </div>
    </div>
  </div>
  <!-- CMS Banner & Video block End  --> 
  
  <!-- Latest News block Start  -->
  <div id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-9 news">
          <div class="Latest-News-title">
            <h2 class="tf">Latest Blog!<span> From newest items </span></h2>
          </div>
          <div class= "customNavigation"> <a class="btn Latest_prev prev"><i class="fa fa-angle-left"></i></a> <a class="btn Latest_next next"><i class="fa fa-angle-right"></i></a> </div>
          <div id="Latest-News" class="owl-carousel ">
            <div class="item">
              <div class="post">
                <div class="image"> <a href="blog.html"><img src="images/blog4.jpg" alt="post" title="post" class="img-responsive"></a> </div>
                <div class="content-details">
                  <div class="post-title">
                    <h3><a href="blog.html">Image post contant wrider with exampler the ttis ant</a></h3>
                  </div>
                  <div class="description">
                    <p>This ante posuere ac Mauris non turpis eu metus congue metus sagittis metus Fusce at .</p>
                    <div class="read-more"> <a class="read-more" href="single-post.html">Read More..</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="post">
                <div class="image"> <a href="blog.html"><img src="images/blog1.jpg" alt="post" title="post" class="img-responsive"></a> </div>
                <div class="content-details">
                  <div class="post-title">
                    <h3><a href="blog.html">Image post contant wrider with exampler the ttis ant</a></h3>
                  </div>
                  <div class="description">
                    <p>This ante posuere ac Mauris non turpis eu metus congue metus sagittis metus Fusce at .</p>
                    <div class="read-more"> <a class="read-more" href="single-post.html">Read More..</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="post">
                <div class="image"> <a href="blog.html"><img src="images/blog3.jpg" alt="post" title="post" class="img-responsive"></a> </div>
                <div class="content-details">
                  <div class="post-title">
                    <h3><a href="blog.html">Image post contant wrider with exampler the ttis ant</a></h3>
                  </div>
                  <div class="description">
                    <p>This ante posuere ac Mauris non turpis eu metus congue metus sagittis metus Fusce at .</p>
                    <div class="read-more"> <a class="read-more" href="single-post.html">Read More..</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="post">
                <div class="image"> <a href="blog.html"><img src="images/blog4.jpg" alt="post" title="post" class="img-responsive"></a> </div>
                <div class="content-details">
                  <div class="post-title">
                    <h3><a href="blog.html">Image post contant wrider with exampler the ttis ant</a></h3>
                  </div>
                  <div class="description">
                    <p>This ante posuere ac Mauris non turpis eu metus congue metus sagittis metus Fusce at .</p>
                    <div class="read-more"> <a class="read-more" href="single-post.html">Read More..</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="post">
                <div class="image"> <a href="blog.html"><img src="images/blog5.jpg" alt="post" title="post" class="img-responsive"></a> </div>
                <div class="content-details">
                  <div class="post-title">
                    <h3><a href="blog.html">Image post contant wrider with exampler the ttis ant</a></h3>
                  </div>
                  <div class="description">
                    <p>This ante posuere ac Mauris non turpis eu metus congue metus sagittis metus Fusce at .</p>
                    <div class="read-more"> <a class="read-more" href="single-post.html">Read More..</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 special">
          <div class="Special-title">
            <h2 class="tf">Best<samp> Offers</samp></h2>
          </div>
          <div class= "customNavigation"> <a class="special_prev"><i class="fa fa-angle-left"></i></a>
            <div id="owlStatus">
              <div class="currentItem">
                <div class="result"></div>
              </div>
              /
              <div class="owlItems">
                <div class="result"></div>
              </div>
            </div>
            <a class="special_next"><i class="fa fa-angle-right"></i></a> </div>
          <div class="Special-product">
            <div id="special" class="owl-carousel">
              <div class="item"><a href="#"><img src="images/special-banner.jpg" alt="#"></a> </div>
              <div class="item"><a href="#"><img src="images/special-banner2.jpg" alt="#"></a></div>
              <div class="item"><a href="#"><img src="images/special-banner3.jpg" alt="#"></a></div>
              <div class="item"><a href="#"><img src="images/special-banner4.jpg" alt="#"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Latest News block End  --> 
  
  <!-- Brand logo block Start  -->
  <div id="brand">
    <div class="container">
      <div class="row brand">
        <div class="col-md-12">
          <div id="brand-logo" class="owl-carousel">
            <div class="item"><a href="#"><img src="images/brand1.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand2.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand3.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand4.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand5.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand6.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand7.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand8.png" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand9.png" alt="#"></a></div>
          </div>
          <div class= "customNavigation"> <a class="btn brand_prev prev"><i class="fa fa-angle-left"></i></a> <a class="btn brand_next next"><i class="fa fa-angle-right"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Brand logo block End  --> 
 <?php include 'inc/footer.php'; ?>