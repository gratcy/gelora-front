<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('Search_model');
	}

	public function index() {
		if ($_POST) {
			$keyword = $this -> input -> post('keyword');
			$category = (int) $this -> input -> post('category');
			if ($keyword) {
				redirect(base_url('search?keyword=' . $keyword.'&category=' . $category));
			}
			else {
				redirect(base_url());
			}
		}
		else {
			$keyword = $this -> input -> get('keyword');
			$category = (int) $this -> input -> get('category');
			$data['data'] = $this -> Search_model -> __get_ads($keyword, $category);
			$data['totalAds'] = $this -> Search_model -> __count_ads($keyword, $category);
			$data['title'] = 'Pencarian Iklan ' . $keyword;
			$data['description'] = 'Pencarian Iklan ' . $keyword;
			$data['keyword'] = $keyword;
			$data['category'] = $category;
			$this->load->view('search', $data);
		}
	}
}
