<?php

class Product extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Product',
						   	'table_name'=>'product',
						   	'upload_path'=>'media/uploads/product/',
						   	'load_path'=>'admin/product/',
						   	'redirect_path'=>'admin_con/product/',
						   	'back_url'=>'product',
						   	'add_url'=>'product',
						   	'edit_url'=>'product',
						   	'delete_url'=>'product',
						   	'view_url'=>'product',
						   	'status_value'=>'product',
						   ); 


   //--check user login or not
	function chech_admin_login()
	{
		$ci = & get_instance();
	    if(empty($ci->session->userdata('id')))
	    {
	      redirect(base_url().'admin');
	    }
	}



	//insert

	function add()
	{
		$this->chech_admin_login();
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			$data['cat_id'] = $cat_id = $this->input->post('cat_id');			
			$data['sub_cat_id'] = $sub_cat_id = $this->input->post('sub_cat_id');			

			if($_FILES['thumb_img']['name']!='')
			{
				$thumb_img = rand().'.'.explode(".", $_FILES['thumb_img']['name'])[1];
				$path2 = $this->arr_values['upload_path'].$thumb_img;
				move_uploaded_file($_FILES['thumb_img']['tmp_name'],$path2);
			}
			else
			{
				$thumb_img = "";
			}
			$data['thumb_img'] = $thumb_img;

			if($_FILES['thumb_img2']['name']!='')
			{
				$thumb_img2 = rand().'.'.explode(".", $_FILES['thumb_img2']['name'])[1];
				$path2 = $this->arr_values['upload_path'].$thumb_img2;
				move_uploaded_file($_FILES['thumb_img2']['tmp_name'],$path2);
			}
			else
			{
				$thumb_img2 = "";
			}
			$data['thumb_img2'] = $thumb_img2;
			if($_FILES['size_chart']['name']!='')
			{
				$size_chart = rand().'.'.explode(".", $_FILES['size_chart']['name'])[1];
				$path2 = $this->arr_values['upload_path'].$size_chart;
				move_uploaded_file($_FILES['size_chart']['tmp_name'],$path2);
			}
			else
			{
				$size_chart = "";
			}
			$data['size_chart'] = $size_chart;

			$filename = $_FILES['image']['name'];
			$tempname = $_FILES['image']['tmp_name'];

			$allimage = array();

			foreach ($filename as $key => $value) 
			{
				$imagename = rand().$filename[$key];
				$path = $this->arr_values['upload_path'].$imagename;
				move_uploaded_file($tempname[$key],$path);
				$allimage[] = $imagename;
			}
			if(!empty($allimage))
			{
				$allimage = json_encode($allimage);
			}			
			else
			{
				$allimage = "";
			}
			$data['image'] = $allimage;

			$data['name'] = $this->input->post('name');	
			$data['slug'] = $this->input->post('slug');
			if(empty($data['slug']))
			{
				$slug = slug($data['name']);
			}			
			else
			{
				$slug = slug($data['slug']);
			}
			$data['slug'] = $slug;	

			$data['mrp_price'] = $this->input->post('mrp_price');				
			$data['sale_price'] = $this->input->post('sale_price');				
			$data['rating'] = $this->input->post('rating');				
			$data['rating'] = $this->input->post('rating');				
			$data['sku'] = $this->input->post('sku');			
			$data['description'] = $this->input->post('description');			
			$data['specification'] = $this->input->post('specification');			
			$data['show_home'] = $this->input->post('show_home');						
			$data['top_selling'] = $this->input->post('top_selling');		
			$data['new_drops'] = $this->input->post('new_drops');		
			$data['show_sale'] = $this->input->post('show_sale');		
			$data['sold_out'] = $this->input->post('sold_out');		

			$data['status'] = $this->input->post('status');	
			$data['addeddate'] = date('Y-m-d h:i:sA');

			

			// $size_id = $this->input->post('size_id');
			$color_id = $this->input->post('color_id');				
			$stock = $this->input->post('stock');

			$all_size = array();
			$image_arra = array();

			foreach ($color_id as $key => $value)
			{
				if(isset($_FILES['image'.$key]['name']))
				{

					$images_name = $_FILES['image'.$key]['name'];
					$images_temp = $_FILES['image'.$key]['tmp_name'];
				}
				if(!empty($images_name))
				{
					$m_images = array();
					$size_id = $this->input->post('size_id'.$key);
					$all_size[] = $size_id;

					foreach ($images_name as $keyimg => $valueimg)
					{

						$ext = explode(".",$images_name[$keyimg]);
						$ext = end($ext);


						$thumb_img = str_replace($ext,".",slug(rand().$keyimg.$images_name[$keyimg])).$ext;
						$path2 = $this->arr_values['upload_path'].$thumb_img;
						if(move_uploaded_file($images_temp[$keyimg],$path2))
						{
							$m_images[] = $thumb_img;
						}
					}
					$image_arra[] = array(
						"size_id"=>$size_id,
						"color_id"=>$color_id[$key],
						"stock"=>$stock[$key],
						"images"=>$m_images,
						"cat_id"=>$cat_id,
						"sub_cat_id"=>$sub_cat_id,
					);					
				}
			}

			$all_image_color_size = json_encode($image_arra);
			$data['all_images'] = $all_image_color_size;

			$this->crud->insert($this->arr_values['table_name'],$data);

	        $insert_id = $this->db->insert_id();

	        $this->db->delete("all_images",array("p_id"=>$insert_id,));
	        if(!empty($image_arra))
	        {
	        	foreach ($image_arra as $key => $value)
	        	{	

	        	foreach ($value['size_id'] as $keysize => $valuesize)
	        		{ 
	        			foreach ($value['images'] as $keyimg => $valueimg)
		        		{
	        		$images_data = array(
	        			"size_id"=>$valuesize,
	        			"color_id"=>$value['color_id'],
	        			"stock"=>$value['stock'],
	        			"p_id"=>$insert_id,
	        			"cat_id"=>$cat_id,
	        			"sub_cat_id"=>$sub_cat_id,
	        			"image"=>$valueimg,
	        		);
	        		$this->db->insert('all_images',$images_data);
	        	}
	        }
	        	}
	        }
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully saved.</div>');			
			redirect($this->arr_values['redirect_path'].'listing');	
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$this->load->view($this->arr_values['load_path'].'add',$data);
	}


	function edit()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');
			
			$data['cat_id'] = $cat_id = $this->input->post('cat_id');			
			$data['sub_cat_id'] = $sub_cat_id = $this->input->post('sub_cat_id');			
			

			if($_FILES['thumb_img']['name']!='')
			{
				$thumb_img = rand().'.'.explode(".", $_FILES['thumb_img']['name'])[1];
				$path3 = $this->arr_values['upload_path'].$thumb_img;
				move_uploaded_file($_FILES['thumb_img']['tmp_name'],$path3);
			}
			else
			{
				$thumb_img = $_POST['oldthumb_img'];
			}
			$data['thumb_img'] = $thumb_img;

			if($_FILES['size_chart']['name']!='')
			{
				$size_chart = rand().'.'.explode(".", $_FILES['size_chart']['name'])[1];
				$path3 = $this->arr_values['upload_path'].$size_chart;
				move_uploaded_file($_FILES['size_chart']['tmp_name'],$path3);
			}
			else
			{
				$size_chart = $_POST['oldsize_chart'];
			}
			$data['size_chart'] = $size_chart;
			
			if($_FILES['thumb_img2']['name']!='')
			{
				$thumb_img2 = rand().'.'.explode(".", $_FILES['thumb_img2']['name'])[1];
				$path3 = $this->arr_values['upload_path'].$thumb_img2;
				move_uploaded_file($_FILES['thumb_img2']['tmp_name'],$path3);
			}
			else
			{
				$thumb_img2 = $_POST['oldthumb_img2'];
			}
			$data['thumb_img2'] = $thumb_img2;

			$filename = $_FILES['image']['name'];
			$tempname = $_FILES['image']['tmp_name'];
			$oldimage = $this->input->post('oldimage');

			$allimage = array();
			
			foreach ($filename as $key => $value) 
			{
				if(!empty($value))
				{
					$imagename = rand().$filename[$key];
					$path = $this->arr_values['upload_path'].$imagename;
					move_uploaded_file($tempname[$key],$path);
					$allimage[] = $imagename;
				}
			}			
			if(!empty($oldimage))
			{
				foreach ($oldimage as $key => $value) 
				{
				  $allimage[] = $value;
				}
			}
			if(!empty($allimage))
		    {
		    	$allimage = json_encode($allimage);
		    }
			else
			{
				$allimage = '';
			}
			$data['image'] = $allimage;

			$data['name'] = $this->input->post('name');	
			$data['slug'] = $this->input->post('slug');
			if(empty($data['slug']))
			{
				$slug = slug($data['name']);
			}			
			else
			{
				$slug = slug($data['slug']);
			}
			$data['slug'] = $slug;	
			$data['mrp_price'] = $this->input->post('mrp_price');				
			$data['sale_price'] = $this->input->post('sale_price');			
			$data['rating'] = $this->input->post('rating');			
			$data['sku'] = $this->input->post('sku');	
			$data['description'] = $this->input->post('description');			
			$data['specification'] = $this->input->post('specification');		
			$data['show_home'] = $this->input->post('show_home');			
			$data['new_drops'] = $this->input->post('new_drops');			
			$data['show_sale'] = $this->input->post('show_sale');			
			$data['top_selling'] = $this->input->post('top_selling');	
			$data['sold_out'] = $this->input->post('sold_out');	
			// $data['free_shipping'] = $this->input->post('free_shipping');	
			// $data['shipping_amt'] = $this->input->post('shipping_amt');	


			$data['status'] = $this->input->post('status');
			$data['modifieddate'] = date('y-m-d h:i:sA');

			// $size_id = $this->input->post('size_id');
			$color_id = $this->input->post('color_id');
			$stock = $this->input->post('stock');

			// $size_id = $this->input->post('size_id');
			// $color_id = $this->input->post('color_id');
			// $stock = $this->input->post('stock');
			
			$image_arra = array();
			foreach ($color_id as $key => $value)
			{
				if(isset($_FILES['image'.$key]['name']))
				{
					$images_name = $_FILES['image'.$key]['name'];
					$images_temp = $_FILES['image'.$key]['tmp_name'];
					$oldimage = $this->input->post('oldimage'.$key);
				}
				$m_images = array();

				if(!empty($oldimage))
				{
					foreach ($oldimage as $keyold => $valueold) {
						$m_images[] = $valueold;
					}
				}
				if(!empty($images_name))
				{
					foreach ($images_name as $keyimg => $valueimg)
					{
						$ext = explode(".",$images_name[$keyimg]);
						$ext = end($ext);

						$thumb_img = str_replace($ext,".",slug(rand().$keyimg.$images_name[$keyimg])).$ext;
						$path2 = $this->arr_values['upload_path'].$thumb_img;
						if(move_uploaded_file($images_temp[$keyimg],$path2))
						{
							$m_images[] = $thumb_img;
						}
					}
					$image_arra[] = array(
						"size_id"=>$size_id[$key],
						"color_id"=>$color_id[$key],
						"stock"=>$stock[$key],
						"images"=>$m_images,
						"cat_id"=>$cat_id,
						"sub_cat_id"=>$sub_cat_id,
					);					
				}
			}
			
			// $image_arra = array();
			// foreach ($size_id as $key => $value)
			// {				
			// 	$image_arra[] = array(
			// 		"size_id"=>$size_id[$key],
			// 		"color_id"=>$color_id[$key],
			// 		"stock"=>$stock[$key],
			// 	);					
			// }

			$all_image_color_size = json_encode($image_arra);
			$data['all_images'] = $all_image_color_size;

			$this->crud->update($this->arr_values['table_name'],$args[0],$data);

			$insert_id = $args[0];
			$this->db->delete("all_images",array("p_id"=>$insert_id,));

			if(!empty($image_arra))
	        {
	        	foreach ($image_arra as $key => $value)
	        	{		
	        		foreach ($value['images'] as $keyimg => $valueimg)
	        		{
			        		$images_data = array(
			        			"color_id"=>$value['color_id'],
			        			"size_id"=>$value['size_id'],
			        			"stock"=>$value['stock'],
			        			"p_id"=>$insert_id,
			        			"image"=>$valueimg,
			        			"cat_id"=>$cat_id,
								"sub_cat_id"=>$sub_cat_id,
			        		);
		        		// print_r($images_data);
	        			$this->db->insert('all_images',$images_data);
		        	}			       
	        	}
	        }

	        // if(!empty($image_arra))
	        // {
	        // 	foreach ($image_arra as $key => $value)
	        // 	{	
	        // 		$images_data = array(
	        // 			"size_id"=>$value['size_id'],
	        // 			"color_id"=>$value['color_id'],
	        // 			"stock"=>$value['stock'],
	        // 			"p_id"=>$insert_id,
	        // 		);
	        // 		$this->db->insert('all_images',$images_data);
	        // 	}
	        // }
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully Updated.</div>');
		    redirect($this->arr_values['redirect_path'].'listing');	
		}
		
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'edit',$data);
	}
	


	 public function delete($id)//for deleting the user
	  {
	    $delete=$this->crud->delete($this->arr_values['table_name'],$id);
	      if($delete)
	        {
	          echo "Success";
	        }
	     else
	        {
	          echo "Error";
	        }
	  }




	//----list dekhney ke lia 

	function listing()
	{
		$this->chech_admin_login();
		$this->db->order_by("id desc");
		$data['ALLDATA'] = $this->crud->get_data($this->arr_values['table_name']);

		$data['page_title'] = $this->arr_values['page_title'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['add_url'] = base_url('admin_con/'.$this->arr_values['add_url'].'/add');
		$data['edit_url'] = base_url('admin_con/'.$this->arr_values['edit_url'].'/edit/');
		$data['delete_url'] = base_url('admin_con/'.$this->arr_values['delete_url'].'/delete/');
		$data['view_url'] = base_url('admin_con/'.$this->arr_values['view_url'].'/view/');
		$data['status_value'] = base_url('admin_con/'.$this->arr_values['status_value'].'/new_status');
		$data['upload_path'] = $this->arr_values['upload_path'];
		
		$this->load->view($this->arr_values['load_path'].'list',$data);
	}




	//----------------view

	function view()
	{
		$this->chech_admin_login();
		$args=func_get_args();
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'view',$data);
	}


//---------------------status

	public function status_change()
	{
		if(isset($_POST['submit']))
		{						
			$id = $this->input->post('id');						
			$data['status'] = $this->input->post('status');		
			$this->db->update($this->arr_values['table_name'],$data,array("id"=>$id));
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully Updated.</div>');
		    redirect($this->arr_values['redirect_path'].'listing');	
		}

	}



	public function new_status()
	{
		$status = $this->input->post('status');
		$id = $this->input->post('id');
		$this->db->update($this->arr_values['table_name'],array('status'=>$status),array('id'=>$id));
		$status_html = status($status);
		$data['data'] = array("status"=>$status_html,);
		echo json_encode($data);
	}


	public function sub_categ()
	{	
		$id = $this->input->post('id');
		$city = $this->db->get_where('sub_categories',array('cat_id'=>$id,))->result_object();
		$html = '<option disabled selected>Select Sub Categogies</option>';
		foreach ($city as $key => $value) {
			$html .= '
				<option value="'.$value->id.'">'.$value->name.'</option>
			';
		}		
			$data['status'] = "200";
			$data['data'] = $html;		
		echo json_encode($data);
	}




	public function addmore_image()
	{
		$data = array();
		$data['i'] = $this->input->post("i");
		$this->load->view("admin/product/add-image",$data);
	}

	// public function statusupdate()
	// {	
	// 	//echo "string";
	// 	$data['status'] = $_GET['l_status'];
	// 	$this->crud->update($this->arr_values['table_name'],$_GET['ld'],$data);
	// 	redirect($this->arr_values['redirect_path'].'listing');	
	// }







	











}