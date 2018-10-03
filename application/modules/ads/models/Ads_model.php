<?php
class Ads_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function __get_ads_detail($slug) {
		$sql = $this -> db -> query("SELECT a.*,b.cname,b.cslug FROM ads_tab a JOIN categories_tab b ON a.acid=b.cid WHERE a.astatus=1 AND a.aslug='".$slug."'", FALSE);
		return $sql -> result();
	}

    function __count_ads($slug) {
    	if ($slug)
			$sql = $this -> db -> query("SELECT * FROM ads_tab WHERE astatus=1", FALSE);
		else
			$sql = $this -> db -> query("SELECT * FROM ads_tab WHERE astatus=1", FALSE);
		return $sql -> num_rows();
	}

    function __get_ads($slug) {
    	$slugQuery = "";
    	if ($slug) {
    		$slugQuery = " AND b.cslug='".$slug."'";
    	}

		$sql = $this -> db -> query("SELECT a.*,b.cname,b.cslug FROM ads_tab a JOIN categories_tab b ON a.acid=b.cid WHERE a.astatus=1" . $slugQuery, FALSE);
		return $sql -> result();
	}
}
