<?php
require_once('models/userMod.php');

$uMod=new usersModel();

if(isset($_GET['yaPass'])){
	$uMod->login($_GET['yaName'],$_GET['yaPass']);
}elseif(isset($_GET['update'])){
	$uMod->update($_GET['id'],$_GET['title'],$_GET['message']);
}elseif(isset($_GET['delete'])){
	$uMod->delete($_GET['id']);
}elseif(isset($_GET['title'])){
	$uMod->insert($_GET['title'],$_GET['message']);
}elseif(isset($_GET['signout'])){
	session_destroy();
	header('Location: index.php');
}elseif(isset($_SESSION['userId'])){
	$messages = $uMod->getMsgs();
	require_once('views/msgview.php');
}else{
	echo "No session is currently set";
}

 //for debugging only!
?>