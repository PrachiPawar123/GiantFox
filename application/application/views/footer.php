<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>

<div class="toastBox">
    <div class="buttons toaster-message"></div>
</div>
         <footer class="footer">
            <div class="container">
               <div class="row">
                  <div class="col text-center">
                     <div class="footer_logo">
                        <a href="<?=base_url() ?>">
                           <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" class="img-fluid" style="height: 86px;">
                        </a>
                     </div>
                     <nav class="footer_nav">
                        <ul>
                           <li><a href="<?=base_url('new-drop') ?>">NEW DROPS</a></li>
                           <?php
                           if($sitesetting[0]->view_all==1)
                              { ?>
                           <li><a href="<?=base_url('filter') ?>">View All</a></li>
                        <?php } ?>
                           <?php
                           $this->db->order_by('sort asc');
                           $categories = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                           foreach($categories as $data)
                              { ?>
                           <li><a href="<?=base_url('filter/'.$data->slug) ?>"><?=$data->name ?></a></li>
                           <?php } ?>
                        </ul>
                     </nav>
                     <nav class="footer_nav">
                        <ul>
                           <li><a href="<?=base_url('term-condition') ?>">TERM & CONDITION</a></li>
                           <li><a href="<?=base_url('privacy-policy') ?>">PRIVACY POLICY</a></li>
                           <li><a href="<?=base_url('shipping') ?>">SHIPPING POLICY</a></li>
                           <li><a href="<?=base_url('return-and-refund') ?>">RETURN & REFUND</a></li>
                        </ul>
                     </nav>
                     <div class="footer_social">
                        <ul>
                           <?php
                           if(!empty($sitesetting[0]->facebook))
                              { ?>
                           <li><a href="<?=$sitesetting[0]->facebook ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <?php } if(!empty($sitesetting[0]->youtube))
                        { ?>
                           <li><a href="<?=$sitesetting[0]->youtube ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                           <?php } if(!empty($sitesetting[0]->instagram))
                        { ?>
                           <li><a href="<?=$sitesetting[0]->instagram ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <?php } if(!empty($sitesetting[0]->twitter))
                        { ?>
                           <li><a href="<?=$sitesetting[0]->twitter ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <?php } if(!empty($sitesetting[0]->linkdin))
                        { ?>
                           <li><a href="<?=$sitesetting[0]->linkdin ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <?php } ?>
                        </ul>
                     </div>

                     <div class="copyright">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <?=website_name ?>. <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.eminentmultiservices.com/" target="_blank">Eminent + Coalesceflow Team</a>
                     </div>

                  </div>
               </div>
            </div>
         </footer>
      </div>

<style>
   .whats-app-number {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 30px #0000001a;
    -webkit-backdrop-filter: blur(5.9px);
    backdrop-filter: blur(5.9px);
    background: rgba(0,0,0,1);
    position: fixed;
    top: 86%;
    right: 5%;
    z-index: 11;
}
</style>

      <a href="https://wa.me/919999117789" target="_blank" class="whats-app-number">
         <svg xmlns="http://www.w3.org/2000/svg" width="21.614" height="21.614" viewBox="0 0 21.614 21.614">
            <path id="Icon_awesome-whatsapp" data-name="Icon awesome-whatsapp" d="M18.377,5.391A10.714,10.714,0,0,0,1.52,18.316L0,23.864l5.679-1.491a10.678,10.678,0,0,0,5.119,1.3h0A10.814,10.814,0,0,0,21.614,12.965a10.753,10.753,0,0,0-3.237-7.575ZM10.8,21.871a8.886,8.886,0,0,1-4.535-1.24l-.323-.193-3.368.883.9-3.286L3.261,17.7A8.919,8.919,0,1,1,19.8,12.965a9,9,0,0,1-9,8.906ZM15.685,15.2c-.265-.135-1.582-.782-1.829-.868s-.425-.135-.6.135-.69.868-.849,1.052-.314.2-.579.068a7.285,7.285,0,0,1-3.643-3.184c-.275-.473.275-.439.786-1.462a.5.5,0,0,0-.024-.468c-.068-.135-.6-1.452-.825-1.988s-.439-.449-.6-.458-.333-.01-.511-.01a.991.991,0,0,0-.714.333,3.007,3.007,0,0,0-.936,2.234,5.243,5.243,0,0,0,1.09,2.769A11.959,11.959,0,0,0,11.019,17.4a5.237,5.237,0,0,0,3.213.671,2.741,2.741,0,0,0,1.8-1.274,2.238,2.238,0,0,0,.154-1.274C16.128,15.4,15.95,15.334,15.685,15.2Z" transform="translate(0 -2.25)" fill="#fff"></path>
         </svg>
      </a>

<style>
   #main-nav {
  margin: 10px auto;
  width: 100px;
  min-height: 50px;
  flex-flow: row nowrap;
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
  align-items: flex-start;
  align-content: flex-start;
  justify-content: space-around;
}
#main-nav a.cart-button {
  width: 44px;
  min-height: 50px;
  position: relative;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
  align-items: center;
  align-content: flex-start;
  justify-content: space-around;
}
#main-nav a.cart-button span.bag-icon {
  width: 34px;
  height: 40px;
  display: block;
  margin-bottom: 10px;
  z-index: 1;
  text-indent: -999px;
  overflow: hidden;
  -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 34 40'%3E%3Cpath d='M33.1 10.2h-8V7.9C25 3.5 21.4 0 17 0c-4.4 0-8 3.5-8 7.9v2.3H1c-.5 0-.9.4-.9.9v24.4C0 38 2.1 40 4.6 40h24.7c2.6 0 4.6-2 4.6-4.5V11.1c.1-.5-.3-.9-.8-.9zM10.8 7.9c0-3.4 2.8-6.1 6.2-6.1 3.4 0 6.2 2.7 6.2 6.1v2.3H10.8V7.9zm21.3 27.6c0 1.5-1.2 2.7-2.8 2.7H4.6c-1.5 0-2.8-1.2-2.8-2.7V12H9v1.1c0 .5.4.9.9.9s.9-.4.9-.9V12h12.4v1.2c0 .5.4.9.9.9s.9-.4.9-.9V12h7.1v23.5z'/%3E%3C/svg%3E");
          mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 34 40'%3E%3Cpath d='M33.1 10.2h-8V7.9C25 3.5 21.4 0 17 0c-4.4 0-8 3.5-8 7.9v2.3H1c-.5 0-.9.4-.9.9v24.4C0 38 2.1 40 4.6 40h24.7c2.6 0 4.6-2 4.6-4.5V11.1c.1-.5-.3-.9-.8-.9zM10.8 7.9c0-3.4 2.8-6.1 6.2-6.1 3.4 0 6.2 2.7 6.2 6.1v2.3H10.8V7.9zm21.3 27.6c0 1.5-1.2 2.7-2.8 2.7H4.6c-1.5 0-2.8-1.2-2.8-2.7V12H9v1.1c0 .5.4.9.9.9s.9-.4.9-.9V12h12.4v1.2c0 .5.4.9.9.9s.9-.4.9-.9V12h7.1v23.5z'/%3E%3C/svg%3E");
  background: rgba(255, 255, 255, 0.6);
  transition: all 0.5s linear 0s;
}
#main-nav a.cart-button span.bag-count {
  border-radius: 3px;
  color: rgba(255, 255, 255, 0.9);
  font-size: 16px;
  font-weight: 600;
  height: 28px;
  width: 34px;
  position: absolute;
  top: 11px;
  z-index: 0;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  transition: all 0.5s linear 0s;
}
#main-nav a.cart-button span.bag-label {
  display: block;
  color: rgba(255, 255, 255, 0.6);
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 1px;
  height: 20px;
  width: 80px;
  text-align: center;
  transition: all 0.5s linear 0s;
}
#main-nav a.cart-button:active span.bag-icon, #main-nav a.cart-button:hover span.bag-icon {
  background: #fff;
}
#main-nav a.cart-button:active span.bag-count, #main-nav a.cart-button:hover span.bag-count {
  color: #fff;
}
#main-nav a.cart-button:active span.bag-label, #main-nav a.cart-button:hover span.bag-label {
  color: #fff;
}

body.show-sidebar-cart {
  overflow: hidden !important;
  height: 100% !important;
}
body.show-sidebar-cart #sidebar-cart {
  right: 0;
  visibility: visible;
}

#sidebar-cart {
  background: #354165;
  color: #75757a;
  padding: 15px 15px 0 15px;
  position: fixed;
  display: block;
  width: 320px;
  height: 100%;
/*  height: 100vh;*/
  z-index: 999999;
  top: 0;
  right: -340px;
  box-shadow: -10px 0 15px rgba(0, 0, 0, 0.1);
  transition: right 0.5s ease-in-out;
}
#sidebar-cart a.close-button {
  height: 16px;
  width: 16px;
  margin: 0 0 15px 0;
  text-decoration: none;
  position: absolute;
  top: 20px;
  left: 20px;
  display: flex;
}
#sidebar-cart a.close-button span.close-icon {
  width: 16px;
  height: 16px;
  background: rgba(255, 255, 255, 0.3);
  text-indent: -9999px;
  overflow: hidden;
  font-size: 0;
  -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cpath d='M30.3 32c-.5 0-.9-.2-1.2-.5L16 18.4 3 31.5c-.4.3-.8.5-1.3.5s-.9-.2-1.2-.5c-.7-.7-.7-1.8 0-2.4L13.6 16 .5 2.9C-.2 2.2-.2 1.2.5.5.8.2 1.2 0 1.7 0s.9.2 1.2.5l13.1 13 13-13c.7-.7 1.7-.7 2.4 0 .4.3.6.7.6 1.2s-.2.9-.5 1.2L18.4 16l13.1 13.1c.7.7.7 1.8 0 2.4-.3.3-.8.5-1.2.5z'/%3E%3C/svg%3E");
          mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cpath d='M30.3 32c-.5 0-.9-.2-1.2-.5L16 18.4 3 31.5c-.4.3-.8.5-1.3.5s-.9-.2-1.2-.5c-.7-.7-.7-1.8 0-2.4L13.6 16 .5 2.9C-.2 2.2-.2 1.2.5.5.8.2 1.2 0 1.7 0s.9.2 1.2.5l13.1 13 13-13c.7-.7 1.7-.7 2.4 0 .4.3.6.7.6 1.2s-.2.9-.5 1.2L18.4 16l13.1 13.1c.7.7.7 1.8 0 2.4-.3.3-.8.5-1.2.5z'/%3E%3C/svg%3E");
  transition: all 0.5s linear;
}
#sidebar-cart a.close-button:active span.close-icon, #sidebar-cart a.close-button:hover span.close-icon {
  background: #fff;
}
#sidebar-cart h2 {
  color: #fff;
  font-size: 16px;
  font-weight: 600;
  letter-spacing: 2px;
  text-transform: uppercase;
  line-height: 1;
  margin: 5px 0 25px 0;
  display: flex;
  justify-content: center;
}
#sidebar-cart h2 span.count {
  color: #fff;
  background: #4dc0e3;
  padding: 8px;
  margin-left: 6px;
  position: relative;
  top: -1px;
  width: 18px;
  height: 18px;
  border-radius: 50px;
  font-size: 12px;
  letter-spacing: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}
#sidebar-cart ul.products {
  margin: 0;
  padding: 0 0 15px 0;
  list-style: none;
  height: calc(100vh - 200px);
  overflow-x: hidden;
  overflow-y: auto;
  display: block;
  position: relative;
  z-index: 0;
}
#sidebar-cart ul.products:after {
  background: linear-gradient(180deg, transparent, #354165);
  height: 30px;
  width: 300px;
  z-index: 1;
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
}
#sidebar-cart ul.products li.product {
  margin: 0 0 10px 0;
  padding: 0;
  width: 100%;
  min-height: 90px;
/*  min-height: 30px;*/
  background: #dee2ee;
  border-radius: 3px;
  color: #98989b;
  position: relative;
  z-index: 1;
  display: flex;
  flex-flow: row nowrap;
  transition: all 0.5s linear;
}
#sidebar-cart ul.products li.product:active, #sidebar-cart ul.products li.product:hover {
  background: #fff;
}
#sidebar-cart ul.products li.product:active span.product-details h3, #sidebar-cart ul.products li.product:hover span.product-details h3 {
  color: #4dc0e3 !important;
}
#sidebar-cart ul.products li.product:active img, #sidebar-cart ul.products li.product:hover img {
  border-color: #d7d7de !important;
}
#sidebar-cart ul.products li.product a.product-link {
  width: 100%;
  color: #354165;
  padding: 10px;
  margin: 0;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
}
#sidebar-cart ul.products li.product a.product-link span.product-image {
  display: inline-block;
  width: 75px;
  height: 50px;
  padding-right: 10px;
}
#sidebar-cart ul.products li.product a.product-link span.product-image img {
  width: 100%;
/*  width: 60px;*/
  height: 67px;
  border: 1px solid #d7d7de;
  transition: all 0.5s linear;
}
#sidebar-cart ul.products li.product a.product-link span.product-details {
  display: inline-block;
  width: 100%;
  min-height: 30px;
  color: #75757a;
}
#sidebar-cart ul.products li.product a.product-link span.product-details h3 {
  margin: 3px 25px 5px 0;
  font-size: 13px;
  font-weight: 500;
  color: #44444a;
  transition: all 0.5s linear;
}
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  align-content: center;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  position: relative;
  z-index: 5px;
  margin-top: 8px;
}
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty,
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.price {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
}
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  align-content: center;
  align-items: center;
  justify-content: flex-start;
}
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty button.minus-button,
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty button.plus-button {
  width: 25px;
  height: 24px;
  border-radius: 3px;
  border: 1px solid #cdcdd1;
  background: #f0f0f9;
  color: #75757a;
  font-size: 18px;
  text-align: center;
  vertical-align: middle;
  line-height: 20px;
  transition: all 0.3s linear;
}
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty button.minus-button:active, #sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty button.minus-button:hover,
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty button.plus-button:active,
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty button.plus-button:hover {
  color: #fff;
  background: #4dc0e3;
  border-color: #4dc0e3;
  cursor: pointer;
  outline: none;
}
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty button.minus-button:focus,
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty button.plus-button:focus {
  outline: none;
}
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty input.qty-input {
  width: 24px;
  height: 24px;
  text-align: center;
  border: 1px solid #cdcdd1;
  border-radius: 3px;
  margin: 0 2px;
  transition: all 0.5s linear;
}
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty input.qty-input:active, #sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty input.qty-input:hover {
  border: 1px solid #4dc0e3;
}
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty input.qty-input:focus {
  outline: none;
  border: 1px solid #4dc0e3;
}
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty input.qty-input::-webkit-inner-spin-button, #sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.qty input.qty-input::-webkit-outer-spin-button {
  -webkit-appearance: none;
          appearance: none;
  margin: 0;
}
#sidebar-cart ul.products li.product a.product-link span.product-details span.qty-price span.price {
  color: #4dc0e3;
  font-weight: 500;
  font-size: 13px;
  display: inline-flex;
}
#sidebar-cart ul.products li.product a.remove-button {
  height: 16px;
  width: 16px;
  margin: 10px 10px 0 0;
  text-decoration: none;
  position: absolute;
  top: 2px;
  right: 0;
  z-index: 2;
  display: flex;
}
#sidebar-cart ul.products li.product a.remove-button span.remove-icon {
  width: 15px;
  height: 16px;
  background: rgba(117, 117, 122, 0.5);
  text-indent: -9999px;
  overflow: hidden;
  font-size: 0;
  -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 36'%3E%3Cpath fill='currentColor' d='M30.9 2.3h-8.6L21.6 1c-.3-.6-.9-1-1.5-1h-8.2c-.6 0-1.2.4-1.5.9l-.7 1.4H1.1C.5 2.3 0 2.8 0 3.4v2.2c0 .6.5 1.1 1.1 1.1h29.7c.6 0 1.1-.5 1.1-1.1V3.4c.1-.6-.4-1.1-1-1.1zM3.8 32.8A3.4 3.4 0 0 0 7.2 36h17.6c1.8 0 3.3-1.4 3.4-3.2L29.7 9H2.3l1.5 23.8z'/%3E%3C/svg%3E");
          mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 36'%3E%3Cpath fill='currentColor' d='M30.9 2.3h-8.6L21.6 1c-.3-.6-.9-1-1.5-1h-8.2c-.6 0-1.2.4-1.5.9l-.7 1.4H1.1C.5 2.3 0 2.8 0 3.4v2.2c0 .6.5 1.1 1.1 1.1h29.7c.6 0 1.1-.5 1.1-1.1V3.4c.1-.6-.4-1.1-1-1.1zM3.8 32.8A3.4 3.4 0 0 0 7.2 36h17.6c1.8 0 3.3-1.4 3.4-3.2L29.7 9H2.3l1.5 23.8z'/%3E%3C/svg%3E");
  transition: all 0.5s linear;
}
#sidebar-cart ul.products li.product a.remove-button:active span.remove-icon, #sidebar-cart ul.products li.product a.remove-button:hover span.remove-icon {
  background: #cc0000;
}
#sidebar-cart div.totals {
  position: absolute;
  bottom: 80px;
  left: 0;
  right: 0;
  height: 45px;
  background: #e1e1e7;
  border-bottom: 1px solid #d7d7de;
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
}
#sidebar-cart div.totals div.subtotal,
#sidebar-cart div.totals div.shipping,
#sidebar-cart div.totals div.tax {
  padding: 15px;
  text-align: center;
  color: #44444a;
  border-bottom: 1px solid #d7d7de;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 14px;
  font-weight: 400;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: space-between;
}
#sidebar-cart div.totals div.subtotal span.amount,
#sidebar-cart div.totals div.shipping span.amount,
#sidebar-cart div.totals div.tax span.amount {
  color: #1f9ec5;
  margin-left: 10px;
  font-weight: 600;
}
#sidebar-cart div.action-buttons {
  padding: 0;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 80px;
  background: #fff;
  display: block;
  white-space: nowrap;
}
#sidebar-cart div.action-buttons a.view-cart-button,
#sidebar-cart div.action-buttons a.checkout-button {
  display: inline-block;
  padding: 10px;
  margin: 20px 15px;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 14px;
  border-width: 1px;
  border-style: solid;
  border-radius: 4px;
  transition: all 0.5s linear;
}
#sidebar-cart div.action-buttons a.view-cart-button {
  background: #fff;
  border-color: #4dc0e3;
  margin-right: 5px;
  color: #4dc0e3;
  width: 80px;
}
#sidebar-cart div.action-buttons a.view-cart-button:active, #sidebar-cart div.action-buttons a.view-cart-button:hover {
  background: rgba(77, 192, 227, 0.2);
  color: #4dc0e3;
}
#sidebar-cart div.action-buttons a.checkout-button {
  border-color: #4dc0e3;
  background: #4dc0e3;
  margin-left: 5px;
  color: #fff;
  width: 200px;
}
#sidebar-cart div.action-buttons a.checkout-button:after {
  content: url("data:image/svg+xml,%3Csvg fill='%23fff' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'%3E%3Cpath d='M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z'/%3E%3C/svg%3E");
  width: 20px;
  height: 14px;
  display: inline-block;
  margin-left: 6px;
  vertical-align: middle;
  position: relative;
  top: -5px;
  z-index: 1;
}
#sidebar-cart div.action-buttons a.checkout-button:active, #sidebar-cart div.action-buttons a.checkout-button:hover {
  background: #22b0db;
  border-color: #22b0db;
}

#sidebar-cart-curtain {
  background: rgba(0, 0, 0, 0.2);
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 1;
}
</style>

<?php
$coponapply = $this->db->get_where('order_coupon',array('user_id'=>temp_session_id(),"status"=>0,))->result_object();
$coupon = 0;
if(!empty($coponapply[0]->coupon)) 
{
    $coupon = $coponapply[0]->coupon;
}
$applied_coupon = applied_coupon($coupon,'');




$this->db->order_by('id desc');
$cartpro = $this->crud->selectDataByMultipleWhere('add_to_temp_cart',array('temp_user_id'=>temp_session_id()));
?>
<aside id="sidebar-cart">
   <main>
      <a href="#" class="close-button"><span class="close-icon">X</span></a>
      <h2>Shopping Bag <span class="count"><?php 
                                      $user_temp_session_id = temp_session_id();
                                      $this->db->where('temp_user_id',$user_temp_session_id);
                                       $query = $this->db->get('add_to_temp_cart');
                                       echo $query->num_rows(); 
                                    ?></span></h2>
      
      <?php
if(!empty($cartpro))
        { 
         ?>
      <ul class="products">
         <?php
         foreach ($cartpro as $key => $value) 
             {
               // print_r($value->color_id);
               $product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$value->p_id));
               if(!empty($product))
                  $product = $product[0];

               $size = $this->crud->selectDataByMultipleWhere('size',array('id'=>$value->size_id));
               if(!empty($size))
                  $size = $size[0];

               $color = $this->crud->selectDataByMultipleWhere('color',array('id'=>$value->color_id));
               if(!empty($color))
                  $color = $color[0];

               $this->db->group_by('p_id');
               $all_images = $this->crud->selectDataByMultipleWhere('all_images',array('p_id'=>$value->p_id,'size_id'=>$value->size_id,'color_id'=>$value->color_id,));
               if(!empty($all_images))
                  $all_images = $all_images[0];

               $single_total = $product->sale_price*$value->quantity;
               // print_r($all_images);
               // die;
            ?>
         <li class="product">
            <a href="#" class="product-link">
               <span class="product-image">
                  <img src="<?=base_url() ?>media/uploads/product/<?=$all_images->image ?>" alt="Product Photo">
               </span>
               <span class="product-details">
                  <h3><?=$product->name ?></h3>
                  <p style="line-height: 1;"><strong>Size:- <?=$size->name ?> </strong><br>
                                 <strong>Color:- <?=$color->name ?></strong><br></p>
                  <span class="qty-price">
                     <span class="qty">
                        <button class="minus-button update-cart-btn" id="minus-button-1" data-id="<?=$value->id ?>">-</button>
                        <input type="number" id="qty-input-1" class="qty-input quantity_input<?=$value->id ?> update-cart-btn" step="1" min="1" max="<?php if(!empty($all_images->stock)) echo $all_images->stock ?>" name="qty-input" value="<?=$value->quantity ?>" pattern="[0-9]*" title="Quantity" inputmode="numeric" data-id="<?=$value->id ?>" >
                        <button class="plus-button update-cart-btn" id="plus-button-1" data-id="<?=$value->id ?>">+</button>
                        <input type="hidden" name="item-price" id="item-price-1" value="12.00">
                     </span>
                     <span class="price">₹ <?=number_format($single_total,2) ?></span>
                  </span>
               </span>
            </a>
            <a onclick="deletecart(<?=$value->id ?>)" class="remove-button"><span class="remove-icon">X</span></a>
         </li>
         <?php } ?>
      </ul>
      <div class="totals">
         <div class="subtotal">
            <span class="label">Subtotal:</span> <span class="amount">₹ <?=number_format($applied_coupon['sub_total'],2) ?></span>
         </div>
      </div>
      <div class="action-buttons">
         <a class="view-cart-button" href="<?=base_url() ?>cart">Cart</a><a class="checkout-button" href="<?=base_url() ?>checkout">Checkout</a>
      </div>
<?php } ?>
   </main>
</aside>



      <script src="<?=base_url() ?>js/jquery-3.2.1.min.js"></script>
      <script src="<?=base_url() ?>styles/bootstrap4/popper.js"></script>
      <script src="<?=base_url() ?>styles/bootstrap4/bootstrap.min.js"></script>
      <script src="<?=base_url() ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
      <script src="<?=base_url() ?>plugins/easing/easing.js"></script>
      <script src="<?=base_url() ?>plugins/parallax-js-master/parallax.min.js"></script>
      <script src="<?=base_url() ?>plugins/colorbox/jquery.colorbox-min.js"></script>
      <script src="<?=base_url() ?>js/custom.js"></script>



<script>
   function toast_print(message)
     {
        $(".toaster-message").html(message);
        $(".toastBox").addClass("active");
         setTimeout(() => {
         $(".toastBox").removeClass("active");
       }, 3000);

     }

      $(document).on("click", ".remove-btn",(function(e) {
        $(this).parent().parent().remove();
        console.log('adas');
    }));
</script>

<script>
   $(document).ready(function ($) {
  // Declare the body variable
  var $body = $("body");

  // Function that shows and hides the sidebar cart
  $(".cart-button, .close-button, #sidebar-cart-curtain").click(function (e) {
    e.preventDefault();

    // Add the show-sidebar-cart class to the body tag
    $body.toggleClass("show-sidebar-cart");

    // Check if the sidebar curtain is visible
    if ($("#sidebar-cart-curtain").is(":visible")) {
      // Hide the curtain
      $("#sidebar-cart-curtain").fadeOut(500);
    } else {
      // Show the curtain
      $("#sidebar-cart-curtain").fadeIn(500);
    }
  });

  // Function that adds or subtracts quantity when a 
  // plus or minus button is clicked
  $body.on('click', '.plus-button, .minus-button', function () {
    // Get quanitity input values
    var qty = $(this).closest('.qty').find('.qty-input');
    var val = parseFloat(qty.val());
    var max = parseFloat(qty.attr('max'));
    var min = parseFloat(qty.attr('min'));
    var step = parseFloat(qty.attr('step'));

    // Check which button is clicked
    if ($(this).is('.plus-button')) {
      // Increase the value
      qty.val(val + step);
    } else {
      // Check if minimum button is clicked and that value is 
      // >= to the minimum required
      if (min && min >= val) {
        // Do nothing because value is the minimum required
        qty.val(min);
      } else if (val > 0) {
        // Subtract the value
        qty.val(val - step);
      }
    }
  });
});
</script>

  
<style>
    @media only screen and (min-width: 1025px) {
        .desktop-none {
            display:none !important;
        }
    } 
    @media only screen and (max-width: 1026px) {
        #wa-widget-send-button {
          right: 13px;
       }
    } 
</style>


<script>
   var id = 0;
   $(document).on("click", ".update-cart-btn",(function(e) {
        id = $(this).data("id");
        // console.log($("#quantity_input"+id).val());
        update_cart();
    }));

   function update_cart() 
   {
      var quantity = $(".quantity_input"+id).val();
      var form = new FormData();
      form.append("id", id);
      form.append("quantity", quantity);

      var settings = {
        "url": "<?=base_url() ?>cart/update",
        "method": "POST",
        "dataType": "json",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
      };

      $.ajax(settings).done(function (response) {
        console.log(response);
        $(".toastBox").removeClass("active");
         toast_print(response.message);
            setTimeout(function() {
                location.reload();
            }, 2000);
      });
    }

     function deletecart(id)
        {
            $.ajax({
                url : "<?php echo base_url('cart/add_to_cart_delete'); ?>",
                method : "POST",
                dataType : "json",
                data : {id:id,submit:1},
                success: function(data)
                {
                    console.log(data);
                    $(".toastBox").removeClass("active");
                     toast_print(data.message);
                     setTimeout(function() {
                         location.reload();
                     }, 2000);
                }
            });
        }

$(".cart_mm").hover(
  function () {
    $('body').addClass("show-sidebar-cart");
  },
  // function () {
  //   $('body').removeClass("show-sidebar-cart");
  // }
);

// $(".cart_mm").hover(function () {
//     $('body').toggleClass("show-sidebar-cart");
// });


 </script>

   </body>
</html>