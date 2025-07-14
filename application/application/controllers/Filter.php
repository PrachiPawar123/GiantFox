<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {





	public function product_filter()
	{		
		$result = array();

		$color = $this->input->post('color');
		$size = $this->input->post('size');
		$cat_name = $this->input->post('cat_name');
		$sub_cat_name = $this->input->post('sub_cat_name');
		$sort_op = $this->input->post('sort_op');




		$catgory = $this->db->get_where('categories',array('slug'=>$cat_name))->result_object();
		if(!empty($catgory))
			$cat_id = $catgory[0]->id;

		

		$subcatgory = $this->db->get_where('sub_categories',array('slug'=>$sub_cat_name))->result_object();
		if(!empty($subcatgory))
			$sub_cat_id = $subcatgory[0]->id;

		if(!empty($color))
		{		
			$color = explode(",", $color);	
			$this->db->where_in("color_id",$color);
		}
		if(!empty($size))
		{			
			$size = explode(",", $size);
			$this->db->where_in("size_id",$size);
		}
		if(!empty($cat_id))
		{			
			$cat_id = explode(",", $cat_id);
			$this->db->where_in("cat_id",$cat_id);
		}
		if(!empty($sub_cat_id))
		{			
			$sub_cat_id = explode(",", $sub_cat_id);
			$this->db->where_in("sub_cat_id",$sub_cat_id);
		}

		$html = '';

		if(!empty($sort_op))
		{
			if($sort_op==1)
			{
				$this->db->order_by('price asc');
			}
			else
			{
				$this->db->order_by('price desc');
			}
		}
		$this->db->group_by('p_id');
		$all_image = $this->db->get_where('all_images')->result_object();

		$counts = 0;
		$counts = count($all_image);
		
		foreach($all_image as $key => $value)
		{
			$html .= $this->load->view('filter-card',array("value"=>$value,),true);

		}

		if(!empty($html))
		{
			$result['message'] = "data fetch successfully";
            $result['status']  = "200";
            $result['data']    = $html;
            $result['counts']    = $counts;
		}
		else
		{
			$result['message'] = "data not fetch";
            $result['status']  = "400";
            $result['data']    = [];
            $result['counts']    = $counts;
		}

		echo json_encode($result);
	}


















}