<script>
<?php
if(!empty($emojitype) && $emojiuser == $postid){
	echo '$(".post#'.$postid.' .clickemoji_post[data-type='.$emojitype.']").attr("select","true");';
}
?>
$(document).ready(function(){
	$(".post#<?php echo $postid; ?> .repost-icon").click(function(){
		$(this).sharePost();
	});
	$(".post#<?php echo $postid; ?> .like-many-num").click(function(){
		$(this).getLikecou("<?php echo $postid; ?>","<?php echo $likeimg; ?>","<?php echo $dislikeimg; ?>","<?php echo $sharecount; ?>");
	});
	$(".post#<?php echo $postid; ?> .dislike-many-num").click(function(){
		$(this).getDislikecou("<?php echo $postid; ?>","<?php echo $likeimg; ?>","<?php echo $dislikeimg; ?>","<?php echo $sharecount; ?>");
	});
	$(".post#<?php echo $postid; ?> .share-vlau-num").click(function(){
		$(this).getSharecou("<?php echo $postid; ?>","<?php echo $likeimg; ?>","<?php echo $dislikeimg; ?>","<?php echo $sharecount; ?>");	
	});
});
$(".post#<?php echo $postid; ?> .add-imotions").click(function(){
	$(".hiddenfunctiontyp").val("<?php echo $postid; ?>");
	$("#hidenget_empthion").click();
});
$(".post#<?php echo $postid; ?> .h3coment-div-type").focus(function(){
	$(".hiddenfunctiontyp").val("<?php echo $postid; ?>");
});
$(document).ready(function(){
	$(".post#<?php echo $postid; ?> .comment-show-mico").click(function(){
		$(this).vortexComm();
	});
	$(".post#<?php echo $postid; ?> .upcommentsdevo").click(function(){
		$(this).upComments();
	}); 
	$(".post#<?php echo $postid; ?> .limit-add-comments").click(function(){
		if($(this).attr("lock") == "false"){
        $(this).appendComments();
		}else {}
    });
});

$(document).ready(function(){
$(".post#<?php echo $postid; ?> .h3coment-div-type").keydown(function(nevent){
	if(nevent.keyCode == 13){
		$("#com<?php echo $postid; ?> .close-this-font,#com<?php echo $postid; ?> .add_img_edit_4477").fadeOut();
		$(this).addComment();
        nevent.preventDefault();
    }
});
});

$(document).ready(function(){
$(".pocdiv_4477").mouseenter(function(){
	var svg = $(".falseupl4477");
	$(this).append(svg);
});
$(".pocdiv_4477").mouseleave(function(){
	$(this).find(".falseupl4477").remove();
});
$("#com<?php echo $postid; ?> .close-this-font").click(function(){
	$(this).fadeOut();
	$("#com<?php echo $postid; ?> .upload-comfilediv5").fadeOut(100,function(){
		$("#com<?php echo $postid; ?> .h3coment-div-type").css('margin-bottom','0px');
	});
});
$("#com<?php echo $postid; ?> .add-vidphot-com").click(function(){
	$("#com<?php echo $postid; ?> .h3coment-div-type").css('margin-bottom','150px');
	$("#com<?php echo $postid; ?> .upload-comfilediv5").fadeIn();
	setTimeout(function(){
	$("#com<?php echo $postid; ?> .add_img_edit_4477").fadeIn(100);
	$("#com<?php echo $postid; ?> .close-this-font").css('display','inline-block');
	},200);
});
});
$(document).ready(function(){
	$("#com<?php echo $postid; ?> .add_img_edit_4477").click(function(){
		if($("#com<?php echo $postid; ?> .pocdiv_4477").length == 0){
		$("#com<?php echo $postid; ?> #userImage5").click();
		}else {
		alertText("عفوا - ميزة الصور المتعددة في التعليقات " +
		"<br> غير متوفرة في الاصدار التجريبي",false);
		}
	});
$("#com<?php echo $postid; ?> #userImage5").change(function(){
	$("#com<?php echo $postid; ?> #uploadForm5").submit();
	$("#com<?php echo $postid; ?> .progress5").fadeIn();
});
});

$(document).ready(function() {
	$("#com<?php echo $postid; ?> #uploadForm5").submit(function(e){
		$(this).ajaxcomUpload("<?php echo $postid; ?>");
		e.preventDefault();
	});
}); 
$(".post#<?php echo $postid; ?> .overflow-loaded").click(function(){
    $(this).viewImage("<?php echo $postid; ?>","post");	
});
$(".post#<?php echo $postid; ?> .clickemoji_post").each(function(){
$(this).click(function(){
	$(this).emotions();
});
});
$(".post#<?php echo $postid; ?> .send_likepost").click(function(){
	$(this).Likepost();
});
$(".post#<?php echo $postid; ?> .send_dislikepost").click(function(){
	$(this).Dislikepost();
});
</script>

