<?php 
include('header.php');
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
$checkoutimg = $this->crud->fetchdatabyid('10','site_setting');

$coponapply = $this->db->get_where('order_coupon',array('user_id'=>temp_session_id(),"status"=>0,))->result_object();
$coupon = 0;
if(!empty($coponapply[0]->coupon)) 
{
    $coupon = $coponapply[0]->coupon;
}
$applied_coupon = applied_coupon($coupon,'');
?>
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/checkout.css">
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/checkout_responsive.css">
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
   .cart_total ul li {
    width: 100%;
    height: 75px!important;
 }
  .cart_product_total {
    width: 23%!important;
    text-align: center;
}
.header {
    height: auto!important;
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
                           <div class="home_title">Checkout</div>
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
         <div class="checkout">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="billing">
                        <div class="checkout_title">billing details</div>
                        <div class="checkout_form_container">

                           <form action="#" id="checkout_form1">
                              <div class="d-flex flex-lg-row flex-column align-items-start justify-content-between">
                                 <input type="text" class="checkout_input checkout_input_50" placeholder="First Name" required="required" id="checkout_f_name">
                                 <input type="text" class="checkout_input checkout_input_50" placeholder="Last Name" required="required" id="checkout_l_name">
                              </div>
                              <input type="text" class="checkout_input" placeholder="Company Name" id="checkout_compony_name" style="display:none;">
                              <input type="text" class="checkout_input" placeholder="E-mail" required="required" id="checkout_email">
                              <select name="country" id="checkout_country" class="country_select checkout_input country_input">
                                 <option value="" selected>Select Shipping Type</option>
                                 <option value="<?=$sitesetting[0]->amount ?>">Delhi</option>
                                 <option value="<?=$sitesetting[0]->other ?>">Other</option>
                                 <option value="<?=$sitesetting[0]->express ?>">Express</option>
                              </select>
                              <input type="text" class="checkout_input" placeholder="Address" required="required" id="checkout_address">
                              <input type="text" class="checkout_input" placeholder="Town" required="required" id="checkout_city">
                              <div class="d-flex flex-lg-row flex-column align-items-start justify-content-between">
                                 <input type="text" class="checkout_input checkout_input_50" placeholder="Zipcode" required="required" id="checkout_pincode">
                                 <input type="text" class="checkout_input checkout_input_50" placeholder="Phone No" required="required" id="checkout_mobile">
                              </div>
                              <textarea name="checkout_comment" id="checkout_order_note" class="checkout_comment" placeholder="Leave a comment about your order"></textarea>
                           </form>

                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="cart_details">
                        <div class="checkout_title">cart total</div>
                        <div class="cart_total">
                           <ul>
                              <li class="d-flex flex-row align-items-center justify-content-start">
                                 <div class="cart_total_title">Product</div>
                                 <div class="cart_total_price ml-auto">Total</div>
                              </li>
                              <?php
                              $this->db->order_by('id desc');
                              $cartpro = $this->crud->selectDataByMultipleWhere('add_to_temp_cart',array('temp_user_id'=>temp_session_id())); 
                              foreach ($cartpro as $key => $value) 
                               {
                                 $product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$value->p_id));
                                 if(!empty($product))
                                    $product = $product[0];

                                 $size = $this->crud->selectDataByMultipleWhere('size',array('id'=>$value->size_id));
                                 if(!empty($size))
                                    $size = $size[0];

                                 $color = $this->crud->selectDataByMultipleWhere('color',array('id'=>$value->color_id));
                                 if(!empty($color))
                                    $color = $color[0];
                              ?>
                              <li class="d-flex flex-row align-items-center justify-content-start">
                                 <div class="cart_total_title"><?=$product->name ?> x <?=$value->quantity ?> <br>
                                    <span>Size:- <?=$size->name ?></span><br>
                                    <span>Color:- <?=$color->name ?></span>
                                 </div>
                                 <?php
                                    $single_total = $product->sale_price*$value->quantity;
                                    ?>
                                 <div class="cart_total_price ml-auto">₹ <?=number_format($single_total,2) ?></div>
                              </li>
                           <?php } ?>
                              <li class="d-flex flex-row align-items-center justify-content-start">
                                 <div class="cart_total_title">Subtotal</div>
                                 <div class="cart_total_price ml-auto">₹ <?=number_format($applied_coupon['sub_total'],2) ?></div>
                              </li>
                              <li class="d-flex flex-row align-items-center justify-content-start">
                                 <div class="cart_total_title">Shipping</div>
                                 <div class="cart_total_price ml-auto">+₹ <span id="shipp_amt"></span></div>
                                 
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


                              <li class="d-flex flex-row align-items-start justify-content-start total_row">
                                 <div class="cart_total_title">Total</div>
                                 <div class="cart_total_price ml-auto">₹ <?=number_format($applied_coupon['after_discount_final_price'],2) ?></div>
                              </li>
                           </ul>
                        </div>
                        <div class="payment_options">
                           <?php
                           if($sitesetting[0]->cod_avali==1)
                              { ?>
                           <div>
                              <input type="radio" checked id="checkout_payment_type" name="regular_radio" class="regular_radio" value="1">
                              <label for="checkout_payment_type">cash on delivery</label>
                           </div>
                        <?php }
                        if($sitesetting[0]->online_avali==1)
                        {
                         ?>
                           <div>
                              <input type="radio" id="radio_payment_2" name="regular_radio" class="regular_radio"  value="2">
                              <label for="radio_payment_2">Online</label>
                              <div class="visa payment_option"><a href="#"><img src="<?=base_url() ?>images/visa.jpg" alt></a></div>
                              <div class="master payment_option"><a href="#"><img src="<?=base_url() ?>images/master.jpg" alt></a></div>
                           </div>
                        <?php } ?>
                           <button  class="cart_total_button">place order</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<?php include('footer.php'); ?>

<script src="<?=base_url() ?>js/checkout_custom.js"></script>


<script>
   $(document).on("click", ".cart_total_button",(function(e) {
      $('#checkout_f_name').attr('required', true);
        final_checkout();
    }));

   function final_checkout()
   {
      var checkout_f_name = $("#checkout_f_name").val();
      var checkout_l_name = $("#checkout_l_name").val();
      var checkout_compony_name = $("#checkout_compony_name").val();
      var checkout_email = $("#checkout_email").val();
      var checkout_country = $("#checkout_country").val();
      var checkout_address = $("#checkout_address").val();
      var checkout_pincode = $("#checkout_pincode").val();
      var checkout_city = $("#checkout_city").val();
      var checkout_mobile = $("#checkout_mobile").val();
      var checkout_order_note = $("#checkout_order_note").val();
      var checkout_payment_type = $('input[name="regular_radio"]:checked').val();

      if(checkout_f_name=='')
      {
        $(".toastBox").removeClass("active");
            toast_print('Please Enter Your First Name...');
            setTimeout(function() {
            }, 2000);
            return false;
      }
      
      if(checkout_l_name=='')
      {
        $(".toastBox").removeClass("active");
            toast_print('Please Enter Your Last Name...');
            setTimeout(function() {
            }, 2000);
            return false;
      }
      
      
      if(checkout_email=='')
      {
        $(".toastBox").removeClass("active");
            toast_print('Please Enter Your Email...');
            setTimeout(function() {
            }, 2000);
            return false;
      }
      if(checkout_address=='')
      {
        $(".toastBox").removeClass("active");
            toast_print('Please Enter Your Address...');
            setTimeout(function() {
            }, 2000);
            return false;
      }
      if(checkout_mobile=='')
      {
        $(".toastBox").removeClass("active");
            toast_print('Please Enter Your Mobile...');
            setTimeout(function() {
            }, 2000);
            return false;
      }
      if(checkout_country=='')
      {
        $(".toastBox").removeClass("active");
            toast_print('Please Enter Your Shipping Type...');
            setTimeout(function() {
            }, 2000);
            return false;
      }
      

      if(checkout_payment_type=='')
      {
        $(".toastBox").removeClass("active");
            toast_print('Please Select Payment Type...');
            setTimeout(function() {
            }, 2000);
            return false;
      }
      


      var form = new FormData();
      form.append("f_name", checkout_f_name);
      form.append("l_name", checkout_l_name);
      form.append("compony_name", checkout_compony_name);
      form.append("email", checkout_email);
      form.append("country", checkout_country);
      form.append("address", checkout_address);
      form.append("city", checkout_city);
      form.append("pincode", checkout_pincode);
      form.append("mobile", checkout_mobile);
      form.append("order_note", checkout_order_note);
      form.append("payment_type", checkout_payment_type);

      var settings = {
        "url": "<?=base_url() ?>checkout/final_cart",
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


        if(response.status==200)
        {
            if(response.data.payment_type=='1')
            {
               window.location.href='<?=base_url() ?>thankyou?order_id='+response.data.order_id;
            }
            else
            {
               window.location.href='<?=base_url() ?>Phonepay/pay?order_id='+response.data.order_id;
            }
        }
      });
   }
</script>

<script>
$(document).ready(function () {
   $(".country_input").change(function () {
   var selectedSubject = $(".country_input option:selected").val();
   $("#shipp_amt").html(selectedSubject);
      // $("#shipp_amt").val(selectedSubject)
   });
});
</script>