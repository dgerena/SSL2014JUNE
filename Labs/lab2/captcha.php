<?php
# here we set a var to access the words directly
$bank=file("dictionary.php");
$randWord=rand(0,count($bank)-1);# tryiong to randomize what words are accessed
//msg($bank[$randWord]);# now printing it hopefully.


$cap='<label>Captcha:</label><image src="rndcap.png" /><br /><input name="cap" value="$randWord" type="hidden" /><input name="captcha" type="text" /><br/>';



function msg($msg){
    $container = imagecreate(300,200);
    $black = imagecolorallocate($container,0,0,0);
    $white = imagecolorallocate($container,255,255,255);
    $font = 'font/Halo.ttf';
    imagefilledrectangle($container,0,0,250,150,$black);
    imagerectangle($container,0,0,50,60,$white);
    imagefttext($container,12,0,0,12,$white,$font,$msg);
    //header('Content-Type:image/png');
    imagepng($container,'rndcap.png');
    imagedestroy($container);
};
?>