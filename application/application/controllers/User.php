<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login()
	{
		$this->load->view('login');
	}

	public function my_account()
	{
		chech_user_login();
		$ci = & get_instance();
	    if(empty($ci->session->userdata('userdashboard')))
	    {
	      redirect(base_url().'login');
	    }

	    $this->load->library("pagination");			
		$config = array();  
        $config["base_url"] = base_url().'/my-account';
        $config["total_rows"] = count($this->crud->get_data('finalorder'));
		$config["per_page"] = 10; // per page how many data you want to show
        $config["uri_segment"] = 2; // your url segment
		 
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"] = $this->pagination->create_links(); 
        $this->db->order_by('id desc');        
		$data['temp']= $this->crud->selectdatainlimit($config["per_page"], $page,'finalorder',array('status'=>1,)); 

		$this->load->view('my-account',$data);
	}

	

	public function registration()
	{
		if(isset($_POST['submit']))
		{
			$data2['image'] = "user.jpg";
			$data2['username'] = $username = $this->input->post('username');
			$data2['email'] = $email = $this->input->post('email');
			$data2['mobile'] = $this->input->post('mobile');
			$data2['password'] = $this->input->post('password');
			$data2['status'] = '1';
			$data2['addeddate'] = date('Y-m-d H:i:s');
			$checkuser = $this->crud->selectDataByMultipleWhere('registration',array('email'=>$email));
			if(empty($checkuser))
			{
				$this->crud->insert('registration',$data2);
				$this->session->set_flashdata('message','<div class="alert alert-success">You have been successsully Registration.</div>');
				redirect('login');	
			}
			else
			{
				$this->session->set_flashdata('message','<div class="alert alert-danger">Username Already Exits.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}



	public function user_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$row = $this->crud->selectDataByMultipleWhere('registration',array('email'=>$email,'password'=>$password,'status'=>1,));
		$temp_session_id = temp_session_id();
		if(count($row)==1)
		{
			foreach($row as $user)
			{
				$data = array(
							'userdashboard'=>$user->id,
							  'EMAIL' =>$user->email,
							  'logged_in' => true,
							   'id'=>$user->id,
							);
				$this->session->set_userdata($data);
				$user_id = $user->id;
				$this->db->update("add_to_temp_cart",array("temp_user_id"=>$user_id,),array("temp_user_id"=>$temp_session_id,));

				$this->db->update("add_to_wishlist",array("temp_user_id"=>$user_id,),array("temp_user_id"=>$temp_session_id,));
			}
			redirect('my-account');
			// if(!empty($this->session->userdata("redirect_url")))
			// {
			// 	$redirect_url = $this->session->userdata("redirect_url");
			// 	$this->session->unset_userdata("redirect_url");
			// 	redirect($redirect_url);
			// }
			// else
			// {
			// 	redirect('user-account');
			// }
		}
		else
		{
		  $this->session->set_flashdata('message','<div class="alert alert-danger">Invalid Email and Password.</div>');
		  redirect($_SERVER['HTTP_REFERER']);
		}

	}


	public function userlogout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message','<div class="alert alert-success">You have been successsully logout.</div>');
		redirect('');
	}


	/*chane pass*/
	public function user_password_update()
	{
		if(isset($_POST['submit']))
		{

			$old_password = $this->input->post('old_password');
			$checkpass = $this->crud->selectDataByMultipleWhere('registration',array('password'=>$old_password,));
			if($old_password==$checkpass[0]->password)
			{
				$id = temp_session_id();
				$data2['password'] = $this->input->post('password');
				$this->db->update('registration',$data2,array("id"=>$id,));
				$this->session->set_flashdata('update_message','<div class="alert alert-success">Password has been successfully updated.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$this->session->set_flashdata('update_message','<div class="alert alert-danger">Old Password Not Match.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			
			

		}		
	}


	public function user_update()
	{
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			// if($_FILES['image']['name']!='')
			// {
			// 	$image = $_FILES['image']['name'];
			// 	$path = 'media/uploads/'.$image;
			// 	move_uploaded_file($_FILES['image']['tmp_name'],$path);
			// }

			// else
			// {
			// 	$image = $_POST['oldimage'];
			// }
			// $data2['image'] = $image;

			$id = temp_session_id();
			$data2['username'] = $this->input->post('username');
			
			$data2['firstname'] = $this->input->post('firstname');
			$data2['lastname'] = $this->input->post('lastname');
			$data2['username'] = $this->input->post('username');
			
			$data2['mobile'] = $this->input->post('mobile');
			// $data2['city'] = $this->input->post('city');
			// $data2['address'] = $this->input->post('address');
			// $data2['post_code'] = $this->input->post('post_code');
			// $data2['country'] = $this->input->post('country');
			// $data2['state'] = $this->input->post('state');

			$this->db->update('registration',$data2,array("id"=>$id,));
			
			$this->session->set_flashdata('update_message','<div class="alert alert-success">Record has been successfully updated.</div>');
			redirect($_SERVER['HTTP_REFERER']);

		}		
	}






	public function check_login()
	{
	    if(empty($this->session->userdata("userdashboard")))
	    {
	    	$this->load->view("login");
	    }
	    else
	    {
	    	echo "200";
	    }
	}


	



}
