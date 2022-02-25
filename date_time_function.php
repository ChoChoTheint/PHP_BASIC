<?php

date_default_timezone_set('Asia/Rangoon');
// $ary = getdate();
// echo "<pre>" . print_r($ary,true) . "</pre>";
// echo time();

$date = date('a',time()) . "<br/>";
$date = date('A',time()) . "<br/>";
$date = date('d',time()) . "<br/>";
$date = date('D',time()) . "<br/>";
$date = date('F',time()) . "<br/>";
$date = date('h',time()) . "<br/>";
$date = date('H',time()) . "<br/>";
$date = date('g',time()) . "<br/>";
$date = date('G',time()) . "<br/>";
$date = date('i',time()) . "<br/>";
$date = date('h-i-s',time()) . "<br/>";
echo $date;
?>