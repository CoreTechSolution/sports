<?php
/**
 * Created by PhpStorm.
 * User: coregen3
 * Date: 30/10/18
 * Time: 5:49 PM
 */

class Ajax_m extends MY_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function delete_data($id,$check_field,$table_name){
        $this->db->where($check_field, $id);
        if($this->db->delete($table_name)){
            return true;
        } else{
            return false;
        }
    }

}