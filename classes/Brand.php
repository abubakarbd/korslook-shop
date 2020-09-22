
<?php 
    $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/Format.php');
?>
<?php

 class Brand{
      private $db;
      private $fm;
      
      public function __construct(){
      $this->db = new Database();
      $this->fm = new Format();
    } 
    
    public function brandInsert($brandName){
        $brandName = $this->fm->validation($brandName);
        
        $brandName = mysqli_real_escape_string($this->db->link,$brandName);
        
        if(empty($brandName)){
            $msg = '<div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-info"></i> Brand Feld Emty!!!!!</p>
                </div>';
            return $msg;
        }
        
        $mailequery = "SELECT * FROM tbl_brand WHERE brandName = '$brandName' LIMIT 1 ";
        $mailchk =  $this->db->select($mailequery);
        if($mailchk !=false){
            $msg = '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-ban"></i> Brand Alrady Addet!!!!!</p>
                </div>';
        return $msg;
        }else{
          $query = "INSERT INTO tbl_brand(brandName) VALUES ('$brandName')";
          $insertbrand = $this->db->insert($query);
          if($insertbrand){
           $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Brand Add Success!!!!</p>
                </div>';
            return $msg;
          }else{
              $msg = '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-exclamation-triangle"></i> Brand Add not Success!!!!!</p>
                </div>';
            return $msg;
          }
        }
      } 
      
      public function gatAllBrand(){
       $query = "SELECT * FROM  tbl_brand ORDER BY brandId DESC";
       $result = $this->db->select($query);
       return $result;
      }
    
     
     public function countBrandBypro($bcount){
         $query = "SELECT * FROM  tbl_product WHERE brandId = '$bcount'";
           $result = $this->db->select($query);
           return $result;
     }
     
      public function gatBrandById($id){
       $query = "SELECT * FROM  tbl_brand WHERE brandId = '$id'";
       $result = $this->db->select($query);
       return $result;
      }
     
     public function brandUpdatet($brandName, $id){
         $brandName = $this->fm->validation($brandName);
        
        $brandName = mysqli_real_escape_string($this->db->link,$brandName);
        $id = mysqli_real_escape_string($this->db->link,$id);
        
        if(empty($brandName)){
            $msg = '<div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-info"></i> Brand Feld Emty!!!!!</p>
                </div>';
            return $msg;
        }else{
          $query = "UPDATE tbl_brand
            SET
            brandName = '$brandName'
            WHERE brandID = '$id'";
          $updated_row = $this->db->update($query);
          if($updated_row){
           $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Brand Update Success!!!!</p>
                </div>';
            return $msg;
          }else{
           $msg = '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-exclamation-triangle"></i> Brand not Update!!!!!</p>
                </div>';
            return $msg;
          }
        }
     }
     
     
      public function delBrandById($id){
         $query = "DELETE FROM  tbl_brand WHERE brandId = '$id'";
       $dalData = $this->db->delete($query);
       if($dalData){
            $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Brand Delete Success!!!!</p>
                </div>';
            return $msg;
     }else{
           $msg = '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-exclamation-triangle"></i> Brand not Delete!!!!!</p>
                </div>';
            return $msg;
          }
      }
     
      
 }?>






