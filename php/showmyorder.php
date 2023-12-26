<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenCarRental MyOrder</title>
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
    <!-- Logo -->
    <header class="container">
      <img class="logo-img" src="../images/logo.png" alt="Logo image" />
    </header>

    <main>
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
              <a id="other-tab" class="nav-link" href="../html/search.html"
                >Search</a
              >
            </li>
            <li class="nav-item">
              <a
                id="current-tab"
                aria-current="page"
                class="nav-link active"
                href="../html/myOrder.html"
                >My Order</a
              >
            </li>
          </ul>
        </nav>
      </div>

      <!-- banner -->
      <div class="container banner-con">
        <div class="card banner">
          <h3 class="description-heder">Watch or cancel your order</h3>
          <img class="banner-img" src="../images/baenners/cancel.png" alt="" />
        </div>
      </div>
      <!-- // Main // -->

  
      



<?php
           
           require_once("init.php");
           if (!empty($_GET))
            {
                              $email =  $_GET["email"]; 
                              $numorder =  $_GET["numorder"]; 

                              $order=new Order();
                              $error=$order->find_order_by_emailandnumorder($email ,$numorder );
                              if (isset($error))
                              {
                                  echo $error;
                              }
                              else
                              {
                                $numorder = $order->numorder ; 
                                $custname = $order->custname ; 
                                $dateorder = $order->dateorder;
                                $totalprice = $order->totalprice;
                                $numorder = $order->numorder;
                                $image = $order->imgcar ; 
                                $dropstation = $order->dropstation ; 
                                $pickstation = $order->pickstation ; 
                                $startdate = $order->startdate;
                                $enddate = $order->enddate;
                                $carname = $order->carname;
                                
                          
                                  echo('
                      
                      

                                  <div class="container">
                                  <form action="delete.php" method="GET"> 
                                  <div class="order">
                                    <div class="orderNum card">
                                      <p class="orderTitle criterionA">Order number:</p>
                                      <label class="orderTitle" id="numorder" name="numorder2"  readonly>#'.$numorder.'</label>
                                      <input type="text" name="nameorder" value='.$numorder.' style="display:none"><br>

                                    </div>
                                    <div class="orderDetailes">
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
                                          <img src="'. $image.'" alt="" width="100%" height="100%" />
                                        </div>
                          
                                        <div class="infoA">
                                          <p class="criterion A">Total paied:</p>
                                          <p class="content A" id="#">'.$totalprice.'$</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="cancelOrder">
                                    <button
                                    class="btn btn-danger btnCancel"
                                    id="cancelBtn"
                                    
                                  >
                                    Cancel my order
                                  </button>
                      
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




    <!-- Footer -->
    <div class="footer-basic">
      <hr class="horizental-line" />
      <footer>
        <div class="social">
          <a href="#"
            ><img class="social-img" src="../images/socialMedia/instagram.jpg"
            alt="" /</a
          ><a href="#"
            ><img class="social-img" src="../images/socialMedia/twitter.jpg"
            alt="" /</a
          ><a href="#"
            ><img class="social-img" src="../images/socialMedia/whatsapp.jpg"
            alt="" /</a
          ><a href="#"
            ><img
              class="social-img"
              src="../images/socialMedia/facebook.jpg"
              alt=""
          /></a>
        </div>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Home</a></li>
          <li class="list-inline-item"><a href="#">Services</a></li>
          <li class="list-inline-item"><a href="#">About</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">GreenCarRental © 2022</p>
      </footer>
    </div>
    <script src="../JS/validation.js"></script>
    <script src="../JS/cancel.js"></script>
  </body>
</html>


