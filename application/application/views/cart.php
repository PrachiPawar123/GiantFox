<?php 
$cart = $this->crud->fetchdatabyid('7','site_setting');
include('header.php');

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
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/cart.css">
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/cart_responsive.css">
<style>
   .home_background {
    position: absolute;
    top: 98px;
 }

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
.header.scrolled {
     height: auto!important; 
}

.desktop-none {
            display:none !important;
        }

    } 

@media only screen and (max-width: 1026px) {
      .shopping {
       display: flex;
   }
   .header.scrolled {
     height:auto; 
}

.mobile-none {
            display:none !important;
        }

 }

 .cart_product_total {
    width: 23%!important;
    text-align: center;
}
.header {
    height: auto!important;
 }

</style>

         <div class="home" style="height:426px">

            <div class="home_background parallax-window" data-parallax="scroll"  data-speed="0.8" style="background-image: url(<?=base_url() ?>media/uploads/site_setting/<?=$cart[0]->logo ?>);background-size: cover;background-repeat: no-repeat;background-position-y: top;"></div>

            <div class="home_background parallax-window desktop-none" data-parallax="scroll"  data-speed="0.8" style="background-image: url(<?=base_url() ?>media/g.png);background-size: cover;background-repeat: no-repeat;background-position-y: top;"></div>


            <div class="container mobile-none">
               <div class="row">
                  <div class="col">
                     <div class="home_container">
                        <div class="home_content">
                           <div class="home_title">Shopping Cart</div>
                           <div class="breadcrumbs">
                              <ul>
                                 <li><a href="<?=base_url() ?>">Home</a></li>
                                 <li>Shopping Cart</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>


         <div class="cart_container">
            <div class="container">
<?php
if(!empty($cartpro))
        { 
         ?>
               <div class="row">
                  <div class="col">
                     <div class="cart_title">your shopping cart</div>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <div class="cart_bar d-flex flex-row align-items-center justify-content-start">
                        <div class="cart_bar_title_name">Product</div>
                        <div class="cart_bar_title_content ml-auto">
                           <div class="cart_bar_title_content_inner d-flex flex-row align-items-center justify-content-end">
                              <div class="cart_bar_title_price">Price</div>
                              <div class="cart_bar_title_quantity">Quantity</div>
                              <div class="cart_bar_title_total mobile-none">Total</div>
                              <div class="cart_bar_title_button"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <div class="cart_products">
                        <ul>
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

                                 // print_r($all_images);
                                 // die;
                              ?>
                           <li class=" cart_product d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                              <div class="cart_product_image"><img src="<?=base_url() ?>media/uploads/product/<?=$product->thumb_img ?>" alt style="width: 75px;"></div>
                              <div class="cart_product_name">
                                 <a href="<?=base_url('product-details/'.$product->slug) ?>"><?=$product->name ?></a><br>
                                 <strong>Size:- <?=$size->name ?> </strong><br>
                                 <strong>Color:- <?=$color->name ?></strong><br>
                                 <strong>Stock:- <?php if(!empty($all_images->stock)) echo $all_images->stock ?> </strong><br>
                              </div>
                              <div class="cart_product_info ml-auto">
                                 <div class="cart_product_info_inner d-flex flex-row align-items-center justify-content-md-end justify-content-start">
                                    <div class="cart_product_price">₹ <?=number_format($product->sale_price,2) ?></div>
                                    <div class="product_quantity_container">
                                       <div class="product_quantity clearfix">
                                          <input id="quantity_input<?=$value->id ?>" type="number" pattern="[0-9]*" value="<?=$value->quantity ?>" class="update-cart-btn" style="width: 50px;" data-id="<?=$value->id ?>" max="<?php if(!empty($all_images->stock)) echo $all_images->stock ?>" minlength="1">

                                          <!-- <div class="quantity_buttons">
                                             <div id="quantity_inc_button" class="quantity_inc quantity_control" data-id="<?=$value->id ?>">
                                                <i class="fa fa-caret-up" aria-hidden="true"></i>
                                             </div>
                                             <div id="quantity_dec_button" class="quantity_dec quantity_control" data-id="<?=$value->id ?>">
                                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                             </div>
                                          </div> -->

                                       </div>
                                    </div>
                                    <?php
                                    $single_total = $product->sale_price*$value->quantity;
                                    ?>
                                    <div class="cart_product_total mobile-none">₹ <?=number_format($single_total,2) ?></div>
                                    <div class="cart_product_button">
                                       <button onclick="deletecart(<?=$value->id ?>)" class="cart_product_remove"><img src="<?=base_url() ?>images/trash.png.webp" alt></button>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        <?php } ?>


                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <div class="cart_control_bar d-flex flex-md-row flex-column align-items-start justify-content-start">
                        <!-- <button class="button_clear cart_button">clear cart</button> -->
                        <!-- <button class="button_update cart_button">update cart</button> -->
                        <button class="button_update cart_button_2 ml-md-auto" onclick="location.href='<?=base_url() ?>shop'">continue shopping</button>
                     </div>
                  </div>
               </div>
               <div class="row cart_extra">
                  <div class="col-lg-6">
                     <div class="cart_coupon">
                        <div class="cart_title">coupon code</div>
                        <p><?php echo $this->session->flashdata('coupon_mesg'); ?></p>
                        <form action="<?php echo base_url('checkout/couponcode'); ?>" class="cart_coupon_form d-flex flex-row align-items-start justify-content-start" id="cart_coupon_form1" method="post">
                           <input type="text" class="cart_coupon_input" placeholder="Coupon code" required="required" name="coupon" value="<?php if(!empty($coponapply[0]->coupon)) echo $coponapply[0]->coupon; ?>">
                           <div style="text-align: center;">
                              <button type="submit" name="submit" class="btn btn-primary">Apply coupon</button>
                           <?php if(!empty($coponapply[0]->coupon))
                                        { ?>
                           <a href="<?php echo base_url('checkout/delete_coupon'); ?>" class="btn btn-danger" name="submit" type="submit">Remove</a>
                           <?php } ?>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-5 offset-lg-1">
                     <div class="cart_total">
                        <div class="cart_title">cart total</div>
                        <ul>
                           <li class="d-flex flex-row align-items-center justify-content-start">
                              <div class="cart_total_title">Subtotal</div>
                              <div class="cart_total_price ml-auto">₹ <?=number_format($applied_coupon['sub_total'],2) ?></div>
                           </li>
                           <li class="d-flex flex-row align-items-center justify-content-start" style="display:none!important;">
                              <div class="cart_total_title">Shipping</div>
                              <div class="cart_total_price ml-auto">+₹ <?=number_format($applied_coupon['shipping_charge'],2) ?></div>
                           </li>
                           <?php if($applied_coupon['discount_amount']>0){ ?>
                           <li class="d-flex flex-row align-items-center justify-content-start">
                              <div class="cart_total_title">Before Discount</div>
                              <div class="cart_total_price ml-auto">+₹ <?=number_format($applied_coupon['finalprice'],2) ?></div>
                           </li>

                           <li class="d-flex flex-row align-items-center justify-content-start">
                              <div class="cart_total_title">Coupon Discount (<?php if($applied_coupon['type']==1)echo $applied_coupon['discount'].'%'; else echo 'Flat' ?>)</div>
                              <div class="cart_total_price ml-auto">-₹ <?php echo number_format($applied_coupon['discount_amount'],2); ?></div>
                           </li>
                           
                        <?php } ?>

                           <li class="d-flex flex-row align-items-center justify-content-start">
                              <div class="cart_total_title">Total</div>
                              <div class="cart_total_price ml-auto">₹ <?=number_format($applied_coupon['after_discount_final_price'],2) ?></div>
                           </li>
                        </ul>
                        <button class="cart_total_button" onclick="location.href='checkout'">proceed to checkout</button>
                     </div>
                  </div>
               </div>
<?php } else { ?>
               <div class="row">
                  <div class="col text-center">
                     <img src="<?=base_url() ?>media/uploads/site_setting/<?=$cart[0]->empty_img ?>" class="img-fluid">
                  </div>
               </div>
 <?php }  ?>
            </div>
         </div>

<?php include('footer.php'); ?>
 <script src="<?=base_url() ?>js/cart_custom.js"></script>


 <script>
   var id = 0;
   $(document).on("click", ".update-cart-btn",(function(e) {
        id = $(this).data("id");
        // console.log($("#quantity_input"+id).val());
        update_cart();
    }));

   function update_cart() 
   {
      var quantity = $("#quantity_input"+id).val();
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
 </script>