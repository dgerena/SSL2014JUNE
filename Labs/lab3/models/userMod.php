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
	function insert(){
		global $conn;
	    $stmt=$conn->prepare("INSERT INTO fruit_table (name, color) VALUES (:name,:color)");
	    $stmt->bindParam(':name',$name);
	    $stmt->bindParam(':color',$color);
	    $name='apple';
	    $color='red';
	    $stmt->execute();
	}
	function getMsgs(){
		global $conn;
	    //calling the table data    $sql = 'SELECT name, color FROM fruit_table ORDER BY name';
	    foreach($conn->query("SELECT * FROM blargs WHERE userId = '".$_SESSION['userId']."' ORDER BY title;")as $row){
	        echo $row['title']."\t";
	        echo $row['words']."\t";
	    };
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
	function delete(){
		global $conn;
	    $name='banana';
	    $sth=$conn->prepare('DELETE FROM fruit_table WHERE name = :name');
	    $sth->bindParam(':name',$name, PDO::PARAM_STR);
	    $sth->execute();
	    echo "Deleted";
	}
	//fix for later user
	function update(){
		global $conn;
	    $name='apple';
	    $color='red';
	    $sth=$conn->prepare('UPDATE fruit_table SET color=:color WHERE name = :name');

	    $sth->execute(array(":color"=>$color,":name"=>$name));

	    if($sth -> errorCode() ==0){
	    }else{
	        $errors=$stmt->errorInfo();
	        echo($errors[2]);
	    };
	}
};
?>