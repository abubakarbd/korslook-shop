<?php include 'inc/header.php'; ?>
<?php  
     $login = Session :: get("cuslogin");
     if($login == false){
       echo "<script>window.location='login.php'</script>";
     }
?>

<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){ 
      $id = $_POST['id'];
    $confirmid = $ct->productConfirm($id);
  }
?>
<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
      $quantity = $_POST['quantity']; 
      $id = $_POST['productId'];
    $insertProStok = $ct->stokInsert($quantity, $id);
  }
?>
<?php 
 if(!isset($_GET["id"])){
   echo "<meta http-equiv='refresh' content='0;URL=?id=order'/>";
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
          <h2 class="delivery-method tf">Order Riview</h2>
        </div>
        <div class="col-md-12">
          <div class="cart-content table-responsive">
            <table class="cart-table ">
              <tbody>
                <tr class="Cartproduct carttableheader">
                  <td style="width:10%"> Order id</td>
                  <td style="width:10%"> Product</td>
                  <td style="width:30%">Name</td>
                  <td style="width:10%">Quantity</td>
                  <td style="width:5%">Date</td>
                  <td style="width:15%">Total</td>
                  <td style="width:10%">Status</td>
                  <td style="width:10%">Action</td>
                </tr>
                
         	   <?php  
	            $cmrId = Session::get("cmrId");
	           $getOrder = $ct->getOrdertProduct($cmrId);
	           if($getOrder){
                   $i;
                   while($result = $getOrder->fetch_assoc()){
                   $i++; ?>
                  
                           <tr class="Cartproduct">
                  <td ><div class="image"><a href="invoice.php?invoice=<?php echo $result['id']?>"># <?php echo $result['id']?></a></div></td>
                  <td ><div class="image"><a href="product-details."><img alt="img" src="Admin/<?php echo $result['image']?>"></a></div></td>
                  <td><div class="product-name">
                      <h4><a href="product-detail-view.html"><?php echo $result['productName']?> </a></h4>
                    </div>
                    <span class="size">24 x 2.3 M</span>
                    <div class="price"><span>$<?php echo $result['price']?></span></div></td>
                  <td class="product-quantity"><div class="quantity">
				<input type="number" size="4" title="Quantity" class="input-text qty text" name="quantity" readonly value="<?php echo $result['quantity']?>" min="0" step="1"/>
                    </div>
                    </td>
                  <td><?php echo $fm->formatDate($result['date'])?></td>
                  
                  <td class="price">$<?php 
				  $total = $result['price'] * $result['quantity'];
				  $sum = $sum + $total;
				  $vat = $sum * 0.1;
	 	       $gtotal =  $sum + $vat;
	 	        echo $gtotal;
				?></td>
				
				<td>
		 <?php if($result['status'] == '0'){
                    echo "Pending";
                   }elseif($result['status'] == '1'){
                   echo "Shifted";
                }else{?>
                <a href="invoice.php?invoice=<?php echo $result["id"]?>">Order History</a>
                 <?php }?>
				</td>
		
				 <?php if($result['status'] == '1'){?>
                    <td>
                        
                    <form action="" method="post">
                    <input type="hidden" class="input-text qty" value="<?php echo $result['quantity']?>" name="quantity">
                    <input type="hidden" class="input-text qty" value="<?php echo $result['productId']?>" name="productId">
                    <input type="hidden" class="input-text qty" value="<?php echo $result['id']?>" name="id">
                    <div class="add-to-cart">
                      <button type="submit" name="submit"  class="btn btn-default">Confirm</button>
                    </div>
                    </form>
                    </td>
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
			
	<?php } }?>	 
     
               
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12">
          <div class="cart-bottom">
            <div class="box-footer">
              <div class="pull-left"><a href="checkout-step3.html" class="btn btn-default"> <i class="fa fa-arrow-left"></i> &nbsp; Contininu Shoping </a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
 <?php include 'inc/footer.php'; ?>