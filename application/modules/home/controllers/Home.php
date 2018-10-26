<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller {
	public function index() {
		$data['content_v'] = 'home/content';
		$this->templates->call_template($data);
	}
}