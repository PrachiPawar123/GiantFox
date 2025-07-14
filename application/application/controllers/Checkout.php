<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	

	//////---------------------final order

	public function final_cart()
	{
		$order_id = time();
		$user_id = temp_session_id();
		$f_name = $this->input->post('f_name');
		$l_name = $this->input->post('l_name');
		$compony_name = $this->input->post('compony_name');
		$email = $this->input->post('email');			
		$country = $this->input->post('country');			
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$pincode = $this->input->post('pincode');
		$mobile = $this->input->post('mobile');			
		$order_note = $this->input->post('order_note');
		$payment_type = $this->input->post('payment_type');
	    $addeddate = date('Y-m-d');
	    $sitesetting = $this->crud->fetchdatabyid('1','site_setting');

	    $shipping_charge = $country;
	    // if($country==1)
	    // {
		// 	$shipping_charge = $sitesetting[0]->amount;
	    // }
	    // else if($country==2)
	    // {
	    // 	$shipping_charge = $sitesetting[0]->other;
	    // }
	    // else if($country==3)
	    // {
	    // 	$shipping_charge = $sitesetting[0]->express;
	    // }

		$order_amount = applied_coupon('','');
		
		$sub_total = $order_amount['sub_total'];
		$finalprice = $order_amount['finalprice'];
		$after_discount_final_price = $order_amount['after_discount_final_price']+$shipping_charge;
		$discount = $order_amount['discount'];
		$discount_amount = $order_amount['discount_amount'];

		$data = array(
			"order_id"=>$order_id,
			"user_id"=>$user_id,
			"f_name"=>$f_name,
			"l_name"=>$l_name,
			"compony_name"=>$compony_name,
			"email"=>$email,
			"country"=>$country,
			"address"=>$address,
			"city"=>$city,
			"pincode"=>$pincode,
			"mobile"=>$mobile,
			"order_note"=>$order_note,
			"addeddate"=>$addeddate,
			"shipping_charge"=>$shipping_charge,
			"sub_total"=>$sub_total,
			"finalprice"=>$finalprice,
			"after_discount_final_price"=>$after_discount_final_price,
			"discount"=>$discount,
			"payment_type"=>$payment_type,
			"discount_amount"=>$discount_amount,
		);
								
		$temp = $this->crud->selectDataByMultipleWhere('add_to_temp_cart',array('temp_user_id'=>temp_session_id()));
        foreach($temp as $value)
        {      
        	$product = $this->crud->selectDataByMultipleWhere('product',array('id'=>$value->p_id,));

        	$order_data = array(
        		"user_id"=>$user_id,
        		"order_id"=>$order_id,
        		"p_id"=>$value->p_id,
        		"size_id"=>$value->size_id,
        		"color_id"=>$value->color_id,
        		"quantity"=>$value->quantity,
        		"thumb_img"=>$product[0]->thumb_img,
        		"name"=>$product[0]->name,
        		"sale_price"=>$product[0]->sale_price,
        	);

        	$stock = 0;
        	$allimage = $this->crud->selectDataByMultipleWhere('all_images',array('p_id'=>$value->p_id,'size_id'=>$value->size_id,'color_id'=>$value->color_id,));
        	if(!empty($allimage))
        		$stock = $allimage[0]->stock;

        	$quantity = $stock-$value->quantity;
        	$this->db->update('all_images',array('stock'=>$quantity),array('p_id'=>$value->p_id,'size_id'=>$value->size_id,'color_id'=>$value->color_id,));




        	$p_all_images  = json_decode($product[0]->all_images);
        	foreach ($p_all_images as $keyall => $valueall)
        	{
        		if($valueall->size_id==$value->size_id && $valueall->color_id==$value->color_id)
        		{

        			$valueall->stock = $quantity;
        			break;
        		}	
        	}
        	$p_all_images = json_encode($p_all_images);
        	$this->db->update("product",array("all_images"=>$p_all_images,),array("id"=>$value->p_id,));



        	
            // $this->crud->insert('orders',$order_data);
            if($this->crud->insert('orders',$order_data))
            {
            	if($payment_type==1)
            	{
            	$this->db->delete("add_to_temp_cart",array("temp_user_id"=>temp_session_id(),));
            	$this->db->update("order_coupon",array("order_id"=>$order_id,'status'=>1,),array('user_id'=>temp_session_id(),'status'=>0,));
            		
            	}
            }
        }

        if($this->crud->insert('finalorder',$data))
        {
        	$result['message'] = "Item Add to cart successfully Done";
	        $result['status']  = "200";
	        $result['data']    = $data;
        }
        else
        {
        	$result['message'] = "Already Exits";
            $result['status']  = "400";
            $result['data']    = [];
        }
        echo json_encode($result);	
	}

	/*----payment*/

	public function payment_type()
	{
		$order_id = $this->input->post('order_id');
		$payment_type = $this->input->post('payment_type');

		$this->db->update("finalorder",array('payment_type'=>$payment_type,),array('order_id'=>$order_id,));
		$this->db->delete("add_to_temp_cart",array("temp_user_id"=>temp_session_id(),));
		$this->db->update("order_coupon",array("order_id"=>$order_id,'status'=>1,),array('user_id'=>temp_session_id(),'status'=>0,));		
		// if($payment_method==1)
	      redirect('order-success?order_id='.$order_id,);
	}


	

	public function couponcode()
	{
		$number = $this->input->post('coupon');
		$user_id = temp_session_id();
		// $coupon_data = $this->db->where(" name==='$number' ")->get_where("coupen_code")->result_object();
        $coupon_data = $this->crud->selectDataByMultipleWhere('coupen_code',array('name'=>$number));
        if(!empty($coupon_data))
        { 
	        if($coupon_data[0]->name===$number)
	        {
		        if(!empty($coupon_data))
		        $coupen_date = $coupon_data[0]->expirey_date;
		        $todaydate = date('Y-m-d');

		        if($todaydate<=$coupen_date)
		        {
			        if(!empty($coupon_data))
			        {
			        	$coupon_data = $coupon_data[0];
			        	$query = $this->crud->selectDataByMultipleWhere('order_coupon',array('coupon'=>$number,"user_id"=>$user_id,"status"=>0,'coupen_type'=>$coupon_data->coupen_type,"coupon_id"=>$coupon_data->id,));
			        	
			        	if(empty($query))
			        		$this->db->insert("order_coupon",array("coupon"=>$coupon_data->name,"discount"=>$coupon_data->amount,"type"=>$coupon_data->type,'user_id'=>$user_id,"coupon_id"=>$coupon_data->id,'coupen_type'=>$coupon_data->coupen_type,));


			        	$applied_coupon = applied_coupon($number,'');
			        	if($applied_coupon['discount_amount']>0)
			        	{
			        	    $this->session->set_flashdata('coupon_mesg','<div class="alert alert-success">Coupon Applied Successfully.....</div>');		        		
			        	}
			        	else
			        	{
			        		$this->db->delete('order_coupon',array("coupon"=>$coupon_data->name,"discount"=>$coupon_data->amount,"type"=>$coupon_data->type,'user_id'=>$user_id,"coupon_id"=>$coupon_data->id,'coupen_type'=>$coupon_data->coupen_type,));
			        		$this->session->set_flashdata('coupon_mesg','<div class="alert alert-danger">Wrong Coupon Code.....</div>');
			        	}

			        }
			        else
			        {

			        	$this->session->set_flashdata('coupon_mesg','<div class="alert alert-danger">Wrong Coupon Code.....</div>');
			        }
		        }
		        else
		        {
		        	$this->session->set_flashdata('coupon_mesg','<div class="alert alert-danger">Coupon Expire.....</div>');
		        }
		    }
		    else
		    {
		    	$this->session->set_flashdata('coupon_mesg','<div class="alert alert-danger">Wrong Coupon Code.....</div>');
		    }
		}
		else
		    {
		    	$this->session->set_flashdata('coupon_mesg','<div class="alert alert-danger">Wrong Coupon Code.....</div>');
		    }

        redirect($_SERVER['HTTP_REFERER']);
	}


	function delete_coupon()
	{
		$user_id = temp_session_id();
		$this->db->delete('order_coupon',array('user_id'=>$user_id,'status'=>0,));
		$this->session->set_flashdata('coupon_mesg','<div class="alert alert-danger">Coupon has been successfully deleted.</div>');
        redirect($_SERVER['HTTP_REFERER']);
	}



































}
