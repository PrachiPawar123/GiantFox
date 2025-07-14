<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	

	// ----------------add to cart button on home/// 2 in 1-------


	public function add_to_cart()
	{
		$result = array();

		$p_id = $this->input->post('p_id');
		$temp_user_id = temp_session_id();
		$quantity = $this->input->post('quantity');
		$size_val = $this->input->post('size_val');
		$color_value = $this->input->post('color_value');

		$sizename = '';
		$size = $this->crud->selectDataByMultipleWhere('size',array('id'=>$size_val));
		if(!empty($size))
			$sizename = $size[0]->name;

		$colorname = '';
		$color = $this->crud->selectDataByMultipleWhere('color',array('id'=>$color_value));
		if(!empty($color))
			$colorname = $color[0]->name;

		$insertdata = array(
			"p_id"=>$p_id,
			"quantity"=>$quantity,
			"size_id"=>$size_val,
			"color_id"=>$color_value,
			"temp_user_id"=>$temp_user_id,
		);
		$get_cart = $this->crud->selectDataByMultipleWhere('add_to_temp_cart',array("p_id"=>$p_id,"temp_user_id"=>$temp_user_id,'size_id'=>$size_val,'color_id'=>$color_value,));

		if(empty($get_cart))
		{
		 $this->crud->insert('add_to_temp_cart',$insertdata);
		 $result['message'] = "Item Add to cart successfully Done";
	        $result['status']  = "200";
	        $result['data']    = $insertdata;
	        $result['sizename']    = $sizename;
	        $result['colorname']    = $colorname;
		}
		else
		{
			$quantitydata = array("quantity"=>$quantity,);
			$this->db->update('add_to_temp_cart',$quantitydata,array("temp_user_id"=>$temp_user_id,"p_id"=>$p_id,'size_id'=>$size_val,'color_id'=>$color_value));
			$result['message'] = "Already Exits";
            $result['status']  = "400";
            $result['data']    = $insertdata;
            $result['sizename']    = $sizename;;
	        $result['colorname']    = $colorname;;
		}
		echo json_encode($result);
	}

	//-----------------update cart-------------

	function update()
	{
		$result = array();

	    $id = $this->input->post('id');
	    $quantity = $this->input->post('quantity');

	    $data = array(
	        'quantity' => $quantity,
	        );

	    if($this->db->update('add_to_temp_cart',$data,array("id"=>$id,)))
	    {
	    	$result['message'] = "Quantity Update Successfully Done";
	        $result['status']  = "200";
	        $result['data']    = $data;
	    }
	    else
	    {
	    	$result['message'] = "Somthing Wrong...";
	        $result['status']  = "400";
	        $result['data']    = [];
	    }
	    echo json_encode($result);
	
	}

	// ---------------------------delete cart--------

	function add_to_cart_delete()
	{
		$result = array();

		$id = $this->input->post('id');
		$data=$this->crud->selectDataByMultipleWhere('add_to_temp_cart',array('id'=>$id));
		if($this->crud->delete('add_to_temp_cart',$id))
		{
			$result['status'] = '200';
			$result['message'] = 'Item has been successfully deleted';
			$result['data'] = $id;
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'OOps';
			$result['data'] = [];
		}
		echo json_encode($result);
		// $this->crud->delete('add_to_temp_cart',$id);
		// $this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully deleted.</div>');
	}

	// function update_cart_item(){

	//     $result = array();
    // 	$p_id = $this->input->post('p_id');
    // 	$temp_user_id = temp_session_id();
    // 	$quantity = $this->input->post('quantity');

    // 	$user_data= array(                
    //             "p_id"=>$p_id,
    //             "temp_user_id"=>$temp_user_id,
    //             "quantity"=>$quantity,
    //         );

    // 	if(!empty($p_id))
    // 	{
    // 		$this->db->update("add_to_temp_cart",$user_data,array('p_id'=>$p_id,'temp_user_id'=>$temp_user_id,));
	//         $result['message'] = "Quantity Update successfully";
	//         $result['status']  = "200";
	//         $result['data']    = $user_data;
    // 	}
    // 	else
    //     {
    //         $result['message'] = "Wrong Product ID";
    //         $result['status']  = "400";
    //         $result['data']    = $user_data;
    //     }
    //     echo json_encode($result);
	
	// }



	// --ajax & jquary-----
	// public function update_cart()
	// {
	// 		$id = $this->input->post('product_id');
	// 		$data['quantity'] = $this->input->post('quantity');	
	// 		$session_id = $data['temp_user_id'] = temp_session_id();
	// 		$get_cart = $this->crud->selectDataByMultipleWhere('add_to_temp_cart',array("id"=>$id,));
	// 		if(empty($get_cart))
	// 		{
	// 			$this->crud->insert('add_to_temp_cart',$data);
	// 			redirect($_SERVER['HTTP_REFERER']);
	// 		}
	// 		else
	// 		{
	// 			$this->db->update('add_to_temp_cart',$data,array("temp_user_id"=>$session_id,"id"=>$id,));
	// 			redirect($_SERVER['HTTP_REFERER']);
	// 		}	
	// }



	






































}
