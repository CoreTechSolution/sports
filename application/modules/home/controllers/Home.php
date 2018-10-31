<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('home_models');
	}
	public function index() {
		$data['content_v'] = 'home/content';
		$this->templates->call_template($data);
	}
	public function venue_search_form(){
		if($this->input->get('submit')){
			$sport_id = $this->input->get('sport');
			$venus = $this->home_models->venue_search($sport_id);
			$data['venus'] = $venus;
			$data['content_v'] = 'home/venue_search_content';
			$this->templates->call_template($data);
		}
	}
}