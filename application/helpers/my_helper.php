<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
ob_start();
if(!function_exists('getHashedPassword')) {
	function getHashedPassword($plainPassword) {
		return password_hash($plainPassword, PASSWORD_DEFAULT);
	}
}
if(!function_exists('verifyHashedPassword')) {
	function verifyHashedPassword($plainPassword, $hashedPassword) {
		return password_verify($plainPassword, $hashedPassword) ? true : false;
	}
}
function isLogin() {
	$CI = & get_instance();
	if (!$CI->session->userdata('isLoggedIn')) {
		redirect(base_url('login'));
	}
}
function slugify($text){
	// replace non letter or digits by -
	$text = preg_replace('~[^\pL\d]+~u', '-', $text);

	// transliterate
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

	// remove unwanted characters
	$text = preg_replace('~[^-\w]+~', '', $text);

	// trim
	$text = trim($text, '-');

	// remove duplicate -
	$text = preg_replace('~-+~', '-', $text);

	// lowercase
	$text = strtolower($text);

	if (empty($text)) {
		return 'n-a';
	}

	return $text;
}
function send_mail($to,$subject,$message){
	$CI = & get_instance();
	$CI->load->library('email');
	$config = Array(
		'protocol' => 'smtp',
		'smtp_host' => 'mail.coregensolution.com',
		'smtp_port' => 465,
		'smtp_crypto' => 'ssl',
		'smtp_user' => 'smtp@coregensolution.com',
		'smtp_pass' => 'qweQWE123!@#',
		'mailtype' => 'html',
		'charset' => 'iso-8859-1',
		'wordwrap' => TRUE
	);
	$CI->email->initialize($config);
	$CI->email->set_mailtype("html");
	$CI->email->set_newline("\r\n");
	$htmlContent = $message;
	$CI->email->to($to);
	$CI->email->from('smtp@coregensolution.com','Book Your Sports');
	$CI->email->subject($subject);
	$CI->email->message($htmlContent);
	//print_r($CI->email->send()); exit();
	if($CI->email->send())
		return true;
	else
		return false;
}
function encripted($data){
	$key1 = '644CBEF595BC9';
	$final_data = $key1.'|'.$data;
	$val = base64_encode(base64_encode(base64_encode($final_data)));
	return $val;
}
function decripted($data){
	$val = base64_decode(base64_decode(base64_decode($data)));
	$final_data = explode('|', $val);
	return $final_data[1];
}