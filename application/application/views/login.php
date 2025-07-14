<?php 
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/contact.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/contact_responsive.css">



<style>
   .shopping_cart {
       left: 0;
       top: 13px;
   }
   .shopping {
    position: relative;
     top: 0px!important; 
     left: 0%!important; 
}


@media only screen and (max-width: 1026px) 
{

   .shopping {
       position: relative;
       top: -12px!important;
       left: 0%!important;
       display: flex;
   }
}
</style>



         <div class="home" style="height:400px">
            <div class="home_background parallax-window" data-parallax="scroll"  data-speed="0.8" style="background-image: url(<?=base_url() ?>images/cart.jpg.webp);background-size: cover;background-repeat: no-repeat;"></div>
            <div class="container">
               <div class="row">
                  <div class="col">
                     <div class="home_container">
                        <div class="home_content">
                           <div class="home_title">Login</div>
                           <div class="breadcrumbs">
                              <ul>
                                 <li><a href="<?=base_url() ?>">Home</a></li>
                                 <li>Login</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="contact_text" style="padding-bottom:0px;">
            <div class="container">
               <div class="row">
                 
                  <div class="col-lg-12">
                     <div class="review_form_container">
                        <div class="review_form_title">Login</div>
                        <div class="review_form_content" style="margin-top: 50px;">
                        <?php echo $this->session->flashdata('message') ?>

                           <form action="<?=base_url('User/user_login') ?>" id="review_form" class="review_form" method="post">
                              <div class="d-flex flex-md-row flex-column align-items-start justify-content-between" style="flex-direction: column!important;justify-content: center !important;align-items: center !important;">

                                 <input type="email" class="review_form_input" placeholder="Email Address" required="required" name="email" style="margin-bottom: 10px;">
                                 <input type="password" class="review_form_input" placeholder="Password" required="required" name="password">
                              </div>
                              <button type="submit" name="submit" class="review_form_button">Submit</button>
                           </form>
                        </div>
                        <div style="text-align: center;padding-top: 11px;">
                           <a href="<?=base_url() ?>register" style="color:black;font-weight: 600;" class="register">Click To Register</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<?php include('footer.php'); ?>
      <!-- <script src="<?=base_url() ?>js/contact_custom.js"></script> -->