<?php
require "../vendor/autoload.php";
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://localhost/webservice/chap1/data3.php', [
    'query' => [
        'foo' => 'bar',
        'nama' => 'Lina'
    ]
]);

echo "<u>Example for GET:</u><br>";
echo $response->getBody();

$response2 = $client->request('POST', 'http://localhost/webservice/chap1/data2.php', [
    'form_params' => [
        'name' => 'Lina',
        'address' => 'Putrajaya',
        'nested_field' => [
            'apa' => 'hello'
        ]
    ]
]);

echo "<br><br><u>Example for POST:</u><br>";
echo $response2->getBody();