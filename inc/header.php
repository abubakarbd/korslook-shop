<?php 
    include 'lib/Session.php';
    Session::init();  
?>
<?php include 'lib/Database.php'; ?>
<?php include 'helpers/Format.php'; ?>
<?php
    spl_autoload_register (function($class){
        include_once "classes/".$class.".php";
    });

    $db  = new Database();
    $fm  = new Format();
    $pd  = new Product();
    $cat = new Category();
    $ct  = new Cart();
    $cmr = new Customer();
    $sms = new Sms();
  
?>
 <?php 
    if(isset($_GET['delpro'])){
	$delId = preg_replace('/[^-a-zA-Z0-9_]/', '' , $_GET['delpro']);
 	$delproduct = $ct->delProductByMiniCart($delId);
         }
 ?> 
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>AS Online Shop</title>
<meta content="" name="description">
<meta content="" name="author">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link rel="icon" type="image/png" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/favicon.png">
<link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Poppins:300,500,600,700' rel='stylesheet' type='text/css'>
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/smoothproducts.css">
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>
<body id="index">
<div class="wrapar"> 
  <!-- Header Start-->
  <div class="header">
    <div class="header-top">
      <div class="container">
        <div class="call pull-left">
          <p>Call us toll free : <span>+880 1726 122 917</span></p>
        </div>
        	<?php 
	 if(isset($_GET['cid'])){
	     $cmrId = Session :: get("cmrId");
	 $delData = $ct->delCustomerCart();
	 $delComData = $pd->delComperData($cmrId);
	   Session::destroy();
	 }
	
	?>	
        <div class="user-info pull-right">
          <div class="user">
            <ul>
              <li>
                  <?php  
     $login = Session :: get("cuslogin");
     if($login == false){?>
                  <a href="#" data-toggle="modal" data-target="#login">Login</a> 
                  <?php }else{?>
                  <a href="?cid=<?php Session :: get("cmrId");?>">LogOut</a> 
                  <?php  }?>
                <!-- Modal -->
                <div class="modal fade" id="login" role="dialog">
                  <div class="modal-dialog"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="panel-heading">
                          <div class="panel-title pull-left">Login</div>
                          <div class="pull-right"><a href="#">Forgot password?</a>
                            <button aria-hidden="true" data-dismiss="modal" class="close btn btn-xs " type="button"> <i class="fa fa-times"></i> </button>
                          </div>
                        </div>
                      </div>


<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
    $custLogin = $cmr->customerLogin($_POST);
  }
?>
                      <div class="modal-body">
                        <form action="" method="POST" class="form-horizontal">
                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="username or email">
                          </div>
                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="pass" placeholder="password">
                          </div>
                          <div class="input-group">
                            <div class="checkbox">
                              <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1">
                                Remember me</label>
                            </div>
                          </div>
                          <div class="form-group"> 
                            <!-- Button -->
                            <div class="col-sm-12 controls"> <button id="btn-login"  name="login" class="btn btn-primary btn-success">Login</button> <a id="btn-fblogin" href="#" class="btn btn-primary facebook">Login with</a> </div>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <div class="form-group">
                          <div class="col-md-12 control">
                            <div>Don't have an account! <a href="#">Sign Up Here</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              
              <li><a href="login.php">Register</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="header-mid">
      <div class="container">
        <div class="row">
          <div class="col-md-3 header-left">
            <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="#"></a> </div>
          </div>
          <div class="col-md-6 search_block">
            <div class="search">
              <form action="search.php" method="get" id="searchform">
                <div class="search_cat">
                  <select class="search-category" name="search" id="s">
                    <option class="computer" selected>All Categories</option>
         <?php   
                 $getCat = $cat->gatAllCat(); 
                  if($getCat){
                  while($result = $getCat->fetch_assoc()){ ?>
                    <option value="<?php echo $result['catId']?>" class="computer"><?php echo $result['catName']?></option>
                    <?php } }?>
                  </select>
                  <span class="fa fa-angle-down"></span> </div>
                <input type="text" name="search" id="s"  placeholder="Search...">
                <button type="submit" class="btn submit" name="submit" id="searchsubmit"> <span class="fa fa-search"></span></button>
              </form>
            </div>
          </div>
          <div class="col-md-3 header-right">
            <div class="cart">
              <div class="cart-icon dropdown"></div>
              <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="">
              	<?php 
					$getData = $ct->checkCartTable();
					if($getData){
					 $sum = session::get("sum");
					  $qty = session::get("qty");?>
					 My Cart ( <?php echo $qty;?> ) <span> $ <?php echo $sum;?></span>
					 <?php }else{
					   echo "(Empty)";
					  }
					?></a>
              <ul class="dropdown-menu pull-right cart-dropdown-menu">
                <li>
     <?php 
			$getData = $ct->checkCartTable();
			 if($getData){?>
                  <table class="table table-striped">
                    <tbody>
             <?php  
	           $getpro = $ct->getCartProduct();
	           if($getpro){
                   $i=0;
                   $qty = 0;
                   $sum = 0;
                   while($result = $getpro->fetch_assoc()){
                   $i++; ?>
                      <tr>
                        <td class="text-center"><a href="product-detail-view.php?proid=<?php echo $result['productId']?>"><img width="50" height="60" class="img-thumbnail" src="Admin/<?php echo $result['image']?>" alt="img"></a></td>
                        <td class="text-left"><a href="product-detail-view.php?proid=<?php echo $result['productId']?>"><?php echo $fm->textShorten($result['productName'],30)?></a></td>
                        <td class="text-right quality"><?php echo $result['quantity']?></td>
                        <td class="text-right quality">$<?php echo $result['price']?></td>
                        <td class="text-center"><button type="button" title="Remove" class="btn btn-xs remove"><a onclick="return confirm('Are you Sure to Delete!!');" href="?delpro=<?php echo $result['cartId']?>"><i class="fa fa-times"></i></a></button></td>
                        <td class="text-center">
                            <?php if(isset($delproduct)){ echo $delproduct;}?>
                        </td>
                      </tr>
                      
                   <?php 
				  $total = $result['price'] * $result['quantity'];
				  
				?>
                      
     <?php 
	    $qty = $qty + $result['quantity'];
	    $sum = $sum + $total;
	 ?>
			
	  <?php 
	    session::set("qty", $qty);
	    session::set("sum", $sum);
	  ?>
	<?php } }?>
                    </tbody>
                  </table>
                </li>
                <li>
                  <div class="minitotal">
                    <table class="table pricetotal">
                      <tbody>
                        <tr>
                          <td class="text-right"><strong>Sub-Total</strong></td>
                          <td class="text-right price-new">$ <?php echo $sum;?></td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>VAT (10%)</strong></td>
                          <td class="text-right price-new">$ <?php
                          $vat = $sum * 0.1;
                          echo $vat;?></td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Total</strong></td>
                          <td class="text-right price-new">$
                          <?php 
            	 	         $vat = $sum * 0.1;
            	 	       $gtotal =  $sum + $vat;
            	 	        echo $gtotal;
            	 	        ?></td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="controls"> <a class="btn btn-primary pull-left" href="cart.php" id="view-cart"><i class="fa fa-shopping-cart"></i> View Cart </a> <a class="btn btn-primary pull-right" href="checkout-step1.php" id="checkout"><i class="fa fa-share"></i> Checkout</a> </div>
                  </div>
                </li>
                <?php }else{
        		   echo "There are no items in this cart";
        		}?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="new-further">
              <p>New in kors look  : </p>
              <ul class="toggle-newinFurther">
                <li><a href="#">Women</a></li>
                <li><a href="#">Clothing</a></li>
                <li><a href="#">Nightwear</a></li>
                <li><a href="#">Panties</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End --> 
  
  
  <!-- Main menu Start -->
  <div id="main-menu">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button aria-controls= "navbar" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="#" class="navbar-brand">menu</a> </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="women.php">WOMEN</a></li>
            <li><a href="men.php">MEN</a><span class="new">new</span></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contact-us.php">CONTACT US</a></li>
            <li><a href="about-us.php">ABOUT US</a></li>
            
            <?php $login = session :: get("cuslogin");
              if($login == true){?>
            <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"> ACOUNT<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="profile.php?custId=<?php echo Session :: get("cmrId");?>">Profile</a> </li>
                  <?php 
                	$chkCart = $ct->checkCartTable();
                		if($chkCart){ ?>
                <li><a href="cart.php">Shoping Cart</a></li>
                <li><a href="checkout-step1.php">Checkout</a></li>
                <?php }?>	  

                <?php 
                    $cmrId = Session :: get("cmrId");
                	$chkOrder = $ct->checkOrdere($cmrId);
                		if($chkOrder){ ?> 
                <li><a href="orderdetalis.php">Order Datiles</a></li>
                <?php }?>	  

                <?php  
                   $cmrId = Session :: get("cmrId");
                   $getpd = $pd->getComperData($cmrId);
                   if($getpd){?>
                	  <li><a href="compare.php">Compare</a> </li>
                <?php } ?>
                
                <?php  
                   $chekwlist = $pd->chekWlistData($cmrId);
                   if($chekwlist){?>
                	  <li><a href="wlist.php">Wshi List</a></li>
                <?php } ?>
              </ul>
            </li>
            
            <?php }?>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!-- Main menu End --> 
  