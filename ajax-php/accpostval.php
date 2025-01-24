<?php

$query = mysql_query("SELECT * FROM posts WHERE user_id='$use' ORDER BY id DESC LIMIT $limit OFFSET $offset");
while($post = mysql_fetch_array($query)){
if($post['type'] == "taged"){
if(!empty($post['group_share']) && !empty($post['group_admin'])){
if($post['type'] == "ori" && $post['type_all'] == "taged_from" && $stopechopost !== "true"){
$stopechopost = "true";
$groupostid = $post['id'];
$queryadmin = mysql_query("SELECT * FROM posts WHERE id='$groupostid' AND group_share!='' AND group_admin!='' LIMIT 1");
while($post = mysql_fetch_array($queryadmin)){
include "../ajax-php/posts/whilepostacc.php";
}
}else {
if($post['type'] == "taged" && $post['type_all'] == "taged_to" && $stopechopost !== "true"){
$stopechopost = "true";
$groupostid = $post['tag_id'];
$queryadmin = mysql_query("SELECT * FROM posts WHERE id='$groupostid' AND group_share!='' AND group_admin!='' LIMIT 1");
while($post = mysql_fetch_array($queryadmin)){
include "../ajax-php/posts/whilepostacc.php";
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
include "../ajax-php/posts/whilepostacc.php";
}
}else {
$sahrepostd = '';
$usershared = '';
$postextshr = '';
$oripostids = '';
$offpostype = '';
include "../ajax-php/posts/whilepostacc.php";
}
}
$empty = $post['id'];
}
$selectcount = mysql_query("SELECT id FROM posts WHERE user_id='$use' ORDER BY id LIMIT 1");
$countresult = mysql_result($selectcount,0);
if($empty == $countresult){
	echo '
	<script>
	$(".main_posts .loading_poats").addClass("endqueryjax");
	</script>
	';
} else {
}
include "../ajax-php/posts/ofwhilejs.php";
?>