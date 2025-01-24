<?php

include ("../connectdb/index.php");

?>

<?php

if($_GET){

?>


<?php

$offset = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['offset'])))));
$limit = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['limit'])))));
$offset = preg_replace('/ +/', '', $offset);
$limit = preg_replace('/ +/', '', $limit);

$count = 0;

$getpost = mysql_query("SELECT * FROM follow INNER JOIN posts ON posts.user_id = follow.following WHERE follow.follow='$id'	GROUP BY posts.id DESC LIMIT $limit OFFSET $offset");

while($post = mysql_fetch_array($getpost)){
if($post['type'] == "taged"){
if(!empty($post['group_share']) && !empty($post['group_admin'])){
if($post['type'] == "ori" && $post['type_all'] == "taged_from" && $stopechopost !== "true"){
$stopechopost = "true";
$groupostid = $post['id'];
$queryadmin = mysql_query("SELECT * FROM posts WHERE id='$groupostid' AND group_share!='' AND group_admin!='' LIMIT 1");
while($post = mysql_fetch_array($queryadmin)){
include "posts/postvalues.php";
}
}else {
if($post['type'] == "taged" && $post['type_all'] == "taged_to" && $stopechopost !== "true"){
$stopechopost = "true";
$groupostid = $post['tag_id'];
$queryadmin = mysql_query("SELECT * FROM posts WHERE id='$groupostid' AND group_share!='' AND group_admin!='' LIMIT 1");
while($post = mysql_fetch_array($queryadmin)){
include "posts/postvalues.php";
}
}else {}
}
}else {}
}else {
if($post['type'] == "share"){
$sahrepostd = $post['share_id'];
$usershared = $post['user_id'];
$postextshr = $post['post_text'];
$oripostids = $post['id'];
$offpostype = "share";
$queryadmin = mysql_query("SELECT * FROM posts WHERE id='$sahrepostd' AND type='ori' LIMIT 1");
while($post = mysql_fetch_array($queryadmin)){
include "../posts/postvalues.php";
}
}else {
$sahrepostd = '';
$usershared = '';
$postextshr = '';
$oripostids = '';
$offpostype = '';
include "posts/postvalues.php";
}
}
}

/*
if(empty($empty)){
$getpost = mysql_query("SELECT * FROM posts WHERE user_id='$id' ORDER BY id DESC LIMIT $limit OFFSET $offset");
while($post = mysql_fetch_array($getpost)){
$count++;
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

include "posts/mainallposts.php";
include "posts/scriptpost.php";

$empty = "true";

}
if(empty($empty)){
	// there is no posts at all
	include "posts/emptypost.php";
}
}else {}

*/
?>

<?php
include "posts/ofwhilejs.php";
?>


<?php

}

?>


