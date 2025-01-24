<?php

include ("../connectdb/index.php");

?>




<?php

if(isset($_GET['gethtml'])){

$postid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['postid'])))));
$limit = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['limit'])))));
$offset = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['offset'])))));
$postid = preg_replace('/ +/', '', $postid);
$limit = preg_replace('/ +/', '', $limit);
$offset = preg_replace('/ +/', '', $offset);
$select = mysql_query("SELECT * FROM xrede WHERE post_id='$postid' AND session='postdislike_secret' AND type='post_secret'");
while($xred = mysql_fetch_assoc($select)){
	$xreid = $xred['user_id'];
}
if($offset == 0){
?>
<div class="main_7878_get_like">
<?php
}else {}
if(empty($xreid) || $xreid == $id){
$querylike = mysql_query("SELECT * FROM likes WHERE post_id='$postid' AND do='dislike' ORDER BY id DESC LIMIT $limit OFFSET $offset");
while($fetu = mysql_fetch_array($querylike)){
$userid = $fetu['from_id'];
$query = mysql_query("SELECT * FROM users WHERE id='$userid' ORDER BY id DESC LIMIT 1");
while($fetch = mysql_fetch_array($query)){

include "ajax-bodyfollow.php";

}
}
?>
<?php
}else {
echo '
<div class="notaccess_getwho">
<h3>عفوا - لا تملك صلاحية لعرض الاشخاص الغير معجبين</h3>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-6 15h-2v-2h2v2zm0-4h-2V8h2v6zm-1-9c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"></path>
</svg>
</div>
<script>
$(".addlimit_whodislike").fadeOut(100);
</script>
';
}
if($offset == 0){
?>
</div>
<?php
}else {}
if(empty($xreid) || !empty($xreid) && $xreid == $id){
$querycounc = mysql_query("SELECT id FROM likes WHERE post_id='$postid' AND do='dislike' ORDER BY id LIMIT 1");
$numrowscom = mysql_result($querycounc,0);
if($numrowscom == $empty){
echo '
<script>
$(".addlimit_whodislike").fadeOut(100);
</script>
';
}else {
echo '
<script>
$(".addlimit_whodislike").fadeIn(100);
</script>
';
}
}else {}
}
?>


