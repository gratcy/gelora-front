<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('Ads_model');
	}

	public function index() {
		$data['data'] = $this -> Ads_model -> __get_ads('');
		$data['totalAds'] = $this -> Ads_model -> __count_ads('');
		$data['title'] = $data['data'][0] -> cname;
		$data['description'] = $data['data'][0] -> cname;
		$this->load->view('ads', $data);
	}

	public function detail($slug)
	{
		$data['data'] = $this -> Ads_model -> __get_ads_detail($slug);
		$data['title'] = $data['data'][0] -> atitle;
		$data['description'] = __limit_word($data['data'][0] -> adesc, 50);
		$this->load->view('ads-detail', $data);
	}

	public function categories($slug) {
		$data['data'] = $this -> Ads_model -> __get_ads($slug);
		$data['totalAds'] = $this -> Ads_model -> __count_ads($slug);
		$data['title'] = $data['data'][0] -> cname;
		$data['description'] = $data['data'][0] -> cname;
		$this->load->view('ads-category', $data);
	}
}
