<?php
// Numeric array
// $name = array(); //declear

// $name[0] = "zero";
// $name[1] = "one";
// $name[2] = "two";
// $name[3] = "three";
// $name[4] = "four";
// $name[5] = "five";
// echo $name[1];


// $ary = array("one","two","three","four");
// echo $ary[1];
// echo "<br>";
// echo count($ary);



// Associated array
// $ary = array();

// $ary["first"] = "toyota";
// $ary["second"] = "landcruiser";
// $ary["third"] = "prado";
// $ary["four"] = "vigo";
// $ary["five"] = "crown";
// echo $ary["four"];

// $ary = array(
//     "one"=>"toyota",
//     "two"=>"landcruiser",
//     "three"=>"prado",
//     "four"=>"vigo"
// );
// echo $ary["three"];


// Multi dimensional array
// $bigAry = array(
//     array("one","two","three","four"),
//     array("five","six"),
//     array("seven","eight","nine","ten")
// );
            // [row][col]
// echo $bigAry[2][2];

// $ary = array(
//     array("one","two","three","four"),
//     array("five","six"),
//     array("seven","eight","nine","ten")
// );
// for($i = 0; $i < count($ary); $i++){
    // print_r($ary[$i]);
//     for($j = 0; $j < count($ary[$i]); $j++){
//         echo $ary[$i][$j] . " ";
//     }
//     echo "<hr>";
// }

// $ary = array("one","two","three","four");
// foreach ($ary as $item){
//     echo $item . "<br>";
// }


$ary = array(
    "one"=>"toyota",
    "two"=>"landcruiser",
    "three"=>"prado",
    "four"=>"vigo"
);
foreach($ary as $key=>$val){
    echo "key is => " . $key ."<br>". "value is => " . $val . "<br>";
}

?>