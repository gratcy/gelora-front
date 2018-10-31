<?php
class Home_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

	function __getPosts($limit, $cid) {
		$limitQuery = "";
		$categoryQuery = "";
		if ($limit > 0) {
			$limitQuery = " LIMIT " . $limit;
		}
		if ($cid > 0) {
			$categoryQuery = " AND a.pcid=" . $cid;
		}

		$sql = $this -> db -> query("SELECT a.*,b.cname,b.cslug,c.uname FROM posts_tab a JOIN categories_tab b ON a.pcid=b.cid JOIN users_tab c ON a.puid=c.uid WHERE a.pstatus=1".$categoryQuery." ORDER BY a.pid DESC " . $limitQuery, FALSE);
		return $sql -> result();
	}

	function __getAds($limit, $cid) {
		$limitQuery = "";
		$categoryQuery = "";
		if ($limit > 0) {
			$limitQuery = " LIMIT " . $limit;
		}
		if ($cid > 0) {
			$categoryQuery = " AND a.acid=" . $cid;
		}

		$sql = $this -> db -> query("SELECT a.*,b.cname,b.cslug FROM ads_tab a JOIN categories_tab b ON a.acid=b.cid WHERE a.astatus=1".$categoryQuery." ORDER BY a.aid DESC " . $limitQuery, FALSE);
		return $sql -> result();
	}

	function __get_categories($type) {
		$sql = $this -> db -> query('SELECT cid, cname, cslug FROM categories_tab WHERE ctype='.$type.' AND cstatus=1 ORDER BY cid DESC');
		return $sql -> result();
	}

	function __get_pages() {
		$sql = $this -> db -> query('SELECT pslug, ptitle FROM pages_tab WHERE pstatus=1 ORDER BY pid DESC');
		return $sql -> result();
	}
    
    function __insert_newsletter($data) {
        return $this -> db -> insert('newsletter_tab', $data);
    }
}
