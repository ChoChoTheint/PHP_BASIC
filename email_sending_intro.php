<?php

// mail(to,subj,message,headers,parameters)
$ary = ["tester@localhost","user@localhost","choechoe@localhost"];
$to = implode(',',$ary);
$subject = "PHP Mail Test";
$message = "I am just testing to make sure my PHP mailing system is work, don't take serious!";
$header = "From: MMPHPTutorial@gmail.com";
mail($to,$subject,$message,$header);

// thuniber error ကျန်

?>