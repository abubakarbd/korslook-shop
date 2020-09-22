<?php include '../classes/Category.php';?>
<?php include '../classes/Product.php';?>
<?php include '../classes/Brand.php';?>
<?php include '../classes/Cart.php';?>
<?php include '../classes/Customer.php';?>
<?php 
  $cat = new Category();
  $pd = new Product();
  $brand = new Brand();
  $ct = new Cart();
  $cus = new Customer();
  ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
               <?php 
				$path = $_SERVER['SCRIPT_FILENAME'];
				$currenpage = basename($path, '.php');
			?>
                            <ul class="pcoded-item pcoded-left-item">
                                <li <?php if ($currenpage == 'index') {echo 'class="active"';}?>>
                                    <a href="index.php">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Catagory</span>
                                        <span class="pcoded-badge label label-success">
                                                    <?php   
                                                     $getCat = $cat->gatAllCat(); 
                                                     if($getCat){
                                                        $count = mysqli_num_rows($getCat);
                                                         echo $count;
                                                     }else{
                                                      echo '0';
                                                     } ?>
                                        </span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li <?php if ($currenpage == 'addcatagory') {echo 'class="active"';}?>>
                                            <a href="addcatagory.php">
                                                <span class="pcoded-mtext">Add Catagory</span>
                                            </a>
                                        </li>
                                        <li <?php if ($currenpage == 'catagorylist') {echo 'class="active"';}?>>
                                            <a href="catagorylist.php">
                                                <span class="pcoded-mtext">Catagory List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Brand</span>
                                        <span class="pcoded-badge label label-success">
                                            <?php   
                                                     $getBrand = $brand->gatAllBrand(); 
                                                             if($getBrand){
                                                        $count = mysqli_num_rows($getBrand);
                                                         echo $count;
                                                     }else{
                                                      echo '0';
                                                     }  ?>
                                        </span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="addbrand.php">
                                                <span class="pcoded-mtext">Add Brand</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="brandlist.php">
                                                <span class="pcoded-mtext">Brand List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Product</span>
                                        <span class="pcoded-badge label label-success">
                                            <?php   
                                                 $getPd = $pd->gatAllProduct(); 
                                                    if($getPd){
                                                    $count = mysqli_num_rows($getPd);
                                                     echo $count;
                                                 } else{
                                                      echo '0';
                                                     } ?>
                                        </span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="addproduct.php">
                                                <span class="pcoded-mtext">Add Product</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="productlist.php">
                                                <span class="pcoded-mtext">Product List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php if ($currenpage == 'orderlist') {echo 'class="active"';}?>>
                                <a href="orderlist.php">
                                    <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
                                    <span class="pcoded-mtext">Order List</span>
                                    <span class="pcoded-badge label label-danger">
                                        
                                        <?php   
                                             $getOrder = $ct->gatNewOrderProduct(); 
                                                 if($getOrder){
                                                    $count = mysqli_num_rows($getOrder);
                                                     echo $count;
                                                 }else{
                                                      echo '0';
                                                     }  ?>                     
                                    </span>
                                </a>
                            </li>
                               <li <?php if ($currenpage == 'customerlist') {echo 'class="active"';}?>>
                                <a href="customerlist.php">
                                    <span class="pcoded-micon"><i class="icofont icofont-users"></i></span>
                                    <span class="pcoded-mtext">Customer List</span>
                                    <span class="pcoded-badge label label-success">
                                        <?php   
                                             $getsCust = $cus->getCustomer();
                                                            if($getsCust){
                                                    $count = mysqli_num_rows($getsCust);
                                                     echo $count;
                                                 }else{
                                                      echo '<span style="background: orange;">0</span>';
                                                     }  ?>
                                                           
                                    </span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                                        <span class="pcoded-mtext">SMS</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="addsms.php">
                                                <span class="pcoded-mtext">Add SMS</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="smslist.php">
                                                <span class="pcoded-mtext">SMS List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                              <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="icofont icofont-ui-user"></i></span>
                                        <span class="pcoded-mtext">Contacts</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="addcontact.php">
                                                <span class="pcoded-mtext">Add Contacts</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="contactlist.php">
                                                <span class="pcoded-mtext">Contacts List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li <?php if ($currenpage == 'report') {echo 'class="active"';}?>>
                                    <a href="report.php">
                                        <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Reports</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
            