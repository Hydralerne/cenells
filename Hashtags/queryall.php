<?php

include ("../connectdb/index.php");

?>

<?php

if($_GET['all']){

include "../ajax-php/posts/postool.php";

?>


<?php

$hashname = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_GET['hashname'])))));
$offset = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['offset'])))));
$limit = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['limit'])))));
$offset = preg_replace('/ +/', '', $offset);
$limit = preg_replace('/ +/', '', $limit);
$hashname = preg_replace('/ +/', '', $hashname);

$count = 0;

$gethash = mysql_query("SELECT * FROM hashtags WHERE name='$hashname' AND type='normal' AND post_id!='' AND post_type!='none' ORDER BY id DESC LIMIT $limit OFFSET $offset");

while($fethash = mysql_fetch_array($gethash)){
$hashpostid = $fethash['post_id'];
$getpost = mysql_query("SELECT * FROM posts WHERE id='$hashpostid' LIMIT 1");

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
/*
if($count == "4"){
	include "postsads.php";
}
*/
?>

<?php
include "../ajax-php/posts/mainallposts.php";
include "../ajax-php/posts/scriptpost.php";
?>

<?php

}
}

?>

<?php
include "../ajax-php/posts/ofwhilejs.php";
?>


<?php

}

?>



<?php

if($_GET['post']){

include "../ajax-php/posts/postool.php";

?>


<?php

$hashname = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_GET['hashname'])))));
$offset = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['offset'])))));
$limit = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['limit'])))));
$offset = preg_replace('/ +/', '', $offset);
$limit = preg_replace('/ +/', '', $limit);
$hashname = preg_replace('/ +/', '', $hashname);

$count = 0;

$gethash = mysql_query("SELECT * FROM hashtags WHERE name='$hashname' AND type='normal' AND post_id!='' AND post_type='text' ORDER BY id DESC LIMIT $limit OFFSET $offset");

while($fethash = mysql_fetch_array($gethash)){
$hashpostid = $fethash['post_id'];
$getpost = mysql_query("SELECT * FROM posts WHERE id='$hashpostid' LIMIT 1");

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
/*
if($count == "4"){
	include "postsads.php";
}
*/
?>

<?php
include "../ajax-php/posts/mainallposts.php";
include "../ajax-php/posts/scriptpost.php";
?>

<?php

}
}

?>

<?php
include "../ajax-php/posts/ofwhilejs.php";
?>


<?php

}

?>



<?php

if($_GET['image']){

include "../ajax-php/posts/postool.php";

?>


<?php

$hashname = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_GET['hashname'])))));
$offset = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['offset'])))));
$limit = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['limit'])))));
$offset = preg_replace('/ +/', '', $offset);
$limit = preg_replace('/ +/', '', $limit);
$hashname = preg_replace('/ +/', '', $hashname);

$count = 0;

$gethash = mysql_query("SELECT * FROM hashtags WHERE name='$hashname' AND type='normal' AND post_id!='' AND post_type='image' ORDER BY id DESC LIMIT $limit OFFSET $offset");

while($fethash = mysql_fetch_array($gethash)){
$hashpostid = $fethash['post_id'];
$getpost = mysql_query("SELECT * FROM posts WHERE id='$hashpostid' LIMIT 1");

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
/*
if($count == "4"){
	include "postsads.php";
}
*/
?>

<?php
include "../ajax-php/posts/mainallposts.php";
include "../ajax-php/posts/scriptpost.php";
?>

<?php

}
}

?>

<?php
include "../ajax-php/posts/ofwhilejs.php";
?>


<?php

}

?>




<?php

if($_GET['audio']){

include "../ajax-php/posts/postool.php";

?>


<?php

$hashname = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_GET['hashname'])))));
$offset = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['offset'])))));
$limit = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['limit'])))));
$offset = preg_replace('/ +/', '', $offset);
$limit = preg_replace('/ +/', '', $limit);
$hashname = preg_replace('/ +/', '', $hashname);

$count = 0;

$gethash = mysql_query("SELECT * FROM hashtags WHERE name='$hashname' AND type='normal' AND post_id!='' AND post_type='audio' ORDER BY id DESC LIMIT $limit OFFSET $offset");

while($fethash = mysql_fetch_array($gethash)){
$hashpostid = $fethash['post_id'];
$getpost = mysql_query("SELECT * FROM posts WHERE id='$hashpostid' LIMIT 1");

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
/*
if($count == "4"){
	include "postsads.php";
}
*/
?>

<?php
include "../ajax-php/posts/mainallposts.php";
include "../ajax-php/posts/scriptpost.php";
?>

<?php

}
}

?>

<?php
include "../ajax-php/posts/ofwhilejs.php";
?>


<?php

}

?>

<?php

if($offset == "0"){
	echo '<script>$(".loading_poats").fadeOut(0)</script>';
}else {
	echo '<script>$(".loading_poats").fadeIn(0)</script>';
}

?>
