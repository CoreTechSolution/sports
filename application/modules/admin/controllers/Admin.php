<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Admin extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index() {
		isLogin();
		redirect(base_url('admin/dashboard'));
	}
	public function dashboard(){
		isLogin();
		$data['page_title'] = 'Dashboard';
		$data['nav_title'] = 'Dashboard';
		$data['page_content'] = 'admin/dashboard_view';
		$this->templates->call_admin_template($data);
	}
	public function sports_categories(){
		isLogin();
		$sports_categories = $this->admin_model->get_sports_categories();
		$data['page_title'] = 'Sports';
		$data['nav_title'] = 'Sports';
		$data['page_content'] = 'admin/sports_categories_view';
		$data['sports_categories'] = $sports_categories;
		$this->templates->call_admin_template($data);
	}
	public function add_category(){
		isLogin();
		$data['page_title'] = 'Add Sports';
		$data['nav_title'] = 'Add Sports';
		$data['page_content'] = 'admin/add_sports_category_view';
		$this->templates->call_admin_template($data);
	}
	public function add_category_form() {
		isLogin();
		if($this->input->post('submit')) {
			$category_name = $this->input->post( 'category_name' );
			$category_slug = slugify($category_name);
			if(!empty($_FILES['sports_icon']['name'])) {
				echo $img_path = image_upload($_FILES,'sports_icon','uploads/profile');
				if($img_path){
					$sports_icon = $img_path;
				} else {
					$sports_icon = '';
				}
			}
			$category_id = $this->admin_model->add_category($category_name, $category_slug, $sports_icon);
			if(!empty($category_id)){
				redirect(base_url('admin/sports-categories'));
			}
		}
	}
	public function delete_category(){
		isLogin('admin');
		$category_id = $this->input->get('category_id');
		$this->admin_model->delete_category($category_id);
		redirect('admin/sports-categories');
	}
	public function venues(){
		isLogin();
		$data['page_title'] = 'Locations';
		$data['nav_title'] = 'Locations';
		$data['page_content'] = 'admin/venues_view';
		$venues = $this->admin_model->get_venues();
		$data['venues'] = $venues;
		$this->templates->call_admin_template($data);
	}
	public function add_venue(){
		isLogin();
		$data['page_title'] = 'Add Location';
		$data['nav_title'] = 'Add Location';
		$data['page_content'] = 'admin/add_venue_view';
		$this->templates->call_admin_template($data);
	}
	public function add_venue_form() {
		if($this->input->post('submit')) {
			$venue_name = $this->input->post( 'venue_name' );
			//$venue_location = $this->input->post( 'venue_location' );
			$venue_slug = slugify($venue_name);
			$venue_id = $this->admin_model->add_venue($venue_name, $venue_slug);
			if(!empty($venue_id)){
				redirect(base_url('admin/venues'));
			}
		}
	}
	public function delete_venue(){
		isLogin('admin');
		$venue_id = $this->input->get('location_id');
		$this->admin_model->delete_venue($venue_id);
		redirect('admin/venues');
	}
	public function grounds(){
		isLogin();
		$data['page_title'] = 'Venues';
		$data['nav_title'] = 'Venues';
		$data['page_content'] = 'admin/grounds_view';
		$grounds = $this->admin_model->get_grounds();
		$data['grounds'] = $grounds;
		$this->templates->call_admin_template($data);
	}
	public function add_ground(){
		isLogin();
		$data['page_title'] = 'Add Venue';
		$data['nav_title'] = 'Add Venue';
		$venues = $this->admin_model->get_venues();
		$data['locations'] = $venues;
		$sports_categories = $this->admin_model->get_sports_categories();
		$data['categories'] = $sports_categories;
		$data['page_content'] = 'admin/add_ground_view';
		$this->templates->call_admin_template($data);
	}
	public function add_ground_form() {
		if($this->input->post('submit')) {
			$ground_name = $this->input->post( 'ground_name' );
			$venue_address = $this->input->post( 'venue_address' );
			$ground_location = $this->input->post( 'ground_location' );
			$venue_zipcode = $this->input->post( 'venue_zipcode' );
			$ground_category = $this->input->post( 'ground_category' );
			$ground_format = $this->input->post( 'ground_format' );
			$ground_surface = $this->input->post( 'ground_surface' );
			$ground_facilities = $this->input->post( 'ground_facilities' );
			$venue_prices = $this->input->post( 'venue_prices' );
			$venue_opening_hrs = $this->input->post( 'venue_opening_hrs' );
			$venue_description = $this->input->post( 'venue_description' );
			$ground_slug = slugify($ground_name);

			if(!empty($_FILES['venue_featured_img']['name'])) {
				echo $img_path = image_upload($_FILES,'venue_featured_img','uploads/venue');
				if($img_path){
					$venue_featured_img = $img_path;
				} else {
					$venue_featured_img = '';
				}
			}

			$venue_id = $this->admin_model->add_ground($ground_name, $venue_address, $ground_location, $venue_zipcode, $ground_category, $ground_format, $ground_surface, $ground_facilities, $venue_prices, $venue_opening_hrs, $venue_description, $ground_slug, $venue_featured_img);
			if(!empty($venue_id)){
				redirect(base_url('admin/grounds'));
			}
		}
	}
	public function delete_ground(){
		isLogin('admin');
		$venue_id = $this->input->get('venue_id');
		$this->admin_model->delete_ground($venue_id);
		redirect('admin/grounds');
	}
	public function affiliates(){
        isLogin('admin');
        $data['page_title'] = 'Affiliates';
        $data['nav_title'] = 'Affiliates';
        $data['affiliates'] = $this->admin_model->get_affiliates();
        $data['page_content'] = 'admin/affiliates_v';
        $this->templates->call_admin_template($data);
    }
    public function add_affiliate(){
        isLogin('admin');
        $data['page_title'] = 'Affiliates';
        $data['nav_title'] = 'Affiliates';
        $data['page_content'] = 'admin/add_affiliate_v';
        $data['method']='admin/add_affiliate';
        if(!empty($this->input->post('save'))){
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('link', 'link', 'trim|required|valid_url');
            if ($this->form_validation->run() == false) {
                $this->templates->call_admin_template($data);
            } else {
                $value['title'] = $this->input->post('title');
                $value['link'] = $this->input->post('link');
                if(!empty($_FILES['banner_img']['name'])){
                    $img_path=image_upload($_FILES,'banner_img','uploads/a_banner');
                    if($img_path){
                        $value['banner_img']=$img_path;
                    } else{
                        $this->templates->call_admin_template($data);
                        return false;
                    }
                }
                $user_id = $this->admin_model->insert_affiliate($value);
                //echo $this->db->last_query(); exit();
                if ($user_id > 0) {

                    $this->session->set_flashdata(array('msg_type'=>'success','msg'=>'Affiliate added'));
                    $this->templates->call_admin_template($data);
                } else {
                    $this->session->set_flashdata(array('msg_type'=>'error','msg'=>'Something wrong! Please try again  later'));
                    $this->templates->call_admin_template($data);
                }
            }
        } else{
            $this->templates->call_admin_template($data);
        }
        //$this->templates->call_admin_template($data);
    }

    public function edit_affiliate($id){
        isLogin('admin');
        $data['page_title'] = 'Edit Affiliate';
        $data['nav_title'] = 'Edit Affiliate';
        $data['page_content'] = 'admin/edit_affiliate_v';
        $data['method']='admin/edit_affiliate';
        $data['affiliates']=$this->admin_model->get_affiliates(array('id'=>$id,true));
        if(!empty($this->input->post('save'))){
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('link', 'link', 'trim|required|valid_url');
            if ($this->form_validation->run() == false) {
                $this->templates->call_admin_template($data);
            } else {
                $value['title'] = $this->input->post('title');
                $value['link'] = $this->input->post('link');
                if(!empty($_FILES['banner_img']['name'])){
                    $img_path=image_upload($_FILES,'banner_img','uploads/a_banner');
                    if($img_path){
                        $value['banner_img']=$img_path;
                    } else{
                        $this->templates->call_admin_template($data);
                        return false;
                    }
                }
                $condition=array('id'=>$id);
                $user_id = $this->admin_model->edit_affiliate($value, $condition);
                //echo $this->db->last_query(); exit();
                if ($user_id > 0) {

                    $this->session->set_flashdata(array('msg_type'=>'success','msg'=>'Update successful'));
                    //$data['page_content'] = 'admin/affiliates_v';
                    //$this->templates->call_admin_template($data);
                    redirect(base_url('admin/affiliates'));
                } else {
                    $this->session->set_flashdata(array('msg_type'=>'error','msg'=>'Something wrong! Please try again  later'));
                    $this->templates->call_admin_template($data);
                }
            }
        }else{
            $this->templates->call_admin_template($data);
        }
    }

	public function cities(){
		isLogin();
		$data['page_title'] = 'Cities';
		$data['nav_title'] = 'Cities';
		$data['page_content'] = 'admin/cities_view';
		$cities = $this->admin_model->get_cities();
		$data['cities'] = $cities;
		$this->templates->call_admin_template($data);
	}
	public function delete_city(){
		isLogin('admin');
		$city_id = $this->input->get('id');
		$this->admin_model->delete_city($city_id);
		redirect('admin/cities');
	}
}