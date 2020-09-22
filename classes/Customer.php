<?php 
    $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/Format.php');
?>
<?php
 class Customer{
      private $db;
      private $fm;
      
      public function __construct(){
      $this->db = new Database();
      $this->fm = new Format();
    } 
    
    public function customerRegistration($data){
        $name = mysqli_real_escape_string($this->db->link,$data['name']);
        $city = mysqli_real_escape_string($this->db->link,$data['city']);
        $zip = mysqli_real_escape_string($this->db->link,$data['zip']);
        $email = mysqli_real_escape_string($this->db->link,$data['email']);
        $address = mysqli_real_escape_string($this->db->link,$data['address']);
        $country = mysqli_real_escape_string($this->db->link,$data['country']);
        $phone = mysqli_real_escape_string($this->db->link,$data['phone']);
        $pass = mysqli_real_escape_string($this->db->link, md5($data['pass']));
        
        if(empty($name) || empty($city) || empty($zip) || empty($email) || empty($address) ||  empty($country) || empty($phone) || empty($pass)){
        $productmsg = "Feld Empty!!!";
        return $productmsg;
        }
        $mailequery = "SELECT * FROM tbl_customer WHERE email = '$email' LIMIT 1 ";
        $mailchk =  $this->db->select($mailequery);
        if($mailchk !=false){
            $msg = "Email Alrady Exgist!!!";
        return $msg;
        }else{
            $query = "INSERT INTO tbl_customer(name, city, zip, email, address, country, phone, pass) VALUES ('$name','$city','$zip','$email','$address','$country','$phone','$pass')";
          $inserted_row = $this->db->insert($query);
          if($inserted_row){
           $msg = "Customer Insert Success!!!";
            return $msg;
          }else{
           $msg = "Customer Insert not Success!!!";
            return $msg;
          }
        }
    }
    
    
     public function customerLogin($data){
        $email = $this->fm->validation($data['email']);
        $Pass = $this->fm->validation($data['pass']);
        
        $email = mysqli_real_escape_string($this->db->link, $data['email']);
        $Pass = mysqli_real_escape_string($this->db->link, md5($data['pass']));
        
        if(empty($email) || empty($Pass)){
            $msg = "User Name Or Pass Empty";
            return $msg;
        }else{
            $query = "SELECT * FROM tbl_customer WHERE email = '$email' AND Pass = '$Pass'"; 
            $result = $this->db->select($query);
            if($result != false){
                $value = $result->fetch_assoc();
                Session :: set("cuslogin",true);
                Session :: set("cmrId",$value['id']);
                Session :: set("cmrName",$value['name']);
                
                echo "<script>window.location='cart.php'</script>";
            }else{
                $msg = "User Name Or Pass Not Match!";
            return $msg;
            }
        }
        
    }
    
    public function getCustomerData($id){
      $query = "SELECT * FROM tbl_customer WHERE id = '$id'";
      $result = $this->db->select($query);
      return $result;
    }
    
    public function customerUpdate($data,$cmrId){
        $name = mysqli_real_escape_string($this->db->link,$data['name']);
        $city = mysqli_real_escape_string($this->db->link,$data['city']);
        $zip = mysqli_real_escape_string($this->db->link,$data['zip']);
        $email = mysqli_real_escape_string($this->db->link,$data['email']);
        $address = mysqli_real_escape_string($this->db->link,$data['address']);
        $country = mysqli_real_escape_string($this->db->link,$data['country']);
        $phone = mysqli_real_escape_string($this->db->link,$data['phone']);
        
        if(empty($name) || empty($city) || empty($zip) || empty($email) || empty($address) ||  empty($country) || empty($phone)){
        $msg = "Feld Empty!!!";
        return $msg;
        }else{
            $query ="UPDATE tbl_customer
            SET
            name    = '$name',  
            city    = '$city', 
            zip     = '$zip', 
            email   = '$email',
            address = '$address',
            country = '$country',
            phone   = '$phone'
            WHERE id = '$cmrId'";
    $updated_rows = $this->db->update($query);
    if ($updated_rows) {
     $pdmsg = "Customer Updated Successfully.";
     return $pdmsg;
    }else {
      $pdmsg = "Data Not Updated !";
      return $pdmsg;
    }
          
  }
}

   public function getCustomer(){
       $query = "SELECT * FROM  tbl_customer ORDER BY id DESC";
       $result = $this->db->select($query);
       return $result;
      }
    
    
 }?>
 
 
 
 
 
 
 
 
 
 
 
 
 