<?php

$user_id = $post['user_id'];	
$ifposte = $post['post_text'];
$breplac = preg_replace('/ +/', '', $ifposte);
$imgv = $post['post_img'];
$vidn = $post['post_video'];
$audio = $post['audio'];
$postid = $post['id'];
$postdate = $post['post_date'];
$check = $post['c_check'];
$arrayno = $post['array'];
$array_type = $post['array_type'];
$type = $post['type_all'];
$imgheight = $post['img_height'];
$imgwidth = $post['img_width'];
$ertop = mysql_query("SELECT * FROM users WHERE id='$user_id'");
while($uinf = mysql_fetch_array($ertop)){
	$user_img = $uinf['pro_img'];
	$user_name = $uinf['name'];
	$usern = $uinf['user_name'];
	$first_name = $uinf['first_name'];
}

include "../ajax-php/posts/mainallposts.php";
include "../ajax-php/posts/scriptpost.php";

$empty = "true";

?>