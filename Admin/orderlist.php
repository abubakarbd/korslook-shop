<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php';?>
<?php 
$filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/../helpers/Format.php');

  $fm = new Format();

if(isset($_GET['shiftid'])){
	$id     = $_GET['shiftid'];
	//$time   = $_GET['time'];
	//$price  = $_GET['price'];
	$shift  = $ct->productShifted($id);
}	
	if(isset($_GET['delid'])){
	$id     = $_GET['delid'];
	//$time   = $_GET['time'];
	//$price  = $_GET['price'];
	$delet  = $ct->delProductShifted($id); 
	}
?>
<?php 
 if(!isset($_GET["id"])){
   echo "<meta http-equiv='refresh' content='0;URL=?id=live'/>";
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
                                                    <h4>Order List</h4>
                                                </div>
                                            </div>
                                        </div>
                                              <?php 
                                                    if(isset($shift)){
                                                        echo $shift;
                                                    }
                                                    
                                                    if(isset($delet)){
                                                        echo $delet;
                                                    }
                                                ?>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index.php"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item">Order List
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
                                                        <h5>Order List</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                      <th>Order Time</th>
                                                                      <th>Product</th>
                                                                      <th>Quantity</th>
                                                                      <th>Price</th>
                                                                      <th>Cmr ID</th>
                                                                      <th>Address</th>
                                                                      <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                            <?php   
                                                             $getOrder = $ct->gatAllOrderProduct(); 
                                                             if($getOrder){
                                                               while($result = $getOrder->fetch_assoc()){?>  
                                                            <tr>
                                                                <td><?php echo $result['id']?></td>
                                                                  <td><?php echo $fm->formatDate($result['date'])?></td>
                                                                  <td><?php echo $fm->textShorten($result['productName'], 30);?></td>
                                                                  <td><?php echo $result['quantity'];?></td>
                                                                  <td><?php echo $result['price']?></td>
                                                                  <td><?php echo $result['cmrId']?></td>
                                                                  <td><a href="customer.php?custId=<?php echo $result['cmrId'];?>">View Detalise</a></td>
                                                                        <?php if($result['status'] == '0'){?>
                                                                  <td><a href="?shiftid=<?php echo $result['id'];?>">Shifted</a></td>
                                                               <?php }elseif($result['status'] == '1'){?>
                                                               <td>Panding</td>
                                                               <?php }else{?>
                                                                  <td>     <div class="btn-group">
                                                                          <a href="?delid=<?php echo $result['id'];?>"><i class="icofont icofont-trash"></i> Remove</a>
                                                                        </div>
                                                                        </td>
                                                                <?php   }?>
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

