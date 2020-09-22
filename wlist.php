<?php include 'inc/header.php'; ?>
<?php  
     $login = Session :: get("cuslogin");
     if($login == false){
       echo "<script>window.location='login.php'</script>";
     }
?>
<?php 
   if(isset($_GET['delwlistid'])){
      $productId = $_GET['delwlistid'];
      $getwlist = $pd->getWlistData($cmrId, $productId);
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
        <div class="col-md-5 col-sm-5 col-xs-5">
          <div class="page-title">
            <h4>Wshi List</h4>
          </div>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-7">
          <div class="bread-crumb">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li>\</li>
              <li>Wshi List</li>
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
          <h2 class="delivery-method tf">Wshi List</h2>
        </div>
        <div class="col-md-12">
          <div class="cart-content table-responsive">
            <table class="cart-table ">
              <tbody>
                <tr class="Cartproduct carttableheader">
                  <td style="width:20%"> Product</td>
                  <td style="width:30%">Name</td>
                  <td style="width:15%">Price</td>
                  <td style="width:15%">Date</td>
                  <td style="width:20%">Action</td>
                </tr>
                
         	  <?php  
	           $cmrId = Session :: get("cmrId");
	           $getwlist = $pd->chekWlistData($cmrId);
	           if($getwlist){
                   $i;
                   while($result = $getwlist->fetch_assoc()){
                   $i++; ?>
                  
                           <tr class="Cartproduct">
                  <td ><div class="image"><a href="product-detail-view.php?proid=<?php echo $result['productId']?>"><img alt="img" src="Admin/<?php echo $result['image']?>"></a></div></td>
                  <td><div class="product-name">
                      <h4><a href="product-detail-view.php?proid=<?php echo $result['productId']?>"><?php echo $result['productName']?> </a></h4>
                    </div>
                    <div class="price"><span>$<?php echo $result['price']?></span></div></td>
                  <td class="price">$<?php echo $result['price']?></td>
                  <td><?php echo $fm->formatDate($result['date'])?></td>
				
                  <td>
				<a href="product-detail-view.php?proid=<?php echo $result['productId']?>">Bay Naw</a>
				|| <a href="?delwlistid=<?php echo $result['productId']?>">Remove</a>
				</td>
                </tr>
  
			
	<?php } }else{
		   echo "<script>window.location ='index.php';</script>";
		}?>
     
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