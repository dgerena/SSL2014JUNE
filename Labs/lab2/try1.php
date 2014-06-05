<!Doctype html>
<html>
    <head>
        <title>TACO</title>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </head>
    <body>
        <form class="col-md-8 col-md-offset-3" action="" method="POST" enctype="multipart/form-data">
            <input type="text" name="name">
            <input type="text" name="lastname" value="<?=$lname;?>">
            <br/>
            <label for="avatar">Select An Avatar!</label>
            <input type="file" name="avatar"/>
            <? echo '<img src="'.$uploadfile.'">'; ?>
            <input type="submit"/>
            <br/>
<!--            <img src="captcha.php">-->
        </form>
    </body>
</html>

<?php
session_start();
$_SESSION['name']=$_GET['name'];
var_dump('<p>'+$_FILES['avatar']['name']+'</p>');
$uploaddir='images/';//physical directory adress
$uploadfile=$uploaddir.basename($_FILES['avatar']['name']);
var_dump($uploadfile);

if(move_uploaded_file($_FILES['avatar']['tmp_name'],$uploadfile)){
    echo "<p>File is valid and was successfully uploaded.</p>";
}else{
    echo "<p>Possible file upload attack! </p>";
};
print_r('<p>'+$_FILES+'</p>');


var_dump(msg);
?>