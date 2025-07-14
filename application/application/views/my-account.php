<?php 

$user= $this->crud->selectDataByMultipleWhere('registration',array('id'=>temp_session_id()));
if(!empty($user))
   $user = $user[0];


chech_user_login();
include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/cart.css">
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/cart_responsive.css">
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/checkout.css">
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>styles/checkout_responsive.css">

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
         <div class="home" style="height:400px">
            <div class="home_background parallax-window" data-parallax="scroll"  data-speed="0.8" style="background-image: url(<?=base_url() ?>images/cart.jpg.webp);    background-size: cover;background-repeat: no-repeat;"></div>
            <div class="container">
               <div class="row">
                  <div class="col">
                     <div class="home_container">
                        <div class="home_content">
                           <div class="home_title">My Account</div>
                           <div class="breadcrumbs">
                              <ul>
                                 <li><a href="index.php">Home</a></li>
                                 <li>My Account</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<style>
   .accordion {
     background-color: #eee;
     color: #444;
     cursor: pointer;
     padding: 18px;
     width: 100%;
     border: none;
     text-align: left;
     outline: none;
     font-size: 15px;
     transition: 0.4s;
   }

   .active, .accordion:hover {
     background-color: #ccc;
   }

   .accordion:after {
     content: '\002B';
     color: #777;
     font-weight: bold;
     float: right;
     margin-left: 5px;
   }

   .active:after {
     content: "\2212";
   }

   .panel {
     padding: 0 18px;
     background-color: white;
     max-height: 0;
     overflow: hidden;
     transition: max-height 0.2s ease-out;
   }
</style>
         <div class="cart_container">
            <div class="container">
               <div class="row">
                  <div class="col">
                     <div class="cart_title">User Dashboard</div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12" style="margin-top:10px">
                     <?php echo $this->session->flashdata('update_message'); ?>
                  </div>
                  <div class="col">
                     <div class="accordian-tab mt-3">
                        <button class="accordion mt-2">My Orders</button>
                        <div class="panel mb-3">
                           <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>

                            <tbody>
                              <?php 
                               $i=0;
                              $finalorder = $this->crud->selectDataByMultipleWhere('finalorder',array('user_id'=>temp_session_id()));
                               foreach($finalorder as $data)
                                   { $i++;
                                   $orders = $this->crud->selectDataByMultipleWhere('orders',array('order_id'=>$data->order_id,));   
                                 ?>
                              <tr>
                                <td><?=$i ?></td>
                                <td><?php echo $data->order_id; ?></td>
                                <td><?php echo date('M d, Y',strtotime($data->addeddate)); ?></td>
                                <td>₹ <?=number_format($data->after_discount_final_price,2)?></td>
                                <td><?=order_status($data->status) ?></td>
                                <td><a href="<?php echo base_url('userinvoice/'.$data->id); ?>" target="_blank">View</a></td>
                              </tr>
                              
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>

                        <button class="accordion mt-2">Account Information</button>
                        <div class="panel mb-3">
                          <form action="<?=base_url('user/user_update') ?>" id="checkout_form11" style="margin-top: 20px;" method="post">
                              <div class="d-flex flex-lg-row flex-column align-items-start justify-content-between">
                                 <input type="text" class="checkout_input checkout_input_50" placeholder="First Name" required="required" name="firstname" value="<?=$user->firstname ?>">
                                 <input type="text" class="checkout_input checkout_input_50" placeholder="Last Name" required="required" name="lastname"  value="<?=$user->lastname ?>">
                              </div>
                              <input type="text" class="checkout_input" placeholder="Mobile No" name="mobile"  value="<?=$user->mobile ?>">
                              <input type="text" class="checkout_input" placeholder="Username" required="required" name="username"  value="<?=$user->username ?>">
                              <button style="cursor: pointer;" type="submit" name="submit" class="btn btn-primary">Submit</button>
                           </form>
                        </div>

                        <a class="btn-sm btn-danger " style="color: white;" href="<?=base_url() ?>wishlist">My Wishlist</a>
                        <a class="btn-sm btn-danger " style="color: white;" href="<?=base_url() ?>cart">My Cart</a>
                        <a class="btn-sm btn-danger" href="<?=base_url() ?>user/userlogout" style="color: white;">Logout</a>
                     </div>
                  </div>
               </div>
              
              
            </div>
         </div>

<?php include('footer.php'); ?>
 <script src="<?=base_url() ?>js/cart_custom.js"></script>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>