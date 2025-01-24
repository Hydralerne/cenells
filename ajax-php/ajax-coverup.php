<?php
date_default_timezone_set('Africa/Cairo');
$id = $_COOKIE['_CEUSER'];
?>
<?php

if(isset($_FILES['userImage'])){

$img_name = $_FILES['userImage']['name'];
$img_size = $_FILES['userImage']['size'];
$img_tmp = $_FILES['userImage']['tmp_name'];
$img_type = $_FILES['userImage']['type'];   
$tmp = explode('.',$_FILES['userImage']['name']);
$img_basename = substr($img_name, 0, strripos($img_name, '.')); 
$img_ext = substr($img_name, strripos($img_name, '.'));
$mdimcroaf = round(microtime(true));
$array = array('image/png','image/jpeg','image/JPG','image/gif','image/bmp','image/wbmp');

if(in_array($img_type,$array)){

$imagetype = str_replace('image/','',$img_type);
$imgname = 'CIMG_'.$mdimcroaf.'_'.date("y").''.date("m").''.date("d").'_'.$id.'.'.$imagetype.'';
$restrainedquality = 50; 
$sizelimit = 200000;
ini_set('memory_limit', '512M');

if($img_size > $sizelimit) {
    $resource = imagecreatefromstring(file_get_contents($img_tmp));
    imagejpeg($resource,'../upload/covers/full/low/'.$imgname.'', $restrainedquality); 
}else{
    $resource = imagecreatefromstring(file_get_contents($img_tmp));
    imagejpeg($resource,'../upload/covers/full/low/'.$imgname.''); 
}
$uploadimg = move_uploaded_file($img_tmp,'../upload/covers/full/height/'.$imgname.'');

function loadimgblurmk($imgname){

$imgsrc = "../upload/covers/full/height/$imgname";

list($imgwidth, $imgheight) = getimagesize($imgsrc);

ini_set('memory_limit', '512M');

$img = file_get_contents($imgsrc);

$im = imagecreatefromstring($img);

$width = imagesx($im);

$height = imagesy($im);

$newwidth = 300;

$newheight = $imgheight * $newwidth / $imgwidth;

$thumb = imagecreatetruecolor($newwidth, $newheight);

imagecopyresized($thumb, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

imagejpeg($thumb,'../upload/covers/sml/'.$imgname.'.jpg',25); //save image as jpg

imagedestroy($thumb); 

imagedestroy($im);

}


function loadimgminico($imgname){

$imgsrc = "../upload/covers/full/height/$imgname";

list($imgwidth, $imgheight) = getimagesize($imgsrc);

ini_set('memory_limit', '512M');

$img = file_get_contents($imgsrc);

$im = imagecreatefromstring($img);

$width = imagesx($im);

$height = imagesy($im);

$newwidth = 720;

$newheight = $imgheight * $newwidth / $imgwidth;

$thumb = imagecreatetruecolor($newwidth, $newheight);

imagecopyresized($thumb, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

imagejpeg($thumb,'../upload/covers/mini/'.$imgname.'.jpg',25); //save image as jpg

imagedestroy($thumb); 

imagedestroy($im);

}



if(isset($uploadimg)){
loadimgblurmk($imgname);
loadimgminico($imgname);

echo '<input type="hidden" id="hidencoverval" value="'.$imgname.'" />';

}
}

}



?>