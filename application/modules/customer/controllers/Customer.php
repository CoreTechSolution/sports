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
        isLogin();
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
    public function profile(){
        isLogin();
        $data['page_title'] = 'My Account';
        $data['nav_title'] = 'My Account';
        $data['login_as'] = $this->session->userdata('username');
        $data['user_role'] = $this->session->userdata('user_role');
        $data['user_id'] = $this->session->userdata('user_id');
        $data['method']='profile';
        $data['get_users']=$this->users->get_users(array('id'=>$this->session->userdata('user_id')), true);
        $data['page_content'] = 'customer/profile_v';

        if(!empty($this->input->post('save'))){
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('email_address', 'Email', 'trim|required|valid_email');
            if ($this->form_validation->run() == false) {
                $this->templates->call_user_template($data);
            } else {
                $value['first_name'] = $this->input->post('first_name');
                $value['last_name'] = $this->input->post('last_name');
                $value['phone'] = $this->input->post('phone');
                //$value['email'] = $this->input->post('last_name');
                //$value['modify_dt'] = date("Y-m-d H:i:s");
                if(!empty($_FILES['profile_img']['name'])){
                    $img_path=image_upload($_FILES,'profile_img','uploads/profile');
                    if($img_path){
                        $value['profile_img']=$img_path;
                    } else{
                        $this->templates->call_user_template($data);
                        return false;
                    }
                }
                $user_id = $this->users->update_users($value, array('id'=>$data['user_id']));
                //echo $this->db->last_query(); exit();
                if ($user_id > 0) {
                    $data['get_users']=$this->users->get_users(array('id'=>$this->session->userdata('user_id')), true);
                    $this->session->set_flashdata(array('msg_type'=>'success','msg'=>'User Updated'));
                    $this->templates->call_user_template($data);
                } else {
                    $this->session->set_flashdata(array('msg_type'=>'error','msg'=>'Something wrong! Please try again  later'));
                    $this->templates->call_user_template($data);
                }
            }
        }
        $this->templates->call_user_template($data);
    }
}