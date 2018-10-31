<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_models extends MY_Model {
	function __construct() {
		parent::__construct();
	}

	function venue_search($sport_id){
		$this->db->select('*');
		$this->db->from('venues');
		$this->db->where('venue_category', $sport_id);

		$query = $this->db->get();
		$venus = $query->result();
		if(!empty($venus)){
			return $venus;
		} else {
			return array();
		}
	}
}