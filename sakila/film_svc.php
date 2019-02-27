<?php
// return senarai film di kedai ini

// connect to DB
$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'sakila';
$con = mysqli_connect($server, $user, $pwd, $db, 3308);
if(! $con){ 
    echo "Connection Problem";
    exit;
}

// query data
$sql = "SELECT a.*, b.name FROM film a JOIN language b ON a.language_id = b.language_id LIMIT 0,20";
$rs = mysqli_query($con, $sql);
$arr = [];
while($row = mysqli_fetch_array($rs)){
    //echo $row['title'] . "<br>";
    $obj = new stdClass();
    $obj->title = $row['title'];
    $obj->descr = $row['description'];
    $obj->lang = $row['name'];
    $arr[] = $obj;
}

// print data sbg JSON
// {} / []
$json = json_encode($arr);
header('Content-Type: application/json');
echo $json;