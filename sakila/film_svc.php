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
$sql = "SELECT * FROM film LIMIT 0,20";
$rs = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($rs)){
    echo $row['title'] . "<br>";
    $arr[] = $row['title'];
}

echo '<hr>';
// print data sbg JSON
$data = json_encode($arr);
var_dump($data);
echo '<hr>';
$data2 = json_decode($data);
var_dump($data2);