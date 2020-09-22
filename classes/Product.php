<?php 
    $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/Format.php');
?>

<?php

 class Product{
      private $db;
      private $fm;
      
      public function __construct(){
      $this->db = new Database();
      $this->fm = new Format();
    } 
    
    public function productInsert($data, $file){
        $productName = mysqli_real_escape_string($this->db->link,$data['productName']);
        $catId = mysqli_real_escape_string($this->db->link,$data['catId']);
        $brandId = mysqli_real_escape_string($this->db->link,$data['brandId']);
        $body = mysqli_real_escape_string($this->db->link,$data['body']);
        $price = mysqli_real_escape_string($this->db->link,$data['price']);
        $Rprice = mysqli_real_escape_string($this->db->link,$data['Rprice']);
        $quantity = mysqli_real_escape_string($this->db->link,$data['quantity']);
        $type = mysqli_real_escape_string($this->db->link,$data['type']);
        
    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $file['image']['name'];
    $file_size = $file['image']['size'];
    $file_temp = $file['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "uploads/".$unique_image;
    
    if(empty($productName) || empty($catId) || empty($brandId) || empty($quantity) || empty($body) || empty($price) ||  empty($file_name)){
        $msg = '<div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-info"></i> Product Feld Emty!!!!!</p>
                </div>';
            return $msg;
    }elseif ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
    } elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-"
     .implode(', ', $permited)."</span>";
    }else{
          move_uploaded_file($file_temp, $uploaded_image);
          $query = "INSERT INTO tbl_product(productName, catId, brandId, body, price, Rprice, quantity, image, type) VALUES ('$productName','$catId','$brandId','$body','$price', '$Rprice', '$quantity','$uploaded_image','$type')";
          $inserted_row = $this->db->insert($query);
          if($inserted_row){
           $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Product Add Success!!!!</p>
                </div>';
            return $msg;
          }else{
           $msg = '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-exclamation-triangle"></i> Product Add not Success!!!!!</p>
                </div>';
            return $msg;
          }
        }
      } 
      
      public function gatAllProduct(){
       $query = "SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName
                FROM tbl_product
                INNER JOIN tbl_category
                ON tbl_product.catId = tbl_category.catId
                INNER JOIN tbl_brand
                ON tbl_product.brandId = tbl_brand.brandId
                ORDER BY productId DESC";
       $result = $this->db->select($query);
       return $result;
      }
      
      public function gatProductById($id){
       $query = "SELECT * FROM  tbl_product WHERE productId = '$id'";
       $result = $this->db->select($query);
       return $result;
      }
     
     public function productUpdate($data, $file, $id){
        $productName = mysqli_real_escape_string($this->db->link,$data['productName']);
        $catId = mysqli_real_escape_string($this->db->link,$data['catId']);
        $brandId = mysqli_real_escape_string($this->db->link,$data['brandId']);
        $body = mysqli_real_escape_string($this->db->link,$data['body']);
        $price = mysqli_real_escape_string($this->db->link,$data['price']);
        $type = mysqli_real_escape_string($this->db->link,$data['type']);


    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $file['image']['name'];
    $file_size = $file['image']['size'];
    $file_temp = $file['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "uploads/".$unique_image;

    if ($productName == "" || $catId == "" || $brandId == "" || $body == "" || $price == "" 
    || $type == "") {
        $msg = '<div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-info"></i>Product Feld Emty!!!!!</p>
                </div>';
            return $msg;
    } else {
    if (!empty($file_name)) {

    if ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
    } elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-"
     .implode(', ', $permited)."</span>";
    } else{
     move_uploaded_file($file_temp, $uploaded_image);
    $query ="UPDATE tbl_product
            SET
            productName    = '$productName',  
            catId    = '$catId', 
            brandId  = '$brandId', 
            body     = '$body',
            price    = '$price',
            image    = '$uploaded_image',
            type     = '$type'
            WHERE productId = '$id'";

    $updated_rows = $this->db->update($query);
    if ($updated_rows) {
     $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Product Update Success!!!!</p>
                </div>';
            return $msg;
    }else {
      $msg = '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-exclamation-triangle"></i>  Product Update not Success!!!!!</p>
                </div>';
            return $msg;
    }
    }
}else{
	    $query ="UPDATE tbl_product
            SET
            productName    = '$productName',  
            catId    = '$catId', 
            brandId  = '$brandId', 
            body     = '$body',
            price    = '$price',
            type     = '$type'
            WHERE productId = '$id'";

    $updated_rows = $this->db->update($query);
    if ($updated_rows) {
   $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Product Update Success!!!!</p>
                </div>';
            return $msg;
    }else {
      $msg = '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-exclamation-triangle"></i> Product Delete not Success!!!!!</p>
                </div>';
            return $msg;
    }
}

}
 }
     
     
      public function delProductById($id){
         $query = "DELETE FROM  tbl_product WHERE productId = '$id'";
       $dalData = $this->db->delete($query);
       if($dalData){
            $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Product Delete Success!!!!</p>
                </div>';
            return $msg;
     }else{
           $delmsg = "product not Delete!!!";
            return $delmsg;
          }
      }
      
      public function gatFeaturadProduct(){
         $query = "SELECT * FROM  tbl_product WHERE type = '0' ORDER BY productId DESC";
       $result = $this->db->select($query);
       return $result; 
      }
      
    public function gatNProduct($start_form, $per_page){
         $query = "SELECT * FROM  tbl_product ORDER BY productId DESC limit $start_form, $per_page";
       $result = $this->db->select($query);
       return $result; 
      }
      
    public function couFromNProduct(){
         $query = "SELECT * FROM  tbl_product ORDER BY productId DESC";
       $result = $this->db->select($query);
       return $result; 
      }
      
     public function gatSingleProductById($id){
       $query = "SELECT p.*, c.catName, b.brandName
                FROM tbl_product as p, tbl_category as c, tbl_brand as b
                WHERE p.catId = c.catId AND p.brandId = b.brandId AND p.productId = '$id'";
       $result = $this->db->select($query);
       return $result;
      }
      
      public function latestFromIphone(){
        $query = "SELECT * FROM  tbl_product WHERE brandId = '40' ORDER BY productId DESC LIMIT 4";
       $result = $this->db->select($query);
       return $result; 
      }
      
      public function latestFromSamsung(){
        $query = "SELECT * FROM  tbl_product WHERE brandId = '33' ORDER BY productId DESC LIMIT 4";
       $result = $this->db->select($query);
       return $result; 
      }
      
      public function latestFromAcer(){
        $query = "SELECT * FROM  tbl_product WHERE brandId = '37' ORDER BY productId DESC LIMIT 4";
       $result = $this->db->select($query);
       return $result; 
      }
      
      public function latestFromCanon(){
        $query = "SELECT * FROM  tbl_product WHERE brandId = '32' ORDER BY productId DESC LIMIT 4";
       $result = $this->db->select($query);
       return $result; 
      }
      
      public function productByCat($id){
        $id = mysqli_real_escape_string($this->db->link,$id);
        $query = "SELECT * FROM  tbl_product WHERE catId = '$id'";
       $result = $this->db->select($query);
       return $result; 
      }
      
      public function insertCompareData($cmprid, $cmrId){
          $cmrId = mysqli_real_escape_string($this->db->link,$cmrId);
          $productId = mysqli_real_escape_string($this->db->link,$cmprid);
          
           $chquery = "SELECT * FROM tbl_compae WHERE cmrId = '$cmrId' AND productId = '$productId'";
      $getpro = $this->db->select($chquery);
      if($getpro){
        $msg = '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-ban"></i> Product Alrady Addet!!!!!</p>
                </div>';
        return $msg;
      }
          
          $query = "SELECT * FROM  tbl_product WHERE productId = '$productId'";
        $result = $this->db->select($query)->fetch_assoc();
        if($result){
             $productId = $result['productId'];
             $productName = $result['productName'];
             $price = $result['price'];
             $image = $result['image'];
             $query = "INSERT INTO tbl_compae(cmrId, productId, productName, image, price ) VALUES ('$cmrId','$productId','$productName','$image','$price')";
          $inserted_row = $this->db->insert($query);
          
          if($inserted_row){
          $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Addet to  Compae Success!!!!</p>
                </div>';
            return $msg;
          
     }else{
           $msg = "Addet not Compae!!!";
            return $msg;
          }
           }
        }
      
      public function getComperData($cmrId){
        $query = "SELECT * FROM  tbl_compae WHERE cmrId = '$cmrId' ORDER BY id DESC";
       $result = $this->db->select($query);
       return $result;
      }
      
      public function delComperData($cmrId){
          $query = "DELETE FROM tbl_compae WHERE cmrId = '$cmrId'";
          $this->db->delete($query);  
         }
  
  
     public function saveWishListData($id, $cmrId){
         $cmrId = mysqli_real_escape_string($this->db->link,$cmrId);
          $productId = mysqli_real_escape_string($this->db->link,$id);
          
           $chquery = "SELECT * FROM tbl_wlist WHERE cmrId = '$cmrId' AND productId = '$productId'";
      $getpro = $this->db->select($chquery);
      if($getpro){
        $msg = '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-ban"></i> Product Alrady Save!!!!!</p>
                </div>';
        return $msg;
      }
          
          $query = "SELECT * FROM  tbl_product WHERE productId = '$id'";
        $result = $this->db->select($query)->fetch_assoc();
        if($result){
             $productId = $result['productId'];
             $productName = $result['productName'];
             $image = $result['image'];
             $price = $result['price'];
             $query = "INSERT INTO tbl_wlist(cmrId, productId, productName, image, price ) VALUES ('$cmrId','$productId','$productName','$image','$price')";
          $inserted_row = $this->db->insert($query);
          
          if($inserted_row){
          $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Addet to  Save! Success!!!!</p>
                </div>';
            return $msg;
            
     }else{
           $msg = "not Save!!!";
            return $msg;
          }
           }
        }
        
     public function chekWlistData($cmrId){
        $query = "SELECT * FROM  tbl_wlist WHERE cmrId = '$cmrId' ORDER BY id DESC";
       $result = $this->db->select($query);
       return $result;
     }
     
     
     public function getWlistData($cmrId, $productId){
          $query = "DELETE FROM tbl_wlist WHERE cmrId = '$cmrId' AND productId = '$productId'";
          $this->db->delete($query);  
         }
         
    public function gatRelProductByCat($catid){
        $query = "SELECT * FROM  tbl_product WHERE catId = '$catid' ORDER BY rand()";
       $result = $this->db->select($query);
       return $result;
    }
    
    public function latestFromWomen($start_form, $per_page){
        $query = "SELECT * FROM  tbl_product WHERE catId = '88' ORDER BY productId DESC limit $start_form, $per_page";
       $result = $this->db->select($query);
       return $result; 
      }
      
    public function latestFromMen($start_form, $per_page){
        $query = "SELECT * FROM  tbl_product WHERE catId = '81' ORDER BY productId DESC limit $start_form, $per_page";
       $result = $this->db->select($query);
       return $result; 
      }
      
    public function couFromMen(){
        $query = "SELECT * FROM  tbl_product WHERE catId = '81' ORDER BY productId DESC";
       $result = $this->db->select($query);
       return $result; 
      }
     
    public function couFromWomen(){
        $query = "SELECT * FROM  tbl_product WHERE catId = '88' ORDER BY productId DESC";
       $result = $this->db->select($query);
       return $result; 
      }
      
    public function latestFromSearc($search){
        $query = "SELECT * FROM  tbl_product WHERE productName LIKE '%$search%' OR body LIKE '%$search%' OR catId LIKE '%$search%' ORDER BY productId DESC";
       $result = $this->db->select($query);
       return $result; 
      }
     
     /*---------------------------------------------------------------------*/
     public function gatOutProduct(){
       $query = "SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName
                FROM tbl_product
                INNER JOIN tbl_category
                ON tbl_product.catId = tbl_category.catId
                INNER JOIN tbl_brand
                ON tbl_product.brandId = tbl_brand.brandId WHERE quantity = '0'
                ORDER BY productId DESC";
       $result = $this->db->select($query);
       return $result;
      }
    	
  
    
     	/*---------------------------------------------------------------------*/
    public function gatLowProduct(){
       $query = "SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName
                FROM tbl_product
                INNER JOIN tbl_category
                ON tbl_product.catId = tbl_category.catId
                INNER JOIN tbl_brand
                ON tbl_product.brandId = tbl_brand.brandId WHERE quantity = '3' OR quantity = '2' OR quantity = '1'
                ORDER BY productId DESC";
       $result = $this->db->select($query);
       return $result;
      }
      
 
     
     
 }?>






