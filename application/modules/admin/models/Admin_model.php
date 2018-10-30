<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Admin_model extends MY_Model {
    protected $_tbl_name='users';
	function __construct() {
		parent::__construct();
	}
	function add_category($category_name, $category_slug){
		$data = array(
			'category_name'     => $category_name,
			'slug'  => $category_slug,
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
	function add_venue($venue_name, $venue_location, $venue_slug){
		$data = array(
			'location_name' => $venue_name,
			'location_address' => $venue_location,
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

	function add_ground($ground_name, $ground_category, $ground_location, $ground_slot_timing, $ground_format, $ground_surface, $ground_radius, $ground_facilities, $ground_slug){
		$data = array(
			'ground_name' => $ground_name,
			'ground_category' => $ground_category,
			'ground_location' => $ground_location,
			'ground_slot_timing' => $ground_slot_timing,
			'ground_format' => $ground_format,
			'ground_surface' => $ground_surface,
			'ground_radius' => $ground_radius,
			'ground_facilities' => $ground_facilities,
			'slug' => $ground_slug,
		);
		$this->db->insert('grounds',$data);
		$ground_id = $this->db->insert_id();
		return $ground_id;
	}
	function get_grounds(){
		$this->db->select('*');
		$this->db->from('grounds');

		if($query = $this->db->get()) {
			return $query->result_array();
		} else {
			return false;
		}
	}
	function delete_ground($ground_id) {
		$this->db->where('ground_id', $ground_id);
		$this->db->delete('grounds');
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