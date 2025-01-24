<?php

$selectrendlike = mysql_query("SELECT for_id FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND from_id='$id' AND type='comment' AND do='like' LIMIT 1");
while($fetdone = mysql_fetch_assoc($selectrendlike)){
	$likeresultcomc = $fetdone['for_id'];
}
if($likeresultcomc == $commid){
	$datadonelike = 'true';
	$datadexrlike = 'false';
	$comlikeclass = 'donelikediv';
}else {
	$datadonelike = 'false';
	$datadexrlike = 'true';
	$comlikeclass = '';
}

if($likeresultcomc !== $commid){
$selctredislike = mysql_query("SELECT for_id FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND from_id='$id' AND type='comment' AND do='dislike' LIMIT 1");
while($fetdexr = mysql_fetch_assoc($selctredislike)){
	$dislikeresltcm = $fetdexr['for_id'];
}
}else {}
if($dislikeresltcm == $commid){
	$datadonedislike = 'true';
	$datadexrdislike = 'false';
	$comdislikeclass = 'donedislikediv';
}else {
	$datadonedislike = 'false';
	$datadexrdislike = 'true';
	$comdislikeclass = '';
}

$querycount = mysql_query("SELECT COUNT(id) FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND type='comment' AND do='like'");
$likeimgcou = mysql_result($querycount,0);

$foriotdlkm = mysql_query("SELECT COUNT(id) FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND type='comment' AND do='dislike'");
$doloeoitie = mysql_result($foriotdlkm,0);

?>
<div class="comment-texta" id="888<?php echo $fetc['id']; ?>" data-name="<?php echo $cename; ?>" data-user="<?php echo $user_id; ?>">
<img draggable="false" class="comuseimga" src="../upload/images/low/<?php echo $user_img; ?>">
<span class="username-commespn">
<?php if($check == "true"){ ?>
<img class="check_comment_img" src="../img/icons/check.png" />
<?php } ?>
<a href="../<?php echo $fetc['from_id']; ?>" target="_blank">
<?php echo $user_name; ?>
</a>
</span>
<div class="optioncomment_888_div">
<svg viewBox="0 0 24 24" class="optioncomment_888" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"></path>
    <path d="M0-.5h24v24H0z" fill="none"></path>
</svg>
<a class="close-erto-font">
<i class="fa fa-times" aria-none="true"></i>
</a>
</div>
<div class="menu_comment_opttion">
<?php
if($fetc['from_id'] == $id){
?>
<div class="edit_comment"><span>تعديل</span></div>
<div class="delet_comment"><span>حذف</span></div>
<?php
}else {
?>
<div class="hide_comment"><span>إخفاء</span></div>
<div class="oper_comment"><span>إبلاغ</span></div>
<?php
}
?>
</div>
<div class="divmain_comments_text">
<h4 class="comment-main-text">
<?php
echo $fetc['text'];
?>
</h4>
</div>
<?php
$comimg = $fetc['img'];
if(!empty($comimg)){
$imgwidth = $fetc['img_width'];
$imgheight = $fetc['img_height'];

if($imgwidth > 300){
	$fullwidth = 300;
	$fullheight = $imgheight * 300 / $imgwidth;
}else {	
$fullwidth = $imgwidth;
$fullheight = $imgheight;
}
if($fullheight > 300){
	$fullheight = 300;
	$fullwidth = $imgwidth * 300 / $imgheight;
}else {}
$smlwidth = $fullwidth + 50;
$smlheighth = $fullheight + 50;
?>
<div class="comdivimg">
<div class="overflow_comminmg" style="width: <?php echo $fullwidth; ?>px;height: <?php echo $fullheight; ?>px">
<div class="loaded_comment_image"></div>
<img class="smlofload_comment" src="../upload/comments/images/sml/<?php echo $comimg; ?>" width="<?php echo $imgwidth; ?>" height="<?php echo $imgheight; ?>" style="width: <?php echo $smlwidth; ?>px;height: <?php echo $smlheighth; ?>px;" data-mini="../upload/comments/images/mini/<?php echo $comimg; ?>" data-large="../upload/comments/images/full/low/<?php echo $comimg; ?>" />
</div>
</div>
<script>
$(document).ready(function(){
var parentContainer = $("#888<?php echo $fetc['id']; ?> .smlofload_comment").closest(".overflow_comminmg").find(".loaded_comment_image"),
imageContainer = $("#888<?php echo $fetc['id']; ?> .smlofload_comment");
// 2: load large image
var imgLarge = new Image();
imgLarge.src = $("#888<?php echo $fetc['id']; ?> .smlofload_comment").attr('data-mini');
imgLarge.classList.add('comentmain_image');
imgLarge.onload = function () {
imageContainer.addClass('comment_loaded');
parentContainer.append(imgLarge);
imgLarge.classList.add('comentshow_loaded');
}
});
</script>
<?php

}

?>
<div class="relatev-a">
<div class="commlikes_system_main" data-id="<?php echo $fetc['id']; ?>">
<div class="ofsetdirec_mian_commn">
<div class="commlike-mian <?php echo $comlikeclass; ?>">
<span class="likescommcount" style="<?php if($likeimgcou == "0"){echo 'display: none';}else {} ?>"><?php echo $likeimgcou; ?></span>
<button type="button" class="send-likecoma" data-done="<?php echo $datadonelike; ?>" data-dexr="<?php echo $datadexrlike; ?>">
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
</button>
</div>
<div class="commdislike_main <?php echo $comdislikeclass; ?>">
<span class="dislikecommcount" style="<?php if($doloeoitie == "0"){echo 'display: none';} ?>"><?php echo $doloeoitie; ?></span>
<button type="button" class="send-discomen" data-done="<?php echo $datadonedislike; ?>" data-dexr="<?php echo $datadexrdislike; ?>">
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
</button>
</div>
</div>
<div class="left_ofsetmain_comment">
<a class="reply-commenta">رد</a>
<?php
$repostid = $fetc['id'];
$postidmn = $fetc['post_id'];
$selreplyco = mysql_query("SELECT COUNT(id) FROM comments WHERE for_id='$repostid' AND post_id='$postidmn' AND type='reply'");
$replycount = mysql_result($selreplyco,0);	
?>
<div class="right_notifacmin_comm" style="<?php if($replycount == 0){echo 'display: none';} else {} ?>">
<svg viewBox="0 0 24 24" data-class="closereplys" close="false" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
</svg>
<span class="relreplycountcom">
<?php echo $replycount; ?>
</span>
</div>
</div>
</div>
</div>
<div class="replying-all">
<input type="hidden" id="offsetreplyc" />
<div class="conteditable_reply_div">
<div contenteditable="PLAINTEXT-ONLY" class="reply-div-type" placeholder="اكتب ردا ..."></div>
</div>
<div class="reply-database">
<div class="injax_replays"></div>
<div class="showbox_replys">
<div class="loader_replys">
<svg class="circular_replys" viewBox="25 25 50 50">
<circle class="path_circle_replys" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
</svg>
</div>
</div>
<div class="limit-add-replys">
<svg viewBox="0 0 24 24" id="refresh-replys-svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<span>عرض المزيد من الردود</span>
</div>
</div>
</div>
</div>
<script>
$("#888<?php echo $fetc['id']; ?> .send-likecoma").click(function(){
	$(this).commLike();
});
$("#888<?php echo $fetc['id']; ?> .send-discomen").click(function(){
	$(this).commDislike();
});
$(document).ready(function(){
	$("#888<?php echo $fetc['id']; ?> .delet_comment").click(function(){
		$(this).deleteComment("comment");
	});
});
$(document).ready(function(){
$(document).mouseup(function (e){
	var container = $("#888<?php echo $fetc['id']; ?> .optioncomment_888_div");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
	$("#888<?php echo $fetc['id']; ?> .menu_comment_opttion").fadeOut(100);
    }
});
$("#888<?php echo $fetc['id']; ?> .optioncomment_888").click(function(){
	$("#888<?php echo $fetc['id']; ?> .menu_comment_opttion").fadeIn(100);
});
$("#888<?php echo $fetc['id']; ?> .close-erto-font").click(function(){
	$(this).closeCommedit("comment");
});
$("#888<?php echo $fetc['id']; ?> .edit_comment").click(function(){
	$(this).editComment("comment");
});
});
$(document).ready(function(){
	$("#888<?php echo $fetc['id']; ?> .reply-commenta,#888<?php echo $fetc['id']; ?> .right_notifacmin_comm svg").click(function(){
        if($(this).attr("data-class") == "closereplys" && $(this).attr("close") == "true"){
        $(this).closest(".relatev-a").find(".right_notifacmin_comm svg").closeReplys();
        }else {}
	    $(this).getReplys();
	});
	$("#888<?php echo $fetc['id']; ?> .limit-add-replys").click(function(){
		if($(this).attr("lock") == "false"){
			$(this).appendReply();
		}else {}
	});
});
$("#888<?php echo $fetc['id']; ?> .overflow_comminmg").click(function(){
	 $(this).viewImage("<?php echo $fetc['id']; ?>","comment");	
});
$("#888<?php echo $fetc['id']; ?> .reply-div-type").keydown(function(event){
    if(event.keyCode == 13){
	$(this).addReply();
    event.preventDefault();
    }
});
$("#888<?php echo $fetc['id']; ?> .likescommcount").click(function(){
	$(this).getLikecomment("<?php echo $fetc['post_id']; ?>","<?php echo $fetc['id']; ?>","<?php echo $likeimgcou; ?>","<?php echo $doloeoitie; ?>","1");
});
$("#888<?php echo $fetc['id']; ?> .dislikecommcount").click(function(){
	$(this).getDislikecomment("<?php echo $fetc['post_id']; ?>","<?php echo $fetc['id']; ?>","<?php echo $likeimgcou; ?>","<?php echo $doloeoitie; ?>","1");
});
</script>
