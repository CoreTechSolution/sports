<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class MY_Model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
}