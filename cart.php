<?php include 'inc/header.php'; ?>
  
  <?php 
    if(isset($_GET['delpro'])){
	$delId = preg_replace('/[^-a-zA-Z0-9_]/', '' , $_GET['delpro']);
 	$delproduct = $ct->delProductByCart($delId);
         }
 ?>        
<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cartId   = $_POST['cartId'];
    $quantity = $_POST['quantity'];
    $updateCart = $ct->updateCartQuantity($cartId, $quantity);
    
    if($quantity <=0){
      $delproduct = $ct->delProductByCart($cartId);
    }
  }
  
?>
<?php 
 if(!isset($_GET["id"])){
   echo "<meta http-equiv='refresh' content='0;URL=?id=live'/>";
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
        <div class="col-md-3 col-sm-3 col-xs-3">
          <div class="page-title">
            <h4>Shoping Cart</h4>
          </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <div class="bread-crumb">
            <ul>
              <li><a href="index.html">home</a></li>
              <li>\</li>
              <li><a href="cart.html">cart</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bredcrumb and page title block end  -->
      <span style="color: green;">
	     <?php if(isset($updateCart)){
                     echo $updateCart;}?></span>
                     
                     <span style="color: red;">
	     <?php if(isset($delproduct)){
                     echo $delproduct;}?></span>
                     
  <div id="cart-page-contain">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-xs-12"> 
          <!-- left block Start  -->
          <div class="cart-content table-responsive">
            <table class="cart-table table-responsive" style="width:100%">
              <tbody>
            <?php 
			$getData = $ct->checkCartTable();
			 if($getData){?>
                <tr class="Cartproduct carttableheader">
                  <td style="width:15%"> Product</td>
                  <td style="width:45%">Details</td>
                  <td style="width:10%">QNT</td>
                  <td style="width:5%">Discount</td>
                  <td style="width:15%">Total</td>
                  <td class="delete" style="width:10%">&nbsp;</td>
                </tr>
                <?php  
	           $getpro = $ct->getCartProduct();
	           if($getpro){
                   $i;
                   $qty = 0;
                   $sum = 0;
                   while($result = $getpro->fetch_assoc()){
                   $i++; ?>
                <tr class="Cartproduct">
                  <td ><div class="image"><a href="product-details."><img alt="img" src="Admin/<?php echo $result['image']?>"></a></div></td>
                  <td><div class="product-name">
                      <h4><a href="product-detail-view.html"><?php echo $result['productName']?> </a></h4>
                    </div>
                    <span class="size">24 x 2.3 M</span>
                    <div class="price"><span>$<?php echo $result['price']?></span></div></td>
                  <td class="product-quantity"><div class="quantity">
                      <form action="" method="post">
				<input type="hidden" name="cartId" value="<?php echo $result['cartId']?>"/>
				<input type="number" size="4" title="Quantity" class="input-text qty text" name="quantity" value="<?php echo $result['quantity']?>" min="0" step="1"/>
					<input type="submit" name="submit" value="Update"/>
				     </form>
                    </div>
                    </td>
                  <td>0%</td>
                  <td class="price">$<?php 
				  $total = $result['price'] * $result['quantity'];
				  echo $total;
				?></td>
                  <td class="delete"><a onclick="return confirm('Are you Sure to Delete!!');" href="?delpro=<?php echo $result['cartId']?>" title="Delete"> <i class="glyphicon glyphicon-trash "></i></a></td>
                </tr>
                
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
          </div>
          <div class="cart-bottom">
            <div class="box-footer">
              <div class="pull-left"><a class="btn btn-default" href="index.html"> <i class="fa fa-arrow-left"></i> &nbsp; Continue shopping </a></div>
              <div class="pull-right">
                <button class="btn btn-default" type="submit"><i class="fa fa-undo"></i> &nbsp; Update cart</button>
              </div>
            </div>
          </div>
          <!-- left block end  --> 
        </div>
        <div class="col-md-3 col-xs-12"> 
          <!-- right block Start  -->
          <div id="right">
            <div class="sidebar-block">
              <div class="sidebar-widget">
                <div class="sidebar-title">
                  <h4>Cart Summary</h4>
                </div>
                <div id="order-detail-content" class="title-toggle table-block">
                  <div class="carttable">
                    <table class="table" id="cart-summary">
                      <tbody>
                        <tr>
                          <td>Total products</td>
                          <td class="price">$ <?php echo $sum;?></td>
                        </tr>
                        <tr>
                          <td>Shipping</td>
                          <td class="price"><span class="success">Free shipping!</span></td>
                        </tr>
                        <tr class="cart-total-price ">
                          <td>Total (tax excl.)</td>
                          <td class="price">10%</td>
                        </tr>
                        <tr>
                          <td>Total tax</td>
                          <td id="total-tax" class="price">$ <?php
                          $vat = $sum * 0.1;
                          echo $vat;?> </td>
                        </tr>
                        <tr>
                          <td> Total</td>
                          <td id="total-price">$ <?php 
	 	         $vat = $sum * 0.1;
	 	       $gtotal =  $sum + $vat;
	 	        echo $gtotal;
	 	        ?> </td>
                        </tr>
                        <tr>
                          <td colspan="2"><div class="input-append couponForm">
                              <input type="text" placeholder="Gift or Coupon code" id="appendedInputButton">
                              <button type="button" class="col-lg-4 btn btn-success">Apply!</button>
                            </div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="checkout"> <a href="checkout-step1.php" title="checkout" class="btn btn-default ">Proceed to checkout</a> </div>
            </div>
            <?php }else{
		   echo "<script>window.location ='index.php';</script>";
		}?>
          </div>
          <!-- left block end  --> 
        </div>
      </div>
    </div>
  </div>
  
  <?php include 'inc/footer.php'; ?>