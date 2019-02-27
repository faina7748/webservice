<?php
// read data melalui RESTful webservice di 
// jsonplaceholder

require "../vendor/autoload.php";
/*$client = new \GuzzleHttp\Client(['defaults' => [
    'verify' => 'false'
]]);*/

$client = new GuzzleHttp\Client(['verify' => false]);

$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/20');
//var_dump($response->getBody()->getContents());
$str = $response->getBody()->getContents();
$data = json_decode($str); //object (bukan array)
echo $data->title;

echo '<hr>';

$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
//var_dump($response->getBody()->getContents());
$str = $response->getBody()->getContents();
$arr = json_decode($str); //convert data json ke array/object dlm PHP

//var_dump($arr);
foreach($arr as $data){
    echo $data->title . '<br>';
}