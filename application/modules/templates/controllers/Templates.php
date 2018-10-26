<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Templates extends MY_Controller {
	function __construct() {
		parent::__construct();
	}
	public function call_template($data = null) {
		$this->load->view('templates/template_v', $data);
	}
	public function call_admin_template($data = null) {
		$this->load->view('templates/admin_template_view', $data);
	}
	public function call_user_template($data = null) {
		$this->load->view('templates/user_template_view', $data);
	}
	public  function call_error_template($data = null){
        $this->load->view('templates/error_v', $data);
    }
}