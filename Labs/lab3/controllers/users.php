<?php
require_once('models/userMod.php');
$uMod=new usersModel();
if(isset($_GET['yaPass'])){
	$uMod->login($_GET['yaName'],$_GET['yaPass']);
}else{
	$uMod->getMsgs();
}


?>