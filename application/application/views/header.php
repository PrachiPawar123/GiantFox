<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
$search = $this->input->get('search');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title><?=website_name ?></title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="<?=website_name ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/bootstrap4/bootstrap.min.css">
      <link href="<?=base_url() ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>plugins/OwlCarousel2-2.2.1/animate.css">
      <link href="<?=base_url() ?>plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/main_styles.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/responsive.css">
      <link id="favicon" rel="shortcut icon" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" type="image/png">
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
      <link rel="stylesheet"type="text/css" href="<?=base_url() ?>css/toaster.css"/>
   </head>
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TCL0VT9E1Y"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TCL0VT9E1Y');
</script>
<style>
 .swal2-popup .swal2-title {
    font-size: 20px!important;
 }
   
.product__badge {
    position: absolute;
    top: 12px;
    left: 12px;
     opacity: 1;
    z-index: 9;
}
.product__badge--items {
    height: 2rem;
    line-height: 2rem;
    padding: 0 7px;
    font-weight: 500;
    background: #040203;
    color: #fff;
    border-radius: 6px 0 6px;
    font-size: 1.0rem;
        font-family: initial;
/*    font-size: 1.4rem;*/
}

.logo img {
    width: 30%;
/*    width: 24%;*/
}

@media only screen and (max-width: 575px)

{
   .product__badge--items {
       font-size: 1rem;
   }
}


/*.logo.logo-desktop {
    width: 20%;
}*/

.shopping_cart
{
   left: -212px;
    top: 13px;
}
.shopping{
       position: relative;
    top: -30px;
    left: 100%;
/*    left: 119%;*/
}
@media only screen and (min-width: 767px)  
{
   .logo.logo-desktop {
      width: 15%!important;
      }

      .header_search
      {
       display: block;
/*         display: none;*/
      }


} 
  
</style>



   <body>
      <div class="super_container">
         <header class="header">
         <div class="marquee-class">
            <marquee>
               <?php
               $this->db->order_by('id desc');
               $marquee = $this->crud->selectDataByMultipleWhere('marquee',array('status'=>1,));
               foreach($marquee as $data)
                  { ?>
               <span style="margin-right: 10%;background: black;
    color: white;
    padding: 11px 5px;">* <?=$data->name ?></span> 
            <?php } ?> *
            </marquee>
         </div>
            <div class="header_inner d-flex flex-row align-items-center justify-content-start">
               <div class="logo logo-desktop"><a href="<?=base_url() ?>">
               	<img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" class="img-fluid" >
               </a></div>
               <nav class="main_nav">
                  <ul>
<style>
   .dropbtn {
/*  background-color: #04AA6D;*/
  color: white;
  padding: 16px 12px;
/*  padding: 16px;*/
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #0c0a0a;
/*  background-color: #f1f1f1;*/
  min-width: 146px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 999999999;
    top: 36px;
        border-radius: 9px;
}

.dropdown-content a {
  color: black;
  padding:   3px 16px;
/*  padding: 12px 16px;*/
  text-decoration: none;
  display: block;
}

.main_nav ul li {
    display: inline-block;
    margin-right: 10px;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: inherit;}



.product_image span {
    position: relative;
    background: #bc8246;
    color: #fff;
    float: left;
    font-size: 11px;
    font-weight: 400;
    height: 28px;
    line-height: 28px;
    padding: 0 10px;
    text-align: center;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 0.5px;
    min-width: 50px;
    border-radius: 0;
    min-height: auto;
    border: 0;
}

.product_image span.percent {
    background: #201f1f;
    position: relative;
    top: -28px;
}

.product_image span::before {
    border: 5px solid #bc8246;
    border-color: #bc8246 transparent transparent #bc8246;
    border-width: 9px 5px;
    position: absolute;
    right: -9px;
    top: 0;
    content: "";
    z-index: 1;
}

.product_image span::after {
    border: 5px solid #bc8246;
    border-color: transparent transparent #bc8246 #bc8246;
    border-width: 10px 5px;
    position: absolute;
    right: -9px;
    bottom: 0;
    content: "";
    z-index: 1;
}

.product_image span.percent::before {
    border: 5px solid #201f1f;
    border-color: #201f1f transparent transparent #201f1f;
    border-width: 9px 5px;
}

.product_image span.percent::after {
    border: 5px solid #201f1f;
    border-color: transparent transparent #201f1f #201f1f;
    border-width: 10px 5px;
}





.main_nav ul li {
    display: inline-block;
    margin-right: 0;
}
















@media only screen and (min-width: 1025px) {
        .desktop-none {
            display:none !important;
        }
    } 
    @media only screen and (max-width: 1026px) {
        .shopping {
         display: flex;
          position: relative;
          top: -13px;
          left: 215%!important;

      }
      .header_search {
           display: block; 
      }

      .search.header_search {
          display: none;
      }










    } 



.dropdown-content {
    min-width: 126px!important;
 }
</style>
                  <li class="dropdown" style="margin-right: 8px;"><a href="<?=base_url('new-drop') ?>">NEW DROPS</a></li>
                  <?php
                  if($sitesetting[0]->view_all==1)
                     { ?>
                  <li class="dropdown" ><a style="letter-spacing: unset;" href="<?=base_url('filter') ?>">VIEW ALL</a></li>
               <?php } ?>

                  <?php
                     $this->db->order_by('sort asc');
                     $categories = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                     foreach($categories as $data)
                        {
                            $this->db->order_by('sort asc');
                           $subcat = $this->crud->selectDataByMultipleWhere('sub_categories',array('cat_id'=>$data->id,'status'=>1,));
                        ?>
                     <li class="dropdown">
                        <a href="#!" class="dropbtn"><?=$data->name ?></a>
                        <?php
                        if(!empty($subcat))
                        { ?>
                           
                        <ul class="dropdown-content">
                           <?php 
                           foreach($subcat as $value)
                              { ?>
                           <li style="display: contents;margin-right: 0;"><a href="<?=base_url('filter/'.$data->slug.'/'.$value->slug) ?>" style="color: white!important;    font-size: 10px;"><?=$value->name ?></a></li>
                           <?php } ?>
                        </ul>
                     <?php } ?>
                     </li>
                  <?php } ?>

                     <!-- <li><a href="<?=base_url('filter') ?>">Filter</a></li> -->
                     <!-- <?php
                     $categories = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                     foreach($categories as $data)
                        { ?>
                     <li><a href="<?=base_url('shop/'.$data->slug) ?>"><?=$data->name ?></a></li>
                    <?php } ?> -->
                  </ul>
               </nav>
               <div class="header_content ml-auto shopping_cart">
                  <div class="search header_search">
                     <form action="<?=base_url('welcome/serch') ?>">
                        <input type="search" name="search" class="search_input" required="required" value="<?php if(!empty($search)) echo $search ?>">
                        <button type="submit" name="submit" id="search_button" class="search_button"><img src="<?=base_url() ?>images/magnifying-glass.svg" alt></button>
                     </form>
                  </div>
                  <div class="shopping">

                     <a href="<?=base_url() ?>wishlist">
                     <div class="star">
                     <img src="<?=base_url() ?>images/star.svg" alt="">
                     <div class="star_num_container">
                     <div class="star_num_inner">
                     <div class="star_num"><?php 
                                      $user_temp_session_id = temp_session_id();
                                      $this->db->where('temp_user_id',$user_temp_session_id);
                                       $query = $this->db->get('add_to_wishlist');
                                       echo $query->num_rows(); 
                                    ?></div>
                     </div>
                     </div>
                     </div>
                     </a>

                     <a class="cart_mm" href="<?=base_url() ?>cart">
                        <div class="cart cart-button">
                           <img src="<?=base_url() ?>images/shopping-bag.svg" alt>
                           <div class="cart_num_container">
                              <div class="cart_num_inner">
                                 <div class="cart_num ">
                                    <?php 
                                      $user_temp_session_id = temp_session_id();
                                      $this->db->where('temp_user_id',$user_temp_session_id);
                                       $query = $this->db->get('add_to_temp_cart');
                                       echo $query->num_rows(); 
                                    ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                    
                  </div>
               </div>
               <div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm">
                  <div></div>
                  <div></div>
                  <div></div>
               </div>
            </div>
         </header>

         <!-- cart -->

          


         <!-- ------mobiel mmenu -->
         <div class="menu d-flex flex-column align-items-start justify-content-start text-left menu_mm trans_400">
            <div class="menu_close_container ">
               <div class="menu_close ">
                  <div></div>
                  <div></div>
               </div>
            </div>
            <div class="logo menu_mm" style="margin: 0 auto;display: contents;"><a href="<?=base_url() ?>"><img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" class="img-fluid" ></a></div>
            <div class="search">
               <form action="<?=base_url('welcome/serch') ?>">
                  <input type="search" name="search"  class="search_input menu_mm" required="required" value="<?php if(!empty($search)) echo $search ?>">
                  
                  <button type="submit" name="submit" id="search_button_menu" class="search_button menu_mm">
                     <img class="menu_mm" src="<?=base_url() ?>images/magnifying-glass.svg" alt>
                  </button>
               </form>
            </div>
            <nav class="menu_nav">
               <ul class="menu_mm">
                  <li class="menu_mm"><a href="<?=base_url() ?>new-drop">NEW DROPS</a></li>
                  <?php
                  if($sitesetting[0]->view_all==1)
                     { ?>
                  <li class="menu_mm"><a href="<?=base_url() ?>filter">VIEW ALL</a></li>
               <?php } ?>
                  <?php
                  $categories = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                  foreach($categories as $data)
                     { ?>
                  <li class="menu_mm"><a href="<?=base_url('filter/'.$data->slug) ?>"><strong><?=$data->name ?></strong></a></li>
                 <?php } ?>
                  <br><br>
                  <li class="menu_mm"><a href="<?=base_url() ?>cart">CART</a></li>
                  <li class="menu_mm"><a href="<?=base_url() ?>wishlist">WISHLIST</a></li>
                  <li class="menu_mm"><a href="<?=base_url() ?>login">MEMBER LOGIN</a></li>
                  <br><br>
                  <li class="menu_mm"><a href="<?=base_url() ?>about">ABOUT</a></li>
                  <li class="menu_mm"><a href="<?=base_url() ?>term-condition">TERM & CONDITION</a></li>
                  <li class="menu_mm"><a href="<?=base_url() ?>privacy-policy">PRIVACY POLICY</a></li>
                  <li class="menu_mm"><a href="<?=base_url() ?>shipping">SHIPPING POLICY</a></li>
                  <li class="menu_mm"><a href="<?=base_url() ?>return-and-refund">RETURN & REFUND</a></li>
                  <li class="menu_mm"><a href="<?=base_url() ?>faq">FAQ's</a></li>
                  <li class="menu_mm"><a href="<?=base_url() ?>contact">CONTACT</a></li>

               </ul>
            </nav>
         </div>