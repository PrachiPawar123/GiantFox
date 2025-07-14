<?php 
include('header.php');
?>
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/checkout.css">
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/checkout_responsive.css">

         <div class="home" style="height:400px">
            <div class="home_background parallax-window" data-parallax="scroll"  data-speed="0.8" style="background-image: url(<?=base_url() ?>images/cart.jpg.webp);    background-size: cover;background-repeat: no-repeat;"></div>
            <div class="container">
               <div class="row" style="justify-content: center;">
                  <div class="col">
                     <div class="home_container" style="justify-content: center;display: flex;">
                        <div class="home_content" style="left: auto;">
                           <div class="home_title" style="color: white;background: black;padding: 13px;">NOT FOUND...</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

   <?php $this->load->view('footer'); ?>