
<?php
//phpinfo();
//$name ='Eli'; //
// javascript and php
// java style var -> public string name = eli ;
?>
<?php $name = "eli" ?>
<form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="lastname" value="<?=$name;?>">
    <input type="submit"/>
</form>
// in the value section you can use both = or echo as echo.//



<?php 
    $myArray= array("name"=>$_POST["name"],"lname"=>$_POST["lastname"])
    var_dump($myArray);
?>









<?
//echo:"tst"
//Other processes use these to print to screen
   /* alert
    print
    trace
    console
    */
//methods of pushing to the screen
    /*
    echo
    print
    var_dump();//Most usefull in real life work
    */
//Loops

//foreach($_POST as x){
//    echo "<span style='color:red'>".$x."</span><br/>";
//}

//var_dump(post)
?>