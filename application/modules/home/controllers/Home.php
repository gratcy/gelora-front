<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('Home_model');
	}

	public function index()
	{
		$data['article'] = $this -> Home_model -> __getPosts(3, 0);
		$this->load->view('home', $data);
	}
}
