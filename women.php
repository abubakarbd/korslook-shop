<?php include 'inc/header.php';?>

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
        <div class="col-md-3 col-sm-3 col-xs-3">
          <div class="page-title">
            <h4>Woman</h4>
          </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <div class="bread-crumb">
            <ul>
              <li><a href="index.html">home</a></li>
              <li>\</li>
              <li><a href="grid-view.html">woman</a></li>
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
              <div class="sidebar-widget Price-range">
                <div class="sidebar-title">
                  <label for="amount">Price range:</label>
                  <input type="text" id="amount" readonly style="border:0; color:#4d90fe; font-weight:bold;">
                  <div id="slider-range"></div>
                </div>
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
            <div class="category-banner"> <a href="#"><img src="images/product/Category-banner.jpg" alt="#"></a> </div>
            <div class="row">
              <div class="col-md-6">
                <div class="view">
                  <div class="grid active "><a href="grid-view.php">
                    <div class="grid-icon "></div>
                    </a> </div>
                  <div class="list"><a href="list-view.php">
                    <div class="list-icon "></div>
                    </a> </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="shoring pull-right">
                  <div class="short-by">
                    <p>Sort By</p>
                    <div class="select-item">
                      <select>
                        <option value="" selected="selected">Name (A to Z)</option>
                        <option value="">Name(Z - A)</option>
                        <option value="">price(low&gt;high)</option>
                        <option value="">price(high &gt; low)</option>
                        <option value="">rating(highest)</option>
                        <option value="">rating(lowest)</option>
                      </select>
                      <span class="fa fa-angle-down"></span> </div>
                  </div>
                  <div class="show-item">
                    <p>Show</p>
                    <div class="select-item">
                      <select>
                        <option value="" selected="selected">24</option>
                        <option value="">12</option>
                        <option value="">6</option>
                      </select>
                      <span class="fa fa-angle-down"></span> </div>
                  </div>
                </div>
              </div>
            </div>
            
 <!--Pagination-->
<?php
	$per_page = 6;
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
                $productbyWomen = $pd->latestFromWomen($start_form, $per_page);
                if($productbyWomen){
                   while($result = $productbyWomen->fetch_assoc()){ ?> 
                <li>
                  <div class="item col-md-4 col-sm-6 col-xs-6">
                    <div class="product-block ">
                      <div class="image"> <a href="product-detail-view.php?proid=<?php echo $result['productId']?>"><img width="281" height="366"  class="img-responsive" title="<?php echo $result['productName']?>" alt="<?php echo $result['productName']?>" src="Admin/<?php echo $result['image']?>"></a> </div>
                      <div class="product-details">
                        <div class="product-name">
                          <h4><a href="product-detail-view.php?proid=<?php echo $result['productId']?>"><?php echo $fm->textShorten($result['productName'],60)?> </a></h4>
                        </div>
                        <div class="price"> <span class="price-old">$<?php echo $result['price']?></span> <span class="price-new">$<?php echo $result['price']?></span> </div>
                        <div class="product-hov">
                          <ul>
                            <li class="wish"><a href="product-detail-view.php?proid=<?php echo $result['productId']?>"></a></li>
                            <li class="addtocart"><a href="product-detail-view.php?proid=<?php echo $result['productId']?>">Add to Cart</a> </li>
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
	$productbyMen = $pd->couFromWomen();
	
	$total_rows = mysqli_num_rows($productbyMen);
	
	$total_pages = ceil($total_rows/$per_page);
	
    echo "<li><a href='women.php?page=1'><i class='fa fa-angle-left'></i></a></li>";
	for ($i=1; $i <= $total_pages; $i++) { 
	    echo "<li><a href='women.php?page=".$i."'>".$i."</a></li>";
	}

echo "<li><a href='women.php?page=$total_pages'><i class='fa fa-angle-right'></i></a></li>";?>
  
            
          </div>
          <!-- right block end  --> 
          <?php }else{
		    echo "Women's Product Not Found";
		}?>	
        </div>
      </div>
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>