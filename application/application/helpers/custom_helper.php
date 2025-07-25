<?php


 function slug($string) 
 { 
  $string = trim($string);$string=strtolower($string);
  $string =preg_replace("/[^a-z0-9_ोौेैा्ीिीूुंःअआइईउऊएऐओऔकखगघचछजझञटठडढतथदधनपफबभमयरलवसशषहश्रक्षटठडढङणनऋड़\s-]/u", "", $string);
  $string = preg_replace("/[\s-]+/", " ", $string);
  $string = preg_replace("/[\s]/", '-', $string);
  return $string ;
 }

 
function status($value)
{
  if($value==1)
  {
    $string = '<p class="mb-0 text-success font-weight-bold d-flex justify-content-start align-items-center">
                  <small>
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">        
                      <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                    </svg>
                  </small>Show
               </p>';
  }

  else if($value==0)
  {
    $string = '<p class="mb-0 text-danger font-weight-bold d-flex justify-content-start align-items-center">
                  <small>
                     <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                     </svg>
                  </small>Hide
               </p>';
  }

  return $string;
}

function topbottom($value)
{
  if($value==1)
  {
    $string = '<span style="padding:5px;background:red;border-radius:10px;color:white;">Top</span>';
  }

  else if($value==2)
  {
    $string = '<span style="padding:5px;background:red;border-radius:10px;color:white;">Bottom</span>';
  }

  return $string;
}

 function mobiledesktop($value)
  {
    if($value==1)
    {
      $string = '<span style="padding:5px;background:red;border-radius:10px;color:white;">Mobile</span>';
    }

    else if($value==2)
    {
      $string = '<span style="padding:5px;background:black;border-radius:10px;color:white;">Desktop</span>';
    }

    return $string;
  }



function sizename($id)
{
  $ci = & get_instance();
  $size = $ci->crud->selectDataByMultipleWhere('size',array('id'=>$id,));
  return $size[0]->name;
}
function colorname($id)
{
  $ci = & get_instance();
  $color = $ci->crud->selectDataByMultipleWhere('color',array('id'=>$id,));
  return $color[0]->name;
}

/*discount percentage */
function discount($original_price,$cut_price){
  $diff = ($original_price-$cut_price);
  $divid = ($diff*100);
  $pers = ($divid/$original_price);
  return substr($pers,0,2);
 }


 function applied_coupon($coupon,$order_id='')
{
  $ci = & get_instance();

  // $shipping = $ci->db->get_where('site_setting',array('id'=>1,))->result_object();
  // if($shipping[0]->shipping==1)
  // {
  //   $shiipi_amt = $shipping[0]->amount;
  // }
  // else
  // {
  //   $shiipi_amt = 0;
  // }

  $shiipi_amt = 0;

  $coponapply = $ci->db->get_where('order_coupon',array('user_id'=>temp_session_id()))->result_object();
  $coupon = 0;
  $coupen_type = 0;
  if(!empty($coponapply[0]->coupon)) 
  {
      $coupon = $coponapply[0]->coupon;
      $coupen_type = $coponapply[0]->coupen_type;
  }


    
  $sub_total = 0; 
  $product_total = 0;
  $after_discount_final_price = 0;
  $discount = 0;
  $discount_amount = 0;
  $type = 0;
  $finalprice = 0;
  $shipping_charge = $shiipi_amt;

  $cartpro = $ci->crud->selectDataByMultipleWhere('add_to_temp_cart',array('temp_user_id'=>temp_session_id()));
  foreach ($cartpro as $key => $value) 
  {
      $p_id = $value->p_id;
      $allimages = $ci->crud->selectDataByMultipleWhere('product',array('id'=>$value->p_id,));     
      $product_total = $allimages[0]->sale_price*$value->quantity;
      $sub_total += $product_total;

      if($coupen_type==2)
      {
        $order_coupon = $ci->db->get_where('order_coupon',array('coupon'=>$coupon,"status"=>0,'user_id'=>temp_session_id(),))->result_object();
        if(!empty($order_coupon))
        {
          $order_coupon = $order_coupon[0];

          $coupen_product_wise = $ci->db->get_where('coupen_product_wise',array("coupon_id"=>$order_coupon->coupon_id,"p_id"=>$p_id,))->result_object();
          if(!empty($coupen_product_wise))
          {
            $coupen_product_wise = $coupen_product_wise[0];
            $type = $coupen_product_wise->type;
            $amount = $coupen_product_wise->amount;
            if($type==1)
            {
              // percent
              $discount = $amount;
              $discount_amount = $product_total*$amount/100;
            }
            else
            {
              // flat
              $discount = $amount;
              $discount_amount = $amount;
            }
          }          
        }
      }


  }
  $after_discount_final_price = $finalprice = $sub_total+$shipping_charge-$discount_amount;

  if($coupen_type==1)
  {
    $order_coupon = $ci->db->get_where('order_coupon',array('coupon'=>$coupon,"status"=>0,'user_id'=>temp_session_id(),))->result_object();
    if(!empty($order_coupon))
    {
      $order_coupon = $order_coupon[0];
      $type = $order_coupon->type;
      $amount = $order_coupon->discount;
      if($type==1)
      {
        // percent
        $discount = $amount;
        $discount_amount = $finalprice*$amount/100;
        $after_discount_final_price = $finalprice-$discount_amount;
      }
      else
      {
        // flat
        $discount_amount = $amount;
        $discount = $amount;
        $after_discount_final_price = $finalprice-$discount;
      }
    }
  }

  return $return_array = array(
    "type"=>$type,
    "sub_total"=>$sub_total,
    "discount"=>$discount,
    "discount_amount"=>$discount_amount,
    "shipping_charge"=>$shipping_charge,
    "finalprice"=>$finalprice,
    "after_discount_final_price"=>$after_discount_final_price,
  );
  
}



function temp_session_id()
  {
    $ci =& get_instance();
    if(empty($ci->session->userdata("userdashboard")))
    {
      if(empty($ci->session->userdata("temp_session_id")))
      {
        $temp_session_id = session_id();
      }
      else
      {
        $temp_session_id = $ci->session->userdata("temp_session_id");
      }
    }
    else
    {
      $user = $ci->db->get_where("registration",array("id"=>$ci->session->userdata("userdashboard"),))->result_object()[0];
      $temp_session_id = $user->id;
    }
    return $temp_session_id;
  }



function chech_user_login()
  {
    $ci = & get_instance();
    $userdashboard = $ci->session->userdata('userdashboard');  
    $EMAIL      = $ci->session->userdata('EMAIL');  
    $logged_in      = $ci->session->userdata('logged_in');  
    if($userdashboard=="")
    {
      redirect('login');
    }
  }



// ---------------------Is user_login-------

function isuser_login()
  {
    $ci = & get_instance();
    $userdashboard = $ci->session->userdata('userdashboard');  
    $EMAIL      = $ci->session->userdata('EMAIL');  
    $logged_in      = $ci->session->userdata('logged_in');  
    
    if(empty($userdashboard))
      redirect(base_url('login'));

  }


 

 
function coupontype($value)
{
  if($value==2)
  {
    $string = '<button class="btn btn-sm btn-dark">Amount</button>';
  }

  else if($value==1)
  {
    $string = '<button class="btn btn-sm btn-dark">Percentage</button>';
  }

  return $string;
} 

function paymenttype($value)
{
  $string = '';
  if($value==1)
  {
    $string = '<span class="btn btn-primary btn-sm"> COD</span>';
  }

  else if($value==2)
  {
    $string = '<span class="btn btn-dark btn-sm"> Online</span>';
  }

  return $string;
}


function admin_logedin_detail()
{
    $ci =& get_instance();
    $id = $ci->session->userdata("id");
    return $ci->db->get_where("tbl_admin",array("id"=>$id,))->result_object()[0];
}


function bannertype($value)
{
  if($value==1)
  {
    $string = '<button class="btn btn-sm btn-dark">Top Offer Banner</button>';
  }

  else if($value==2)
  {
    $string = '<button class="btn btn-sm btn-dark">Bottom Offer Banner</button>';
  }

  return $string;
} 

function mobilepcbanner($value)
{
  if($value==1)
  {
    $string = '<button class="btn btn-sm btn-primary">For Mobile</button>';
  }

  else if($value==2)
  {
    $string = '<button class="btn btn-sm btn-primary">For PC</button>';
  }

  return $string;
} 

function order_status($value)
{
  if($value==0)
  {
    $string = '<button class="btn btn-sm btn-primary">Confirm Order</button>';
  }
  else if($value==2)
  {
    $string = '<button class="btn btn-sm btn-primary">Warehouse</button>';
  }
  else if($value==3)
  {
    $string = '<button class="btn btn-sm btn-primary">Shipped Order</button>';
  }
  else if($value==4)
  {
    $string = '<button class="btn btn-sm btn-primary">Deliverd</button>';
  }
  else if($value==5)
  {
    $string = '<button class="btn btn-sm btn-primary">Cancel</button>';
  }

  return $string;
} 

function coupon_type_cart($value)
{
  $string = '';
  if($value==1)
  {
    $string = '<p class="mb-0 text-success font-weight-bold d-flex justify-content-start align-items-center">Cart Amount</p>';
  }
  else if($value==2)
  {
    $string = '<p class="mb-0 text-danger font-weight-bold d-flex justify-content-start align-items-center">Product Wise</p>';
  }

  return $string;
}