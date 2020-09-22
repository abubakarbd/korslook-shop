<?php 
   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../lib/Database.php');
   include_once ($filepath.'/../helpers/Format.php');
?>

<?php  
   class Contact{
     private $db;
     private $fm;
     
     public function __construct(){
        $this->db = new Database();
        $this->fm = new Format();
     }
     
     public function gatAllContact(){
         $query = "SELECT * FROM tbl_contact ORDER BY id DESC";
         $result = $this->db->select($query);
         return $result;
     }
     
     public function contInsert($data){
         $contName  = mysqli_real_escape_string($this->db->link,$data['contName']);
         $mobile    = mysqli_real_escape_string($this->db->link,$data['mobile']);
         $agentName = mysqli_real_escape_string($this->db->link,$data['agentName']);
         $conttype  = mysqli_real_escape_string($this->db->link,$data['conttype']);
         $district  = mysqli_real_escape_string($this->db->link,$data['district']);
         
         if(empty($contName) || empty($mobile) || empty($district)){
             $msg = '<div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-info"></i> Product Feld Emty!!!!!</p>
                </div>';
            return $msg;
         }else{
             $query = "INSERT INTO tbl_contact(contName, mobile, agentName, conttype, district) VALUES ('$contName', '$mobile', '$agentName', '$conttype', '$district')";
             $inserted_row = $this->db->insert($query);
             if($inserted_row){
               $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Contact Add Success!!!!</p>
                </div>';
                    return $msg;
            }else{
                   $msg = '<div class="alert alert-warning alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <p><i class="icon fas fa-exclamation-triangle"></i> Contact Add not Success!!!!!</p>
                        </div>';
                    return $msg;
             }
         }
     }
     
     public function delContById($id){
       $query = "DELETE FROM tbl_contact WHERE id = '$id'";
       $deldata = $this->db->delete($query);
       if($dalData){
              $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> Contact Delete Success!!!!</p>
                </div>';
            return $msg;
     }else{
           $delmsg = "Contact not Delete!!!";
            return $delmsg;
        }
    }
     
}?>