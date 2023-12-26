<?php
  
require('init.php');

class Order{

    public $numorder;
    public $totalprice;
    public $dateorder;
    public $custname;
    public $startdate;
    public $enddate;
    public $carname;
    public $imgcar;
    public $email;
    public $dropstation;
    public $pickstation;
    public $cardnum ;


    public function __construct()
    {

    }
  
    public static function fetch_order(){
               
        global $database;
        $result=$database->query("SELECT * FROM `order` ;");
        $orders=null;
        if ($result){
            $i=0;
            if ($result->num_rows>0){ 
                while($row=$result->fetch_assoc()){ 
                    $order=new Order();
                    $order->instantation($row);
                    $orders[$i]=$order;
                    $i+=1;
                }
            }
        
        return $orders;
    }

       
    }


    public static function getmaxorder(){
               
        global $database;
        $result=$database->query("SELECT (MAX(`numorder`)+1) AS numorder FROM `order`;");
        $orders=null;
        if ($result){
            $i=0;
            if ($result->num_rows>0){ 
                while($row=$result->fetch_assoc()){ 
                    $order=new Order();
                    $order->instantation($row);
                    $orders[$i]=$order;
                    $i+=1;
                }
            }
        
        return $orders;
    }

       
    }



  


    public static function add_order($numorder , $totalprice,$dateorder, $custname , $startdate ,$enddate,$carname,$imgcar,$email,$dropstation ,$pickstation,$cardnum){
        global $database;
        $error=null;
        $sql="Insert into `order` (`numorder`,`totalprice`,`dateorder`, `custname` , `startdate` ,`enddate`,`carname`,`imgcar`,`email`,`dropstation` ,`pickstation`,`cardnum`) VALUES ('".$numorder."','".$totalprice."','".$dateorder."','".$custname."','".$startdate."','".$enddate."','".$carname."','".$imgcar."','".$email."','".$dropstation."','".$pickstation."','".$cardnum."')";
        $result=$database->query($sql);
        if (!$result)
            $error='Can not add order.  Error is:'.$database->get_connection()->error;
        return $error;
        
    }


    public static function delete_order($numorder){
        global $database;
        $error=null;
        $result=$database->query("DELETE FROM `order` WHERE `numorder` ='".$numorder."'");
	
        
    }

        
    public function has_attribute($attribute){
        
        $object_properties=get_object_vars($this);
        return array_key_exists($attribute,$object_properties);
    }
    
     public function  instantation($car_array){
        foreach ($car_array as $attribute=>$value){
            if ($result=$this->has_attribute($attribute))
                $this->$attribute=$value;
       }
     }
    
     public function find_order_by_emailandnumorder($email , $numorder){
        global $database;
        $error=null;
        $result=$database->query("SELECT * FROM `order` WHERE email LIKE '".$email."' AND numorder LIKE '".$numorder."'" );
		
        if (!$result)
            $error='Can not find the user.  Error is:'.$database->get_connection()->error;
        elseif ($result->num_rows>0){
            $found_user=$result->fetch_assoc();
			$this->instantation($found_user);
        }
         else
             $error="Can no find user by this name";
		 
        return $error;
        
    }

   
    public function __get($property){
        if (property_exists($this,$property))
            return $this->$property;
    }

   
}

$orderdetails = new Order();

?>

