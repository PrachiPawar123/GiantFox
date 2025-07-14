<?php 
include('header.php');

$this->db->order_by('id desc');
$cartpro = $this->crud->selectDataByMultipleWhere('add_to_wishlist',array('temp_user_id'=>temp_session_id())); 

 ?>
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/cart.css">
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/cart_responsive.css">
<style>
   .home_background {
    position: absolute;
    top: 98px;
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

         


         <div class="cart_container" style="padding-top: 200px;">
            <div class="container">
<?php
if(!empty($cartpro))
        { 
         ?>
               <div class="row">
                  <div class="col">
                     <div class="cart_title" style="    font-size: 23px;">your shopping Wishlist</div>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <div class="cart_bar d-flex flex-row align-items-center justify-content-start">
                        <div class="cart_bar_title_name">Product</div>
                        <div class="cart_bar_title_content ml-auto">
                           <div class="cart_bar_title_content_inner d-flex flex-row align-items-center justify-content-end">
                              <div class="cart_bar_title_price">Price</div>
                              <!-- <div class="cart_bar_title_total">Stock</div> -->
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
                                 $product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$value->p_id));
                                 if(!empty($product))
                                    $product = $product[0];

                              ?>
                           <li class=" cart_product d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                              <div class="cart_product_image"><img src="<?=base_url() ?>media/uploads/product/<?=$product->thumb_img ?>" alt style="width: 75px;"></div>
                              <div class="cart_product_name">
                                 <a href="<?=base_url('product-details/'.$product->slug) ?>"><?=$product->name ?></a><br>
                              </div>
                              <div class="cart_product_info ml-auto">
                                 <div class="cart_product_info_inner d-flex flex-row align-items-center justify-content-md-end justify-content-start">
                                    <div class="cart_product_price">₹ <?=number_format($product->sale_price,2) ?></div>
                                    
                                   
                                    
                                    <div class="cart_product_button">
                                       <button data-id="<?=$value->id ?>" class="delete-btn"><img src="<?=base_url() ?>images/trash.png.webp" alt></button>
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
             
<?php } else { ?>
               <div class="row">
                  <div class="col text-center">
                     <h2>Not Found</h2>
                  </div>
               </div>
 <?php }  ?>
            </div>
         </div>

<?php include('footer.php'); ?>
 <script src="<?=base_url() ?>js/cart_custom.js"></script>


 <script>
   var id = 0;
   $(document).on("click", ".delete-btn",(function(e) {
        id = $(this).data("id");
        // console.log($("#quantity_input"+id).val());
        delete_wishlist();
    }));

  
    

    function delete_wishlist()
    {
      var form = new FormData();
      form.append("id", id);

      var settings = {
        "url": "<?=base_url() ?>wishlist/add_to_wishlist_delete",
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
                
        // alert("iteam Removed");
        // location.reload();
        // $(".toastBox").removeClass("active");
        //  toast_print(data.message);
        //  setTimeout(function() {
        //      location.reload();
        //  }, 2000);
      });
    }
 </script>