<?php include 'inc/header.php'; ?>
<?php  
     $login = Session :: get("cuslogin");
     if($login == false){
       echo "<script>window.location='login.php'</script>";
     }
?>

<?php
    if (!isset($_GET['custId']) || $_GET['custId'] == NULL ) {
       echo "<script>window.location: 'index.php';</script>";
    } else {
        $id = preg_replace('/[^-a-zA-Z0-9_]/', '' , $_GET['custId']);
    }
?>
<?php 
  $cus = new Customer();
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "<script>window.location: 'index.php';</script>";
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
            <h4>Profile</h4>
          </div>
        </div>
        <div class="col-md-9">
          <div class="bread-crumb">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li>\</li>
              <li>Profile</li>
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
          <div class="row account-creat">
            <div class="col-xs-12">
            <div class="col-xs-12 col-sm-4 ">
              <?php if(isset($customerReg)){
                        echo $customerReg;
                    }?>
                    
                <?php 
                    $getCust = $cus->getCustomerData($id);
                    if($getCust){
                    while($result = $getCust->fetch_assoc()){ ?> 
              <form action="" method="POST">
                <div class="form-group ">
                  <input type="text" name="name" value="<?php echo $result['name']; ?>" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="city" value="<?php echo $result['city']; ?>" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="zip" value="<?php echo $result['zip']; ?>" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="email" name="email" value="<?php echo $result['email']; ?>" id="InputEmail1" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 ">
                <div class="form-group ">
                  <input type="text" name="address" value="<?php echo $result['address']; ?>" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="country" value="<?php echo $result['country']; ?>" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="phone" value="<?php echo $result['phone']; ?>" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" name="pass" value="<?php echo $result['phone']; ?>" id="InputPassword1" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 ">
                <div class="form-group ">
                  <input type="text" name="address" value="<?php echo $result['phone']; ?>" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="country" value="<?php echo $result['phone']; ?>" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="phone" value="<?php echo $result['phone']; ?>" id="exampleInputName" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" name="pass" value="<?php echo $result['phone']; ?>" id="InputPassword1" class="form-control">
                </div>
            </div>
            <button class="btn   btn-primary" name="register" type="submit"><i class="fa fa-user"></i> update account</button>
            </form>
            <?php } }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>