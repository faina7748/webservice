<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT a.*, b.name FROM film a JOIN language b ON a.language_id = b.language_id WHERE a.film_id = $id";
$rs = mysqli_query($con, $sql);

if($rs){
    //ada data
    $rows = mysqli_fetch_array($rs);
    if((!$rows) || count($rows) == 0){
        // id tak wujud
        $data = new stdClass();
        $data->err = "No Record!";        
    }else{
        $data = $rows;
    }
}else{
    //query prob, i.e id = character
    $data = new stdClass();
    $data->err = "No Record!";    
}

header('Content-Type:application/json');
echo json_encode($data);
