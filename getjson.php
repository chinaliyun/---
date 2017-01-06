<?php 

// 以下对应data.json
	if(!file_exists("data.json"))echo "file is undefined";
	if(!$data = file_get_contents("data.json"))echo "file open failed";
	echo $data;

// 以下对应test.json
	/*if(!file_exists("test.json"))echo "file is undefined";
	if((!$data = file_get_contents("test.json")))echo "file open failed";

	function replace_unicode_escape_sequence($match) {
	  return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
	}
	$name = $data;
	$str = preg_replace_callback('/\\\\u([0-9a-f]{4})/i', 'replace_unicode_escape_sequence', $name);
	$str = substr($str, stripos($str, 'result')+8, strrpos($str, "cost")-strlen($str)-2);
	file_put_contents("dev.json", $str);
	echo $str;*/


 ?>