<?php


if(isset($_POST['subimage'])){

$cimgm = addslashes(htmlspecialchars(strip_tags(trim($_POST['imageval']))));

ini_set('memory_limit', '512M');

// upload file api content for crop image

$file = $cimgm;

$data = file_get_contents($file);
$mdimcroaf = round(microtime(true));	

$mdimcro = 'CIMG_'.$mdimcroaf.'_'.date("y").''.date("m").''.date("d").'_'.$id.'';

$imgsrc = "../upload/images/height/$mdimcro.png";

$kohmain = file_put_contents($imgsrc, $data);

// upload file api content for full image 
 
$resource = imagecreatefromstring(file_get_contents($imgsrc));

function loadimgblurmk($mdimcro){

$imgsrc = "../upload/images/height/$mdimcro.png";

list($imgwidth, $imgheight) = getimagesize($imgsrc);

ini_set('memory_limit', '512M');

$img = file_get_contents($imgsrc);

$im = imagecreatefromstring($img);

$width = imagesx($im);

$height = imagesy($im);

$newwidth = '150';

$newheight = $imgheight * $newwidth / $imgwidth;

$thumb = imagecreatetruecolor($newwidth, $newheight);

imagecopyresized($thumb, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

imagejpeg($thumb,'../upload/images/low/'.$mdimcro.'.jpg', 80); 

imagedestroy($thumb); 

imagedestroy($im);

}
loadimgblurmk($mdimcro);
echo '
<input type="hidden" id="hideproimgval" value="'.$mdimcro.'" />
<script>
doupfullimg();
</script>
';

}

?>