<?php
require 's3/bootstrap.php';
$url = 'ftp://ftp10.simba.ru/katalog/3315424.jpg';
//$r = Socket::getHeaders($url, $m);
//var_dump($r, $m);
$c = curl_init();
curl_setopt($c, CURLOPT_URL,            $url);
curl_setopt($c, CURLOPT_MAXREDIRS,      3);
curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($c, CURLOPT_NOBODY,         true);
curl_setopt($c, CURLOPT_VERBOSE,        false);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_exec($c);
$length = curl_getinfo($c, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
echo "length: $length\n";
curl_close($c);