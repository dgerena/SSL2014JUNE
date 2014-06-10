<?php
class usersModel{
	function login($username,$pass){
		global $conn;
		$sqlstmt=$conn->prepare("select * from peeps where yaName='$username'and yaPass='$pass';");
		$sqlstmt->execute();
		$results=$sqlstmt->fetchAll(PDO::FETCH_ASSOC);
		if(isset($results[0]['id'])){
			$_SESSION['userId']=$results[0]['id'];
			header('Location: index.php');
		}else{
			require_once('views/home.php');
		}
	}
}
?>