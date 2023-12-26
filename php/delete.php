<?php

require_once("init.php");
if (!empty($_GET))
  {

   $numorder =  $_GET["nameorder"]; 
   $numorder  = (int) $numorder;


   $sql = "DELETE FROM `order` WHERE `numorder`=".$numorder.";";

      if ($conn->query($sql) === TRUE) {
        header('Location: ../html/index.html');
        exit;
      }
      else
      {
        echo '<script>alert("failed to delete order")</script>';
      }
  
   
  }

?>

