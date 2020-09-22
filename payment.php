<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kors Look</title>
<meta content="" name="description">
<meta content="" name="author">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link rel="icon" type="image/png" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/favicon.png">
<link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="wrapar"> 
  <!-- Header Start-->
  <div class="header">
    <div class="header-top">
      <div class="container">
        <div class="call pull-left">
          <p>Call us toll free : <span>+1324 353 4689</span></p>
        </div>
        <div class="user-info pull-right">
          <div class="user">
            <ul>
              <li><a href="#" data-toggle="modal" data-target="#login">Login</a> 
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
                      <div class="modal-body">
                        <form id="loginform" class="form-horizontal">
                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                          </div>
                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
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
                            <div class="col-sm-12 controls"> <a id="btn-login" href="#" class="btn btn-primary btn-success">Login</a> <a id="btn-fblogin" href="#" class="btn btn-primary facebook">Login with</a> </div>
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
              <li><a href="#" data-toggle="modal" data-target="#register">Register</a>
                <div class="modal fade" id="register" role="dialog">
                  <div class="modal-dialog"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="panel-heading">
                          <div class="panel-title pull-left">Register</div>
                          <div class="pull-right">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="fa fa-times"></i> </button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-body">
                        <div class="control-group"> 
                          <!-- Username -->
                          <label class="control-label"  for="username">Username</label>
                          <div class="controls">
                            <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                            <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                          </div>
                        </div>
                        <div class="control-group"> 
                          <!-- E-mail -->
                          <label class="control-label" for="email">E-mail</label>
                          <div class="controls">
                            <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                            <p class="help-block">Please provide your E-mail</p>
                          </div>
                        </div>
                        <div class="control-group"> 
                          <!-- Password-->
                          <label class="control-label" for="password">Password</label>
                          <div class="controls">
                            <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                            <p class="help-block">Password should be at least 4 characters</p>
                          </div>
                        </div>
                        <div class="control-group"> 
                          <!-- Password -->
                          <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                          <div class="controls">
                            <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
                            <p class="help-block">Please confirm password</p>
                          </div>
                        </div>
                        <div class="control-group"> 
                          <!-- Button -->
                          <div class="controls">
                            <button class="btn btn-success">Register</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-mid">
      <div class="container">
        <div class="row">
          <div class="col-md-3 header-left">
            <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
          </div>
          <div class="col-md-6 search_block">
            <div class="search">
              <form action="grid-view.html">
                <div class="search_cat">
                  <select class="search-category" name="search-category">
                    <option class="computer" selected>All Categories</option>
                    <option class="computer">Men</option>
                    <option class="computer">Women</option>
                    <option class="computer">Kids</option>
                    <option class="computer">Computer</option>
                    <option class="computer">Electronics</option>
                  </select>
                  <span class="fa fa-angle-down"></span> </div>
                <input type="text" placeholder="Search...">
                <button type="submit" class="btn submit"> <span class="fa fa-search"></span></button>
              </form>
            </div>
          </div>
          <div class="col-md-3 header-right">
            <div class="cart">
              <div class="cart-icon dropdown"></div>
              <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="cart.html">My Cart( 2 )<span> $261.20</span></a>
              <ul class="dropdown-menu pull-right cart-dropdown-menu">
                <li>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td class="text-center"><a href="product.html"><img class="img-thumbnail" src="images/product/car3-70x92.jpg" alt="img"></a></td>
                        <td class="text-left"><a href="#">Black African Print Pencil Skirt</a></td>
                        <td class="text-right quality">X1</td>
                        <td class="text-right price-new">$254.00</td>
                        <td class="text-center"><button type="button" title="Remove" class="btn btn-xs remove"><i class="fa fa-times"></i></button></td>
                      </tr>
                      <tr>
                        <td class="text-center"><a href="product.html"><img class="img-thumbnail" src="images/product/car3-70x92.jpg" alt="img"></a></td>
                        <td class="text-left"><a href="#">Black African Print Pencil Skirt</a></td>
                        <td class="text-right quality">X1</td>
                        <td class="text-right price-new">$254.00</td>
                        <td class="text-center"><button type="button" title="Remove" class="btn btn-xs remove"><i class="fa fa-times"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                </li>
                <li>
                  <div class="minitotal">
                    <table class="table pricetotal">
                      <tbody>
                        <tr>
                          <td class="text-right"><strong>Sub-Total</strong></td>
                          <td class="text-right price-new">$210.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                          <td class="text-right price-new">$2.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>VAT (20%)</strong></td>
                          <td class="text-right price-new">$42.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Total</strong></td>
                          <td class="text-right price-new">$254.00</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="controls"> <a class="btn btn-primary pull-left" href="cart.html" id="view-cart"><i class="fa fa-shopping-cart"></i> View Cart </a> <a class="btn btn-primary pull-right" href="checkout.html" id="checkout"><i class="fa fa-share"></i> Checkout</a> </div>
                  </div>
                </li>
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
            <li><a href="index.html">HOME</a></li>
            <li><a href="grid-view.html">WOMEN</a></li>
            <li><a href="grid-view.html">MEN</a><span class="new">new</span></li>
            <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"> PAGES<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="cart.html">Shoping Cart</a></li>
                <li><a href="checkout-step1.html">Billing & shipping address</a></li>
                <li><a href="checkout-step2.html">Delivery method </a></li>
                <li><a href="checkout-step3.html">Payment method</a></li>
                <li><a href="checkout-step4.html">Order riview</a></li>
                <li><a href="404.html">Page Notfound</a></li>
              </ul>
            </li>
            <li><a href="blog.html">BLOG</a></li>
            <li><a href="contact-us.html">CONTACT US</a></li>
            <li><a href="about-us.html">ABOUT US</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!-- Main menu End --> 
  
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
        <div class="col-md-5 col-sm-5 col-xs-5">
          <div class="page-title">
            <h4>Payment method</h4>
          </div>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-7">
          <div class="bread-crumb">
            <ul>
              <li><a href="index.html">home</a></li>
              <li>\</li>
              <li><a href="cart.html"> cart </a></li>
              <li>\</li>
              <li><a href="checkout-step3.html"> Paymen method</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bredcrumb and page title block end  -->
  
  <div id="checkout-step-contain">
    <div class="container">
      <div class="account-content checkout-staps">
        <div class="staps">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="checkout-stap">
                <div class="title"> <span class="stap">1 </span><a href="checkout-step1.html">Billing &amp; Shipping Address</a></div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="checkout-stap">
                <div class="title"><span class="stap">2 </span><a href="checkout-step2.html">Shipping Method</a></div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="checkout-stap active">
                <div class="title"><span class="stap">3 </span><a href="checkout-step3.html">Payment Method</a></div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="checkout-stap">
                <div class="title"><span class="stap">4 </span><a href="checkout-step4.html">Order</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <h2 class="delivery-method tf"> Choose your Payment method </h2>
        </div>
        <div class="col-xs-12 col-sm-12">
          <div class="paymentBox">
            <div class="accordion">
              <div class="accordion-section"> <a href="#accordion-1" class="accordion-section-title"> Cash on Delivery</a>
                <div id="accordion-1" class="accordion-section-content open" style="display: block;">
                  <div class="panel-collapse collapse in" id="collapseOne">
                    <div class="panel-body">
                      <p>All transactions are secure and encrypted, and we neverstor To learn more, please view our privacy policy.</p>
                      <br>
                      <div class="radio">
                        <label>
                          <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios">
                          Cash On Delivery </label>
                      </div>
                      <div class="form-group">
                        <label for="CommentsOrder">Add Comments About Your Order</label>
                        <textarea rows="3" cols="26" name="CommentsOrder" class="form-control" id="CommentsOrder"></textarea>
                      </div>
                      <div class="form-group clearfix">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            I have read and agree to the <a href="terms-conditions.html">Terms &amp; Conditions</a> </label>
                        </div>
                      </div>
                      <div class="pull-right"><a class="btn btn-large btn-primary" href="checkout-step4.html"> Order&nbsp;<i class="fa fa-arrow-right"></i> </a></div>
                    </div>
                  </div>
                </div>
                <!--end .accordion-section-content--> 
              </div>
              <!--end .accordion-section-->
              <div class="accordion-section"> <a href="#accordion-2" class="accordion-section-title">PayPal</a>
                <div style="display: none;" class="accordion-section-content" id="accordion-2">
                  <div class="panel-body">
                    <p>All transactions are secure and encrypted, and we neverstor To learn more, please view our privacy policy.</p>
                    <br>
                    <label class="checkbox-inline">
                      <input type="checkbox" value="1" >
                      Checkout with Paypal</label>
                    <div class="form-group">
                      <label for="CommentsOrder2">Add Comments About Your Order</label>
                      <textarea rows="3" cols="26" name="CommentsOrder2" class="form-control" id="CommentsOrder2"></textarea>
                    </div>
                    <div class="form-group clearfix">
                      <label class="checkbox-inline" >
                        <input type="checkbox" value="1">
                        I have read and agree to the <a href="terms-conditions.html">Terms &amp; Conditions</a></label>
                    </div>
                    <div class="pull-right"><a class="btn btn-large btn-primary" href="checkout-step4.html"> Order&nbsp;<i class="fa fa-arrow-right"></i> </a></div>
                  </div>
                </div>
                <!--end .accordion-section-content--> 
              </div>
              <!--end .accordion-section-->
              <div class="accordion-section"> <a href="#accordion-3" class="accordion-section-title active">Banks and Cards</a>
                <div style="display: none;" class="accordion-section-content " id="accordion-3">
                  <div class="panel-body">
                    <p>All transactions are secure and encrypted, and we neverstor Tolearn more, please view our privacy policy.</p>
                    <br>
                    <div class=" open">
                      <div class="creditCard">
                        <label for="CardNumber">Credit Card Number *</label>
                        <input type="text" name="Number" id="CardNumber">
                      </div>
                      <div class="paymentInput">
                        <label for="CardNumber2">Name on Credit Card *</label>
                        <input type="text" id="CardNumber2" name="CardNumber2">
                      </div>
                      <div class="paymentInput">
                        <div class="form-group">
                          <label>Expiration date *</label>
                          <select name="expire" aria-required="true" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                            <option value="">Month</option>
                            <option value="1">01 - January</option>
                            <option value="2">02 - February</option>
                            <option value="3">03 - March</option>
                            <option value="4">04 - April</option>
                            <option value="5">05 - May</option>
                            <option value="6">06 - June</option>
                            <option value="7">07 - July</option>
                            <option value="8">08 - August</option>
                            <option value="9">09 - September</option>
                            <option value="10">10 - October</option>
                            <option value="11">11 - November</option>
                            <option value="12">12 - December</option>
                          </select>
                          <select name="year" aria-required="true" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                            <option value="">Year</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                          </select>
                        </div>
                      </div>
                      <div class="paymentInput clearfix">
                        <label for="VerificationCode">Verification Code
                          *</label>
                        <input type="text" style="width:90px;" name="VerificationCode" id="VerificationCode">
                      </div>
                      <div>
                        <input type="checkbox" id="saveInfoid">
                        <label for="saveInfoid" class="saveinfo">&nbsp;Save my Card information</label>
                      </div>
                    </div>
                    <div class="pull-right"><a class="btn btn-large btn-primary" href="checkout-step4.html"> Order&nbsp;<i class="fa fa-arrow-right"></i> </a></div>
                  </div>
                </div>
                <!--end .accordion-section-content--> 
              </div>
              <!--end .accordion-section--> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer block Start  -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class= "newslatter">
            <form>
              <h2>Be the first to hear our exciting news</h2>
              <div class="input-group">
                <input class=" form-control" type="text" placeholder="Email Here......">
                <button type="submit" value="Sign up" class="btn btn-large btn-primary">Sign up</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="about">
            <div class="footer-logo"></div>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature in Virginia</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="new-store">
            <h4>What's in store</h4>
            <ul class="toggle-footer">
              <li><a href="#">Returns</a></li>
              <li><a href="#">Delivery Options</a></li>
              <li><a href="#">Brand Directory</a></li>
              <li><a href="#">Buying Guides</a></li>
              <li><a href="#">My Account</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="information">
            <h4>information</h4>
            <ul class="toggle-footer">
              <li><a href="#">Returns</a></li>
              <li><a href="#">Delivery Options</a></li>
              <li><a href="#">Brand Directory</a></li>
              <li><a href="#">Buying Guides</a></li>
              <li><a href="#">My Account</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="contact">
            <h4>Contact Us</h4>
            <ul class="toggle-footer">
              <li> <i class="fa fa-map-marker"></i>
                <div class="address-info">Warehouse & Offices 12345 Street name,California, USA </div>
              </li>
              <li> <i class="fa fa-mobile"></i>
                <div class="call-info">+91 987-654-321<br>
                  <span>+0987-654-321</span> </div>
              </li>
              <li> <i class="fa fa-envelope"></i>
                <div class="email-info"> <a href="#">support@lionode.com</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="footer-link">
              <ul>
                <li><a href="#">Specials</a></li>
                <li><a href="#">Affiliates</a></li>
                <li><a href="#">Gift Vouchers</a></li>
                <li><a href="#">Brands</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Site Map</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="copy-right">
              <p> All Rights Reserved. Copyright 2017 Powered by lionode.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-offer">
        <h2>$2.55 Next Day Delivery! Ends 8PM ! USE CODE FLASH</h2>
      </div>
    </div>
  </footer>
  <!-- Footer block End  --> 
  
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jQuery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="Bootstrap/js/bootstrap.js"></script> 
<script>
  
    function close_accordion_section() {
		jQuery('.accordion .accordion-section-title').removeClass('active');
		jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
		jQuery('.accordion2 .accordion-section-title1').removeClass('active');
		jQuery('.accordion2 .accordion-section-content1').slideUp(300).removeClass('open');
	}

	jQuery('.accordion-section-title').click(function(e) {
		// Grab current anchor value
		var currentAttrValue = jQuery(this).attr('href');

		if(jQuery(e.target).is('.active')) {
			close_accordion_section();
		}else {
			close_accordion_section();

			// Add active class to section title
			jQuery(this).addClass('active');
			// Open up the hidden content panel
			jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
			jQuery('.accordion2 ' + currentAttrValue).slideDown(300).addClass('open'); 
		}

		e.preventDefault();
	});

</script>
</body>
</html>