<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>    
<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $insertProduct = $pd->ProductInsert($_POST, $_FILES);
  }
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
                                <h4>Product</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Product</a>
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
                            <!-- Basic Inputs Validation start -->
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-block">
                                    <form  action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Product Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="productName" placeholder="Enter Product Name">
                                                <span class="messages"><?php if(isset($insertProduct)){
                                                    echo $insertProduct;
                                                }?></span>
                                            </div>
                                        </div>
                                                   <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Catagory Name</label>
                                            <div class="col-sm-10">
                                                <select name="catId"  class="js-example-disabled-results col-sm-12">
                                                    <option selected="selected">Select</option
                                                   <?php   
                                                     $getCat = $cat->gatAllCat(); 
                                                     if($getCat){
                                                       $i;
                                                       while($result = $getCat->fetch_assoc()){
                                                       $i++; ?>   
                                                    <option value="<?php echo $result['catId'];?>"><?php echo $result['catName'];?></option>
                                                    <?php } }?> 
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Brand Name</label>
                                            <div class="col-sm-10">
                                                <select name="brandId" class="js-example-disabled-results col-sm-12">
                                                    <option selected="selected">Select</option>
                                                 <?php   
                                                     $getBrand = $brand->gatAllBrand(); 
                                                     if($getBrand){
                                                       while($result = $getBrand->fetch_assoc()){
                                                       $i++; ?>   
                                                    <option value="<?php echo $result['brandId'];?>"><?php echo $result['brandName'];?></option>
                                                     <?php } }?> 
                                                </select>
                                            </div>
                                        </div>
                                        
                                           <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea rows="5" cols="5" name="body" class="form-control" placeholder="Product Description"></textarea>
                                            </div>
                                        </div> 
                                        
                                          <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Upload Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Sale Price</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="price" id="numeric" placeholder="Sale Price">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Regular Price</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Rprice" id="numeric" placeholder="Regular Price">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Quantity</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="quantity" id="numeric" placeholder="Quantity">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                     <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Product Type</label>
                                            <div class="col-sm-10">
                                                <select class="js-example-disabled-results col-sm-12"  name="type" >
                                                    <option value="1">General</option>
                                                    <option value="0" >Feature</option>
                                                    <option value="3">Latest Product</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" name="submit" class="btn btn-primary m-b-0">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Basic Inputs Validation end -->
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

    <!-- Validation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript" src="assets\pages\form-validation\validate.js"></script>
    <!-- Select 2 js -->
<script type="text/javascript" src="bower_components\select2\js\select2.full.min.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets\pages\form-validation\form-validation.js"></script>
    <script type="text/javascript" src="assets\pages\advance-elements\select2-custom.js"></script>

    <script src="assets\js\pcoded.min.js"></script>
    <script src="assets\js\vartical-layout.min.js"></script>
    <script src="assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
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