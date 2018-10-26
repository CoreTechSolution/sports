<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Signup extends MY_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('signup_model');
	}
	public function index() {
		$data['content_v'] = 'signup/signup_view';
		$this->templates->call_template($data);
	}
	public function signup_form() {
		if($this->input->post('submit')){
			$form_data = $this->input->post();
			$user_id = $this->signup_model->signup_insert($form_data);
			$email = $this->input->post('email');
			$activation_code = encripted($user_id);
			$message = 'Welcome to Book Your Sports!
                                <br /><br /> Please click on the link to complete the registration process.
                                <br><br> Activation Link :<a href="'.base_url('signup/activation/?code=').$activation_code.'" target="_blank">'.base_url('signup/activation/?code=').$activation_code.'</a>
                                <br><br>Regards,<br>Book Your Sports';
			if(send_mail(strip_tags($email),'Activate your account',$message)){
				redirect('signup/thankyou');
			}
		}
	}
	public function thankyou(){
		$data['content_v'] = 'signup/Thankyou_view';
		$this->templates->call_template($data);
	}
	public function activation(){
		$user_id = decripted($this->input->get('code'));
		$this->signup_model->activation($user_id);

		$data['content_v'] = 'signup/Activation_view';
		$this->templates->call_template($data);
	}
}
