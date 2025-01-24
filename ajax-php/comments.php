<?php

include ("../connectdb/index.php");

?>


<?php




$cpostid = addslashes(htmlspecialchars(strip_tags(trim($_GET['cpostid']))));
$vbcomid = addslashes(htmlspecialchars(strip_tags(trim($_GET['commentid']))));
$limit = addslashes(htmlspecialchars(strip_tags(trim($_GET['limit']))));
$offset = addslashes(htmlspecialchars(strip_tags(trim($_GET['offset']))));
$limit = preg_replace('/ +/','',$limit);
$offset = preg_replace('/ +/','',$offset);
if(isset($_GET['commentid'])){
$qurcom = mysql_query("SELECT * FROM comments WHERE id!='$vbcomid' AND post_id='$cpostid' AND type='comment' ORDER BY id LIMIT 10");
$rowcom = mysql_query("SELECT * FROM comments WHERE id='$vbcomid' AND post_id='$cpostid' AND type='comment' LIMIT 1");
while($fetc = mysql_fetch_array($rowcom)){
$user_id = $fetc['from_id'];
$ecty = mysql_query("SELECT * FROM users WHERE id='$user_id'");	
while($erpw = mysql_fetch_array($ecty)){
	$user_name = $erpw['name'];
	$user_img = $erpw['pro_img'];
	$cename = $erpw['user_name'];
	$check = $erpw['c_check'];
}
$commid = $fetc['id'];
$postid = $fetc['post_id'];
include "coment-body.php";

}
}else {
$qurcom = mysql_query("SELECT * FROM comments WHERE post_id='$cpostid' AND type='comment' ORDER BY id LIMIT $limit OFFSET $offset");
}
while($fetc = mysql_fetch_array($qurcom)){
$user_id = $fetc['from_id'];
$ecty = mysql_query("SELECT * FROM users WHERE id='$user_id'");
while($erpw = mysql_fetch_array($ecty)){
	$user_name = $erpw['name'];
	$user_img = $erpw['pro_img'];
	$cename = $erpw['user_name'];
	$check = $erpw['c_check'];
}

$commid = $fetc['id'];
$postid = $fetc['post_id'];

include "coment-body.php";
$empty = $fetc['id'];
}
$querycounc = mysql_query("SELECT id FROM comments WHERE post_id='$cpostid' AND type='comment' ORDER BY id DESC LIMIT 1");
$numrowscom = mysql_result($querycounc,0);
echo '
<script>
$(".post#'.$cpostid.' .limit-add-comments").fadeIn(100);
$(".post#'.cpostid.' .limit-add-comments").removeClass("loadingcomment");
</script>
';
if($empty == $numrowscom){
echo '
<script>
$(".post#'.$cpostid.' .limit-add-comments").addClass("endqueryjax");
$(".post#'.cpostid.' .limit-add-comments").removeClass("loadingcomment");
$("#'.$cpostid.' #comntofsetval").val("0");
</script>
';
}else {}
?>
