<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//date_default_timezone_set('Asia/Kolkata');
class MY_Controller extends MX_Controller {
    
    function __construct() {
        parent::__construct();
	    $this->load->library(array('session'));
        $this->load->module(array('templates'));
	    $this->load->helper(array('my_helper'));
    }
}
