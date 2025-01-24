<?php

$replid = $fetr['id'];

$selectrendlike = mysql_query("SELECT for_id FROM likecom WHERE post_id='$postid' AND for_id='$replid' AND from_id='$id' AND type='reply' AND do='like' LIMIT 1");
while($fetdone = mysql_fetch_assoc($selectrendlike)){
	$likeresultcomc = $fetdone['for_id'];
}
if($likeresultcomc == $replid){
	$datadonelike = 'true';
	$datadexrlike = 'false';
	$comlikeclass = 'donelikediv';
}else {
	$datadonelike = 'false';
	$datadexrlike = 'true';
	$comlikeclass = '';
}

if($likeresultcomc !== $replid){
$selctredislike = mysql_query("SELECT for_id FROM likecom WHERE post_id='$postid' AND for_id='$replid' AND from_id='$id' AND type='reply' AND do='dislike' LIMIT 1");
while($fetdexr = mysql_fetch_assoc($selctredislike)){
	$dislikeresltcm = $fetdexr['for_id'];
}
}else {}
if($dislikeresltcm == $replid){
	$datadonedislike = 'true';
	$datadexrdislike = 'false';
	$comdislikeclass = 'donedislikediv';
}else {
	$datadonedislike = 'false';
	$datadexrdislike = 'true';
	$comdislikeclass = '';
}

$querycount = mysql_query("SELECT COUNT(id) FROM likecom WHERE post_id='$postid' AND for_id='$replid' AND type='reply' AND do='like'");
$likeimgcou = mysql_result($querycount,0);

$foriotdlkm = mysql_query("SELECT COUNT(id) FROM likecom WHERE post_id='$postid' AND for_id='$replid' AND type='reply' AND do='dislike'");
$doloeoitie = mysql_result($foriotdlkm,0);

?>
<div class="reply-texta reply" id="<?php echo $replid; ?>">
<img src="../upload/images/low/<?php echo $auser_img; ?>" class="reply-userimg" />
<span class="user_name_reply">
<?php if($check == "true"){ ?>
<img class="check_reply_img" src="../img/icons/check.png" />
<?php } ?>
<a href="../<?php echo $fetr['from_id']; ?>" target="_blank"><?php echo $auser_name; ?></a>
</span>
<div class="optionreply_888_div">
<svg viewBox="0 0 24 24" class="optionreply_888" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"></path>
    <path d="M0-.5h24v24H0z" fill="none"></path>
</svg>
<a class="close-reply-font">
<i class="fa fa-times" aria-none="true"></i>
</a>
</div>
<div class="menu_reply_opttion">
<?php
if($fetr['from_id'] == $id){
?>
<div class="edit_reply"><span>تعديل</span></div>
<div class="delet_reply"><span>حذف</span></div>
<?php
}else {
?>
<div class="hide_reply"><span>إخفاء</span></div>
<div class="oper_reply"><span>إبلاغ</span></div>
<?php
}
?>
</div>
<div class="replytextmain_div">
<h4 class="reply_main_text">
<?php
echo $fetr['text'];
?>
</h4>
</div>
<div class="reply_likesystemain" data-id="<?php echo $fetr['id']; ?>">
<div class="insetreply_likdis">
<div class="reply_likes <?php echo $comlikeclass; ?>">
<span class="likesreplyspan" style="<?php if($likeimgcou == "0"){echo 'display: none';}else {} ?>"><?php echo $likeimgcou; ?></span>
<button type="button" class="send_likeply" data-done="<?php echo $datadonelike; ?>" data-dexr="<?php echo $datadexrlike; ?>">
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
</button>
</div>
<div class="reply_dislike <?php echo $comdislikeclass; ?>">
<span class="dislikesreplyspan" style="<?php if($doloeoitie == "0"){echo 'display: none';} ?>"><?php echo $doloeoitie; ?></span>
<button type="button" class="send_dislikeply" data-done="<?php echo $datadonedislike; ?>" data-dexr="<?php echo $datadexrdislike; ?>">
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
</button>
</div>
</div>
</div>
<script>
$(".reply#<?php echo $replid; ?> .send_likeply").click(function(){
	$(this).replyLike();
});
$(".reply#<?php echo $replid; ?> .send_dislikeply").click(function(){
    $(this).replyDeislike();
});
$(document).mouseup(function (e){
	var container = $(".reply#<?php echo $replid; ?> .optionreply_888_div");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
	$(".reply#<?php echo $replid; ?> .menu_reply_opttion").fadeOut(100);
    }
});
$(".reply#<?php echo $replid; ?> .optionreply_888").click(function(){
	$(".reply#<?php echo $replid; ?> .menu_reply_opttion").fadeIn(100);
});
$(".reply#<?php echo $replid; ?> .edit_reply").click(function(){
	$(this).editComment("reply");
});
$(".reply#<?php echo $replid; ?> .delet_reply").click(function(){
	$(this).deleteComment("reply");
});
$(".reply#<?php echo $replid; ?> .likesreplyspan").click(function(){
	$(this).getLikecomment("<?php echo $fetr['post_id']; ?>","<?php echo $replid; ?>","<?php echo $likeimgcou; ?>","<?php echo $doloeoitie; ?>","2");
});
$(".reply#<?php echo $replid; ?> .dislikesreplyspan").click(function(){
	$(this).getDislikecomment("<?php echo $fetr['post_id']; ?>","<?php echo $replid; ?>","<?php echo $likeimgcou; ?>","<?php echo $doloeoitie; ?>","2");
});
</script>
</div>