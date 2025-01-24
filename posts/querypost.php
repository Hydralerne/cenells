<?php

$getpost = mysql_query("SELECT * FROM posts WHERE id='$header_id' LIMIT 1");

while($post = mysql_fetch_array($getpost)){
if($post['type'] == "ori"){
include "postvalues.php";
}else {
if($post['type'] == "taged"){
if(!empty($post['group_share']) && !empty($post['group_admin'])){
if($post['type'] == "ori" && $post['type_all'] == "taged_from" && $stopechopost !== "true"){
$stopechopost = "true";
$groupostid = $post['id'];
$queryadmin = mysql_query("SELECT * FROM posts WHERE id='$groupostid' AND group_share!='' AND group_admin!='' LIMIT 1");
while($post = mysql_fetch_array($queryadmin)){
include "postvalues.php";
}
}else {
if($post['type'] == "taged" && $post['type_all'] == "taged_to" && $stopechopost !== "true"){
$stopechopost = "true";
$groupostid = $post['tag_id'];
$queryadmin = mysql_query("SELECT * FROM posts WHERE id='$groupostid' AND group_share!='' AND group_admin!='' LIMIT 1");
while($post = mysql_fetch_array($queryadmin)){
include "postvalues.php";
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
include "postvalues.php";
}
}else {}
}
}
}


?>
<script>
$(document).ready(function(){

function activelike(){
if($(".post").length > 0){
$(".send_likepost").click(function(){
	$.post("../ajax-php/likes.php",{sublikepost: "submit",sendlikepost: $(this).val()});

});
$(".remove_likepost").click(function(){
	$.post("../ajax-php/likes.php",{subremovepost: "submit",removelikepost: $(this).val()});

});

// dislike

$(".send_dislikepost").click(function(){
	$.post("../ajax-php/likes.php",{subdislikepost: "submit",sendislikepost: $(this).val()});

});
$(".remove_dislikepost").click(function(){
	$.post("../ajax-php/likes.php",{subredispost: "submit",sendredispost: $(this).val()});

});

}else {}
setTimeout(activelike,1000);
}
activelike();
});


</script>

