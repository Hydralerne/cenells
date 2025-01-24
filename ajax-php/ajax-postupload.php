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
$temp = explode(".", $img_name);
$mdimcroaf = round(microtime(true));
$array = array('image/png','image/jpeg','image/JPG','image/gif','image/bmp','image/wbmp');

if(in_array($img_type,$array)){
$imagetype = str_replace('image/','',$img_type);
$imgname = 'CIMG_'.$mdimcroaf.'_'.date("y").''.date("m").''.date("d").'_'.$id.'.'.$imagetype.'';
ini_set('memory_limit', '512M');

if($img_size > 200000) {
    $resource = imagecreatefromstring(file_get_contents($img_tmp));
    imagejpeg($resource,'../upload/posts/images/full/low/'.$imgname.'', 35); 
}else{
if($img_size > 100000){
	$resource = imagecreatefromstring(file_get_contents($img_tmp));
	imagejpeg($resource,'../upload/posts/images/full/low/'.$imgname.'',50);
}else {
	$resource = imagecreatefromstring(file_get_contents($img_tmp));
	imagejpeg($resource,'../upload/posts/images/full/low/'.$imgname.'',75);
}
}
$uploadimg = move_uploaded_file($img_tmp,'../upload/posts/images/full/height/'.$imgname.'');

function loadimgblurmk($imgname){

$imgsrc = "../upload/posts/images/full/height/".$imgname."";

list($imgwidth, $imgheight) = getimagesize($imgsrc);

ini_set('memory_limit', '512M');

$img = file_get_contents($imgsrc);

$im = imagecreatefromstring($img);

$width = imagesx($im);

$height = imagesy($im);

$newwidth = '300';

$newheight = $imgheight * $newwidth / $imgwidth;

$thumb = imagecreatetruecolor($newwidth, $newheight);

imagecopyresized($thumb, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

imagejpeg($thumb,'../upload/posts/images/sml/'.$imgname.'.jpg',25); //save image as jpg

imagedestroy($thumb); 

imagedestroy($im);

}

function loadimgminico($imgname,$img_size){

$imgsrc = "../upload/posts/images/full/height/".$imgname."";

list($imgwidth, $imgheight) = getimagesize($imgsrc);

ini_set('memory_limit', '512M');

$img = file_get_contents($imgsrc);

$im = imagecreatefromstring($img);

$width = imagesx($im);

$height = imagesy($im);

if($img_size > 100000){
if($img_size > 200000){
if($img_size > 2500000){
if($img_size > 10000000){
$newwidth = $width / 2.5;
$quality = 75;
}else {
$newwidth = $width / 2.5;
$quality = 80;
}
}else {
$newwidth = $width / 2;
$quality = 80;	
}
}else {
$newwidth = $width;
$quality = 50;	
}
}else {
$quality = 50;
$newwidth = $width;
}

$newheight = $imgheight * $newwidth / $imgwidth;

$thumb = imagecreatetruecolor($newwidth, $newheight);

imagecopyresized($thumb, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

imagejpeg($thumb,'../upload/posts/images/mini/'.$imgname.'.jpg',$quality); //save image as jpg

imagedestroy($thumb); 

imagedestroy($im);

}

if(isset($uploadimg)){
loadimgblurmk($imgname);
loadimgminico($imgname,$img_size);
echo "<input type='hidden' id='hideinimgsrc' value='$imgname' />";

}
}

}



?>