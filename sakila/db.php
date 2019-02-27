<?php
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