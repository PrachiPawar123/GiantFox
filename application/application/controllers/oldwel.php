<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function brand_products($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('brand',array('slug'=>$id,));
		if(!empty($slugdata))
		{
			$this->load->view('brand-products',$data);
		}
		else
		{
			$this->load->view('error');
		}
	}

	
	public function user_order_view($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('finalorder',array('id'=>$id,));
		if(!empty($slugdata))
		{
			$this->load->view('user-order-view',$data);
		}
		else
		{
			$this->load->view('error');
		}
	}

	

	public function userinvoice()
	{
		$args=func_get_args();  //get id
		$data['EDITDATA']= $this->crud->fetchdatabyid($args[0],'finalorder');
		$this->load->view('userinvoice',$data);
	}

	public function all_product()
	{
		$this->load->view('all-product');
	}

	public function checkout()
	{
		$this->session->set_userdata(array("redirect_url"=>base_url('checkout'),));
		// chech_user_login();
		// $user_id = temp_session_id();
		// $this->db->delete("orders",array("user_id"=>$user_id,"status"=>0,));
		// $this->db->delete("finalorder",array("user_id"=>$user_id,"status"=>0,));
		$this->load->view('checkout');
	}


	public function shop($id='')
	{
		
		if(!empty($id))
		{
			$categories = $this->crud->selectDataByMultipleWhere('categories',array('slug'=>$id,));
			if(!empty($categories))
			{
				// echo "string";
				$categories = $categories[0];
				$cat_id = $categories->id;
				$where = array("cat_id"=>$cat_id,"status"=>1);
			}
			else
			{
				$sub_category = $this->crud->selectDataByMultipleWhere('sub_categories',array('slug'=>$id,));
				$sub_category = $sub_category[0];
				$sub_cate_id = $sub_category->id;
				$where = array("sub_cat_id"=>$sub_cate_id,"status"=>1,);
			}
		}
		else
		{
			$where = array("status"=>1,);
		}

		$this->db->order_by('id desc');
		$productlist = $this->crud->selectDataByMultipleWhere('product',$where);
		$data['productlist'] = $productlist; 
		$this->load->view('shop',$data);
	}


	public function filter($id='')
	{		
		if(!empty($id))
		{
			$all_size = $this->crud->selectDataByMultipleWhere('size',array('slug'=>$id,));

			if(!empty($all_size))
			{				
				$size = $this->crud->selectDataByMultipleWhere('all_images',array('size_id'=>$all_size[0]->id));	
				$where = array("p_id"=>$size[0]->p_id,);
				// print_r($size);		
			}
			else
			{
			// echo "string";
				$all_color = $this->crud->selectDataByMultipleWhere('color',array('slug'=>$id,));
				$color = $this->crud->selectDataByMultipleWhere('all_images',array('color_id'=>$all_color[0]->id));	
				$where = array("p_id"=>$color[0]->p_id,);
			}
		}
		// else
		// {
		// 	$where = array("status"=>0,);
		// }

		$this->db->order_by('id desc');
		$productlist = $this->crud->selectDataByMultipleWhere('all_images',$where);
		$data['productlist'] = $productlist; 
		$this->load->view('filter',$data);
	}



	public function serch()
	{
		$search = $this->input->get("search");



		// $where_query = " game_card_category.status='$status' and game_card_category.is_delete='$is_delete' and game_card_category.game_id='$game_id' ";
		
		$this->db->where(" concat(product.name,categories.name) like '%$search%' ");
		// $this->db->where(" concat(product.name,sub_categories.name) like '%$search%' ");
		
		// $this->db->order_by($order_by);
		// $this->db->where($where_query);
		
		$this->db
			->select("product.*")
			// ->select("categories.name as cat_name")
			// ->select("sub_categories.name as sub_cat_name")
			// ->select("product.id as id")
			// ->select("game.name as game_name")
			->join("categories as categories","categories.id=product.cat_id","LEFT");
			// ->join("sub_categories as sub_categories","sub_categories.id=product.sub_cat_id","LEFT");
			// ->join("sub_categories as sub_categories","sub_categories.id=product.sub_cat_id","LEFT");
		$data['productlist'] = $this->db->get("product")->result_object();







		// $this->db->from('product');
		// $this->db->like('name', $search);
		// $this->db->like('cat_id',$cat_id);
		// $query = $this->db->get()->result_object();
		// $data['productlist'] = $query;
		// print_r($query);
		$this->load->view('shop',$data);

	}


	public function product_details($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('product',array('slug'=>$id,));
		$slugid = $slugdata[0]->id;
		$this->load->view('product-details',$data);
	}

	public function blog_details($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('blog',array('slug'=>$id,));
		$slugid = $slugdata[0]->id;
		$this->load->view('blog-details',$data);
	}









	// -------model view----------
	public function modelviews()
	{	

		$id = $this->input->post('id');

		$property = $this->db->get_where('product',array('id'=>$id,))->result_object();
		$property = $property[0];

		$color_id = 0;
        $this->db->group_by('color_id');
        $this->db->limit(1);
        $this->db->select("color_id");
        $color = $this->db->get_where('all_images',array('p_id'=>$id,))->result_object();
        if(!empty($color))
        {
            foreach ($color as $key => $value3) 
            { 
                $color_id = $value3->color_id;
                break;
            } 
        }
        $size_id = 0;
        $this->db->group_by('size_id');
        $this->db->limit(1);
        $this->db->select("size_id");
        $color = $this->db->get_where('all_images',array('p_id'=>$id,))->result_object();
        if(!empty($color))
        {
            foreach ($color as $key => $value4) 
            { 
                $size_id = $value4->size_id;
                break;
            } 
        }

		$this->db->group_by('p_id');
		$allimage = $this->crud->selectDataByMultipleWhere('all_images',array('p_id'=>$id,'color_id'=>$color_id,'size_id'=>$size_id));



		$rating_html = '';
		$color_html = '';
		$size_html = '';
		$image_html = '';

		$i = 0;
		while($i<5)
		{
			if($i<$property->rating)
				$rating_html .= '<li class="rating__list">
	                                <span class="rating__list--icon">
	                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
	                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
	                                    </svg>
	                                </span>
	                            </li>';
			else
				$rating_html .= '';
			$i++;
		}		

		$colors = explode(",",$property->color_id);
		if(!empty($colors))
		{
			foreach ($colors as $key => $value) 
			{
				$get_color = $this->db->get_where("color",array("id"=>$value,))->result_object();
				if(!empty($get_color))
				{
					$get_color = $get_color[0];
					$color_html .= '<input id="color'.$key.'" name="color" type="radio" checked><label class="variant__color--value" for="color'.$key.'" title="'.$get_color->name.'" style="background-color: '.$get_color->color_code.';"></label>';
				}
			}
		}

		$size = explode(",",$property->size_id);
		if(!empty($size))
		{
			foreach ($size as $key => $value) 
			{
				$get_size = $this->db->get_where("size",array("id"=>$value,))->result_object();
				if(!empty($get_size))
				{
					$get_size = $get_size[0];
					$size_html .= '<label class="variant__size--value" for="size'.$key.'">'.$get_size->name.'</label><input id="size'.$key.'" name="size" type="radio" checked>';
				}
			}
		}

		$images = $property->thumb_img;
		if(!empty($images))
		{
			// foreach ($images as $key => $value) 
			// {
			// 	if($key==0)break;
				$image_html .=  '<div class="quickview__product--media product__details--media">
                            <div class="product__media--preview  swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="'.base_url().''.'media/uploads/product/'.''.$images.'"><img class="product__media--preview__items--img" src="'.base_url().''.'media/uploads/product/'.''.$images.'" alt="product-media-img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
			// }
		}

		$html = array(
			"image"=>$property->image,
			"name"=>$property->name,
			"rating"=>$rating_html,
			"original_price"=>$allimage[0]->price,
			"cut_price"=>$allimage[0]->cut_price,
			"small_info"=>$property->small_info,
			"color_id"=>$color_html,
			"size_id"=>$size_html,
			"image"=>$image_html,
		);
		$data['status'] = "200";
		$data['data'] = $html;	
		echo json_encode($data);
	}









	public function all($page)
	{
		$data = array();		
		$check_page = FCPATH.'application/views/'.$page.'.php';
		if(file_exists($check_page))
		{
			$this->load->view($page,$data);
		}
		else
		{
			$this->load->view('error');
		}
		
	}






	function image_by_colorsize()
    {
        $result = array();        
      
        $p_id = $this->input->post("p_id");
        $size_id = $this->input->post("size_id");
        $color_id = $this->input->post("color_id");
        $rowd = array();
        if(!empty($p_id) && !empty($size_id) && !empty($color_id))
        {
            $where = array(
                    "p_id"=>$p_id,
                    "size_id"=>$size_id,
                    "color_id"=>$color_id,
                );
            $rowd = $this->db->get_where("all_images",$where)->result_object();
        }
        
       
        $image_html = '';
        $image_html2 = '';
        $image = '';
        $get_price = '';
        $i=0;
		foreach($rowd as $key => $row)
        {
        	$i++;
        	$image = base_url('media/uploads/product/'.$row->image);

        	$image_html .=  '<div class="mySlides">
                        <img src="'.$image.'" style="width:100%" alt="jjj">
                      </div>';
        	$image_html2 .= '<div class="column">
                          <img class="demo cursor" src="'.$image.'" style="width:100%" onclick="currentSlide('.$i.')"  alt="jjj">
                        </div>';
			$get_price = array(
				"price"=>number_format($row->price,2),
				"cut_price"=>number_format($row->cut_price,2),
			);
		}       



        if(!empty($image_html))
        {
            $result['message'] = "data fetch successfully";
            $result['status']  = "200";
            $result['data']    = $image_html;
            $result['data2']    = $image_html2;
            $result['get_price']    = $get_price;
        }

        else
            {
                $result['message'] = "data not fetch";
                $result['status']  = "400";
                $result['data']    = [];
                $result['data2']    = [];
                $result['get_price']    = [];
            }

        echo json_encode($result);
    }





    /*---get stock details--*/

    public function get_stock()
    {
    	$result = array();

    	$p_id = $this->input->post('p_id');
    	$size_id = $this->input->post('size_id');
    	$color_id = $this->input->post('color_id');

    	$stock = 0;
    	$image = '';

    	if(!empty($p_id) && !empty($size_id) && !empty($color_id))
    	{
    		$where = array(
    			'p_id'=>$p_id,
    			'size_id'=>$size_id,
    			'color_id'=>$color_id,
    		);
    	}
    	$this->db->group_by('p_id');
    	$allimage = $this->crud->selectDataByMultipleWhere('all_images',$where);
    	if(!empty($allimage))
    		$stock = $allimage[0]->stock;
    		$image = $allimage[0]->image;

    	if(!empty($allimage))
    	{
    		$result['status'] = '200';
    		$result['message'] = 'Data fetch Successfully';
    		$result['data'] = $stock;
    		$result['image'] = $image;
    	}
    	else
    	{
    		$result['status'] = '400';
    		$result['message'] = 'Not Found';
    		$result['data'] = [];
    		$result['image'] = [];
    	}
    	echo json_encode($result);
    }





 







	public function enquiry_form()
	{
		if(isset($_POST['submit']))
		{
			$data2['name'] = $this->input->post('name');
			$data2['email'] = $this->input->post('email');
			// $data2['mobile'] = $this->input->post('mobile');
			$data2['subject'] = $this->input->post('subject');
			$data2['message'] = $this->input->post('message');

			$this->crud->insert('contact',$data2);
			$this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully Sent.</div>');			

			redirect($_SERVER['HTTP_REFERER']);
		}
	}






	// public function contact()
	// {
	// 	if(isset($_POST['submit']))
	// 	{
	// 		$data2['name'] = $this->input->post('name');
	// 		$data2['email'] = $this->input->post('email');
	// 		$data2['mobile'] = $this->input->post('mobile');
	// 		$data2['subject'] = $this->input->post('subject');
	// 		$data2['regarding'] = $this->input->post('regarding');
	// 		$data2['message'] = $this->input->post('message');

	// 		$this->crud->insert('contact',$data2);

	// 		$message = '
	// 		 <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
	// 		    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"font-family: sans-serif;">
	// 		        <tr>
	// 		            <td>
	// 		                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
	// 		                    align="center" cellpadding="0" cellspacing="0">
	// 		                    <tr>
	// 		                        <td style="height:80px;">&nbsp;</td>
	// 		                    </tr>
	// 		                    <!-- Logo -->
	// 		                    <tr>
	// 		                        <td style="text-align:center;">
	// 		                          <a href="https://rakeshmandal.com" title="logo" target="_blank">
	// 		                            <img width="60" src="http://smartacademy.life/media/uploads/site_setting/hjh.png" title="logo" alt="logo">
	// 		                          </a>
	// 		                        </td>
	// 		                    </tr>
	// 		                    <tr>
	// 		                        <td style="height:20px;">&nbsp;</td>
	// 		                    </tr>
	// 		                    <!-- Email Content -->
	// 		                    <tr>
	// 		                        <td>
	// 		                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
	// 		                                style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
	// 		                                <tr>
	// 		                                    <td style="height:40px;">&nbsp;</td>
	// 		                                </tr>
	// 		                                <!-- Title -->
	// 		                                <tr>
	// 		                                    <td style="padding:0 15px; text-align:center;">
	// 		                                        <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;font-family:sans-serif;">Join us as a Trainee Form</h1>
	// 		                                        <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; 
	// 		                                        width:100px;"></span>
	// 		                                    </td>
	// 		                                </tr>
	// 		                                <!-- Details Table -->
	// 		                                <tr>
	// 		                                    <td>
	// 		                                        <table cellpadding="0" cellspacing="0"
	// 		                                            style="width: 100%; border: 1px solid #ededed">
	// 		                                            <tbody>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Name:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["name"].'</td>
	// 		                                                </tr>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Email:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["email"].'</td>
	// 		                                                </tr>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Mobile:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["mobile"].'</td>
	// 		                                                </tr>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Regarding:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["regarding"].'</td>
	// 		                                                </tr>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                       Subject:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["subject"].'</td>
	// 		                                                </tr>
			                                                                                               
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Message:</td>
	// 		                                                    <td style="padding: 10px; color: #455056;">'.$_POST["message"].'</td>
	// 		                                                </tr>
	// 		                                            </tbody>
	// 		                                        </table>
	// 		                                    </td>
	// 		                                </tr>
	// 		                                <tr>
	// 		                                    <td style="height:40px;">&nbsp;</td>
	// 		                                </tr>
	// 		                            </table>
	// 		                        </td>
	// 		                    </tr>
	// 		                    <tr>
	// 		                        <td style="height:20px;">&nbsp;</td>
	// 		                    </tr>
	// 		                    <tr>
	// 		                        <td style="text-align:center;">
	// 		                                <p style="font-size:14px; color:#455056bd; line-height:18px; margin:0 0 0;">&copy; <strong>http://smartacademy.life/</strong></p>
	// 		                        </td>
	// 		                    </tr>
	// 		                </table>
	// 		            </td>
	// 		        </tr>
	// 		    </table>
	// 		</body>
	// 		 ';


	// 	  $this->mail->sendmail($message);

	// 	  $this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully Submit.</div>');

	// 	}
	// 	$this->load->view('contact');
	// }




	// public function career_form()
	// {
	// 	if(isset($_POST['submit']))
	// 	{
	// 		if($_FILES['image']['name']!='')
	// 		{
	// 			$bimage = $_FILES['image']['name'];
	// 			$path = 'media/uploads/career/'.$bimage;
	// 			move_uploaded_file($_FILES['image']['tmp_name'],$path);
	// 		}
	// 		else
	// 		{
	// 			$bimage = "";
	// 		}
	// 		$data['image'] = $bimage;
	// 		$data['name'] = $this->input->post('name');			
	// 		$data['email'] = $this->input->post('email');			
	// 		$data['mobile'] = $this->input->post('mobile');			
	// 		$data['job_profile'] = $this->input->post('job_profile');			
	// 		$data['message'] = $this->input->post('message');

	// 		$this->crud->insert('career',$data);
	// 		redirect($_SERVER['HTTP_REFERER']);
	// 	}

	// }











}
