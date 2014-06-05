<?php
public function msg($msg){
    $container = imagecreate(300,200);
    $black = imagecolorallocate($container,0,0,0);
    $white = imagecolorallocate($container,255,255,255);
    $font = 'font/Halo.ttf';
    imagefilledrectangle($container,0,0,250,150,$black);
    imagerectangle($container,0,0,50,60,$white);
    imagefttext($container,12,0,0,12,$white,$font,$msg);
    //header('Content-Type:image/png');
    imagepng($container,null);
    imagedestroy($container);
};
msg
?>