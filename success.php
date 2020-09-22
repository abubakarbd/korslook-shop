<?php include 'inc/header.php'; ?>
<?php  
     $login = Session :: get("cuslogin");
     if($login == false){
       echo "<script>window.location='login.php'</script>";
     }
?>
<style>
  .payment{width:550px; min-height:200px; text-align: center; padding:50px; margin:0 auto;border: 2px solid #ddd;}
  .payment h2{text-align:center;border-bottom: 2px solid #ddd; margin-bottom:20px;padding-bottom:20px;}
  .payment a{background:#ff0000; color:#ffff; border-radius:3px; font-size:25px; padding:5px 30px;}
  .back a{width:150px; background:#333; color:#ffff; border-radius:3px; font-size:25px; padding:10px 30px; display:block;margin: 5px auto; padding:10px 20px;text-align: center;}
 
</style>
 <div class="main">
    <div class="content">
    	<div class="section group">	
           	<div class="payment">
           	    <h2>Success Page</h2>
           	    <h3>Your order has been placed!</h3>
               <h3> Your order has been successfully processed!</h3>
                
               <p> You can view your order history by going to the my account page and by clicking on history.</p>
                
               <p> If your purchase has an associated download, you can go to the account downloads page to view them.</p>
                
               <p> Please direct any questions you have to the store owner.</p>
                
               <p> Thanks for shopping with us online!</p>
          <?php
               $cmrId = Session::get("cmrId");
               $amount = $ct->payableAmount($cmrId);
           	 if($amount){
           	   $sum = 0;
           	    while($result = $amount->fetch_assoc()){
           	    $price = $result['price'];
           	    $sum = $sum + $price;
           	    
           	    }
           	  }
                ?>
           	           
           	     <p>Payment Success : totle with vate:
           	        <?php
           	           $vat = $sum * 0.1;
           	           $total = $sum + $vat;
           	           echo $total;
           	        ?>
           	        </p>
           	    <a href="orderdetalis.php">Order Datilse</a>
           	     
           	</div> 
           	<div class="back">
           	   <a href="cart.php">Previeus</a>
           	</div>
        </div>
    </div>
 </div>
  <?php include 'inc/footer.php'; ?>