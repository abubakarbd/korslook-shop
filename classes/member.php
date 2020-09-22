<?php 
    $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/Format.php');
?>
<?php

 class Member{
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
        $type = mysqli_real_escape_string($this->db->link,$data['type']);
        
    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $file['image']['name'];
    $file_size = $file['image']['size'];
    $file_temp = $file['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "uploads/".$unique_image;
    
    if(empty($productName) || empty($catId) || empty($brandId) || empty($body) || empty($price) ||  empty($file_name)){
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
          $query = "INSERT INTO tbl_member(productName, catId, brandId, body, price, image, type) VALUES ('$productName','$catId','$brandId','$body','$price','$uploaded_image','$type')";
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
       $query = "SELECT * FROM tbl_product ORDER BY productId DESC";
       $result = $this->db->select($query);
       return $result;
      }
      
      public function gatProductById($id){
       $query = "SELECT * FROM  tbl_member WHERE productId = '$id'";
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
    $query ="UPDATE tbl_member
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
	    $query ="UPDATE tbl_member
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
         $query = "DELETE FROM  tbl_member WHERE productId = '$id'";
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
      
     
     
 }?>






