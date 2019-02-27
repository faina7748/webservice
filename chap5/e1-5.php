<?php
/*
JSON Notation
[] = array
{} = object -> "key":"val"
sample : ["nama":"azman"] 
- mesti ", x boleh '
- number, tak perlu "", i.e "umur":40
*/   

//create obj tanpa custom class
$obj = new stdClass();
$obj->nama = "azman";
$obj->alamat = "Puchong";

//convert obj ke string json
echo json_encode($obj);

echo "<hr>";

$arr = ['nama'=>'John Doe', 'umur'=>40];
// shortcut array() -> [];
$data = json_encode($arr); //output masih dalam bentuk obj.. so, kita kena decode utk dlm bentuk arr
echo $data;

$data2 = json_decode($data, true);
var_dump($data2);

// NOTA:
// json_encode -> convert arr/obj dlm PHP kpd JSON string
// json_decode -> convert JSON string kpd arr/obj dlm PHP