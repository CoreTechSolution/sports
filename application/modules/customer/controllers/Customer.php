<?php
/**
 * Created by PhpStorm.
 * User: coregen3
 * Date: 26/10/18
 * Time: 4:21 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller{
    public function __construct(){
        parent::__construct();
        //$this->load->model('admin_model');
    }

    public function dashboard(){
        isLogin();
        $data['page_title'] = 'Dashboard';
        $data['nav_title'] = 'Dashboard';
        $data['login_as'] = $this->session->userdata('username');
        $data['user_role'] = $this->session->userdata('user_role');
        $data['user_id'] = $this->session->userdata('user_id');
        $data['page_content'] = 'dashboard/Dashboard_view';
        $this->templates->call_user_template($data);
    }
}