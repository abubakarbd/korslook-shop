<?php include 'inc/header.php'; ?>
<?php  
     $login = Session :: get("cuslogin");
     if($login == true){
       echo "<script>window.location='order.php'</script>";
     }
?>

<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
    $custLogin = $cmr->customerLogin($_POST);
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
            <h4>Checkout</h4>
          </div>
        </div>
        <div class="col-md-9">
          <div class="bread-crumb">
            <ul>
              <li><a href="index.html">home</a></li>
              <li>\</li>
              <li><a href="cart.html">cart</a></li>
              <li>\</li>
              <li><a href="checkout.html">Checkout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bredcrumb and page title block end  -->
  
  <div id="blog-page-contain">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12  col-sm-12 Authentication">
          <h2 class="Authentication-title tf"> Authentication</h2>
 <?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
    $customerReg = $cmr->customerRegistration($_POST);
  }
?>
    
          <div class="row account-creat">
            <div class="col-xs-12 col-sm-4 ">
              <h4 class="block-title-2"> Create an account </h4>
              <?php if(isset($customerReg)){
                        echo $customerReg;
                    }?>
              <form action="" method="POST">
                <div class="form-group ">
                  <input type="text" name="name" placeholder="Enter Name" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="city" placeholder="Enter City" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="zip" placeholder="Enter Zip-Code" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="email" name="email" placeholder="Enter Email" id="InputEmail1" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 ">
                <div class="form-group ">
                  <input type="text" name="address" placeholder="Enter Address" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="country" placeholder="Enter Country" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="phone" placeholder="Enter Phone" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" name="pass" placeholder="Password" id="InputPassword1" class="form-control">
                </div>
                <button class="btn   btn-primary" name="register" type="submit"><i class="fa fa-user"></i> Create an account</button>
              </form>
            </div>
            
            
            <div class="col-xs-12 col-sm-4 ">
              <h4 class="block-title-2"><span>Already registered?</span></h4>
              <form action="" method="POST" class="account-creat">
                <div class="form-group">
                  <input type="email" name="email" placeholder="Enter email" id="InputEmail2" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" name="pass" placeholder="Password" id="InputPassword2" class="form-control">
                </div>
                <div class="checkbox">
                  <label class="">
                    <input type="checkbox" name="vehicle" value="Bike">
                    Remember me </label>
                </div>
                <div class="forgot-password">
                  <p><a href="forgot-password.html" title="Recover your forgotten password">Forgot your password? </a></p>
                </div>
                <button class="btn btn-primary" name="login" type="submit"><i class="fa fa-sign-in"></i> Sign In</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>