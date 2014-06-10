<?php 
//insert
$user='root';
$pass='root';
$conn= new PDO('mysql:host=localhost;dbname=fruit;port=8889',$user,$pass);
$stmt=$conn->prepare("INSERT INTO fruit_table (name, color) VALUES (:name,:color)");
$stmt->bindParam(':name',$name);
$stmt->bindParam(':color',$color);
$name='apple';
$color='red';
$stmt->execute();





?>