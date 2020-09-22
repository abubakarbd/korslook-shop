<?php include 'inc/header.php'; ?> 
<?php include 'inc/sidebar.php'; ?> 
<?php
     include_once '../helpers/Format.php';
     $fm = new Format();
?>
 <div class="pcoded-content">
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Bootstrap tabs</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Basic Components</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Tabs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
                
                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Tab variant tab card start -->
                            <div class="card">
                                <div class="card-block tab-icon">
                                    <!-- Row start -->
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs md-tabs col-xl-6 " role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#order" role="tab"><i class="icofont icofont-home"></i>Order</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Customer" role="tab"><i class="icofont icofont-ui-user "></i>Customer</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Stocks" role="tab"><i class="icofont icofont-ui-message"></i>Stocks</a>
                                                    <div class="slide"></div>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            
                                            <div class="tab-content card-block">
                                                <div class="tab-pane active" id="order" role="tabpanel">
                                            <div class="row">        
                                            <!-- statustic-card  start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="feather icon-pie-chart bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">Totle Sales</span>
                                                        <h4>
                                                            <?php
                                                                $totalCountSales = $ct->getComOrdertPro();
                                                                if($totalCountSales){
                                                                    $count = mysqli_num_rows($totalCountSales);
                                                                    echo $count;
                                                                }
                                                            ?>
                                                        </h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-blue f-16 feather icon-alert-triangle m-r-10"></i>Get more space
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="feather icon-home bg-c-pink card1-icon"></i>
                                                        <span class="text-c-pink f-w-600">Totle Income</span>
                                                        <h4>$
                                                            <?php 
                                                             
                                                                $totalIncome = $ct->getComOrdertPro();
                                                                if($totalIncome){
                                                                    $quantity = 0;
                                                                    $price    = 0;
                                                                    while($result = $totalIncome->fetch_assoc()){
                                                                      $quantity = $quantity + $result['quantity'];
                                                                      $price = $price + $result['price'];
                                                                    }
                                                                }
                                                                echo $price;
                                                            ?>
                                                        </h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-pink f-16 feather icon-calendar m-r-10"></i>Last 24 hours
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="feather icon-alert-triangle bg-c-green card1-icon"></i>
                                                        <span class="text-c-green f-w-600">Totle Product</span>
                                                        <h4>
                                                            <?php   
                                                 $getPd = $pd->gatAllProduct(); 
                                                    if($getPd){
                                                    $count = mysqli_num_rows($getPd);
                                                     echo $count;
                                                 } else{
                                                      echo '0';
                                                     } ?>
                                                        </h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-green f-16 feather icon-tag m-r-10"></i>Tracked at microsoft
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="feather icon-twitter bg-c-yellow card1-icon"></i>
                                                        <span class="text-c-yellow f-w-600">Order List</span>
                                                        <h4>
                                                            <?php   
                                             $getOrder = $ct->gatNewOrderProduct(); 
                                                 if($getOrder){
                                                    $count = mysqli_num_rows($getOrder);
                                                     echo $count;
                                                 }else{
                                                      echo '0';
                                                     }  ?> 
                                                        </h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-yellow f-16 feather icon-watch m-r-10"></i>Just update
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statustic-card  end -->
                                                </div>
                                                </div>
                                                
                                                
                                                <div class="tab-pane" id="Customer" role="tabpanel">
                                                    <div class="card">
                                                    <div class="card-header table-card-header">
                                                        <h5>Customer List</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Name</th>
                                                                        <th>Mobile</th>
                                                                        <th>Email</th>
                                                                        <th>Address</th>
                                                                        <th>City</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                       <?php 
                                                            $getsCust = $cus->getCustomer();
                                                            if($getsCust){
                                                                $i=0;
                                                            while($result = $getsCust->fetch_assoc()){ 
                                                            $i++;
                                                            ?> 
                                                            <tr>
                                                                <td><?php echo $i;?></td>
                                                                <td><?php echo $result['name']; ?></td>
                                                                <td><?php echo $result['phone']; ?></td>
                                                                <td><?php echo $result['email']; ?></td>
                                                                <td><?php echo $result['address']; ?></td>
                                                                <td><?php echo $result['city']; ?></td>
                                                                <td>
                                                                  <span class="m-r-10">
                                                               <a href="#!" class="text-muted f-16"><i class="icofont icofont-options"></i></a> </span>
                                                            <div class="dropdown-secondary dropdown d-inline-block">
                                                                <button class="btn btn-sm btn-primary dropdown-toggle waves-light" type="button" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdown3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                                    <a class="dropdown-item waves-light waves-effect" href="customer.php?custId=<?php echo $result['id'];?>"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                    <a class="dropdown-item waves-light waves-effect" href="editbrand.php?brandid=<?php echo $result['brandId'];?>"><i class="icofont icofont-edit-alt m-r-10"></i>Edit</a>
                                                                    <a onclick="return confirm('Are your sure to Delete!')" class="dropdown-item waves-light waves-effect" href="?delbrand=<?php echo $result['brandId'];?>"><i class="icofont icofont-close m-r-10"></i>Remove</a>
                                                                </div>
                                                                <!-- end of dropdown menu -->
                                                            </div>
                                                                </td>
                                                            </tr>
                                                            <?php } }?> 
                                                        </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                                
                                                <div class="tab-pane" id="Stocks" role="tabpanel">
                                                   <div class="card-block">
                                                        <!-- Row start -->
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-12">
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs  tabs" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab" href="#Mosts_tocked" role="tab">Most stocked</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#Out_of_stock" role="tab">Out of stock</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#Low_in_stock" role="tab">Low in stock</a>
                                                                    </li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content tabs card-block">
                                                                    <div class="tab-pane active" id="Mosts_tocked" role="tabpanel">
                                                                        <div class="card">
                                                    <div class="card-header table-card-header">
                                                        <h5>Most stocked</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S No</th>
                                                                        <th>Product Name</th>
                                                                        <th>Catagory</th>
                                                                        <th>Brand</th>
                                                                        <th>Price</th>
                                                                        <th>Image</th>
                                                                        <th>Type</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                      <?php   
                                                             $getPd = $pd->gatAllProduct(); 
                                                             if($getPd){
                                                               $i;
                                                               while($result = $getPd->fetch_assoc()){
                                                               $i++; ?>
                                                            <tr>
                                                            <td><?php echo $i;?></td>
                                                                  <td><?php echo $fm->textShorten($result['productName'], 30);?></td>
                                                                  <td><?php echo $result['catName']?></td>
                                                                  <td><?php echo $result['brandName']?></td>
                                                                  <td><?php echo $result['price']?> </br> <?php echo $result['Rprice']?> </td>
                                                                  <td><img width="50" height="20" src="<?php echo $result['image']?>"></td>
                                                                  <td>
                                                                  
                                                                  <?php if($result['type'] == 0){
                                                                    echo "Feature";
                                                                  }else{
                                                                   echo "General";
                                                                  }?>
                                                                  
                                                                  </td>
                                                                <td>
                                                                  <span class="m-r-10">
                                                               <a href="#!" class="text-muted f-16"><i class="icofont icofont-options"></i></a> </span>
                                                            <div class="dropdown-secondary dropdown d-inline-block">
                                                                <button class="btn btn-sm btn-primary dropdown-toggle waves-light" type="button" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdown3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                                    <a class="dropdown-item waves-light waves-effect" href="editproduct.php?proid=<?php echo $result['productId'];?>"><i class="icofont icofont-edit-alt m-r-10"></i>Edit Product</a>
                                                                    <a onclick="return confirm('Are your sure to Delete!')" class="dropdown-item waves-light waves-effect" href="?delpro=<?php echo $result['productId'];?>"><i class="icofont icofont-close m-r-10"></i>Remove</a>
                                                                </div>
                                                                <!-- end of dropdown menu -->
                                                            </div>
                                                                </td>
                                                            </tr>
                                                            <?php } }?>  
                                                        </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="Out_of_stock" role="tabpanel">
                                                                                 <div class="card">
                                                    <div class="card-header table-card-header">
                                                        <h5>Out_of_stock</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S No</th>
                                                                        <th>Product Name</th>
                                                                        <th>Catagory</th>
                                                                        <th>Brand</th>
                                                                        <th>Price</th>
                                                                        <th>Image</th>
                                                                        <th>Type</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                      <?php   
                                                             $getPd = $pd->gatOutProduct(); 
                                                             if($getPd){
                                                               $i;
                                                               while($result = $getPd->fetch_assoc()){
                                                               $i++; ?>
                                                            <tr>
                                                            <td><?php echo $i;?></td>
                                                                  <td><?php echo $fm->textShorten($result['productName'], 30);?></td>
                                                                  <td><?php echo $result['catName']?></td>
                                                                  <td><?php echo $result['brandName']?></td>
                                                                  <td><?php echo $result['price']?> </br> <?php echo $result['Rprice']?> </td>
                                                                  <td><img width="50" height="20" src="<?php echo $result['image']?>"></td>
                                                                  <td>
                                                                  
                                                                  <?php if($result['type'] == 0){
                                                                    echo "Feature";
                                                                  }else{
                                                                   echo "General";
                                                                  }?>
                                                                  
                                                                  </td>
                                                                <td>
                                                                  <span class="m-r-10">
                                                               <a href="#!" class="text-muted f-16"><i class="icofont icofont-options"></i></a> </span>
                                                            <div class="dropdown-secondary dropdown d-inline-block">
                                                                <button class="btn btn-sm btn-primary dropdown-toggle waves-light" type="button" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdown3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                                    <a class="dropdown-item waves-light waves-effect" href="editproduct.php?proid=<?php echo $result['productId'];?>"><i class="icofont icofont-edit-alt m-r-10"></i>Edit Product</a>
                                                                    <a onclick="return confirm('Are your sure to Delete!')" class="dropdown-item waves-light waves-effect" href="?delpro=<?php echo $result['productId'];?>"><i class="icofont icofont-close m-r-10"></i>Remove</a>
                                                                </div>
                                                                <!-- end of dropdown menu -->
                                                            </div>
                                                                </td>
                                                            </tr>
                                                            <?php } }?>  
                                                        </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                   </div>
                                                <div class="tab-pane" id="Low_in_stock" role="tabpanel">
                                                   <div class="card">
                                                    <div class="card-header table-card-header">
                                                        <h5>Low_in_stock</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S No</th>
                                                                        <th>Product Name</th>
                                                                        <th>Catagory</th>
                                                                        <th>Brand</th>
                                                                        <th>Price</th>
                                                                        <th>Image</th>
                                                                        <th>Quantity</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                      <?php   
                                                             $getPd = $pd->gatLowProduct(); 
                                                             if($getPd){
                                                               $i;
                                                               while($result = $getPd->fetch_assoc()){
                                                               $i++; ?>
                                                            <tr>
                                                            <td><?php echo $i;?></td>
                                                                  <td><?php echo $fm->textShorten($result['productName'], 30);?></td>
                                                                  <td><?php echo $result['catName']?></td>
                                                                  <td><?php echo $result['brandName']?></td>
                                                                  <td><?php echo $result['price']?> </br> <?php echo $result['Rprice']?> </td>
                                                                  <td><img width="50" height="20" src="<?php echo $result['image']?>"></td>
                                                                  <td><?php echo $result['quantity']?></td>
                                                                <td>
                                                                  <span class="m-r-10">
                                                               <a href="#!" class="text-muted f-16"><i class="icofont icofont-options"></i></a> </span>
                                                            <div class="dropdown-secondary dropdown d-inline-block">
                                                                <button class="btn btn-sm btn-primary dropdown-toggle waves-light" type="button" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-navigation-menu"></i></button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdown3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                                    <a class="dropdown-item waves-light waves-effect" href="editproduct.php?proid=<?php echo $result['productId'];?>"><i class="icofont icofont-edit-alt m-r-10"></i>Edit Product</a>
                                                                    <a onclick="return confirm('Are your sure to Delete!')" class="dropdown-item waves-light waves-effect" href="?delpro=<?php echo $result['productId'];?>"><i class="icofont icofont-close m-r-10"></i>Remove</a>
                                                                </div>
                                                                <!-- end of dropdown menu -->
                                                            </div>
                                                                </td>
                                                            </tr>
                                                            <?php } }?>  
                                                        </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                   </div>
                                                                   
                                                                </div>
                                                            </div>
                                                            </div>
                                                        <!-- Row end -->
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- Row end -->
                                </div>
                            </div>
                            <!-- Tab variant tab card start -->
                        </div>
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
        <!-- Main-body end -->

        <div id="styleSelector">
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="bower_components\modernizr\js\css-scrollbars.js"></script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <script src="assets\js\pcoded.min.js"></script>
    <script src="assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets\js\vartical-layout.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets\js\script.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
