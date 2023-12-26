<!DOCTYPE html>
<html>
<head>
	<title>tables</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenCarRental MyOrder</title>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet">

  
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="../css/hederNav.css" />
    <link rel="stylesheet" type="text/css" href="../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="../css/cancelationStyle.css" />
    <link rel="stylesheet" type="text/css" href="../css/banners.css" />

</head>
<body>
<!-- Navigation bar -->
<div class="container navigation nav-bar">
      <nav>
        <ul class="nav nav-pills nav-justified">
          <!-- <ul class="nav nav-pills nav-fill"> -->
          <li class="nav-item">
            <a id="other-tab" class="nav-link" href="../html/index.html"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a
              id="current-tab"
              class="nav-link active"
              aria-current="page"
              href="../html/search.html"
              >Search</a
            >
          </li>
          <li class="nav-item">
            <a id="other-tab" class="nav-link" href="../html/myOrder.html"
              >My Order</a
            >
          </li>
        </ul>
      </nav>
    </div>


	<?php

        require_once('init.php');
     


        if (!empty($_POST) )
        {
           $totalprice= $_POST["totalprice"]; 
           $dateorder=  $_POST["dateorder"];
           $startdate= $_POST["startdate"];  
           $enddate= $_POST["enddate"]; 
           $carname= $_POST["carname"];  
           $imgcar= $_POST["imgcar"]; 
           $dropstation= $_POST["dropstation"];  
           $pickstation=  $_POST["pickstation"];  
           $custname = $_POST["custname"];  
           $email = $_POST["email"];
           $numorder =$_POST["cardnum"];
          
           $orders=Order::getmaxorder(); // max order number 
           if (isset($orders)){
               for($i=0;$i<sizeof($orders);$i++){
                  $numorder = $orders[0]->numorder;
               }
            }
           $orderdetails->add_order($numorder , $totalprice,$dateorder, $custname , $startdate ,$enddate,$carname,$imgcar,$email,$dropstation ,$pickstation,$numorder);
      

          
         
          
           $order=new Order();
           $error=$order->find_order_by_emailandnumorder($email ,$numorder );
           if (isset($error))
           {
               echo $error;
           }
           else
           {

          
            echo("<h1>summery detail order </h1>");
             echo("Hi ".$order->custname .", <br />");
             echo("Number of your order : ".$order->numorder ." <br />");
             echo("total price of this shopping  : ".$order->totalprice ." dollars <br />");
        
             
             
             
             echo('
   
              
         
           
               <div id="container" class="container">
               <form  action="delete.php" method="GET"> 
               <div class="order">
                 <div id="container" class="orderNum card">
                   <p class="orderTitle criterionA">Order number:</p>
                   <label class="orderTitle" id="numorder" name="numorder2"  readonly>#'.$numorder.'</label>
                   <input type="text" name="nameorder" value='.$numorder.' style="display:none"><br>

                 </div>
                 <div id="orderDetailes" class="orderDetailes">
                   <div class="allDetailes card">
                     <div class="info">
                       <p class="criterion">Order date:</p>
                       <p class="content" id="#">'. $dateorder.'</p>
                     </div>
       
                     <div class="info">
                       <p class="criterion">Drivers name:</p>
                       <p class="content" id="#">'.$custname.'</p>
                     </div>
       
                     <div class="info">
                       <p class="criterion">Pick-up date:</p>
                       <p class="content" id="#">' .$startdate .'</p>
                     </div>
       
                     <div class="info">
                       <p class="criterion">Pick-up station:</p>
                       <p class="content" id="#">'.  $pickstation .'</p>
                     </div>
       
                     <div class="info">
                       <p class="criterion">Drop-off date:</p>
                       <p class="content" id="#">'. $enddate. '</p>
                     </div>
       
                     <div class="info">
                       <p class="criterion">Drop-off station:</p>
                       <p class="content" id="#">'.  $dropstation .'</p>
                     </div>
                   </div>
                   <div class="carDetailes card">
                     <div class="info">
                       <p class="criterion">Car type:</p>
                       <p class="content" id="#">' .$carname.'</p>
                     </div>
       
                     <div class="carImg card">
                       <img src="'. $imgcar.'" alt="" width="100%" height="100%" />
                     </div>
       
                     <div class="infoA">
                       <p class="criterion A">Total paied:</p>
                       <p class="content A" id="#">'.$totalprice.'$</p>
                     </div>
                   </div>
                 </div>
                 <div class="cancelOrder">
                 <input type="button" id="bt" style="width: 100%;  background-color: #04AA6D;"  onclick="printDiv()" value="Print PDF" />
   
                 </div>
               </div>
             
               </form>
             </div>
             <!-- // Main // -->
           </main>

         

               
               
             



               ');

       
        }


    }





   
  
  
?>

<script>

document.getElementById("username").value = "";

 function printDiv() { // print recipt to pdf
  let mywindow = window.open('', 'Recipt For Rental Car', 'height=650,width=900,top=100,left=150');
  mywindow.document.write('<html><head><title>${"Recipt For Rental Car "}</title>  <head>	<title>tables</title>    <meta charset="UTF-8" />    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <title>GreenCarRental MyOrder</title> <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet">  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"      crossorigin="anonymous"    />    <link rel="stylesheet" type="text/css" href="../css/hederNav.css" /> <link rel="stylesheet" type="text/css" href="../css/footer.css" />    <link rel="stylesheet" type="text/css" href="../css/cancelationStyle.css" />    <link rel="stylesheet" type="text/css" href="../css/banners.css" /></head>' );
  mywindow.document.write('</head><body style="width:100% ; height:100%; width=1oo%;">');
  mywindow.document.write(document.getElementById("orderDetailes").innerHTML);
  mywindow.document.write('</body></html>');
  mywindow.document.close(); // necessary for IE >= 10
  mywindow.focus(); // necessary for IE >= 10*/
  mywindow.print();
  mywindow.close();
  return true;
}
    
</script>
</body>
</html>