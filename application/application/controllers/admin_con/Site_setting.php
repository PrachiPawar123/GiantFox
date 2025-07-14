<?php

class Site_setting extends CI_Controller
{
	///------author for login--


	protected $arr_values = array(
						   	'page_title'=>'Site Setting',
						   	'table_name'=>'site_setting',
						   	'upload_path'=>'media/uploads/site_setting/',
						   	'load_path'=>'admin/site_setting/',
						   ); 




	function chech_admin_login()
	{
		$ci = & get_instance();
	    if(empty($ci->session->userdata('id')))
	    {
	      redirect(base_url().'admin');
	    }
	}


	//---edit function in left menu

	function edit()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['logo']['name'])
			{
				$image = time().'.'.explode(".", $_FILES['logo']['name'])[1];
				$path = $this->arr_values['upload_path'].$image;
				move_uploaded_file($_FILES['logo']['tmp_name'],$path); 
			}
			else
			{
				$image = $_POST['oldimage'];
			}

			$data['logo'] = $image;
			$data['mobile'] = $this->input->post('mobile');
			$data['alt_mobile'] = $this->input->post('alt_mobile');			
			$data['email'] = $this->input->post('email');
			$data['alt_email'] = $this->input->post('alt_email');
			$data['address'] = $this->input->post('address');
			$data['map'] = $this->input->post('map');
			$data['facebook'] = $this->input->post('facebook');
			$data['instagram'] = $this->input->post('instagram');
			$data['youtube'] = $this->input->post('youtube');
			$data['twitter'] = $this->input->post('twitter');
			$data['linkdin'] = $this->input->post('linkdin');
			$data['shipping'] = $this->input->post('shipping');
			$data['other'] = $this->input->post('other');
			$data['express'] = $this->input->post('express');
			$data['amount'] = $this->input->post('amount');
			$data['cod_avali'] = $this->input->post('cod_avali');
			$data['online_avali'] = $this->input->post('online_avali');
			$data['view_all'] = $this->input->post('view_all');
			
			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'edit',$data);
	}



	function video()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['logo']['name'])
			{
				$image = time().'.'.explode(".", $_FILES['logo']['name'])[1];
				$path = $this->arr_values['upload_path'].$image;
				move_uploaded_file($_FILES['logo']['tmp_name'],$path); 
			}
			else
			{
				$image = $_POST['oldimage'];
			}

			$data['logo'] = $image;
			
			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'video',$data);
	}





	function about()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			$data['content'] = $this->input->post('content');
			
			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'about',$data);
	}


	function term()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			$data['content'] = $this->input->post('content');
			
			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'term',$data);
	}
	
	function privacy()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			$data['content'] = $this->input->post('content');
			
			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'privacy',$data);
	}



	function shipping()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			$data['content'] = $this->input->post('content');
			
			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'shipping',$data);
	}



	function cart_image()
		{
			$this->chech_admin_login();
			$args=func_get_args();

			if(isset($_POST['submit']))
			{
				date_default_timezone_set('Asia/Kolkata');

				if($_FILES['logo']['name'])
				{
					$image = time().'.'.explode(".", $_FILES['logo']['name'])[1];
					$path = $this->arr_values['upload_path'].$image;
					move_uploaded_file($_FILES['logo']['tmp_name'],$path); 
				}
				else
				{
					$image = $_POST['oldimage'];
				}

				$data['logo'] = $image;

				if($_FILES['empty_img']['name'])
				{
					$empty_img = rand().'.'.explode(".", $_FILES['empty_img']['name'])[1];
					$path = $this->arr_values['upload_path'].$empty_img;
					move_uploaded_file($_FILES['empty_img']['tmp_name'],$path); 
				}
				else
				{
					$empty_img = $_POST['oldempty_img'];
				}

				$data['empty_img'] = $empty_img;
				
				$this->crud->update($this->arr_values['table_name'],$args[0],$data);
				$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			$data['page_title'] = $this->arr_values['page_title'];
			$data['upload_path'] = $this->arr_values['upload_path'];
			$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
			$this->load->view($this->arr_values['load_path'].'cart-image',$data);
		}




	function checkout_image()
		{
			$this->chech_admin_login();
			$args=func_get_args();

			if(isset($_POST['submit']))
			{
				date_default_timezone_set('Asia/Kolkata');

				if($_FILES['logo']['name'])
				{
					$image = time().'.'.explode(".", $_FILES['logo']['name'])[1];
					$path = $this->arr_values['upload_path'].$image;
					move_uploaded_file($_FILES['logo']['tmp_name'],$path); 
				}
				else
				{
					$image = $_POST['oldimage'];
				}

				$data['logo'] = $image;
				
				$this->crud->update($this->arr_values['table_name'],$args[0],$data);
				$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			$data['page_title'] = $this->arr_values['page_title'];
			$data['upload_path'] = $this->arr_values['upload_path'];
			$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
			$this->load->view($this->arr_values['load_path'].'checkout-image',$data);
		}





	function faq()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			$data['content'] = $this->input->post('content');
			
			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'faq',$data);
	}


	function cancel()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			$data['content'] = $this->input->post('content');
			
			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'cancel',$data);
	}












}