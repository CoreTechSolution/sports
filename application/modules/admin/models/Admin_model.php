<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Admin_model extends MY_Model {
    protected $_tbl_name='users';
	function __construct() {
		parent::__construct();
	}
	function add_category($category_name, $category_slug, $sports_icon){
		$data = array(
			'category_name'     => $category_name,
			'slug'  => $category_slug,
			'sports_icon'  => $sports_icon,
		);
		$this->db->insert('sports_categories',$data);
		$category_id = $this->db->insert_id();
		return $category_id;
	}
	function get_sports_categories(){
		$this->db->select('*');
		$this->db->from('sports_categories');

		if($query = $this->db->get()) {
			return $query->result_array();
		} else {
			return false;
		}
	}
	function delete_category($category_id) {
		$this->db->where('category_id', $category_id);
		$this->db->delete('sports_categories');
	}
	function add_venue($venue_name, $venue_slug){
		$data = array(
			'location_name' => $venue_name,
			//'location_address' => $venue_location,
			'slug' => $venue_slug,
		);
		$this->db->insert('locations',$data);
		$location_id = $this->db->insert_id();
		return $location_id;
	}
	function get_venues(){
		$this->db->select('*');
		$this->db->from('locations');

		if($query = $this->db->get()) {
			return $query->result_array();
		} else {
			return false;
		}
	}
	function delete_venue($venue_id) {
		$this->db->where('location_id', $venue_id);
		$this->db->delete('locations');
	}

	function add_ground($ground_name, $venue_address, $ground_location, $venue_zipcode, $ground_category, $ground_format, $ground_surface, $ground_facilities, $venue_prices, $venue_opening_hrs, $venue_description, $ground_slug, $venue_featured_img){
		$data = array(
			'venue_name' => $ground_name,
			'venue_address' => $venue_address,
			'venue_location' => $ground_location,
			'venue_zipcode' => $venue_zipcode,
			'venue_category' => $ground_category,
			'venue_format' => $ground_format,
			'venue_surface' => $ground_surface,
			'venue_facilities' => $ground_facilities,
			'venue_prices' => $venue_prices,
			'venue_opening_hrs' => $venue_opening_hrs,
			'venue_description' => $venue_description,
			'slug' => $ground_slug,
			'venue_featured_img' => $venue_featured_img,
		);
		$this->db->insert('venues',$data);
		$venue_id = $this->db->insert_id();
		return $venue_id;
	}
	function get_grounds(){
		$this->db->select('*');
		$this->db->from('venues');

		if($query = $this->db->get()) {
			return $query->result_array();
		} else {
			return false;
		}
	}
	function delete_ground($venue_id) {
		$this->db->where('venue_id', $venue_id);
		$this->db->delete('venues');
	}
	function get_affiliates($conditions=array('1'),$rows=false){
	    $this->_tbl_name='affiliates';
	    if(!empty($conditions)){
            $affiliates=$this->get_data();
        } else{
            $affiliates=$this->get_by($conditions,$rows);
        }
	    if($affiliates){
	        return $affiliates;
        } else{
	        return false;
        }

    }
    function insert_affiliate($value){
        $this->_tbl_name='affiliates';
        $insert=$this->common_insert($value);
        if($insert){
            return $insert;
        } else {
            return false;
        }
    }
    function edit_affiliate($value,$condition){
	    $this->_tbl_name='affiliates';
	    $update=$this->common_update($value,$condition);
        if($update){
            return $update;
        } else {
            return false;
        }
    }
}