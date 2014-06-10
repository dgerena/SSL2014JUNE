<?php 
//calling the table data
$user='root';
$pass='root';
$conn= new PDO('mysql:host=localhost;dbname=fruit;port=8889',$user,$pass);
function getFruit($conn){
    $sql = 'SELECT name, color FROM fruit_table ORDER BY name';
    foreach($conn->query($sql)as $row){
        echo $row['name']."\t";
        echo $row['color']."\t";
    }
}
getFruit($conn);

?>