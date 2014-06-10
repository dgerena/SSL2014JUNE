<?php
class usersModel{
	function login($username,$pass){
		global $conn;
		$sqlstmt=$conn->prepare("select * from peeps where yaName='$username';");
		$sqlstmt->execute();
		$results=$sqlstmt->fetchAll(PDO::FETCH_ASSOC);
		echo "HEYYYYYYYYYY";
	}
}
?>