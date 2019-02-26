<?php
require "../vendor/autoload.php";
$url = 'http://localhost/webservice/chap1/data2.php';
$data = ["name" => "Lorna", "email" => "lorna@example.com"];

$client = new \GuzzleHttp\Client();

$result = $client->post($url, ["json" => $data]);
echo $result->getBody();