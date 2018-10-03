<?php
class Posts_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function __get_posts_detail($slug) {
		$sql = $this -> db -> query("SELECT a.*,b.cname,b.cslug,c.uname FROM posts_tab a JOIN categories_tab b ON a.pcid=b.cid JOIN users_tab c ON a.puid=c.uid WHERE a.pstatus=1 AND a.pslug='".$slug."'", FALSE);
		return $sql -> result();
	}

    function __get_posts($slug) {
    	$slugQuery = "";
    	if ($slug) {
    		$slugQuery = " AND b.cslug='".$slug."'";
    	}

		$sql = $this -> db -> query("SELECT a.*,b.cname,b.cslug,c.uname FROM posts_tab a JOIN categories_tab b ON a.pcid=b.cid JOIN users_tab c ON a.puid=c.uid WHERE a.pstatus=1" . $slugQuery, FALSE);
		return $sql -> result();
	}
}
