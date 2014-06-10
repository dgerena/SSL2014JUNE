<?php
class usersModel{
	function login($username,$pass){
		global $conn;
		$sqlstmt=$conn->prepare("select * from peeps where yaName='$username'and yaPass='$pass';");
		$sqlstmt->execute();
		$results=$sqlstmt->fetchAll(PDO::FETCH_ASSOC);
		if(isset($results['id'])){
			$_SESSION['userId']=$results['id'];
			header('Location: index.php');
		}
	}
}
?>