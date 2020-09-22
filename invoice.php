<?php include 'inc/header.php'; ?>
<?php  
     $login = Session :: get("cuslogin");
     if($login == false){
       echo "<script>window.location='login.php'</script>";
     }
?>
<?php
    if (isset($_GET['invoice'])) {
        $id = preg_replace('/[^-a-zA-Z0-9_]/', '' , $_GET['invoice']);
    }
?>
  <!-- offer block Start  -->
  <div id="offer">
    <div class="container">
      <div class="offer">
        <p> <?php echo $insertProStok;?></p>
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
            <h4>Order</h4>
          </div>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-7">
          <div class="bread-crumb">
            <ul>
              <li><a href="index.php">home</a></li>
              <li>\</li>
              <li><a href="cart.php">cart</a></li>
              <li>\</li>
              <li><a href="checkout-step4.php">Order</a></li>
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
        <div class="col-lg-12">
          <h2 class="delivery-method tf">Order History</h2>
        </div>
        <div class="col-md-12">
          <div class="cart-content table-responsive">
            <table class="cart-table ">
              <tbody>
                <tr class="Cartproduct carttableheader">
                  <td style="width:10%"> Order Details</td>
                  <td style="width:40%"> </td>
                  <td style="width:20%"></td>
                  <td style="width:10%"></td>
                  <td style="width:10%"></td>
                  <td style="width:10%"></td>
                </tr>
             	   <?php  
	           $getOrder = $ct->getInvoiceProduct($id);
	           if($getOrder){
                $result = $getOrder->fetch_assoc() ?>   
                <tr class="Cartproduct ">
                  <td colspan="3"> 
                   Order ID: # <?php echo $result['id']?></br>
                   Date Added :  <?php echo $fm->formatDate($result['date'])?>
                  </td>
                  <td colspan="3">
                     Payment Method: Cash On Delivery </br>
                    Shipping Method: Flat Shipping Rate
                 </td>
                </tr>
                <tr class="Cartproduct carttableheader">
                  <td colspan="3"> 
                   Payment Address	
                  </td>
                  <td colspan="3">
                     Shipping Address
                 </td>
                </tr>
                <tr class="Cartproduct ">
                  <td colspan="3"> 
                    Md Idris </br>
                    Barguna Sador </br>
                    Barguna 8700 </br>
                    Barisal </br>
                    Bangladesh </br>
                  </td>
                  <td colspan="3">
                    Md Idris </br>
                    Barguna Sador </br>
                    Barguna 8700 </br>
                    Barisal </br>
                    Bangladesh </br>
                 </td>
                </tr>
                
                <tr class="Cartproduct carttableheader">
                  <td style="width:10%"> Product</td>
                  <td style="width:40%">Name</td>
                  <td style="width:10%">Quantity</td>
                  <td style="width:10%">Total</td>
                  <td style="width:15%">Status</td>
                  <td style="width:15%"></td>
                </tr>
                  
                <tr class="Cartproduct">
                  <td ><div class="image"><a href="product-details."><img alt="img" width="100" height="150" src="Admin/<?php echo $result['image']?>"></a></div></td>
                  <td><div class="product-name">
                      <h4><a href="product-detail-view.html"><?php echo $result['productName']?> </a></h4>
                    </div>
                    <span class="size">24 x 2.3 M</span>
                    <div class="price"><span>$<?php echo $result['price']?></span></div></td>
                  <td class="product-quantity"><div class="quantity">
				<input type="number" size="4" title="Quantity" class="input-text qty text" name="quantity" readonly value="<?php echo $result['quantity']?>" min="0" step="1"/>
                    </div>
                    </td>
                  <td class="price">$<?php 
				  $total = $result['price'] * $result['quantity'];
				  echo $total;
				?></td>
				

		
		
		</td>
				 <?php if($result['status'] == '0'){?>
                    <td>Pending</td>
               <?php }elseif($result['status'] == '2'){?>
                   <td>Ok</td>
                <?php } elseif($result['status'] == '0'){ ?>
		    	<td>N/A</td>
			<?php  }?>
                </tr>
                    <?php 
	    $qty = $qty + $result['quantity'];
	    $sum = $sum + $total;
	 ?>
			
	<?php } ?>	 
     
                <tr class="cart-detail">
                  <td colspan="4">Total products</td>
                  <td colspan="2" class="price">$ <?php echo $sum;?></td>
                </tr>
                <tr class="cart-detail">
                  <td colspan="4">Shipping</td>
                  <td colspan="2" class="price"><span class="success">Free shipping!</span></td>
                </tr>
                <tr class="cart-detail cart-total-price ">
                  <td colspan="4" >Total (tax excl.)</td>
                  <td colspan="2" class="price">10%</td>
                </tr>
                <tr class="cart-detail">
                  <td colspan="4">Total tax</td>
                  <td colspan="2" class="price" id="total-tax">$ <?php 
	 	       echo  $vat = $sum * 0.1;
	 	        ?></td>
                </tr>
                <tr class="cart-detail">
                  <td colspan="4"> Total</td>
                  <td colspan="2" class="price" id="total-price">$ <?php 
	 	         $vat = $sum * 0.1;
	 	       $gtotal =  $sum + $vat;
	 	        echo $gtotal;
	 	        ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12">
          <div class="cart-bottom">
            <div class="box-footer">
              <div class="pull-left"><a href="invoice-print.php?invoice=<?php echo $result['id']?>" target="_blank" class="btn btn-default"> &nbsp; Print </a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
 <?php include 'inc/footer.php'; ?>