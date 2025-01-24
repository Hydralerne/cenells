<?php

include "../connectdb/index.php";

?>

<?php

if(isset($_GET['session'])){
$postid = addslashes(htmlspecialchars(strip_tags(trim($_GET['postid']))));
$postid = preg_replace('/ +/','',$postid);

$iduse = mysql_query("SELECT user_id FROM posts WHERE id='$postid'");
$resul = mysql_result($iduse,0);
if($resul == $id){
$select = mysql_query("SELECT * FROM xrede WHERE user_id='$id' AND post_id='$postid' AND type='post_secret' AND session='postlike_secret'");
while($fetch = mysql_fetch_array($select)){
echo '
<script>
$(".publick_like_45484").removeClass("selected_erpost_454");
$(".personaly_like_45484").addClass("selected_erpost_454");
</script>
';
$emptylike = $fetch['id'];
}
if(empty($emptylike)){
echo '
<script>
$(".publick_like_45484").removeClass("selected_erpost_454");
$(".personaly_like_45484").removeClass("selected_erpost_454");
</script>
';
}else {}
$selectr = mysql_query("SELECT * FROM xrede WHERE user_id='$id' AND post_id='$postid' AND type='post_secret' AND session='postdislike_secret'");
while($fetcr = mysql_fetch_array($selectr)){
echo '
<script>
$(".publick_dislike_45484").removeClass("selected_erpost_454");
$(".personaly_dislike_45484").addClass("selected_erpost_454");
</script>
';
$emptydislike = $fetcr['id'];
}
if(empty($emptydislike)){
echo '
<script>
$(".publick_dislike_45484").removeClass("selected_erpost_454");
$(".personaly_dislike_45484").removeClass("selected_erpost_454");
</script>
';
}else {}
$selectd = mysql_query("SELECT * FROM xrede WHERE user_id='$id' AND post_id='$postid' AND type='post_secret' AND session='repost_secret'");
while($fetcd = mysql_fetch_array($selectd)){
echo '
<script>
$(".publick_45484").removeClass("selected_erpost_454");
$(".personaly_45484").addClass("selected_erpost_454");
</script>
';
$emptyrepost = $fetcd['id'];	
}
if(empty($emptyrepost)){
echo '
<script>
$(".publick_45484").removeClass("selected_erpost_454");
$(".personaly_45484").removeClass("selected_erpost_454");
</script>
';
}else {}
$selectm = mysql_query("SELECT * FROM xrede WHERE user_id='$id' AND post_id='$postid' AND type='post_secret' AND session='comimg_secret'");
while($fetcm = mysql_fetch_array($selectm)){
echo '
<script>
var html = \'<path d="M0 0h24v24H0z" fill="none"></path>\' +
\'<path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>\';
$(".useitforcomimg_45484 svg").html(html);
$(".useitforcomimg_45484 h3").text("تفعيل الصور");
$(".cedsersx_454 p").text("اضغط للسماح للاشخاص بوضع الصور في التعليقات علي التدوينة");
$(".useitforcomimg_45484").attr("doing","true");
</script>
';
$emptycomimg = $fetcm['id'];
}
if(empty($emptycomimg)){
echo '
<script>
var html = \'<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>\' +
\'<path d="M0 0h24v24H0z" fill="none"></path>\';
$(".useitforcomimg_45484 svg").html(html);
$(".useitforcomimg_45484 h3").text("الغاء التفعيل");
$(".cedsersx_454 p").text("اضغط لمنع الاشخاص من وضع الصور في التعليقات علي التدوينة");
$(".useitforcomimg_45484").attr("doing","false");
</script>
';
}else {}
}else {}
}

?>

<?php

if(isset($_POST['sublike'])){

$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$type = addslashes(htmlspecialchars(strip_tags(trim($_POST['type']))));
$postid = preg_replace('/ +/','',$postid);
$type = preg_replace('/ +/','',$type);

$iduse = mysql_query("SELECT user_id FROM posts WHERE id='$postid'");
$resul = mysql_result($iduse,0);
if($resul == $id){
if($type == "1"){
$query = mysql_query("SELECT COUNT(id) FROM xrede WHERE user_id='$id' AND post_id='$postid' AND session='postlike_secret' AND type='post_secret'");
$count = mysql_result($query,0);
if($count == 0){
$insert = mysql_query("INSERT INTO xrede(user_id,post_id,type,session) VALUES('$id','$postid','post_secret','postlike_secret')");
}else {}
}else {
$insert = mysql_query("DELETE FROM xrede WHERE user_id='$id' AND post_id='$postid' AND session='postlike_secret' AND type='post_secret'");
}
}else {}
echo '
<script>
$(".loadingjax_45484").fadeOut(0);
hideloadbbom();
</script>
';

}

?>

<?php

if(isset($_POST['subdislike'])){

$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$type = addslashes(htmlspecialchars(strip_tags(trim($_POST['type']))));
$postid = preg_replace('/ +/','',$postid);
$type = preg_replace('/ +/','',$type);

$iduse = mysql_query("SELECT user_id FROM posts WHERE id='$postid'");
$resul = mysql_result($iduse,0);
if($resul == $id){
if($type == "1"){
$query = mysql_query("SELECT COUNT(id) FROM xrede WHERE user_id='$id' AND post_id='$postid' AND session='postdislike_secret' AND type='post_secret'");
$count = mysql_result($query,0);
if($count == 0){
$insert = mysql_query("INSERT INTO xrede(user_id,post_id,type,session) VALUES('$id','$postid','post_secret','postdislike_secret')");
}else {}
}else {
$insert = mysql_query("DELETE FROM xrede WHERE user_id='$id' AND post_id='$postid' AND session='postdislike_secret' AND type='post_secret'");
}
}else {}
echo '
<script>
$(".loadingjax_45484").fadeOut(0);
hideloadbbom();
</script>
';

}

?>

<?php

if(isset($_POST['subrepost'])){

$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$type = addslashes(htmlspecialchars(strip_tags(trim($_POST['type']))));
$postid = preg_replace('/ +/','',$postid);
$type = preg_replace('/ +/','',$type);

$iduse = mysql_query("SELECT user_id FROM posts WHERE id='$postid'");
$resul = mysql_result($iduse,0);
if($resul == $id){
if($type == "1"){
$query = mysql_query("SELECT COUNT(id) FROM xrede WHERE user_id='$id' AND post_id='$postid' AND session='repost_secret' AND type='post_secret'");
$count = mysql_result($query,0);
if($count == 0){
$insert = mysql_query("INSERT INTO xrede(user_id,post_id,type,session) VALUES('$id','$postid','post_secret','repost_secret')");
}else {}
}else {
$insert = mysql_query("DELETE FROM xrede WHERE user_id='$id' AND post_id='$postid' AND session='repost_secret' AND type='post_secret'");
}
}else {}
echo '
<script>
$(".loadingjax_45484").fadeOut(0);
hideloadbbom();
</script>
';

}

?>

<?php

if(isset($_POST['subcomimg'])){

$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$type = addslashes(htmlspecialchars(strip_tags(trim($_POST['type']))));
$postid = preg_replace('/ +/','',$postid);
$type = preg_replace('/ +/','',$type);

$iduse = mysql_query("SELECT user_id FROM posts WHERE id='$postid'");
$resul = mysql_result($iduse,0);
if($resul == $id){
if($type == "1"){
$query = mysql_query("SELECT COUNT(id) FROM xrede WHERE user_id='$id' AND post_id='$postid' AND session='comimg_secret' AND type='post_secret'");
$count = mysql_result($query,0);
if($count == 0){
$insert = mysql_query("INSERT INTO xrede(user_id,post_id,type,session) VALUES('$id','$postid','post_secret','comimg_secret')");
}else {}
}else {
$insert = mysql_query("DELETE FROM xrede WHERE user_id='$id' AND post_id='$postid' AND session='comimg_secret' AND type='post_secret'");
}
}else {}
echo '
<script>
$(".loadingjax_45484").fadeOut(0);
hideloadbbom();
</script>
';

}

?>
