<?php 

$user='root';
$pass='root';
$dbh=new PDO("mysql:host=localhost;dbname=fruit;port=8889",$user,$pass);

$stmt=$dbh->prepare("select * from fruit_table");
$stmt->execute();
$fruit=$stmt->fetchAll();

header("Content-type:application/json");
echo json_encode($fruit);
?>