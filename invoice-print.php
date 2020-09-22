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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	
	<title>AS Online Shop || INVOICE</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">
	<link rel='stylesheet' type='text/css' href='Invoice/css/style.css' />
	<link rel='stylesheet' type='text/css' href='Invoice/css/print.css' media="print" />
	<script type='text/javascript' src='Invoice/js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='Invoice/js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
	<?php  
	           $getOrder = $ct->getInvoiceProduct($id);
	           if($getOrder){
                $result = $getOrder->fetch_assoc() ?> 	
		<div id="identity">
		
            <textarea id="address">Chris Coyier
123 Appleseed Street
Appleville, WI 53719

Phone: (555) 555-5555</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.png" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea id="customer-title">Widget Corp.
c/o Steve Widget</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000<?php echo $result['id']?></textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date"><?php echo $fm->formatDate($result['date'])?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr>
                <tr>
                    <td class="meta-head">Payment Method</td>
                    <td>Cash On Delivery</td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row" style="border-bottom: 1px solid;">
		      <td class="item-name"><div class="delete-wpr"><textarea><?php echo $result['productName']?></textarea></div></td>
		      <td class="description"><textarea>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</textarea></td>
		      <td><textarea class="cost">$ <?php echo $result['price']?></textarea></td>
		      <td><textarea class="qty"><?php echo $result['quantity']?></textarea></td>
		      <td><span class="price">$ <?php 
				  $total = $result['price'] * $result['quantity'];
				  echo $total;
				?></span></td>
		  </tr>
		  
		
		  	                 <?php 
	    $qty = $qty + $result['quantity'];
	    $sum = $sum + $total;
	 ?>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$ <?php echo $sum;?></div></td>
		  </tr>
	
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total tax(10%)</td>
		      <td class="total-value"><div>$ <?php 
	 	       echo  $vat = $sum * 0.1;
	 	        ?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$ <?php 
	 	         $vat = $sum * 0.1;
	 	       $gtotal =  $sum + $vat;
	 	        echo $gtotal;
	 	        ?></div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">$0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$ <?php 
	 	         $vat = $sum * 0.1;
	 	       $gtotal =  $sum + $vat;
	 	        echo $gtotal;
	 	        ?></div></td>
		  </tr>
		
		</table>
	<?php } ?>	
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
		<div id="terms">
		  <h5 onclick="myFunction()"><a href="">Print</a></h5>
		   
		</div>
	
	</div>
<script>
function myFunction() {
  window.print();
}
</script>	
</body>

</html>