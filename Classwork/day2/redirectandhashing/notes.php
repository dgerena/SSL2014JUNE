
<?php
//hashes set up charecter hexadecimal numbers to secure your passwords and information that it is necessary

//how to hashes
//$str='apple'
////without salt
//if(md5($str)=== '1f3870be274f6c49b3e31a0c6728957f'){echo 'valid user';}
////with salting echo md5($str)
//if (md5($salt.$str)==='asda3870be2345kf431a0c67'){echo'valid user';}

//captcha

public funciton msg($msg){
    $container= imagecreate(300,200);
    $black=imagecolorallocate($container,0,0,0);
    $white=imagecolorallocate($container,255,255,255);
    $font='fonts/Halo.ttf';
    imagefilledrectangle($container,0,0,250,150,$black);
    imagerectangle($container,0,0,50,60,$white);
    imagefttext($container,12,0,0,12,$white,$font,$msg)
    header('Content-Type:image/png');
    imagepng($container, null);
    imagedestroy($container)
}

//validation. regex usage
//check php documentation for $patern and user input in the case shown in class -> $subjct

//2.1 lab upload image , get and post perameters., test captcha, 2.2 chekc php for random create random workds using php. use a diontinary .txt to hold words.
//2.3 is out. 2.4 after passing information to next page save session save as a slted hash value. create print it then sae to session. 2.5 one the user has submitted  redirect to a profile page that displays information stored in session vairable.

txt dicntinary
    formated liek this
    
    one 
    two
    three
    
?>
