<?php

    // Getting Input Text
        // ရှိ မရှိစစ်တာ
    // if(isset($_POST['submit'])){
    //     $name = $_POST['username'];
    //     $pass = $_POST['password'];
        
    //     echo "Your username is => " . $name . "Your password is => " . $pass;
    // }

    //  Getting checkbox value 
    // if(isset($_POST['choose'])){
    //     $colors = $_POST['color'];
    //     foreach($colors as $color){
    //         echo $color . "<br/>";
    //     }
    // }

    // Radio button handling
    if(isset($_POST['submit'])){
        $color = $_POST['myRadio'];
        echo "Your choose => " . $color;
    }

?>

                <!-- function.php ကိုပို့ပြီး get မို့input တွေurl မှာမြင်ရ -->
<!-- <form action="function.php" method="get">
    <input type="text" name="username">
    <button type="submit" name="submit">Submit</button>
</form> -->


                <!-- current field ကိုပို့ပြီး post method မို့ url str ကိုencodeလုပ် -->
<!-- <form action="<?php $_PHP_SELF ?>" method="post">
    <input type="text" name="username">
    <button type="submit" name="submit">Submit</button>
</form> -->

<!-- Getting Input Text -->
<!-- <form action="<?php $_PHP_SELF ?>" method="post">
    <h3>Register to be a member!</h3>
    <input type="text" name="username" placeholder="Your Name"><br/><br/>
    <input type="password" name="password" placeholder="Your Password"><br/><br/>
    <button type="submit" name="submit">Submit</button>
</form> -->

<!-- Getting checkbox value -->
<!-- <form action="" method="post">
    <input type="checkbox" name="color[]" value="red">Red<br/><br/>
    <input type="checkbox" name="color[]" value="green">green<br/><br/>
    <input type="checkbox" name="color[]" value="blue">blue<br/><br/>
    <input type="checkbox" name="color[]" value="yellow">yellow<br/><br/>
    <input type="checkbox" name="color[]" value="white">white<br/><br/>
    <button type="submit" name="choose">Choose</button>
</form> -->

<!-- Radio button handling -->
<form action="<?php $_PHP_SELF ?>" method="post">
        <h3>Choose button</h3>
        <input type="radio" name="myRadio" value="Red">Red<br/><br/>
        <input type="radio" name="myRadio" value="Blue">Blue<br/><br/>
        <input type="radio" name="myRadio" value="Green">Green<br/><br/>
        <input type="radio" name="myRadio" value="Yellow">Yellow<br/><br/>
        <input type="radio" name="myRadio" value="White">White<br/><br/>
        <button type="submit" name="submit">Choose</button>
</form>


