<?php 
$term = $this->crud->fetchdatabyid('4','site_setting');
$checkoutimg = $this->crud->fetchdatabyid('13','site_setting');

include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/contact.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/contact_responsive.css">


<style>
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
                           <div class="home_title">Term & Condition</div>
                           <div class="breadcrumbs">
                              <ul>
                                 <li><a href="<?=base_url() ?>">Home</a></li>
                                 <li>Term & Condition</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="contact">
            <div class="container">
               <div class="row">
                  <div class="col">
                     <div class="review_form_container">
                        <div class="review_form_title mb-4">Term & Condition</div>
                           <?=$term[0]->content ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        

 

<?php include('footer.php'); ?>