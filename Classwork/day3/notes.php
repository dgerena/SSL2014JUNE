<?php
/* 
Methdos of connection
preshared keys ssl.

Ip based connection.- least secure just does a check for ip

most use a 2 lvl authentication and ssh 

most important thing in ur computer is data


mysqli connection method-> mysqli_connect("example.com","user","password","database"); authentication by database engine, authorization through php
$res =mysqli_query($mysqli, "SELECT 'Do not use ' AS _msg FROM DUAL");
$rop=mysqli_fetch_assoc($res);
echo $row['_msg']; to output all instead of last loop through

OOI object oriented interface
        new instantiates.
$mysqli= new mysqli_connect("example.com","user","password","database");
        
if ($mysqli->connect_errno){
    echo "error".$mysqli->connect_error;
}.. didnt get to finish typeing it.

mysqli prepared statements

pdo connections

\

for safety in stuff

$stmt=
    $dbh->prepare("INSERT INTO REGISTRY(name,value) VALUES (:name,:value)");
    
    $stmt->bindParam(':name', $_POST[name]); //bind teh parameters for the above statement.
    $stmt->bindParam(':value', $_POST[age]); //these lock the terms and bind them for safety and to assist with stopping sql injection. it does this by ensureing it only can effect the specifc column
    
$stmt->execute() finaly pushes the data and runs what youve set before for the dattabase
function getFruit($conn){
    $sql = 'SELECT name, color FROM fruit ORDER BY name';
    foreach ($conn->query($sql)as $row){
        echo $row['name]."\t";
        echo $row['color]."\t";
    }
}



for lab



get info save to database

then duplicate that same html page

save as a lgin page
they enter user and pass on submitcheck from database
if theres matches with the database reroute to new page.


login

if such a user exists itl return results

if so creaet sesssion variable. 

session start session variable suer logoin true

if return result is 0  no user found 

were creating a session variable site wide for secutirty that  will check login to it when getting to otehr pages.