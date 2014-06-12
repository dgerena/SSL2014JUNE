<?php
// //db.php
// class db{
// 	public function __construct(){
// 		$db = PDO()...
// 		$conn = $db;
// 	}
// }
// This is a demo as how to make a single connection that each one will have through ' extends db' 
// //userM.php
// include 'db.php';
				/*extends db{*/
class usersModel {
	function login($username,$pass){
		global $conn;
			// $this->
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
	function insert($title,$message){
		global $conn;
	    $stmt=$conn->prepare("INSERT INTO blargs (userId, title, words) VALUES (:user, :title,:message)");
	    $stmt->bindParam(':user',$_SESSION['userId']);
	    $stmt->bindParam(':title',$title);
	    $stmt->bindParam(':message',$message);
	    $stmt->execute();
	    header('Location: index.php');
	}
	function getMsgs(){
		global $conn;
		$uArray=array();
	    //calling the table data    $sql = 'SELECT name, color FROM fruit_table ORDER BY name';
	    foreach($conn->query("SELECT * FROM blargs WHERE userId = '".$_SESSION['userId']."' ORDER BY title;")as $row){
	        $obj = array("id"=>$row['id'], "title"=>$row['title'], "message"=>$row['words']);
	        array_push($uArray,$obj);
	    }
	    return $uArray;
	}
	function select(){
		global $conn;
	    //select fix for later use
	    $stmt=$conn->prepare("select name from fruit_table where name = 'apple' or color = 'orange'");
	    $stmt->bindParam(":name",$name);
	    $stmt->bindParam(":color",$color);
	    $color="red";
	    $stmt->execute(array(":color"=>$color,":name"=>$name));
	}
	function delete($id){
		global $conn;
	    $sth=$conn->prepare('DELETE FROM blargs WHERE id = :id');
	    $sth->bindParam(':id',$id, PDO::PARAM_STR);
	    $sth->execute();
	    header('Location: index.php');
	}
	//fix for later user
	function update($id,$title,$msg){
		global $conn;
	    
	    $sth = $conn->prepare('UPDATE blargs SET title=:title WHERE id = :id; UPDATE blargs SET words=:words WHERE id = :id;');
	    $sth ->bindParam(':id',$id);
	    $sth ->bindParam(':title',$title);
	    $sth ->bindParam(':words',$msg);
	    $sth->execute();

	    if($sth -> errorCode() ==0){
	    	header('Location: index.php');
	    }else{
	        $errors=$stmt->errorInfo();
	        echo($errors[2]);
	    }
	}
};
?>