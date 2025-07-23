<?php include('header.php'); ?>
<div class="home1">
   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-ride="carousel" data-bs-interval="2000">
      <!-- Show video section full width -->
      <div class="video-section" style="width:100%;margin:0;padding:0;">
         <video width="100%" height="400" controls autoplay loop muted style="display:block;object-fit:cover;">
            <source src="media/uploads/site_setting/NewVideo.mp4" type="video/mp4">
            Your browser does not support the video tag.
         </video>
      </div>
   </div>
</div>
<style>

   .features
   {
      padding-bottom: 50px;
   }

   @media only screen and (min-width: 1025px) {
   .desktop-none {
   display:none !important;
   }
   .arrivals-mobile {
   display:none !important;
   }
   } 
   @media only screen and (max-width: 1026px) {
   .mobile-none {
      display:none !important;
      }
   } 
   @media screen and (max-width: 750px)
   {
   .title {
   font-family: helvetica-bold;
   color: #888787;
   font-size: 12px;
   margin-bottom: 0;
   }
   .shopping {
    position: relative;
    top: -13px;
    left: 313%;
}
   }
   }


.category {
    margin: 12px 0;
    background: #b0aab0;
    background: #9e9e9e!important;
}
.top-cart {
    padding: 8px 5px;
    text-align: center;
}
.top-cart>a {
    padding-right: 5px;
}
a.a-class {
    font-size: 15px;
    font-weight: 700;
    color: black;
}
a.marquee-cass {
    color: black;
    font-size: 16px;
/*    font-size: 21px;*/
    font-weight: 600;
    padding-right: 15px;
}
.home_background {
    position: absolute;
    top: 98px;
}
</style>


<div class="container-fluid">
   <div class="row" style="justify-content:center;">

      <div class="col-12 desktop-none" style="margin-top: 10px;">
         <div>            
            <marquee behavior=scroll direction="left" scrollamount="0"  onmouseover="this.stop();" onmouseout="this.start();" style="text-align: center;">
               <a href="<?=base_url('new-drop') ?>" class="marquee-cass">
                  NEW DROPS
               </a>
               <?php
                  if($sitesetting[0]->view_all==1)
                     { ?>
               <a href="<?=base_url('filter') ?>" class="marquee-cass">
                  VIEW ALL
               </a>
            <?php } ?>
               <?php
               $this->db->order_by('sort asc');
               $categories = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
               foreach($categories as $data)
                  { ?>
                     <a href="<?=base_url('shop/'.$data->slug) ?>" class="marquee-cass">
                        <?=$data->name ?>
                     </a>
               <?php } ?>
            </marquee>
         </div>         
      </div>



   </div>
</div>

<style>
   .sale-batch
   {
      top: -6px!important
   }

    .sold-batch{
      top: 13px !important;
    }
    .product__badge {
       left: 0!important;
    }

     @media (max-width: 1200px)
        {
           .product__badge--items {
             font-size: 13px;
         }
       }
</style>


<div class="arrivals" style="padding-top:10px!important;padding-bottom:10px;">
   <div class="section_title_container text-center">
      <h2 class="title h2">FEATURED ITEMS</h2>
   </div>
</div>
<div class="features owl-carousel owl-theme">
   <?php
    $this->db->select('name,show_sale,sold_out,slug,thumb_img,thumb_img2,mrp_price,sale_price,rating');
      $productlist = $this->crud->selectDataByMultipleWhere('product',array('status'=>1,'new_drops'=>1,));
         foreach($productlist as $data)
            { ?>
   <div class="item">
      <div class="card swiper-slide1">
         <?php
            if($data->show_sale==1)
               { ?>
         <div class="product__badge sale-batch">
            <span class="product__badge--items sale">Sale</span>
         </div>
         <?php } ?>
         <?php
                    if($data->sold_out==1)
                     { ?>
                        <div class="product__badge sold-batch">
                           <span class="product__badge--items sale">Sold Out</span>
                       </div>
                    <?php } ?>
         <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
               <a href="<?=base_url('product-details/'.$data->slug) ?>">
               <img src='<?=base_url() ?>media/uploads/product/<?=$data->thumb_img ?>' onmouseover="this.src='<?=base_url() ?>media/uploads/product/<?=$data->thumb_img2 ?>';" onmouseout="this.src='<?=base_url() ?>media/uploads/product/<?=$data->thumb_img ?>';" class="card-img"/>
               </a>
            </div>
         </div>
         <div class="card-content">
            <div class="product_info">
               <div class="product_name text-center"><a href="<?=base_url('product-details/'.$data->slug) ?>"><?=$data->name ?></a><br><?php
               $i=1;
               while($i<=5) 
               {
                  if($i<=$data->rating)
                  { ?>
               <i class="fa fa-star"></i>
               <?php } $i++; } ?></div>
               <div class="product_price" style="text-align:center;">
                  ₹ <?=number_format($data->sale_price,2) ?>
                  <?php
                     if($data->show_sale==1)
                        { ?> 
                  <del style="color:#7a0808;">₹ <?=number_format($data->mrp_price,2) ?></del>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php } ?>           
</div>

<link rel="stylesheet" href="<?=base_url() ?>css/swiper-bundle.min.css">
<link rel="stylesheet" href="<?=base_url() ?>css/style.css">

<style>
   .middle_image {
   width: 100%;
   cursor: hand;
   overflow: hidden;
   position: relative;
   display: inline-block;
   }
   .middle_image img {
   height: auto;
   width: 100vw;
   }
</style>
<?php
   $this->db->limit(1);
   $this->db->order_by('id desc');
   $singlebanner = $this->crud->selectDataByMultipleWhere('singlebanner',array('status'=>1,));
   if(!empty($singlebanner))
   {
   ?>
<div class="middle_image mb-5">
   <?php
      foreach($singlebanner as $data)
         { ?>
   <a href="<?=$data->link ?>">
   <img src="<?=base_url() ?>media/uploads/singlebanner/<?=$data->image ?>" style="width:100v">
   </a>
   <?php } ?>
</div>
<?php } ?>



   <div class="features owl-carousel owl-theme">
   <?php
    $this->db->select('name,show_sale,sold_out,slug,thumb_img,thumb_img2,mrp_price,sale_price,rating');
      $productlist = $this->crud->selectDataByMultipleWhere('product',array('status'=>1,'show_home'=>1,));
         foreach($productlist as $data)
            { ?>
   <div class="item">
      <div class="card swiper-slide1">
         <?php
            if($data->show_sale==1)
               { ?>
         <div class="product__badge sale-batch">
            <span class="product__badge--items sale">Sale</span>
         </div>
         <?php } ?>
         <?php
           if($data->sold_out==1)
            { ?>
               <div class="product__badge sold-batch">
                  <span class="product__badge--items sale">Sold Out</span>
              </div>
           <?php } ?>
         <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
               <a href="<?=base_url('product-details/'.$data->slug) ?>">
               <img src='<?=base_url() ?>media/uploads/product/<?=$data->thumb_img ?>' onmouseover="this.src='<?=base_url() ?>media/uploads/product/<?=$data->thumb_img2 ?>';" onmouseout="this.src='<?=base_url() ?>media/uploads/product/<?=$data->thumb_img ?>';" class="card-img"/>
               </a>
            </div>
         </div>
         <div class="card-content">
            <div class="product_info">

               <div class="product_name text-center"><a href="<?=base_url('product-details/'.$data->slug) ?>"><?=$data->name ?></a><br><?php
               $i=1;
               while($i<=5) 
               {
                  if($i<=$data->rating)
                  { ?>
               <i class="fa fa-star"></i>
               <?php } $i++; } ?></div>
               
               <div class="product_price" style="text-align:center;">
                  ₹ <?=number_format($data->sale_price,2) ?>
                  <?php
                     if($data->show_sale==1)
                        { ?> 
                  <del style="color:#7a0808;">₹ <?=number_format($data->mrp_price,2) ?></del>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php } ?>           
</div>





<?php
   $this->db->limit(2);
   $this->db->order_by('id desc');
   $offer_banners = $this->crud->selectDataByMultipleWhere('offer_banners',array('status'=>1,));
   if(!empty($offer_banners))
   {
   ?>
<div class="gallery1">
   <div class="container-fluid">
      <div class="row">
         <?php
            foreach($offer_banners as $data)
               { ?>
         <div class="col-lg-4" style="padding-bottom:5px;">
            <a href="<?=$data->link?>">
            <img src="<?=base_url() ?>media/uploads/offer_banners/<?=$data->image ?>" class="img-fluid">
            </a>
         </div>
         <?php } ?>
      </div>
   </div>
</div>
<?php } ?>
<style>
   @media screen and (min-width: 950px)
   {
   .video-section {
   width: 100%;
   position: relative;
   overflow: hidden;
   }
   }
   .video-section video {
   width: 100%;
   height: 100%;
   object-fit: cover;
   }
</style>
<?php
   $video = $this->crud->fetchdatabyid('2','site_setting');
   if(!empty($video))
   { 
   ?>
<div class="video-section mt-5">
   <video width="100%" height="240" autoplay="" loop="" muted="">
      <source src="<?=base_url() ?>media/uploads/site_setting/<?=$video[0]->logo ?>" type="video/mp4">
   </video>
</div>
<?php } ?>
<?php include('footer.php'); ?>
<script src="<?=base_url() ?>js/swiper-bundle.min.js"></script>
<!-- JavaScript -->
<script src="<?=base_url() ?>js/script.js"></script>
<script>
   $('.features').owlCarousel({
       loop:false,
       margin:10,
       nav:false,
       responsive:{
           0:{
               items:2
           },
           600:{
               items:2
           },
           1000:{
               items:4
           }
       }
   })
</script>


<script >
   $('#carouselExampleControls').carousel({
     interval: 3000,
     cycle: true
   }); 
</script>
<script>
   $('.owl-carousel-2').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:5
        },
        1000:{
            items:5
        }
    }
})
</script>
  <!-- <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.js'></script>
 <script id="rendered-js" >
/**********************/
/* Client carousel   */
/**********************/
$('.carousel-client').bxSlider({
  auto: false,
  slideWidth: 120,
  minSlides: 2,
  maxSlides: 5,
  infiniteLoop: false,
  autoControls: false,
  controls: false });
    </script>

<style>
   .bx-wrapper {
    max-width: 100%!important;
}
.bx-controls.bx-has-pager {
    display: none;
}
</style>