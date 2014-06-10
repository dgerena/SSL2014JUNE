<?php 
$user='root';
$pass='root';
$conn= new PDO('mysql:host=localhost;dbname=fruit;port=8889',$user,$pass);



//$stmt=$conn->prepare("select name, id from fruit_table where name = 'apple' or color ='red' ");
//$stmt->bindParam(":color",$color);
//
//$color="red";
//$stmt->execute();
//also can 
//$stmt->execute(array(":color"=>$color,
//                        ":name"=>$name));
//update
$name='apple';
$color='red';
$sth=$conn->prepare('UPDATE fruit_table SET color=:color WHERE name = :name');

$sth->execute(array(":color"=>$color,":name"=>$name));

if($sth -> errorCode() ==0){
}else{
    $errors=$stmt->errorInfo();
    echo($errors[2]);
};
//delete
//$name='banana';
//$sth=$conn->prepare('DELETE FROM fruit_table WHERE name = :name');
//$sth->bindParam(':name',$name, PDO::PARAM_STR);
//$sth->execute();
//echo "DONE";


?>