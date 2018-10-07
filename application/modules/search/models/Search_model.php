<?php
class Search_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function __count_ads($search, $category) {
        $categoryQuery = '';
        if ($category) {
            $categoryQuery = ' AND acid=' . $category;
        }

		$sql = $this -> db -> query("SELECT * FROM ads_tab WHERE astatus=1".$categoryQuery." AND (atitle LIKE '%".$search."%' OR adesc LIKE '%".$search."%')", FALSE);
		return $sql -> num_rows();
	}

    function __get_ads($search, $category) {
        $categoryQuery = '';
        if ($category) {
            $categoryQuery = ' AND a.acid=' . $category;
        }

		$sql = $this -> db -> query("SELECT a.*,b.cname,b.cslug FROM ads_tab a JOIN categories_tab b ON a.acid=b.cid WHERE a.astatus=1".$categoryQuery." AND (atitle LIKE '%".$search."%' OR adesc LIKE '%".$search."%')", FALSE);
		return $sql -> result();
	}
}
