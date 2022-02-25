<?php
    // Single file upload
    // if(isset($_POST['submit'])){
    //     // para_1 = ပြောင်းချင်တဲ့file, para_2 = ပြောင်းမဲ့file အသစ်
    //     move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name']);
    // }

    // Multi file upload with
    // if (isset($_POST['submit'])){
    //     foreach ($_FILES['file']['tmp_name'] as $key => $value){
    //         echo $_FILES['file']['name'][$key] . "<br/>";
    //         echo $_FILES['file']['tmp_name'][$key] . "<br/>";
    //         echo $_FILES['file']['size'][$key] . "<br/>";
    //         echo $_FILES['file']['type'][$key] . "<br/>";

    //         move_uploaded_file($_FILES['file']['tmp_name'][$key],'upload/'.$_FILES['file']['name'][$key]);
    //     }        
    // }


?>

<!-- Single file upload -->
<!-- <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="">
    <button type="submit" name="submit">Upload</button>
</form> -->

<!-- Multi file upload -->
<!-- <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple>
    <button type="submit" name="submit">Upload</button>
</form> -->