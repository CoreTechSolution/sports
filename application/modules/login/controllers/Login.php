<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Login extends MY_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('login_model');
	}
	public function index() {
		$data['content_v'] = 'login/Login_view';
		$this->templates->call_template($data);
	}
	public function login_form() {
		if($this->input->post('submit')){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->login_model->loginMe($username, $password);

			if(count($result) > 0) {
				foreach ( $result as $res ) {
					$sessionArray = array(
						'user_id'    => $res->id,
						'user_role'  => $res->user_role,
						'username'   => $res->username,
						'isLoggedIn' => true
					);
					$this->session->set_userdata( $sessionArray );
					if ( $res->user_role == 'admin' ) {
						redirect( 'admin/dashboard' );
					} else {
						redirect( $res->user_role.'/dashboard' );
					}
				}
			} else {
                $this->session->set_flashdata(array('msg_type'=>'error','msg'=>'Username or password mismatch'));
				redirect('/login');
			}
		}
	}

	public function logout(){
		$CI = & get_instance();
		$CI->session->unset_userdata('user_id');
		$CI->session->unset_userdata('user_role');
		$CI->session->unset_userdata('username');
		$CI->session->unset_userdata('isLoggedIn');
		$CI->session->sess_destroy();
		redirect(base_url('login'));
	}

	public function forgot_password(){
		$data['content_v'] = 'login/Forgot_password_view';
		$this->templates->call_template($data);
	}
	public function forgot_password_form(){
		if($this->input->post('submit')){
			$reg_email_address = $this->input->post('reg_email_address');
			$result = $this->login_model->checkRegEmailAddress($reg_email_address);

			if(count($result) > 0) {
				foreach ($result as $r){
					$activation_code = encripted($r->id);
					$message = 'Please click on the following link to reset your password <a href="'.base_url('/resetpassword/?code=').$activation_code.'" target="_blank">Reset Password</a><br><br>Regards,<br>Book Your Sports';
					if(send_mail(strip_tags($reg_email_address),'Reset Password',$message)){
						redirect('login/thankyou');
					}
				}
			} else {
				$this->session->set_flashdata('error', 'Email address does not exists');
				redirect('/forgot-password');
			}
		}
	}
	public function thankyou(){
		$data['content_v'] = 'login/Thankyou_view';
		$this->templates->call_template($data);
	}
	public function resetpassword(){
		$data['content_v'] = 'login/Reset_password_view';
		$data['code'] = $this->input->get('code');
		$this->templates->call_template($data);
	}
	public function reset_password_form(){
		if($this->input->post('submit')){
			$password = $this->input->post('password');
			$confirmpassword = $this->input->post('confirmpassword');
			$code = $this->input->post('code');
			$user_id = decripted($code);
			if(!empty($password)) {
				if ( $password == $confirmpassword ) {
					$this->login_model->reset_password( $user_id, $password );
					redirect(base_url('login'));
				}
			}
		}
	}
}
