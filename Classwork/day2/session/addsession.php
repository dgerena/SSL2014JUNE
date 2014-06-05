<?php
//session_start()
?>
<form action="" method="POST" enctype="multipart/form-data">
<input type="text" name="name">
<input type="text" name="lastname" value="<?=$lname;?>">
<input type="file" name="filename"/>
<input type="submit"/>
</form>
<?php
//$_SESSION['name']=$_GET['name'];
var_dump($_FILES['filename']['name']);
$uploaddir='images/';//physical directory adress
$uploadfile=$uploaddir.basename($_FILES['filename']['name']);

if(move_uploaded_file($_FILES['filename']['tmp_name'],$uploadfile)){
    echo "file is valid and was successfully uploaded.\n";
}else{
    echo "Possible file upload attack! \n";
}
echo md5('name')
print_r($_FILES);
?>