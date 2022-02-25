<?php

$arys = array(
    "name" => "hehee",
    "age" => "23",
    "subject"=>"php,java"
);
echo json_encode($arys);


$file = "she.json";
$handler = fopen($file,'r');
$json = fread($handler,filesize($file));

$arys = json_decode($json);

foreach($arys as $key=>$vals){
    foreach($vals as $k=>$val){
        echo "key is => " . $k . " and value is => " . $val . "<br/>";
    }
}



?>