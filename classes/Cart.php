<?php 
    $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/Format.php');
?>
<?php

 class Cart{
      private $db;
      private $fm;
      
      public function __construct(){
      $this->db = new Database();
      $this->fm = new Format();
    } 
    
    /*---------------------------------------------------------------------*/
    public function addToCart($quantity, $id){
      $quantity  =  $this->fm->validation($quantity);
      $quantity  =  mysqli_real_escape_string($this->db->link, $quantity);
      $productId =  mysqli_real_escape_string($this->db->link, $id);
      $sId       =  session_id();
      
      $squery = "SELECT * FROM tbl_product WHERE productId = '$productId'";
      $result = $this->db->select($squery)->fetch_assoc();
      
      $productName  = $result['productName'];
      $price        = $result['price'];
      $image        = $result['image'];
      
   
      $chquery = "SELECT * FROM tbl_cart WHERE productId = '$productId' AND sId = '$sId'";
      $getpro = $this->db->select($chquery);
      if($getpro){
        $msg = "Product Olrady Addet";
        return $msg;
      }else{
      
      $query = "INSERT INTO tbl_cart(sId, productId, productName, price, quantity,image) VALUES ('$sId','$productId','$productName','$price','$quantity','$image')";
          $inserted_row = $this->db->insert($query);
          if($inserted_row){
           echo "<script>window.location ='cart.php';</script>";
          }else{
           header("Location:404.php");
          }
        }
    }
    
    /*---------------------------------------------------------------------*/
     public function addToCartDir($quantity, $id){
      $quantity  =  $this->fm->validation($quantity);
      $quantity  =  mysqli_real_escape_string($this->db->link, $quantity);
      $productId =  mysqli_real_escape_string($this->db->link, $id);
      $sId       =  session_id();
      
      $squery = "SELECT * FROM tbl_product WHERE productId = '$productId'";
      $result = $this->db->select($squery)->fetch_assoc();
      
      $productName  = $result['productName'];
      $price        = $result['price'];
      $image        = $result['image'];
      
   
      $chquery = "SELECT * FROM tbl_cart WHERE productId = '$productId' AND sId = '$sId'";
      $getpro = $this->db->select($chquery);
      if($getpro){
        $msg = "Product Olrady Addet";
        return $msg;
      }else{
      
      $query = "INSERT INTO tbl_cart(sId, productId, productName, price, quantity,image) VALUES ('$sId','$productId','$productName','$price','$quantity','$image')";
          $inserted_row = $this->db->insert($query);
          if($inserted_row){
           echo "<script>window.location ='index.php';</script>";
          }else{
           header("Location:404.php");
          }
        }
    }
    
    /*---------------------------------------------------------------------*/
    public function getCartProduct(){
      $sId       =  session_id();
      $query = "SELECT * FROM  tbl_cart WHERE sId = '$sId'";
       $result = $this->db->select($query);
       return $result; 
    }
    
    /*---------------------------------------------------------------------*/
    public function updateCartQuantity($cartId, $quantity){       
        $cartId   = mysqli_real_escape_string($this->db->link,$cartId);
        $quantity = mysqli_real_escape_string($this->db->link,$quantity);
       
          $query = "UPDATE tbl_cart
            SET
            quantity = '$quantity'
            WHERE cartId = '$cartId'";
          $updated_row = $this->db->update($query);
          if($updated_row){
           echo "<script>window.location='cart.php';</script>";
          }else{
           $msg = "Cart not Update!!!";
            return $msg;
          }
        }
     /*---------------------------------------------------------------------*/   
     public function delProductByCart($delId){
       $delId =  mysqli_real_escape_string($this->db->link, $delId);
       $query = "DELETE FROM  tbl_cart WHERE cartId = '$delId'";
       $dalData = $this->db->delete($query);
       if($dalData){
            echo "<script>window.location='cart.php';</script>";
     }else{
           $delmsg = "Cart not Delete!!!";
            return $delmsg;
          }
     }
     /*---------------------------------------------------------------------*/
     public function delProductByMiniCart($delId){
       $delId =  mysqli_real_escape_string($this->db->link, $delId);
       $query = "DELETE FROM  tbl_cart WHERE cartId = '$delId'";
       $dalData = $this->db->delete($query);
       if($dalData){
            $delmsg = "Cart Delete Success!!!";
            return $delmsg;
     }else{
           $delmsg = "Cart not Delete!!!";
            return $delmsg;
          }
     }
     
     /*---------------------------------------------------------------------*/
     public function checkCartTable(){
        $sId       =  session_id();
      $query = "SELECT * FROM  tbl_cart WHERE sId = '$sId'";
        $result = $this->db->select($query);
        return $result;
     }
     /*---------------------------------------------------------------------*/
    public function delCustomerCart(){
          $sId       =  session_id();
          $query = "DELETE FROM tbl_cart WHERE sId = '$sId'";
          $this->db->delete($query);  
         }
    /*---------------------------------------------------------------------*/     
    public function orderProduct($cmrId){
         $sId       =  session_id();
        $query = "SELECT * FROM  tbl_cart WHERE sId = '$sId'";
        $getPro = $this->db->select($query);
        if($getPro){
           while($result = $getPro->fetch_assoc()){
             $productId = $result['productId'];
             $productName = $result['productName'];
             $quantity = $result['quantity'];
             $price = $result['price'] * $quantity;
             $image = $result['image'];
             $query = "INSERT INTO tbl_order(cmrId,productId,productName, quantity, price, image) VALUES ('$cmrId','$productId','$productName','$quantity','$price','$image')";
          $inserted_row = $this->db->insert($query);
           }
        }
    }
    /*---------------------------------------------------------------------*/
    public function payableAmount($cmrId){
        $query = "SELECT price FROM  tbl_order WHERE cmrId = '$cmrId' AND date = now()";
        $result = $this->db->select($query);
       return $result; 
    }
    /*---------------------------------------------------------------------*/
    public function getOrdertProduct($cmrId){
        $query = "SELECT * FROM  tbl_order WHERE cmrId = '$cmrId' ORDER BY date DESC";
        $result = $this->db->select($query);
       return $result; 
    }
    /*---------------------------------------------------------------------*/
    public function checkOrdere($cmrId){
        $query = "SELECT * FROM  tbl_order WHERE cmrId = '$cmrId'";
        $result = $this->db->select($query);
        return $result;
    }
    /*---------------------------------------------------------------------*/
    public function gatAllOrderProduct(){
      $query = "SELECT * FROM  tbl_order ORDER BY id DESC";
       $result = $this->db->select($query);
       return $result;
    }
    /*---------------------------------------------------------------------*/
    public function gatNewOrderProduct(){
      $query = "SELECT * FROM  tbl_order WHERE status = '0'";
       $result = $this->db->select($query);
       return $result;
    }
    /*---------------------------------------------------------------------*/
    public function productShifted($id){
    $id    = mysqli_real_escape_string($this->db->link,$id);
    //$date  = mysqli_real_escape_string($this->db->link,$date);
    //$price = mysqli_real_escape_string($this->db->link,$price);  
          $query = "UPDATE tbl_order
            SET
            status = '1'
            WHERE id = '$id'";
          $updated_row = $this->db->update($query);
          if($updated_row){
           $catmsg = "Shift Success!!!";
            return $catmsg;
          }else{
           $catmsg = "not Shift!!!";
            return $catmsg;
          }
    }
    /*---------------------------------------------------------------------*/
    public function delProductShifted($id){
    $id    = mysqli_real_escape_string($this->db->link,$id);
    //$date  = mysqli_real_escape_string($this->db->link,$time);
   // $price = mysqli_real_escape_string($this->db->link,$price);  
    
    $query = "DELETE FROM  tbl_order WHERE id = '$id'";
       $dalData = $this->db->delete($query);
       if($dalData){
            $delmsg = "Category Delete!!!";
            return $delmsg;
     }else{
           $delmsg = "Category not Delete!!!";
            return $delmsg;
          }
    }
    /*---------------------------------------------------------------------*/
      public function productConfirm($id){
    $id    = mysqli_real_escape_string($this->db->link,$id);
    //$date  = mysqli_real_escape_string($this->db->link,$date);
    //$price = mysqli_real_escape_string($this->db->link,$price);  
          $query = "UPDATE tbl_order
            SET
            status = '2'
            WHERE id = '$id'";
          $updated_row = $this->db->update($query);
          if($updated_row){
           $catmsg = "Shift Success!!!";
            return $catmsg;
          }else{
           $catmsg = "not Shift!!!";
            return $catmsg;
          }
    }
    /*---------------------------------------------------------------------*/
      public function stokInsert($quantity, $id){
        $quantity  =  mysqli_real_escape_string($this->db->link, $quantity);
        $id =  mysqli_real_escape_string($this->db->link, $id);
         
         
         $query = "SELECT * FROM tbl_product WHERE productId = '$id'";
         $result = $this->db->select($query)->fetch_assoc();
         
            $proquantity  = $result['quantity'];
            
            $count = $proquantity - $quantity;
    
          $query = "UPDATE tbl_product
            SET
            quantity = '$count'
            WHERE productId = '$id'";
          $updated_row = $this->db->update($query);
          if($updated_row){
           $msg = "Test Success!!!";
            return $msg;
          }else{
           $msg = "Test not Success!!!";
            return $msg;
          }
    }
	
	/*---------------------------------------------------------------------*/
    public function getComOrdertPro(){
      $query = "SELECT * FROM  tbl_order WHERE status = '2'";
       $result = $this->db->select($query);
       return $result;
    }
    
     /*---------------------------------------------------------------------*/
    public function getInvoiceProduct($id){
      $sId       =  session_id();
      $query = "SELECT * FROM  tbl_order WHERE id = '$id'";
       $result = $this->db->select($query);
       return $result; 
    }
    
}?>