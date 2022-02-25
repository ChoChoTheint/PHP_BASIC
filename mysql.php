<?php
define("DB_HOST","localhost");
define("DB_NAME","test");
define("DB_USER","root");
define("DB_PASS","");

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_error($db) > 0){
        die("connection fail!");
    }else{
        return $db;
    }
}
function excuteQuery($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    if(mysqli_num_rows($result) > 0){
        foreach($result as $item){
            echo "Id is => " .$item['id'] . "<br>";
            echo "Name is => " .$item['name'] . "<br>";
            echo "Email is => " .$item['email'] . "<br>";
            echo "Password is => " .$item['password'] . "<br>";
            echo "<hr>";
    
            // errDubbger($item);
        }
    }
    // errDubbger($result);
}
function retrieveSingleData($id){
    $qry = "SELECT * FROM user WHERE id = $id";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    if(mysqli_num_rows($result) > 0){
        foreach($result as $data){
            echo "Id is => " .$data['id'] . "<br>";
            echo "Name is => " .$data['name'] . "<br>";
            echo "Email is => " .$data['email'] . "<br>";
            echo "Password is => " .$data['password'] . "<br>";
            echo "extra is => " .$data['extra'] . "<br>";
            echo "<hr>";
    
            // errDubbger($item);
        }
    }
}
function insertUniqueData($name,$email,$pass){
    $qry = "SELECT * FROM user WHERE name='$name'";
    $db = dbConnect();
    $ret = mysqli_query($db,$qry);
    if(mysqli_num_rows($ret) > 0){
        echo "User name is already in user!";
    }else{
        // print_r($ret);
        $qry = "INSERT INTO user (name,email,password)
                VALUES ('$name','$email','$pass')";
        $result = mysqli_query($db,$qry);
        echo $result > 0 ? "data success" : "data fail";
    }
}
function insertData($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    echo $result > 0 ? "data insert success" . mysqli_insert_id($db) : "data insert fail";
}
function passGen($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass,$pass);
    return $pass;
}
function insertMultiData($qry){
    $db = dbConnect();
    $result = mysqli_multi_query($db,$qry);
    echo $result ? "data success" : "data fail";

}
function deteleData($id){
    $qry = "DELETE FROM user WHERE id=$id";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    echo $result ? "deteted" : "deteted fail";
}
function errDubbger($data){
    echo "<pre>". print_r($data,true) . "</pre>"; 
    
}
function updateData($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    echo $result ? "update data" : "update data fail";
}
function retrieveDataNewStyle($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);

    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "Id is => " .$row['id'] . "<br>";
            echo "Name is => " .$row['name'] . "<br>";
            echo "Email is => " .$row['email'] . "<br>";
            echo "Password is => " .$row['password'] . "<br>";
            echo "<hr>";
        }
    }
}

$qry = "SELECT *  FROM user WHERE extra='0'";
retrieveDataNewStyle($qry);
// $qry = "SELECT * FROM user ORDER BY id DESC";
// excuteQuery($qry);
/*
$qry = "SELECT * FROM user";
$extra = NULL; 
$pass = passGen(123);
echo $pass;

$qry = "SELECT * FROM user WHERE id!=4";
$qry = "INSERT INTO user VALUES (4,'Mg Mg','mgmg@gmail.com','$pass','')";
$qry = "INSERT INTO user VALUES (5,'Mg','mg@gmail.com','$pass','')";
$qry = "INSERT INTO user VALUES (6,'aung','aung@gmail.com','$pass','');";
$qry .= "INSERT INTO user VALUES (7,'ko','ki@gmail.com','$pass','');";
$qry .= "INSERT INTO user VALUES (8,'htet','htet@gmail.com','$pass','');";
$qry .= "INSERT INTO user VALUES (9,'nayyi','nayyi@gmail.com','$pass','');";
$qry .= "INSERT INTO user VALUES (10,'jr','jr@gmail.com','$pass','');";
excuteQuery($qry);
retrieveSingleData(0);
errDubbger(dbConnect());
insertData($qry);
insertUniqueData("aung aung",'aung@gmail.com',$pass);
insertMultiData($qry);
deteleData(10);

$qry = "SELECT * FROM user";
$qry = "UPDATE user SET name='su myat' WHERE name='mg'";
updateData($qry); 

table creation
*/
$qry = "CREATE TABLE subject(
    id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT ,
    name VARCHAR(225) UNIQUE NOT NULL ,
    created_at date ,
    updated_at date
);";
$result = mysqli_query(dbConnect(),$qry);
echo $result ? "table create" : "table create fail";


?>