<?php

include ("../connectdb/index.php");

?>

<?php  
if(isset($_GET['gtrply'])){
$postid = addslashes(htmlspecialchars(strip_tags(trim($_GET['postid']))));
$commid = addslashes(htmlspecialchars(strip_tags(trim($_GET['commid']))));
$limit = addslashes(htmlspecialchars(strip_tags(trim($_GET['limit']))));
$offset = addslashes(htmlspecialchars(strip_tags(trim($_GET['offset']))));
$limit = preg_replace('/ +/','',$limit);
$offset = preg_replace('/ +/','',$offset);
$commid = preg_replace('/ +/','',$commid);
$postid = preg_replace('/ +/','',$postid);
if($offset == "0"){
?>
<div class="all_commentrep">
<?php
}else {}
$qurep = mysql_query("SELECT * FROM comments WHERE post_id='$postid' AND for_id='$commid' AND type='reply' ORDER BY id LIMIT $limit OFFSET $offset");
while($fetr = mysql_fetch_array($qurep)){
$auser_id = $fetr['from_id'];
$aecty = mysql_query("SELECT name,pro_img,c_check FROM users WHERE id='$auser_id'");	
while($aerpw = mysql_fetch_array($aecty)){
	$auser_name = $aerpw['name'];
	$auser_img = $aerpw['pro_img'];
	$check = $aerpw['c_check'];
}
include "reply-body.php";
$empty = $fetr['id'];
}

$querycounc = mysql_query("SELECT * FROM comments WHERE post_id='$postid' AND for_id='$commid' AND type='reply' ORDER BY id DESC LIMIT 1");
$numrowscom = mysql_result($querycounc,0);
echo '
<script>
$("#888'.$commid.' .limit-add-replys").fadeIn(100);
$("#888'.$commid.' .limit-add-replys").removeClass("loadingcomment");
</script>
';
if($empty == $numrowscom){
echo '
<script>
$("#888'.$commid.' .limit-add-replys").addClass("endqueryjax");
$("#888'.$commid.' .limit-add-replys").removeClass("loadingcomment");
$("#888'.$commid.' #comntofsetval").val("0");
</script>
';
}else {}

if($offset == "0"){
?>
</div>
<?php
}
}
?>
