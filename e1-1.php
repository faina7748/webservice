<?php
//GET method
//$url ="http://bpm.moh.gov.my";
$url ="http://localhost/webservice/data.php";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
echo $result;
curl_close($ch);
?>
