<?php 
//select
$user='root';
$pass='root';
$conn= new PDO('mysql:host=localhost;dbname=fruit;port=8889',$user,$pass);
$stmt=$conn->prepare("select name from fruit_table where name = 'apple' or color = 'orange'");
$stmt->bindParam(":name",$name);
$stmt->bindParam(":color",$color);

$color="red";
$stmt->execute(array(":color"=>$color,":name"=>$name));
//also can 
$stmt->execute(array(":color"=>$color,":name"=>$name));



?>