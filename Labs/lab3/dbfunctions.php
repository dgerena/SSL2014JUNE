<?php
function insert($conn){
    $stmt=$conn->prepare("INSERT INTO fruit_table (name, color) VALUES (:name,:color)");
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':color',$color);
    $name='apple';
    $color='red';
    $stmt->execute();
};
function getFruit($conn){
    //calling the table data    $sql = 'SELECT name, color FROM fruit_table ORDER BY name';
    foreach($conn->query($sql)as $row){
        echo $row['name']."\t";
        echo $row['color']."\t";
    };
};
function select($conn){
    //select fix for later use
    $stmt=$conn->prepare("select name from fruit_table where name = 'apple' or color = 'orange'");
    $stmt->bindParam(":name",$name);
    $stmt->bindParam(":color",$color);
    $color="red";
    $stmt->execute(array(":color"=>$color,":name"=>$name));
};
function delete($conn){
    $name='banana';
    $sth=$conn->prepare('DELETE FROM fruit_table WHERE name = :name');
    $sth->bindParam(':name',$name, PDO::PARAM_STR);
    $sth->execute();
    echo "Deleted";
};
//fix for later user
function update($conn){
    $name='apple';
    $color='red';
    $sth=$conn->prepare('UPDATE fruit_table SET color=:color WHERE name = :name');

    $sth->execute(array(":color"=>$color,":name"=>$name));

    if($sth -> errorCode() ==0){
    }else{
        $errors=$stmt->errorInfo();
        echo($errors[2]);
    };
};
?>