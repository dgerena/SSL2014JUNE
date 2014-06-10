<?php 
$user='root';
$pass='root';
$dbh=new PDO("mysql:host=localhost;dbname=fruit;port=8889",$user,$pass);
$stmt=$dbh->prepare("select * from fruit_table");
$stmt->execute();
$fruit=$stmt->fetchAll();

echo '<?xml version="1.0"?>';
echo "<fruits>";
	foreach($fruit as $fruit){
	echo '<id>'.$fruit["id"].'</id>';
	echo '<fruitname>'.$fruit["name"].'</fruitname>';
	echo '<fruitcolor>'.$fruit["color"].'</fruitcolor>';
	}
echo "</fruits>";



//json_decode(json) to make it into an array you can loop through.
?>