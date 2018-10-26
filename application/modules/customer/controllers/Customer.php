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
        $this->load->model('customer_m');
    }

    public function dashboard(){
        isLogin();
        $data['page_title'] = 'Dashboard';
        $data['nav_title'] = 'Dashboard';
        $data['login_as'] = $this->session->userdata('username');
        $data['user_role'] = $this->session->userdata('user_role');
        $data['user_id'] = $this->session->userdata('user_id');
        $data['page_content'] = 'customer/dashboard_v';
        $this->templates->call_user_template($data);
    }
    public function become_league_owner(){
        isLogin();
        $data['page_title'] = 'League Owner';
        $data['nav_title'] = 'League Owner';
        $data['login_as'] = $this->session->userdata('username');
        $data['user_role'] = $this->session->userdata('user_role');
        $data['user_id'] = $this->session->userdata('user_id');
        $user_data = $this->customer_m->get_user_data_by_id($this->session->userdata('user_id'));
        if(count($user_data) > 0) {
            foreach($user_data as $ud){
                $data['first_name'] = $ud->first_name;
                $data['last_name'] = $ud->last_name;
                $data['email'] = $ud->email;
            }
        }
        $data['page_content'] = 'customer/become_league_owner_view';
        $this->templates->call_user_template($data);
    }
    public function edit_profile($id){
        $data['page_title'] = 'League Owner';
        $data['nav_title'] = 'League Owner';
        $data['login_as'] = $this->session->userdata('username');
        $data['user_role'] = $this->session->userdata('user_role');
        $data['user_id'] = $this->session->userdata('user_id');
        $data['page_content'] = 'customer/edit_profile_v';
        if(!empty($this->input->post('save'))){

        }
        $this->templates->call_user_template($data);
    }
}