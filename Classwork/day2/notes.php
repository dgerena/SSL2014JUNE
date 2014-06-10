<?php 
$name = "Eli";
$lname = "Gerena";
$address='Burnet st.';
$city='Avenel';
$state='NJ';
$zip='07001';
$email='me@awesome.com';
$phone='123-456-7890';
$url='';
// in the value section you can use both = or echo as echo.//
?>
<form action="" method="POST">
    <input type="text" name="name" value="<?=$name;?>">
    <input type="text" name="lastname" value="<?=$lname;?>">
    <input type="text" name="address" value="<?=$address;?>">
    <input type="text" name="city" value="<?=$city;?>">
    <select name="state" value="<?=$state;?>">
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District of Columbia</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
    </select>
    <input type="text" name="zip" value="<?=$zip;?>">
    <input type="text" name="email" value="<?=$email;?>">
    <input type="text" name="phone" value="<?=$phone;?>">
    <input type="text" name="url" value="<?=$url;?>">
    <input type="submit"/>
</form>

<?php 
$myArray=array("name"=>$_POST["name"],"lname"=>$_POST["lastname"],"address"=>$_POST["address"],"city"=>$_POST["city"],"state"=>$_POST["state"],"zip"=>$_POST["zip"],"email"=>$_POST["email"],"phone"=>$_POST["phone"],"url"=>$_POST["url"]);
var_dump($myArray);

if ($_POST['state'] == FL){
    echo "THE SUNSHEEEN STATE YAYYYYYYYY!";
}else if($_POST['state'] == NY){
    echo "The melting pot of US... (Big apple Full of worms)";
}else if($_POST['state'] == NJ){
    echo "The gas and petrochemical state!";
}else if ($_POST['state'] == CA){
    echo "Where the women have more plastic then barby!"
}

?>
<?php

//if statement for florida and ny


//phpinfo();Name, Last Name, Address, City, State, Zip, Email address, Phone number, and Web URL
//$name ='Eli'; //
// javascript and php
// java style var -> public string name = eli ;

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