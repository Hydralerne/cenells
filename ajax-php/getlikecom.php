<?php

include ("../connectdb/index.php");

?>




<?php

if(isset($_GET['gethtml'])){

$postid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['postid'])))));
$commid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['commid'])))));
$filtyp = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['typeid'])))));
$limits = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['limits'])))));
$offset = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['offset'])))));
$postid = preg_replace('/ +/', '', $postid);
$commid = preg_replace('/ +/', '', $commid);
$filtyp = preg_replace('/ +/', '', $filtyp);
$limits = preg_replace('/ +/', '', $limits);
$offset = preg_replace('/ +/', '', $offset);
if($filtyp == "1"){
	$type = 'comment';
}else {
if($filtyp == "2"){
	$type = 'reply';
}else {}
}
if($offset == 0){
?>
<div class="main_7878_get_like">
<?php
}else {}
$querylike = mysql_query("SELECT * FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND type='$type' AND do='like' ORDER BY id DESC LIMIT $limits OFFSET $offset");
while($fetu = mysql_fetch_array($querylike)){
$userid = $fetu['from_id'];
$query = mysql_query("SELECT * FROM users WHERE id='$userid' ORDER BY id DESC LIMIT 1");
while($fetch = mysql_fetch_array($query)){

include "ajax-bodyfollow.php";

}
}
?>
</div>
<?php
$querycounc = mysql_query("SELECT id FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND type='$type' AND do='like' ORDER BY id LIMIT 1");
$numrowscom = mysql_result($querycounc,0);
if($numrowscom == $empty){
echo '
<script>
$(".addlimit_whocomlike").fadeOut(100);
</script>
';
}else {
echo '
<script>
$(".addlimit_whocomlike").fadeIn(100);
</script>
';
}
}

?>


