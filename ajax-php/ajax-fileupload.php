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
    imagejpeg($resource,'../upload/comments/images/full/low/'.$imgname.'', $restrainedquality); 
}else{
	$resource = imagecreatefromstring(file_get_contents($img_tmp));
    imagejpeg($resource,'../upload/comments/images/full/low/'.$imgname.''); 
}
$uploadimg = move_uploaded_file($img_tmp,'../upload/comments/images/full/height/'.$imgname.'');

function loadimgblurmk($imgname){

$imgsrc = "../upload/comments/images/full/height/$imgname";

list($imgwidth, $imgheight) = getimagesize($imgsrc);

ini_set('memory_limit', '512M');

$img = file_get_contents($imgsrc);

$im = imagecreatefromstring($img);

$width = imagesx($im);

$height = imagesy($im);

$newwidth = 100;

$newheight = $imgheight * $newwidth / $imgwidth;

$thumb = imagecreatetruecolor($newwidth, $newheight);

imagecopyresized($thumb, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

imagejpeg($thumb,'../upload/comments/images/sml/'.$imgname.'.jpg',50); //save image as jpg

imagedestroy($thumb); 

imagedestroy($im);

}

function loadimgminico($imgname){

$imgsrc = "../upload/comments/images/full/height/$imgname";

list($imgwidth, $imgheight) = getimagesize($imgsrc);

ini_set('memory_limit', '512M');

$img = file_get_contents($imgsrc);

$im = imagecreatefromstring($img);

$width = imagesx($im);

$height = imagesy($im);

if($width > 720 || $height > 300){
$newwidth = 720;
$quality = 25;
}else {
$newwidth = $width;
$quality = 50;
}

$newheight = $imgheight * $newwidth / $imgwidth;

$thumb = imagecreatetruecolor($newwidth, $newheight);

imagecopyresized($thumb, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

imagejpeg($thumb,'../upload/comments/images/mini/'.$imgname.'.jpg',$quality); //save image as jpg

imagedestroy($thumb); 

imagedestroy($im);


}

if(isset($uploadimg)){
loadimgblurmk($imgname);
loadimgminico($imgname);

	echo "<div class='pocdiv_4477'>
	<input type='hidden' class='hidecommimgsrc' value='$imgname' />
	<img src='../upload/comments/images/sml/$imgname' id='img_4477' class='img_4477 ertopic_4477' />
	";
	echo '
	<svg class="falseupl4477" id="falseupl4477" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
<g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
    <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
</g>
    </g>
</svg>
	</div>
    ';
	echo '
	<script>
	var postid = $(".hidecommimgsrc[value=\''.$imgname.'\']").closest(".post-main-tvi").attr("id");
    $("#com"+ postid +" .add_img_edit_4477").css(\'margin-left\',\'230px\');
    $("#com"+ postid +" .move_4477").css(\'margin-left\',\'155px\');
    $(".falseupl4477").click(function (){
    var postid = $(this).closest(".post-main-tvi").attr("id");
    $(this).closest(".pocdiv_4477").remove();
    $("#com"+ postid +" .add_img_edit_4477").css(\'margin-left\',\'335px\');
    $("#com"+ postid +" .move_4477").css(\'margin-left\',\'260px\');
    });
	</script>
	';
}
}

}



?>