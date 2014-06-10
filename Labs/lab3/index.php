<?php
session_start();
//creating  the connection 
$conn = new PDO('mysql:host=localhost;dbname=tbd;port=8889;','root','root');
//checking for currently open session then bringeng them to their data
if(isset($_SESSION['userId'])||isset($_GET['yaName'])){
	require_once('controllers/users.php');
}else{
	require_once('views/home.php');
}
var_dump($_SESSION)
?>