<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php';?>
<?php include_once '../helpers/Format.php';?>
<?php 
  $fm = new Format();

if(isset($_GET['delpro'])){
	$id = $_GET['delpro'];
	$id = preg_replace('/[^-a-zA-Z0-9_]/', '' , $_GET['delpro']);
 	$delproduct = $pd->delProductById($id);
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
                                                    <h4>Product List</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index.php"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item">Product List
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- HTML5 Export Buttons table start -->
                                                <div class="card">
                                                    <div class="card-header table-card-header">
                                                        <h5>Product List</h5>
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
                                                                        <th>Description</th>
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
                                                               $i=0;
                                                               while($result = $getPd->fetch_assoc()){
                                                               $i++; ?>
                                                            <tr>
                                                            <td><?php echo $i;?></td>
                                                                  <td><?php echo $fm->textShorten($result['productName'], 30);?></td>
                                                                  <td><?php echo $result['catName']?></td>
                                                                  <td><?php echo $result['brandName']?></td>
                                                                  <td><?php echo $fm->textShorten($result['body'], 50);?></td>
                                                                  <td><?php echo $result['price']?> </br> <?php echo $result['Rprice']?> </td>
                                                                  <td><img width="100" height="80" src="<?php echo $result['image']?>"></td>
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
                                                <!-- HTML5 Export Buttons end -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
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
    <!-- data-table js -->
    <script src="bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
    <script src="bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
    <script src="assets\pages\data-table\js\jszip.min.js"></script>
    <script src="assets\pages\data-table\js\pdfmake.min.js"></script>
    <script src="assets\pages\data-table\js\vfs_fonts.js"></script>
    <script src="assets\pages\data-table\extensions\buttons\js\dataTables.buttons.min.js"></script>
    <script src="assets\pages\data-table\extensions\buttons\js\buttons.flash.min.js"></script>
    <script src="assets\pages\data-table\extensions\buttons\js\jszip.min.js"></script>
    <script src="assets\pages\data-table\extensions\buttons\js\vfs_fonts.js"></script>
    <script src="assets\pages\data-table\extensions\buttons\js\buttons.colVis.min.js"></script>
    <script src="bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
    <script src="bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
    <script src="bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
    <script src="bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
    <script src="bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script src="assets\pages\data-table\extensions\buttons\js\extension-btns-custom.js"></script>
    <script src="assets\js\pcoded.min.js"></script>
    <script src="assets\js\vartical-layout.min.js"></script>
    <script src="assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="assets\js\script.js"></script>
    <!-- Switch component js -->
    <script type="text/javascript" src="bower_components\switchery\js\switchery.min.js"></script>
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

