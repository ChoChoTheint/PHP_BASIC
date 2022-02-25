<?php
function mySetCookie(){
    setcookie('CM','72Coder',time() + 3600,'/','',0);
}

function myGetCookie(){
    if(isset($_COOKIE['CM'])){
        echo $_COOKIE['CM'];
    }else{
        echo "There is no Cookie Set with that key.";
    }
}
function myDeleteCookie(){
    setcookie('CM','',time() - 3600,'/','',0);
}
// mySetCookie();
myGetCookie();
// myDeleteCookie();
?>