<?php 
    $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/Format.php');
?>

<?php

 class Sms{
      private $db;
      private $fm;
      
    public function __construct(){
      $this->db = new Database();
      $this->fm = new Format();
    }
    
    public function SmsInsert($data){
        $smsTitle = mysqli_real_escape_string($this->db->link,$data['smsTitle']);
        $smsBody = mysqli_real_escape_string($this->db->link,$data['smsBody']);
        $smstype = mysqli_real_escape_string($this->db->link,$data['smstype']);
        
    
    if(empty($smsBody) || empty($smstype)){
        $msg = '<div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-info"></i> SMS Feld Emty!!!!!</p>
                </div>';
            return $msg;
    }else{
          $query = "INSERT INTO tbl_sms(smsTitle, smsBody, smstype) VALUES ('$smsTitle','$smsBody','$smstype')";
          $inserted_row = $this->db->insert($query);
          if($inserted_row){
           $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> SMS Add Success!!!!</p>
                </div>';
            return $msg;
          }else{
           $msg = '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-exclamation-triangle"></i> SMS Add not Success!!!!!</p>
                </div>';
            return $msg;
          }
        }
      } 
      
    public function AllSms(){
        $query = "SELECT * FROM tbl_sms ORDER BY smsId DESC";
        $result = $this->db->select($query);
        return $result;
    }  
    
    public function headTopSms(){
        $query = "SELECT * FROM tbl_sms WHERE smstype = '1' ORDER BY smsId DESC";
        $result = $this->db->select($query);
        return $result;
    }
    
    public function headBottSms(){
        $query = "SELECT * FROM tbl_sms WHERE smstype = '2' ORDER BY smsId DESC";
        $result = $this->db->select($query);
        return $result;
    }
    
    public function topFootSms(){
        $query =  "SELECT * FROM tbl_sms WHERE smstype = '3' ORDER BY smsId DESC";
        $result = $this->db->select($query);
        return $result;
    }
    
    public function LeftFootSms(){
        $query =  "SELECT * FROM tbl_sms WHERE smstype = '4' ORDER BY smsId DESC";
        $result = $this->db->select($query);
        return $result;
    }
    
    public function bootomFootSms(){
        $query = "SELECT * FROM tbl_sms WHERE smstype = '5' ORDER BY smsId DESC";
        $result = $this->db->select($query);
        return $result;
    }
    
    public function gatSmsById($id){
        $query = "SELECT * FROM tbl_sms WHERE smsId = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    
    public function smsUpdatet($data, $id){
        $smsTitle = mysqli_real_escape_string($this->db->link,$data['smsTitle']);
        $smsBody = mysqli_real_escape_string($this->db->link,$data['smsBody']);
        
        if(empty($smsBody)){
            $msg = '<div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-info"></i> SMS Feld Empty!!!!!</p>
                </div>';
            return $msg;
        }else{
          $query = "UPDATE tbl_sms
            SET
            smsTitle = '$smsTitle',
            smsBody = '$smsBody'
            WHERE smsId = '$id'";
          $updated_row = $this->db->update($query);
          if($updated_row){
           $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> SMS Update Success!!!!</p>
                </div>';
            return $msg;
          }else{
           $msg = '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-exclamation-triangle"></i> SMS not Update!!!!!</p>
                </div>';
            return $msg;
          }
        }
        
    }
    public function delSmsById($id){
        $query ="DELETE FROM tbl_sms WHERE smsId = '$id'";
        $dalData = $this->db->delete($query);
        if($dalData){
              $msg = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fas fa-check"></i> SMS Delete Success!!!!</p>
                </div>';
            return $msg;
     }else{
           $delmsg = "SMS not Delete!!!";
            return $delmsg;
        }
    }
    

    
 }?>  