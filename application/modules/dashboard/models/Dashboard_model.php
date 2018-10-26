<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Dashboard_model extends MY_Model {
	function __construct() {
		parent::__construct();
	}
	function get_user_data_by_id($user_id){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id', $user_id);
		$query = $this->db->get();
		$user = $query->result();
		if(!empty($user)){
			return $user;
		} else {
			return array();
		}
	}
}