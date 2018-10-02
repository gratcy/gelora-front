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
}
