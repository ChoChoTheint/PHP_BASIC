<?php

// file creating
// $file = "myTextFile.txt";
// $handler = fopen($file,'w');


// file reading
// $file = "test.txt"; //file path
// $handler = fopen($file,'r'); // file open read mood
// $size = filesize($file); //getting file size
// $data = fread($handler,$size);
// echo $data;

// file writng
// $file ="Mine.txt";
// $handler = fopen($file,'w'); // write mood
// fwrite($handler,"hello world");
// fclose($handler);

// file appending
// $file ="Mine.txt";
// $handler = fopen($file,'a'); //append mode
// fwrite($handler," brighter myanmar");
// fclose($handler);

//file create with function
// function createFile($filename){
//     $h = fopen($filename,'w');
//     fclose($h);
// }
// createFile('best.txt');

// function writeFile($filename,$data){
//     $h = fopen($filename,'w');
//     fwrite($h,$data);
//     fclose($h);
// }
// writeFile('hey.txt','I am good');

// function appendFile($filename,$data){
//     $h = fopen($filename,'a');
//     fwrite($h,$data);
//     fclose($h);
// }
// appendFile('hey.txt'," girl");

// function readMyFile($filename){
//     $h = fopen($filename,'r');
//     $size = filesize($filename);
//     $data = fread($h,$size);
//     fclose($h);
//     return $data;
// }
// echo readMyFile('hey.txt');

// function readMyFile($filename){
//     if(file_exists($filename)){
//         $h = fopen($filename,'r');
//         $size = filesize($filename);
//         $data = fread($h,$size);
//         return $data;
//     }else{
//         echo "file is not found";
//     }
// }
// echo readMyFile('bla.txt');


function readMyFile($filename){
    if (file_exists($filename)){
        $data = file_get_contents($filename);
        return $data;
    }else{
        echo "file is no found";
    }
}
echo readMyFile('test.txt');

?>