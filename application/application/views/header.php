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
      <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
   </head>
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TCL0VT9E1Y"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TCL0VT9E1Y');
</script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
      // Rotating text animation (infinite, starts from right, always visible)
      var text = document.getElementById('rotatingText');
      var banner = document.querySelector('.rotating-banner');
      var speed = 0.7;

      function startScrolling() {
         // Start from right edge of banner, so text is visible immediately
         let scrollAmount = banner.offsetWidth;
         function animateText() {
            scrollAmount -= speed;
            text.style.transform = 'translateX(' + scrollAmount + 'px)';
            // When text has fully moved out to the left, reset to right edge
            if (scrollAmount < -text.scrollWidth) {
               scrollAmount = banner.offsetWidth;
            }
            requestAnimationFrame(animateText);
         }
         animateText();
      }
      startScrolling();

      // Cart modal
      var cartIcon = document.getElementById('cartIcon');
      var cartModal = document.getElementById('cartModal');
      cartIcon.addEventListener('click', function() {
         cartModal.style.display = 'block';
      });

      // Search input expand on focus
      var searchInput = document.querySelector('.search_input');
      searchInput.addEventListener('focus', function() {
         this.classList.add('expanded');
      });
      searchInput.addEventListener('blur', function() {
         this.classList.remove('expanded');
      });

      // Mobile menu open/close
      var mobileMenuBtn = document.getElementById('mobileMenuBtn');
      var mobileMenu = document.querySelector('.menu');
      if(mobileMenuBtn && mobileMenu) {
         mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('open');
         });
         // Optional: close menu when clicking outside
         document.addEventListener('click', function(e) {
            if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
               mobileMenu.classList.remove('open');
            }
         });
      }

      // Search overlay toggle
      var searchToggleBtn = document.getElementById('searchToggleBtn');
      var searchOverlay = document.getElementById('searchOverlay');
      var searchCloseBtn = document.getElementById('searchCloseBtn');
      if(searchToggleBtn && searchOverlay) {
         searchToggleBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            searchOverlay.classList.add('active');
            searchOverlay.querySelector('input').focus();
         });
      }
      if(searchCloseBtn && searchOverlay) {
         searchCloseBtn.addEventListener('click', function() {
            searchOverlay.classList.remove('active');
         });
      }
      // Optional: close overlay when clicking outside
      document.addEventListener('click', function(e) {
         if (searchOverlay.classList.contains('active') && !searchOverlay.contains(e.target) && e.target !== searchToggleBtn) {
            searchOverlay.classList.remove('active');
         }
      });
   });
</script>
<style>
/* Rotating Banner */
.rotating-banner {
   width: 100vw;
   background: #1c1c1c;
   color: #fff;
   font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
   font-size: 0.90rem;
   font-weight: 300;
   overflow: hidden;
   position: relative;
   margin-top: 0;
   top: 0;
   left: 0;
   /* z-index: 10; */
   height: 20px;
   display: inline-flex;
   align-items: center;
   justify-content: center;
}
.rotating-text {
   white-space: nowrap;
   display: inline-block;
   will-change: transform;
   min-width: 100vw;
}
/* Header Layout */
.header-section {
   width: 100%;
   padding: 0;
   box-sizing: border-box;
   background: linear-gradient(90deg, #ff8a00 0%, #e52e71 50%, #7f00ff 100%);
   position: relative;
   overflow: hidden;
}
.header-section::before {
   content: "";
   position: relative;
   top: 0; left: 0; right: 0; bottom: 0;
   background: rgba(0,0,0,0.25); /* or use a blur: */
   /* backdrop-filter: blur(2px); */
   z-index: 1;
}
.header-bg-shapes {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   pointer-events: none;
   z-index: 0;
}
.header-bg-shapes svg {
   width: 100%;
   height: 100%;
}
.header-bg-shapes circle {
   fill: #fff2;
}
.header-bg-shapes rect {
   fill: #fff1;
   rx: 12;
}
.header-flex {
   display: inline-flex;
   width: 100%;
   padding:5px 0;
   align-items: center;
   justify-content: space-between;
   position: relative;
   z-index: 2;
}
.header-left, .header-center, .header-right {
   width: 40%;
   display: flex;
   align-items: center;
   padding: 0 24px;
}
.header-left {
   justify-content: flex-end;
   gap: 35px;
}
.header-center {
   width: 20%;
   justify-content: center;
}
.header-right {
   justify-content: flex-start;
   gap: 25px;
   
}
.header-right .header-right-menu {
   width: 65%;
   display: flex;
   justify-content: flex-start;
   gap: 25px;
}
.header-right .header-right-icons {
   width: 35%;
   display: flex;
   justify-content: flex-start;
   gap: 15px;
}
.logo img {
   max-width: 64px;
   max-height: 64px;
   width: 48px;
   height: 48px;
   object-fit: contain;
   display: block;
   margin: 0 auto;
   filter: drop-shadow(0 0 12px #fff) drop-shadow(0 0 24px #e52e71) drop-shadow(0 0 32px #ff8a00);
}
.header-link {
   position: relative;
   font-family: 'Bungee', 'Montserrat', Arial, sans-serif;
   letter-spacing: 1px;
   color: #fff;
   transition: color 0.2s;
   padding: 2px 0;
   background: none;
}

.header-link:hover,
.header-link.active {
   color: #fff !important;
   background: none;
}

.header-link::after {
   content: "";
   display: block;
   position: absolute;
   left: 0;
   bottom: -2px;
   width: 100%;
   height: 2px;
   background: #fff;
   border-radius: 1px;
   opacity: 0;
   transition: opacity 0.2s;
}

.header-link:hover::after,
.header-link.active::after {
   opacity: 1;
}

.search-form-custom {
   display: flex;
   align-items: center;
   background: #fff;
   border-radius: 20px;
   border: 1px solid #ccc;
   padding: 1px 12px;
   box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}
.search_input {
   border: none;
   outline: none;
   padding: 4px 8px;
   border-radius: 20px;
   font-size: 13px;
   width: 80px;
   transition: width 0.3s;
   background: transparent;
}
.search_input.expanded {
   width: 140px;
}
.search-toggle-btn {
   background: none;
   border: none;
   cursor: pointer;
   padding: 0 4px;
   right: 0px;
   width: 32px; height: 32px;
   position: relative;
}
.icon-link {
   position: relative;
   display: flex;
   align-items: center;
}
.icon-link img {
   width: 24px;
   height: 24px;
}
.icon-num {
   position: absolute;
   top: -7px;
   right: -10px;
   background: #201f1f;
   color: #fff;
   border-radius: 50%;
   padding: 2px 7px;
   font-size: 11px;
   font-weight: bold;
}
@media (max-width: 1024px) {
   .header-flex {
      flex-direction: column;
      min-height: 60px;
      gap: 10px;
   }
   .header-left, .header-center, .header-right {
      width: 100%;
      justify-content: center;
      gap: 12px;
      padding: 0 8px;
   }
   .header-right {
      flex-direction: column;
      align-items: center;
      gap: 8px;
   }
   .header-right-menu,
   .header-right-icons {
      width: 100%;
      justify-content: center;
      gap: 10px;
      padding: 0;
   }
}
@media (max-width: 900px) {
   .header-flex {
      flex-direction: row;
      align-items: center;
      padding: 8px 0;
   }
   .header-left, .header-center, .header-right {
      padding: 0 8px;
      gap: 12px;
   }
   .logo img {
      width: 40px;
      height: 40px;
      max-width: 40px;
      max-height: 40px;
   }
   .header-link {
      font-size: 13px;
      padding: 2px 0;
   }
   .search-form-custom {
      padding: 1px 6px;
   }
   .icon-link img {
      width: 20px;
      height: 20px;
   }
   .header-bg-shapes {
      display: none;
   }
}

/* Hide desktop menu, show hamburger on mobile */
@media (max-width: 700px) {
   .header-flex,
   .header-left,
   .header-center,
   .header-right {
      display: none !important;
   }
   .mobile-header-bar {
      display: flex !important;
      width: 100%;
      align-items: center;
      justify-content: space-between;
      padding: 10px 16px;
      background: linear-gradient(90deg, #ff8a00 0%, #e52e71 50%, #7f00ff 100%);
      position: relative;
      z-index: 100;
   }
   .mobile-menu-icon {
      font-size: 2rem;
      color: #fff;
      cursor: pointer;
   }
   .menu {
      display: block !important;
      position: fixed;
      top: 0;
      left: 0;
      width: 80vw;
      max-width: 320px;
      height: 100vh;
      background: #fff;
      z-index: 9999;
      box-shadow: 2px 0 16px rgba(0,0,0,0.15);
      transform: translateX(-100%);
      transition: transform 0.3s;
      overflow-y: auto;
   }
   .menu.open {
      transform: translateX(0);
   }
}
@media (min-width: 701px) {
   .mobile-header-bar,
   .menu {
      display: none !important;
   }
}

/* Search Overlay Styles */
.search-overlay {
   display: none;
   position: fixed;
   top: 16px;
   right: 32px;
   z-index: 2000;
   background: #fff;
   border-radius: 24px;
   box-shadow: 0 2px 16px rgba(0,0,0,0.18);
   padding: 8px 16px 8px 8px;
   align-items: center;
}
.search-overlay.active {
   display: flex;
}
.search-overlay .search-form-custom {
   width: 90%;
   max-width: 600px;
   background: rgba(255, 255, 255, 0.1);
   border-radius: 30px;
   padding: 10px 20px;
   box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
}
.search-overlay .search_input {
   border: none;
   outline: none;
   padding: 10px;
   border-radius: 30px;
   font-size: 16px;
   width: calc(100% - 50px);
   background: transparent;
   color: #fff;
}
.search-overlay .search_button {
   background: none;
   border: none;
   cursor: pointer;
   padding: 0 10px;
   position: absolute;
   right: 10px;
   top: 50%;
   transform: translateY(-50%);
}
.search-overlay .search-close-btn {
   font-size: 1.5rem;
   color: #333;
   cursor: pointer;
   margin-left: 8px;
   line-height: 1;
}
@media (max-width: 700px) {
   .search-overlay {
      top: 12px;
      right: 12px;
      left: 12px;
      width: auto;
      max-width: unset;
      padding: 8px;
   }
}
</style>
   <body>
      <div class="super_container">
   <header class="header-section">
   <!-- Rotating Text Banner -->
   <div class="rotating-banner">
      <div class="rotating-text" id="rotatingText">
         <?php
         $this->db->order_by('id desc');
         $marquee = $this->crud->selectDataByMultipleWhere('marquee',array('status'=>1,));
         $texts = [];
         foreach($marquee as $data) {
            $texts[] = "* " . $data->name . " *";
         }
         echo implode('', $texts);
         ?>
      </div>
   </div>
   <div class="header-bg-shapes">
      <svg width="100%" height="100%">
         <circle cx="10%" cy="50%" r="40" fill="#fff2" />
         <circle cx="90%" cy="30%" r="30" fill="#fff3" />
         <rect x="80%" y="70%" width="60" height="60" fill="#fff1" rx="12"/>
      </svg>
   </div>
   <div class="header-flex">
      <!-- Left Section: First three menu links -->
      <nav class="header-left">
         <a href="<?=base_url('new-drop') ?>" class="header-link<?= ($this->uri->segment(1) == 'new-drop') ? ' active' : '' ?>">NEW DROPS</a>
         <?php
            $this->db->order_by('sort asc');
            $categories = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
            $rightLinks = array_slice($categories, 0, 2);
            foreach($rightLinks as $cat) {
               $isActive = ($this->uri->segment(2) == $cat->slug) ? ' active' : '';
         ?>
         <a href="<?=base_url('filter/'.$cat->slug) ?>" class="header-link<?=$isActive?>"><?=$cat->name ?></a>
         <?php } ?>
      </nav>
      <!-- Center Section: Logo -->
      <div class="header-center">
         <a href="<?=base_url() ?>" class="logo">
            <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="Logo">
         </a>
      </div>
      <!-- Right Section: Remaining two menu + search + icons -->
      <div class="header-right">
         <div class="header-right-menu">
            <?php if($sitesetting[0]->view_all==1) { ?>
               <a href="<?=base_url('filter') ?>" class="header-link<?= ($this->uri->segment(1) == 'filter' && !$this->uri->segment(2)) ? ' active' : '' ?>">VIEW ALL</a>
            <?php } ?>
            <a href="#!" class="header-link<?= ($this->uri->segment(1) == 'about') ? ' active' : '' ?>">SWEATSHIRTS</a>
         </div>
         <div class="header-right-icons">
            <button type="button" class="search-toggle-btn" id="searchToggleBtn">
               <img src="<?=base_url() ?>images/magnifying-glass.svg" alt="Search">
            </button>
            <a href="<?=base_url() ?>wishlist" class="icon-link">
               <img src="<?=base_url() ?>images/star.svg" alt="">
               <span class="icon-num">
                  <?php 
                     $user_temp_session_id = temp_session_id();
                     $this->db->where('temp_user_id',$user_temp_session_id);
                     $query = $this->db->get('add_to_wishlist');
                     echo $query->num_rows(); 
                  ?>
               </span>
            </a>
            <a class="cart_mm icon-link" href="javascript:void(0);" id="cartIcon">
               <img src="<?=base_url() ?>images/shopping-bag.svg" alt>
               <span class="icon-num">
                  <?php 
                     $user_temp_session_id = temp_session_id();
                     $this->db->where('temp_user_id',$user_temp_session_id);
                     $query = $this->db->get('add_to_temp_cart');
                     echo $query->num_rows(); 
                  ?>
               </span>
            </a>
         </div>
      </div>
   </div>
   <!-- Shopping Cart Modal (hidden by default, shown on cart icon click) -->
   <div id="cartModal" style="display:none;position:fixed;top:80px;right:30px;z-index:999;background:#fff;border-radius:8px;box-shadow:0 2px 16px rgba(0,0,0,0.2);padding:24px;">
      <?php
         echo '<h4>Your Shopping Cart</h4>';
         // ...cart details...
      ?>
      <button onclick="document.getElementById('cartModal').style.display='none';" style="margin-top:12px;">Close</button>
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
         <!-- Search Overlay -->
<div id="searchOverlay" class="search-overlay">
   <form action="<?=base_url('welcome/serch') ?>" class="search-form-custom" style="margin:0;">
      <input type="search" name="search" class="search_input" required="required" placeholder="Search...">
      <button type="submit" class="search_button">
         <img src="<?=base_url() ?>images/magnifying-glass.svg" alt>
      </button>
      <span class="search-close-btn" id="searchCloseBtn">&times;</span>
   </form>
</div>