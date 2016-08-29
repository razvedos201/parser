<?php
function curl_get($url, $referer = 'http://www.google.ru'){
		//Инициализация cURL и задание адреса
	$ch = curl_init();
	//Установка опций
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36');
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_REFERER, $referer);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//выполнение (результат отобразится на экран)
	$data = curl_exec($ch);
	//Закрытие соединения
	curl_close($ch);
	return $data;
}