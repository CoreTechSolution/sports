<?php
/**
 * Created by PhpStorm.
 * User: coregen3
 * Date: 29/10/18
 * Time: 6:10 PM
 */

class Users_m extends MY_Model
{
    protected $_tbl_name = 'users';
    function __construct() {
        parent::__construct();
    }

    function get_users($conditions, $row){
        //$this->_tbl_name='users';
        $results=$this->get_by($conditions,$row);
        if($results){
            return $results;
        } else {
            return false;
        }
    }
    function update_users($data,$conditions){
        //$this->_tbl_name='users';
        $qry = $this->common_update($data, $conditions);
        if($qry){
            return TRUE;
        } else{
            return FALSE;
        }

    }

}