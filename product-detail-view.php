<?php include 'inc/header.php'; ?>
<?php
    if (isset($_GET['proid'])) {
        $id = preg_replace('/[^-a-zA-Z0-9_]/', '' , $_GET['proid']);
    }
 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $quantity = $_POST['quantity']; 
    $addCart = $ct->addToCart($quantity, $id);
  }
?>
<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['compare'])){
    $productId = $_POST['productId'];
    $insertCom = $pd->insertCompareData($productId, $cmrId);
  }
?>
<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wlist'])){
     $saveWlist = $pd->saveWishListData($id, $cmrId);
  }
?>
  <!-- offer block Start  -->
  <div id="offer">
    <div class="container">
      <div class="offer">
        <p>30 New Mega Sales. Upto 80% Off. Starting Everyday at 9 AM.</p>
      </div>
    </div>
  </div>
  <!-- offer block end  --> 
  
  <!-- bredcrumb and page title block start  -->
  <div id="bread-crumb">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="page-title">
            <h4>woman</h4>
          </div>
        </div>
        <div class="col-md-9">
          <div class="bread-crumb">
            <ul>
              <li><a href="index.html">home</a></li>
              <li>\</li>
              <li><a href="grid-view.php">woman</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bredcrumb and page title block end  -->
  
  <div id="product-category">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4"> 
          <!-- left block Start  -->
          <div id="left">
            <div class="sidebar-block">
              <div class="sidebar-widget Category-block">
                <div class="sidebar-title">
                  <h4> Categories</h4>
                </div>
                <ul class="title-toggle">
                 <?php   
                 $getCat = $cat->gatAllCat(); 
                  if($getCat){
                  while($result = $getCat->fetch_assoc()){ ?>
                  <li><a href="productbycat.php?catid=<?php echo $result['catId']?>"><?php echo $result['catName']?></a></li>
                   <?php } }?>
                </ul>
              </div>
              <div class="sidebar-widget Shop-by-block">
                <div class="sidebar-title">
                  <h4>Shop by</h4>
                </div>
                <ul class="title-toggle">
                  <li class="category">
                    <h5><a href="grid-view.html">Category</a></h5>
                    <ul>
                      <li><a href="grid-view.html">Bags 2 </a></li>
                      <li><a href="grid-view.html">Clothing x2 2 (0)</a></li>
                      <li><a href="grid-view.html">Lingerie 2 (0) </a></li>
                    </ul>
                  </li>
                  <li class="color">
                    <h5><a href="grid-view.html">Color</a></h5>
                    <ul>
                      <li><a href="grid-view.html">red (2) </a></li>
                      <li><a href="grid-view.html">blue (5)</a></li>
                      <li><a href="grid-view.html">yelow (0) </a></li>
                      <li><a href="grid-vier.html">black (4)</a></li>
                    </ul>
                  </li>
                  <li class="manufacture">
                    <h5><a href="grid-view.html">Manufacture</a></h5>
                    <ul>
                      <li><a href="grid-view.html">Bags 2 </a></li>
                      <li><a href="grid-view.html">Clothing x2 2 (0)</a></li>
                      <li><a href="grid-view.html">Lingerie 2 (0) </a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              
              
              <div class="sidebar-widget banner-block">
                <div class="left-banner"> <a href="#"><img src="images/product/left-banner.jpg" alt="#"></a> </div>
              </div>
              <div class="sidebar-widget Best-Products-block">
                <div class="sidebar-title">
                  <h4> Best Products</h4>
                </div>
                <ul class="title-toggle">
                  <li>
                    <div class="product-block ">
                      <div class="item col-md-4 col-sm-4 col-xs-4">
                        <div class="image"> <a href="product-detail-view.html"><img class="img-responsive" title="T-shirt" alt="T-shirt" src="images/product/3prod281x366.jpg"></a> </div>
                      </div>
                      <div class="item col-md-8 col-sm-8 col-xs-8">
                        <div class="product-details">
                          <div class="product-name">
                            <h5><a href="product-detail-view.html">Black African Print Pencil Skirt </a></h5>
                          </div>
                          <div class="review"></div>
                          <div class="price"> <span class="price-new">$14.99</span> </div>
                          <div class="addto-cart"><a href="#">Add to Cart</a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="product-block ">
                      <div class="item col-md-4 col-sm-4 col-xs-4">
                        <div class="image"> <a href="product-detail-view.html"><img class="img-responsive" title="T-shirt" alt="T-shirt" src="images/product/4prod281x366.jpg"></a> </div>
                      </div>
                      <div class="item col-md-8 col-sm-8 col-xs-8">
                        <div class="product-details">
                          <div class="product-name">
                            <h5><a href="product-detail-view.html">Black African Print Pencil Skirt </a></h5>
                          </div>
                          <div class="review"></div>
                          <div class="price"> <span class="price-new">$14.99</span> </div>
                          <div class="addto-cart"><a href="#">Add to Cart</a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="product-block ">
                      <div class="item col-md-4 col-sm-4 col-xs-4">
                        <div class="image"> <a href="product-detail-view.html"><img class="img-responsive" title="T-shirt" alt="T-shirt" src="images/product/5prod281x366.jpg"></a> </div>
                      </div>
                      <div class="item col-md-8 col-sm-8 col-xs-8">
                        <div class="product-details">
                          <div class="product-name">
                            <h5><a href="product-detail-view.html">Black African Print Pencil Skirt </a></h5>
                          </div>
                          <div class="review"></div>
                          <div class="price"> <span class="price-new">$14.99</span> </div>
                          <div class="addto-cart"><a href="#">Add to Cart</a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- left block end  --> 
        </div>
        
        
        <div class="col-md-9 col-sm-8"> 
          <!-- right block Start  -->
          <div id="right">
              <?php   
                 $gatSPd = $pd->gatSingleProductById($id); 
                 if($gatSPd){
                   while($result = $gatSPd->fetch_assoc()){
                     ?>
            <div class="product-detail-view">
              <div class="row">
                <div class="col-md-6">
                  <div class="sp-loading"><img src="Admin/<?php echo $result['image']?>" alt=""><br>
                    LOADING IMAGES</div>
                  <div class="sp-wrap"> <a class="item" href="Admin/<?php echo $result['image']?>"><img src="Admin/<?php echo $result['image']?>" data-imagezoom="true" alt=""></a> <a class="item" href="Admin/<?php echo $result['image']?>"><img src="Admin/<?php echo $result['image']?>" alt=""></a> <a class="item" href="Admin/<?php echo $result['image']?>"><img src="Admin/<?php echo $result['image']?>" alt=""></a> <a class="item" href="Admin/<?php echo $result['image']?>"><img src="Admin/<?php echo $result['image']?>" alt=""></a> <a class="item" href="Admin/<?php echo $result['image']?>"><img src="Admin/<?php echo $result['image']?>" alt=""></a> </div>
                </div>
                <div class="col-md-6">
                  <div class="product-detail-content">
                    <div class="product-name">
                      <h4><?php echo $result['productName']?> </h4>
                    </div>
                    <div class="review"> <span class="rate"> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star"></i> </span> 15 Review(s) | <a href="#">Add Your Review </a> </div>
                    <div class="price"> <span class="price-old">$<?php echo $result['Rprice']?></span> <span class="price-new">$<?php echo $result['price']?></span> </div>
                    <div class="stock"><span>Stock : </span>
                        <?php 
                            if($result['quantity'] == 0){
                              echo "Out Of Stock";  
                            }else{
                               echo "Available"; 
                            }
                        ?>
                    </div>
                    <div class="products-code"> <span>Product Code :</span> Html5_sample1</div>
                    <div class="product-discription"><span>Description</span>
                      <p><?php echo $fm->textShorten($result['body'],80)?> </p>
                    </div>
                    <div class="Sort-by">
                      <label>Sort by</label>
                      <select class="selectpicker form-control" id="select-by-size">
                        <option selected="selected" value="#">S</option>
                        <option value="#">M</option>
                        <option value="#">L</option>
                      </select>
                    </div>
                    <div class="Color">
                      <label>Color</label>
                      <select class="selectpicker form-control" id="select-by-color">
                        <option selected="selected" value="#">Blue</option>
                        <option value="#">Green</option>
                        <option value="#">Orange</option>
                        <option value="#">White</option>
                      </select>
                    </div>
                    <form action="" method="post">
                    <div class="product-qty">
                      <label for="qty">Qty:</label>
                      <div class="custom-qty">
                        <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>
                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="quantity">
                        <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>
                      </div>
                    </div>
                    <?php 
                        if($result['quantity'] == 0){?>
                    <div class="add-to-cart">
                      <button type="submit" name="wlist" class="btn btn-default">Add to Wishlist</button>
                    </div>
                     <?php }else{?>
                     <div class="add-to-cart">
                      <button type="submit" name="submit" class="btn btn-default">Add to Cart</button>
                    </div>
                     <?php }?>
                    </form>	
                    
                    <?php $login = session :: get("cuslogin");
                         if($login == true){?>
                    <ul class="add-links">
                        <li>
                          <form action="" method="post">
            		        <input type="hidden" class="link-compare" name="productId" value="<?php echo $result['productId']?>"/>
            				<button type="submit" name="compare" class="btn btn-default">Add to Campare</button>
		        	    </form>
		        	</li>
                      <li> 
                      <form action="" method="post">
                      
                      <?php 
                        if($result['quantity'] == 0){?>
                    
                     <?php }else{?>
                     <button type="submit" name="wlist" class="btn btn-default">Add to Wishlist</button>
                     <?php }?>
                      </form>
                      </li>
                    </ul>
                    <?php }?>
                    
            	 <?php if(isset($addCart)){
                echo $addCart;
                    }?>
				
				 <?php if(isset($insertCom)){
                        echo $insertCom;
                    }?>
                    
                    <?php if(isset($saveWlist)){
                        echo $saveWlist;
                    }?>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-detail-tab">
              <div class="row">
                <div class="col-md-12">
                  <div id="tabs">
                    <ul class="nav nav-tabs">
                      <li><a class="tab-Description selected" title="Description">Description</a></li>
                      <li><a class="tab-Product-Tags" title="Product-Tags">Product-Tags</a></li>
                      <li><a class="tab-Reviews" title="Reviews">Reviews</a></li>
                    </ul>
                  </div>
                  <div id="items">
                    <div class="tab-content">
                      <ul>
                        <li>
                          <div class="items-Description selected">
                            <div class="Description"> <strong>The standard Lorem Ipsum passage, used since the 1500s</strong><br>
                            <?php echo $result['body']?>
                              <br>
                              <strong>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</strong><br>
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </div>
                          </div>
                        </li>
                        <li>
                          <div class="items-Product-Tags "><strong>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</strong><br>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur</div>
                        </li>
                        <li>
                          <div class="items-Reviews ">masghrgjhgjr jh mahendra kathiriya shibhavadla lashkar</div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
              
            <div class="Related-product">
              <div class="row">
                <div class="col-md-12">
                  <div class="Featured-Products-title">
                    <h1 class="tf">Related Products</h1>
                  </div>
                  <div class= "customNavigation"> <a class="btn related_prev prev"><i class="fa fa-angle-left"></i></a> <a class="btn related_next next"><i class="fa fa-angle-right"></i></a> </div>
                  <div id="related-products" class="owl-carousel">
                      

                <?php
                $catid = $result['catId'];
                $relProduct = $pd->gatRelProductByCat($catid); 
                    if($relProduct){
                   while($result = $relProduct->fetch_assoc()){
                     ?>
                    <div class="item">
                      <div class="product-block ">
                        <div class="image"> <a href="product-detail-view.php?proid=<?php echo $result['productId']?>"><img class="img-responsive" title="T-shirt" alt="T-shirt" src="Admin/<?php echo $result['image']?>"></a> </div>
                        <div class="product-details">
                          <div class="product-name">
                            <h4><a href="product-detail-view.php?proid=<?php echo $result['productId']?>"><?php echo $fm->textShorten($result['productName'],20)?> </a></h4>
                          </div>
                          <div class="price"> <span class="price-old">$ <?php echo $result['price']?></span> <span class="price-new">$ <?php echo $result['price']?></span> </div>
                          <div class="product-hov">
                            <ul>
                              <li class="wish"><a href="#" ></a></li>
                              <li class="addtocart"><a href="#" >Add to Cart</a> </li>
                              <li class="compare"><a href="#" ></a></li>
                            </ul>
                            <div class="review"> <span class="rate"> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star rated"></i> <i class="fa fa-star"></i> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                   <?php } } else{ echo "Related Post Not Available!";}?> 
                    
                  </div>
                </div>
              </div>
            </div>
            
            <?php } }  else{ header('Location:404.php');}?>
          </div>
          <!-- right block end  --> 
        </div>
      </div>
    </div>
  </div>
  
<?php include 'inc/footer.php'; ?>