<?php
include 'db.php';
include 'token.php';
// verify token (scenario pertama, server client php call web service)
isToken(); //proceed to next line jika token ok    

// check jika client x hantar id, default to '0'
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$id = mysqli_escape_string($con, $id); //elak sql injection
$sql = "SELECT a.*, b.name FROM film a JOIN language b ON a.language_id = b.language_id WHERE a.film_id = $id";
$rs = mysqli_query($con, $sql);

if($rs){
    // ada data
    $rows = mysqli_fetch_array($rs);
    // if((!$rows) || count($rows) == 0){
    if(!$rows){
        // id tak wujud
        $data = new stdClass();
        $data->err = "No Record!";        
    }else{
        $data = $rows;
    }
}else{
    // query prob, i.e id = character
    $data = new stdClass();
    $data->err = "No Record!";    
}

header('Content-Type:application/json');
echo json_encode($data);
