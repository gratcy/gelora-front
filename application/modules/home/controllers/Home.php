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
		$data['ads'] = $this -> Home_model -> __getAds(6, 0);
		$this->load->view('home', $data);
	}
	
	function subscription_newsletter() {
		header('Content-type: application/json');
		$email = $this -> input -> post('email');
		
		if (!$email) {
			echo json_encode(array('status' => 400, 'message' => 'Email wajib di isi !!!'));
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo json_encode(array('status' => 400, 'message' => 'Format email tidak diterima !!!'));
		}
		else {
			if ($this -> Home_model -> __insert_newsletter(array('nemail' => $email, 'ndate' => date('Y-m-d H:i:s'), 'nip' => (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : $_SERVER['REMOTE_ADDR'])))) {
				echo json_encode(array('status' => 200, 'message' => 'Email berhasil di tambahkan !!!'));
			}
			else {
				echo json_encode(array('status' => 400, 'message' => 'Kesalahan input data !!!'));
			}
		}
	}
}
