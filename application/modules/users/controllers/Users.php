<?php
/**
 * Created by PhpStorm.
 * User: coregen3
 * Date: 29/10/18
 * Time: 6:09 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends MY_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('users_m');
    }
    public function get_users($conditions=array(),$row=false){
        $users=$this->users_m->get_users($conditions,$row);
        return $users;
    }
    public function update_users($data,$conditions){
        $user_update = $this->users_m->update_users($data, $conditions);
        if($user_update){
            return true;
        } else{
            return false;
        }
    }
}