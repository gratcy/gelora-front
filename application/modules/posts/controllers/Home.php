<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('Posts_model');
	}

	public function index() {
		$data['data'] = $this -> Posts_model -> __get_posts('');
		$data['title'] = 'Gelora Artikel';
		$this->load->view('posts', $data);
	}

	public function detail($slug)
	{
		$data['data'] = $this -> Posts_model -> __get_posts_detail($slug);
		$data['title'] = $data['data'][0] -> ptitle;
		$data['description'] = __limit_word($data['data'][0] -> pcontent, 50);
		$this->load->view('posts-detail', $data);
	}

	public function categories($slug) {
		$data['data'] = $this -> Posts_model -> __get_posts($slug);
		$data['title'] = $data['data'][0] -> cname;
		$data['description'] = $data['data'][0] -> cname;
		$this->load->view('posts-category', $data);
	}
}
