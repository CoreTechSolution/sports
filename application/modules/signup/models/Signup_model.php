<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Signup_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	function signup_insert($form_data){
		$data = array(
			'username'     => $this->input->post('username'),
			'first_name'  => $this->input->post('first_name'),
			'last_name'   => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'password' => getHashedPassword($this->input->post('password')),
			'user_role' => 'customer',
			'profile_img' => '',
			'status' => 0,
			'user_registered' => date('Y-m-d H:i:s'),
			'last_loggedin' => '0000-00-00 00:00:00',
			'loggedin_session_id' => '',
		);
		$this->db->insert('users',$data);
		$user_id = $this->db->insert_id();
		return  $user_id;
	}
	function activation($user_id){
		$this->db->set('status', 1);
		$this->db->where('id', $user_id);
		$this->db->update('users');
	}
}
