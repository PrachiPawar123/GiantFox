<?php 
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
$checkoutimg = $this->crud->fetchdatabyid('11','site_setting');

include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/contact.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/contact_responsive.css">
<style>
   .main_nav ul li {
    display: inline-block;
    margin-right: 0px;
}
   @media only screen and (min-width: 1025px) {
        
       .shopping_cart {
          left: 0!important;
          top: 0!important;
      }

      .shopping {
    position: relative;
     top: 0!important; 
     left: 0%!important; 
}
.home_background {
    position: absolute;
    top: 98px;
}
</style>
         <div class="home" style="height:400px">
            <div class="home_background parallax-window" data-parallax="scroll"  data-speed="0.8" style="background-image: url(<?=base_url() ?>media/uploads/site_setting/<?=$checkoutimg[0]->logo ?>);background-size: cover;background-repeat: no-repeat;background-position-y: top;"></div>

            <div class="home_background parallax-window desktop-none" data-parallax="scroll"  data-speed="0.8" style="background-image: url(<?=base_url() ?>media/g.png);background-size: cover;background-repeat: no-repeat;background-position-y: top;"></div>
            <div class="container">
               <div class="row">
                  <div class="col">
                     <div class="home_container">
                        <div class="home_content">
                           <div class="home_title">Contact</div>
                           <div class="breadcrumbs">
                              <ul>
                                 <li><a href="<?=base_url() ?>">Home</a></li>
                                 <li>Contact</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="contact_text">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="contact_info">
                        <div class="contact_title">contact info</div>
                        <div class="contact_info_content">
                           <ul>
                              <li>
                                 <div class="contact_info_icon">
                                    <img src="<?=base_url() ?>images/contact_info_1.png" alt>
                                 </div>
                                 <div class="contact_info_text"><?=$sitesetting[0]->address ?></div>
                              </li>
                              <li>
                                 <div class="contact_info_icon"><img src="<?=base_url() ?>images/contact_info_2.png" alt></div>
                                 <div class="contact_info_text">
                                    <a href="mailto:<?=$sitesetting[0]->email ?>"><?=$sitesetting[0]->email ?></a>, 
                                    <a href="mailto:<?=$sitesetting[0]->alt_email ?>"><?=$sitesetting[0]->alt_email ?></a>
                                 </div>
                              </li>
                              <li>
                                 <div class="contact_info_icon"><img src="<?=base_url() ?>images/contact_info_3.png" alt></div>
                                 <div class="contact_info_text"><?=$sitesetting[0]->mobile ?>, <?=$sitesetting[0]->alt_mobile ?></div>
                              </li>
                           </ul>
                        </div>
                        <div class="contact_info_social">
                           <ul>
                              <li><a href="<?=$sitesetting[0]->facebook ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="<?=$sitesetting[0]->youtube ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                              <li><a href="<?=$sitesetting[0]->instagram ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              <li><a href="<?=$sitesetting[0]->twitter ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="review_form_container">
                        <div class="review_form_title">get in touch</div>
                        <div class="review_form_content">
                        <?php echo $this->session->flashdata('message') ?>
                           <form action="<?=base_url('welcome/enquiry_form') ?>" id="review_form" class="review_form" method="post">
                              <div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                                 <input type="text" class="review_form_input" placeholder="Name" required="required" name="name">
                                 <input type="email" class="review_form_input" placeholder="E-mail" required="required" name="email">
                                 <input type="text" class="review_form_input" placeholder="Subject" name="subject">
                              </div>
                              <textarea class="review_form_text" name="message" placeholder="Message"></textarea>
                              <button type="submit" name="submit" class="review_form_button">send message</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="map">
            <?=$sitesetting[0]->map ?>
         </div>

<?php include('footer.php'); ?>
      <!-- <script src="<?=base_url() ?>js/contact_custom.js"></script> -->