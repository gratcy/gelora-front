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
			$sql = $this -> db -> query("SELECT a.* FROM ads_tab a JOIN categories_tab b ON a.acid=b.cid WHERE a.astatus=1 AND b.cslug='".$slug."'", FALSE);
		else
			$sql = $this -> db -> query("SELECT * FROM ads_tab WHERE astatus=1", FALSE);
		return $sql -> num_rows();
	}
    
    function __insert_ads($data) {
        return $this -> db -> insert('ads_tab', $data);
    }
    
    function __update_ads($id, $data) {
        $this -> db -> where('aid', $id);
        return $this -> db -> update('ads_tab', $data);
    }
    
    function __get_ads_img($id) {
        $this -> db -> select('aphotos FROM ads_tab WHERE aid=' . $id, FALSE);
        return $this -> db -> get() -> result();
    }

    function __get_ads($slug) {
    	$slugQuery = "";
    	if ($slug) {
    		$slugQuery = " AND b.cslug='".$slug."'";
    	}

		$sql = $this -> db -> query("SELECT a.*,b.cname,b.cslug FROM ads_tab a JOIN categories_tab b ON a.acid=b.cid WHERE a.astatus=1" . $slugQuery . " ORDER BY a.aid DESC", FALSE);
		return $sql -> result();
	}
}
