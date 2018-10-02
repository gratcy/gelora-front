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