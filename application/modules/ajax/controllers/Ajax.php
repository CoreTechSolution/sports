<?php
/**
 * Created by PhpStorm.
 * User: coregen3
 * Date: 30/10/18
 * Time: 5:44 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajax extends MY_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('ajax_m');
    }
    public function delete_data(){
        $id=$_POST['id'];
        $check_field=$_POST['check_field'];
        $table_name=$_POST['table_name'];
        $result=$this->ajax_m->delete_data($id,$check_field,$table_name);
        if($result){
            $response['status']  = 'success';
            $response['message'] = 'Deleted Successfully ...';
        } else{
            $response['status']  = 'error';
            $response['message'] = 'Unable to delete ...';
        }
        echo json_encode($response);
    }

}