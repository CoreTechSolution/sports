<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Dashboard extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('dashboard_model');
	}
	public function index() {
		isLogin();
		$data['page_title'] = 'Dashboard';
		$data['nav_title'] = 'Dashboard';
		$data['login_as'] = $this->session->userdata('username');
		$data['user_role'] = $this->session->userdata('user_role');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['page_content'] = 'dashboard/Dashboard_view';
		$this->templates->call_user_template($data);
	}
	public function become_league_owner(){
		isLogin();
		$data['page_title'] = 'League Owner';
		$data['nav_title'] = 'League Owner';
		$data['login_as'] = $this->session->userdata('username');
		$data['user_role'] = $this->session->userdata('user_role');
		$data['user_id'] = $this->session->userdata('user_id');
		$user_data = $this->dashboard_model->get_user_data_by_id($this->session->userdata('user_id'));
		if(count($user_data) > 0) {
			foreach($user_data as $ud){
				$data['first_name'] = $ud->first_name;
				$data['last_name'] = $ud->last_name;
				$data['email'] = $ud->email;
			}
		}
		$data['page_content'] = 'dashboard/Become_league_owner_view';
		$this->templates->call_user_template($data);
	}
	public function become_league_owner_form(){
		if($this->input->post('submit')){
			$lo_first_name = $this->input->post('lo_first_name');
			$lo_last_name = $this->input->post('lo_last_name');
			$lo_email_address = $this->input->post('lo_email_address');
			$lo_phone = $this->input->post('lo_phone');


			$message = 'Dear Admin,<br><br>A new "Become a League Owner" request has been generated. Please note following details.<br><br><strong>Name: </strong>'.$lo_first_name.' '.$lo_last_name.'<br><strong>Email: </strong>'.$lo_email_address.'<br><strong>Phone: </strong>'.$lo_phone.'<br><br>Regards,<br>Book Your Sports';
			if(send_mail('bhulbhal002@mailinator.com','Become a League Owner Request',$message)){
				redirect('become-league-owner');
			}
		}
	}
}