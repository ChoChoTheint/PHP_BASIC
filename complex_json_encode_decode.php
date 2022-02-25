<?php
$ary = [
            ["one" => 1, "two" => 2, "three" => 3, "four" => 4],
            ["one" => 1, "two" => 2, "three" => 3, "four" => 4],
            ["one" => 1, "two" => 2, "three" => 3, "four" => 
                ["one" => 1, "two" => 2, "three" => 3, "four" => 4],
                ["one" => 1, "two" => 2, "three" => 3, "four" => 4],
                ["one" => 1, "two" => 2, "three" => 3, "four" => 4],
            ]
        ];
    
$encode = json_encode($ary);
// echo $encode;
$decode = json_decode($encode,true);
foreach ($decode as $val){
    foreach ($val as $key => $data){
        if(!is_array($data)){
            echo "key is " . $key . " and value is " . $data ."<hr/>";
        }else{
            foreach($data as $ky => $item){
                echo "key is " . $ky . " and value is " . $item ."<br/>";
            }
        }
    }
}    







?>