<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function __get_date($str, $type=1) {
	$str = strtotime($str);
	if ($type == 1) return date('d/m/Y', $str);
	elseif ($type == 2) return date('d ',$str).__get_month(date('m',$str)).date(' Y', $str);
	elseif ($type == 3) return date('d/m/Y H:i', $str);
	elseif ($type == 4) return date('d/m/Y H:i:s', $str);
    elseif ($type == 5) return date('d ',$str).__get_month(date('m',$str)).date(' Y H:i',$str);
    else return __get_day(date('Y-m-d', $str)) . ', ' . date('d/m/Y', $str);
}

function __get_upload_file($file, $type=1) {
    $CI =& get_instance();
    if (!$file) return '';
    if ($type == 1)
		return $CI -> config -> config['upload']['host'] . $CI -> config -> config['upload']['media']['path'] . $file;
    else
        return $CI -> config -> config['upload']['host'] . $CI -> config -> config['upload']['ads']['path'] . $file;
}

function __get_month($date) {
    $date = (int) date('m', strtotime($date));
    $arr = array('Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
    return $arr[$date];
}

function __get_day($date) {
    $date = (int) date('w', strtotime($date));
    $arr = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
    return $arr[$date];
}

function __grep_image_url($html) {
    preg_match_all("/src=[\"\']?([^\"\']?.*(png|jpg|gif))[\"\']?/i",$html, $result);
    if (!empty($result[1][0])) return $result[1][0];
}

function __limit_word($text, $limit) {
    $text = strip_tags($text);
    $strings = $text;
    if (strlen($text) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        if(sizeof($pos) > $limit) {
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }
    return $text;
}

function __get_image_url($text) {
    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $text, $result);
    return isset($result[1]) ? $result[1] : '';
}

function __get_rupiah($num,$type=1) {
    if ($type == 1) return "Rp. " . number_format($num,0,',','.');
    elseif ($type == 2) return number_format($num,0,',',',');
    elseif ($type == 3) return number_format($num,2,',','.');
    else return "Rp. " . number_format($num,2,',','.');
}

function __set_error_msg($arr) {
    $CI =& get_instance();
    return $CI -> cache -> memcached -> save('__msg', $arr, '60');
}

function __get_error_msg() {
    $CI =& get_instance();
    $css = (isset($CI -> cache -> memcached -> get('__msg')['error']) == '' ? 'success' : 'danger');
    if (isset($CI -> cache -> memcached -> get('__msg')['info'])) $CI -> cache -> memcached -> save('__msg_tmp', array('info' => true), '60');
    if (isset($CI -> cache -> memcached -> get('__msg')['error']) || isset($CI -> cache -> memcached -> get('__msg')['info'])) {
        $res = '<div class="alert alert-'.$css.' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
        $res .= (isset($CI -> cache -> memcached -> get('__msg')['error']) ? $CI -> cache -> memcached -> get('__msg')['error'] : $CI -> cache -> memcached -> get('__msg')['info']);
        $res .= '</div>';
        $CI -> cache -> memcached -> delete('__msg');
        return $res;
    }
}

function __slugify($text) { 
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    return strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $text));
}

function __get_categories_menus($type) {
    $url = '';
    if ($type == 1) {
        $url = 'category/';
    }
    else {
        $url = 'ads/category/';
    }
    $CI =& get_instance();
    $CI -> load -> model('home/Home_model');
    $menus = $CI -> Home_model -> __get_categories($type);
    $res = '';
    foreach ($menus as $key => $v) {
        $res .= '<li>';
            $res .= '<a href="'.base_url($url . $v -> cslug).'">'.$v -> cname.'<span></span></a>';
        $res .= '</li>';
    }
    return $res;
}

function __get_categories_ads($id) {
    $CI =& get_instance();
    $CI -> load -> model('home/Home_model');
    $menus = $CI -> Home_model -> __get_categories(2);
    $res = '';
    foreach ($menus as $key => $v) {
        if ($id == $v -> cid)
            $res .= '<option value="'.$v -> cid.'" selected>'.$v -> cname.'</option>';
        else
            $res .= '<option value="'.$v -> cid.'">'.$v -> cname.'</option>';
    }
    return $res;
}

function __get_pages_menus() {
    $CI =& get_instance();
    $CI -> load -> model('home/Home_model');
    $menus = $CI -> Home_model -> __get_pages();
    $res = '';
    foreach ($menus as $key => $v) {
        $res .= '<li>';
            $res .= '<a href="'.base_url('page/'.$v -> pslug).'">'.$v -> ptitle.'<span></span></a>';
        $res .= '</li>';
    }
    return $res;
}

function __timeago($date) {
   $timestamp = strtotime($date);   
   
   $strTime = array("second", "minute", "hour", "day", "month", "year");
   $length = array("60","60","24","30","12","10");

   $currentTime = time();
   if($currentTime >= $timestamp) {
        $diff     = time()- $timestamp;
        for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
        $diff = $diff / $length[$i];
        }

        $diff = round($diff);
        return $diff . " " . $strTime[$i] . "(s) ago ";
   }
}