<?php 
    $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/Format.php');
?>
<?php

 class Category{
      private $db;
      private $fm;
      
      public function __construct(){
      $this->db = new Database();
      $this->fm = new Format();
    } 
    
    public function catInsert($catName){
        $catName = $this->fm->validation($catName);
        
        
        $catName = mysqli_real_escape_string($this->db->link,$catName);
        
        
        if(empty($catName)){
            $msg = '<div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-info"></i> Catagory Feld Emty!!!!!</p>
                </div>';
            return $msg;
        }
        
        $mailequery = "SELECT * FROM tbl_category WHERE catName = '$catName' LIMIT 1 ";
        $mailchk =  $this->db->select($mailequery);
        if($mailchk !=false){
            $msg = '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-ban"></i> Catagory Alrady Addet!!!!!</p>
                </div>';
        return $msg;
        }else{
          $query = "INSERT INTO tbl_category(catName) VALUES ('$catName')";
          $insertcat = $this->db->insert($query);
          if($insertcat){
           $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Catagory Insert Success!!!!</p>
                </div>';
            return $msg;
          }else{
           $msg = '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-exclamation-triangle"></i> Brand not Success!!!!!</p>
                </div>';
            return $msg;
          }
        }
      } 
      
      public function gatAllCat(){
       $query = "SELECT * FROM  tbl_category ORDER BY catId DESC";
       $result = $this->db->select($query);
       return $result;
      }
    
      
      public function gatCatById($id){
       $query = "SELECT * FROM  tbl_category WHERE catId = '$id'";
       $result = $this->db->select($query);
       return $result;
      }
     
     public function catUpdatet($catName, $id){
         $catName = $this->fm->validation($catName);
        
        $catName = mysqli_real_escape_string($this->db->link,$catName);
        $id = mysqli_real_escape_string($this->db->link,$id);
        
        if(empty($catName)){
            $msg = '<div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-info"></i> Catagory Feld Emty!!!!!</p>
                </div>';
            return $msg;
        }else{
          $query = "UPDATE tbl_category
            SET
            catName = '$catName'
            WHERE catID = '$id'";
          $updated_row = $this->db->update($query);
          if($updated_row){
           $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Catagory Update Success!!!!</p>
                </div>';
            return $msg;
          }else{
           $msg = '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-exclamation-triangle"></i> Catagory not Update !!!!!</p>
                </div>';
            return $msg;
          }
        }
     }
     
     
      public function delCatById($id){
         $query = "DELETE FROM  tbl_category WHERE catId = '$id'";
       $dalData = $this->db->delete($query);
       if($dalData){
            $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Catagory Delete Success!!!!</p>
                </div>';
            return $msg;
     }else{
           $msg = '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-exclamation-triangle"></i> Catagory not Delete !!!!!</p>
                </div>';
            return $msg;
          }
      }
     
      
 }?>






