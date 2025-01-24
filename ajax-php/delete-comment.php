<?php

include("../connectdb/index.php");

?>

<?php


if(isset($_POST['deleteco'])){

$postid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['postid'])))));
$commid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['commid'])))));
$postid = preg_replace('/ +/', '', $postid);
$commid = preg_replace('/ +/', '', $commid);
$deletent = mysql_query("DELETE FROM alert WHERE user_id='$id' AND forse='post' AND type='comment_post' AND post_id='$postid' AND for_to='$commid'");
$deletent = mysql_query("DELETE FROM alert WHERE user_id='$id' AND forse='comment' AND type='menshin_comment' AND post_id='$postid' AND for_id='$commid'");
$deletcom = mysql_query("DELETE FROM comments WHERE from_id='$id' AND id='$commid' AND post_id='$postid' AND type='comment'");
$deletrep = mysql_query("DELETE FROM comments WHERE from_id='$id' AND for_id='$commid' AND post_id='$postid' AND type='reply'");
$deletlko = mysql_query("DELETE FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND from_id='$id' AND type='comment'");
$deletlik = mysql_query("DELETE FROM alert WHERE user_id='$id' AND post_id='$postid' AND for_id='$commid' AND forse='comment' AND type='like_comment' OR user_id='$id' AND post_id='$postid' AND for_id='$commid' AND forse='comment' AND type='dislike_comment'");
if(isset($deletlik)){
	echo '
	<script>
	$(document).ready(function(){
		$("#accept_delete_4777,#denyed_delete_4777").removeAttr("disabled","disabled");
		$("#fullcomscrdeltool,.text_type_4777").fadeOut(100,function(){
			$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats,.center_left_main").removeClass("blurfullscreen");
		});
		$("#888'.$commid.'").remove();
	});
	</script>
	';
}

}


?>

<?php


if(isset($_POST['deletere'])){

$postid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['postid'])))));
$replid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['commid'])))));
$postid = preg_replace('/ +/', '', $postid);
$replid = preg_replace('/ +/', '', $replid);
$query = mysql_query("SELECT for_id FROM comments WHERE id='$replid' AND from_id='$id' AND post_id='$postid' AND type='reply'");
while($fetch = mysql_fetch_assoc($query)){
	$commid = $fetch['for_id'];
}
if(!empty($commid)){
$deletent = mysql_query("DELETE FROM alert WHERE user_id='$id' AND forse='comment' AND type='reply_comment' AND post_id='$postid' AND for_id='$commid' AND for_to='$replid'");
$deletent = mysql_query("DELETE FROM alert WHERE user_id='$id' AND forse='reply' AND type='menshin_reply' AND post_id='$postid' AND for_id='$replid'");
$deletcom = mysql_query("DELETE FROM comments WHERE from_id='$id' AND id='$replid' AND post_id='$postid' AND type='reply'");
$deletlko = mysql_query("DELETE FROM likecom WHERE post_id='$postid' AND for_id='$replid' AND from_id='$id' AND type='comment'");
$deletlik = mysql_query("DELETE FROM alert WHERE user_id='$id' AND post_id='$postid' AND for_id='$replid' AND forse='reply' AND type='like_reply' OR user_id='$id' AND post_id='$postid' AND for_id='$replid' AND forse='reply' AND type='dislike_reply'");
if(isset($deletcom)){
	echo '
	<script>
	$(document).ready(function(){
		$("#accept_delete_4777,#denyed_delete_4777").removeAttr("disabled","disabled");
		$("#fullcomscrdeltool,.text_type_4777").fadeOut(100,function(){
			$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats,.center_left_main").removeClass("blurfullscreen");
		});
		$(".reply#'.$replid.'").remove();
	});
	</script>
	';
}
}
}


?>