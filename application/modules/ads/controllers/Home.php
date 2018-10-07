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

	public function add($id)
	{
		if ($_POST) {
			$id = (int) $this -> input -> post('id');
			$category = (int) $this -> input -> post('category');
			$title = $this -> input -> post('title');
			$content = $this -> input -> post('content');
			$name = $this -> input -> post('name');
			$price = $this -> input -> post('price');
			$phone = $this -> input -> post('phone');
			$phone2 = $this -> input -> post('phone2');
			$prov = $this -> input -> post('prov');
			$city = $this -> input -> post('city');

			if ($id) {
				if (!$category || !$title || !$content) {
					__set_error_msg(array('error' => 'Data yang anda masukkan tidak lengkap !!!'));
					redirect(base_url('post-ads/' . $id));
				}
				else {
					$slug = __slugify($title);

					$arr = array('aname' => $name, 'adate' => date('Y-m-d H:i:s'), 'aphone' => $phone, 'acity' => $city, 'aprovince' => $prov, 'aphone2' => $phone2, 'acid' => $category, 'aslug' => $slug.'-'.$id, 'aprice' => $price, 'atitle' => $title, 'adesc' => $content, 'astatus' => 1);
					if ($this -> Ads_model -> __update_ads($id, $arr)) {
						__set_error_msg(array('info' => 'Iklan berhasil ditambahkan.'));
						redirect(base_url('ads/' . $slug.'-'.$id));
					}
					else {
						__set_error_msg(array('error' => 'Gagal menambahkan iklan !!!'));
						redirect(base_url('post-ads/' . $id));
					}
				}
			}
			else {
				__set_error_msg(array('error' => 'Kesalahan input data !!!'));
				redirect(base_url('post-ads'));
			}

		}
		else {
			$id = (int) $id;
			if (!$id) {
				$this -> Ads_model -> __insert_ads(array('astatus' => 0));
				$lastId = $this -> db -> insert_id();
				if ($lastId) {
					redirect(base_url('post-ads/' . $lastId));
					die;
				}
			}

			$data['title'] = 'Add New Ads';
			$data['id'] = (int) $id;
			$this->load->view('ads-new', $data);
		}
	}

	public function upload($id) {
		$id = (int) $id;
		if (!$id) {
			echo json_encode(array('messege' => 'Gagal menambahkan media !!!', 'status' => 400));
		}

		if ($_FILES) {
			$det = $this -> Ads_model -> __get_ads_img($id);
			$photos = array();
			if (!empty($det[0] -> aphotos)) {
				$photos = json_decode($det[0] -> aphotos, true);
			}

			if (preg_match('/jpeg|jpg|png|gif|svg/i', $_FILES['file']['type'])) {
				$fname = time() . $_FILES['file']['name'];
				$fname = str_replace(' ', '-', $fname);
				$fname = str_replace('--', '-', $fname);
				$target_file = $this -> config -> config['upload']['ads']['realpath'] . $fname;

			    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
			    	$photoArr = array(array('img' => $fname));
			    	foreach ($photos as $k => $v) {
			    		$photoArr[] = array('img' => $v['img']);
			    	}
					$arr = array('aphotos' => json_encode($photoArr));
					if ($this -> Ads_model -> __update_ads($id, $arr)) {
						echo json_encode(array('messege' => 'Media berhasil ditambahkan.', 'status' => 200));
					}
					else {
						echo json_encode(array('messege' => 'Gagal menambahkan media !!!', 'status' => 400));
					}
			    }
			    else {
			        echo json_encode(array('messege' => 'Sorry, there was an error uploading your file.', 'status' => 400));
			    }
			}
			else {
				echo json_encode(array('messege' => 'Failed upload data !', 'status' => 400));
			}
			die;

		}
		else {
			$this->load->view('media_' . __FUNCTION__, array());
		}
	}
}
