<?php
/**
 * Created by PhpStorm.
 * User: coregen3
 * Date: 26/10/18
 * Time: 6:29 PM
 */

class Customer_m extends MY_Model
{
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