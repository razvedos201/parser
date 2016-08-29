<?php
	require_once('lib/simple_html_dom.php');
	require_once('lib/curl_get.php');
	
	$html = curl_get('http://cherkiz.net/');
	$dom = str_get_html($html);
	
	if($dom->innertext!='' and count($dom->find('img'))){
	  //для всех элементов найдём элементы img
	  foreach($dom->find('img') as $img){
		//выведем данный элементhhhh
		echo $img;
		}
	}
	else{
		exit();
	}
?>