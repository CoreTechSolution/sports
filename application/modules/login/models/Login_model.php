<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class login_model extends MY_Model {
	function __construct() {
		parent::__construct();
	}
	function loginMe($username, $password){
		$this->db->select('id,username,email,password,user_role');
		$this->db->from('users');
		$this->db->where('username', $username);

		$query = $this->db->get();
		$user = $query->result();
		if(!empty($user)){
			if(verifyHashedPassword($password, $user[0]->password)){
				return $user;
			} else {
				return array();
			}
		} else {
			return array();
		}
	}
	function checkRegEmailAddress($reg_email_address){
		$this->db->select('id,email');
		$this->db->from('users');
		$this->db->where('email', $reg_email_address);

		$query = $this->db->get();
		$user = $query->result();
		if(!empty($user)){
			return $user;
		} else {
			return array();
		}
	}
	function reset_password($user_id, $password){
		$password_hash = getHashedPassword($password);
		$this->db->set('password', $password_hash);
		$this->db->where('id', $user_id);
		$this->db->update('users');
	}
}
