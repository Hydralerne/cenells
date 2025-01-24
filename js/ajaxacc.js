$(document).ready(function(){
	$("#close_edit_3214").click(function(){
	    var comid = $("#comment_id_3214").val();
		$("#"+ comid +" .comment-main-text").removeClass("h3comment_conteidable");
		$("#"+ comid +" .comment-main-text").removeAttr("contenteditable");
		$.post("../ajax-php/emotion-uploder.php",{subturn: "submit",text: $("#"+ comid +" .comment-main-text").text()},function(e){$("#"+ comid +" .comment-main-text").html(e);});
		$("#"+ comid +" .close-erto-font").fadeOut(0);
	    $("#"+ comid +" .optioncomment_888").fadeIn(0);
	});
});

$(document).ready(function(){
	$("#click_edit_3214").click(function(){
	var comid = $("#comment_id_3214").val();
	$("#"+ comid +" .optioncomment_888").fadeOut(0);
	$("#"+ comid +" .close-erto-font").fadeIn(0);
	$("#"+ comid +" .comment-main-text").addClass("h3comment_conteidable");
	$("#"+ comid +" .comment-main-text").attr("contenteditable","true");
	$("#"+ comid +" .comment-main-text").attr("placeholder","Type Your Comment Edit");
	$("#"+ comid +" .comment-main-text img").each(function(){
		var comid = $("#comment_id_3214").val();
    	var img = $(this).attr("data-c");
		var src = $(this).attr("src");
		var thi = '<img data-c="'+ img +'" src="'+ src +'" class="emotiopost">';
		var ale = $("#"+ comid +" .comment-main-text").html().replace(thi,img);
		$("#"+ comid +" .comment-main-text").html(ale);
	});
	if($("#"+ comid +" #editimeshidden").val() == ""){
    $("#"+ comid +" .comment-main-text").keydown(function(event){
	if(event.keyCode == 13){
	    event.preventDefault();
		var comid = $("#comment_id_3214").val();
		$("#"+ comid +" .close-erto-font").fadeOut(0);
	    $("#"+ comid +" .optioncomment_888").fadeIn(0);
		$("#"+ comid +" .h3comment_conteidable").removeAttr("contenteditable");
		$("#"+ comid +" .h3comment_conteidable").css({
			'background': '#f0f0f0',
			'color': '#888',
			'cursor': 'pointer'
		});
		var commid = $("#fillcom_id_3214").val();
		var postid = $("#compost_id_3214").val();
		var textpr = $(this).text();
		$.post("../ajax-php/edit-comment.php",{updatecomm: "submit",postid: postid,commid: commid,textpr: textpr},function(m){$(".scripts").append(m);});
		$.post("../ajax-php/emotion-uploder.php",{subturn: "submit",text: $("#"+ comid +" .comment-main-text").text()},function(e){$("#"+ comid +" .comment-main-text").html(e);});
	}
    });
	}
	$("#"+ comid +" #editimeshidden").val("true");
	});
});

$(document).ready(function(){
	$("#getr_click_3214").click(function(){
		var replyid = $("#fillcom_id_3214").val();
        $.post("../ajax-php/reply.php",{getreplys: "submit",replyid: replyid},function(re){$("#ro"+ replyid +"").html(re);});	
	});
});

$(document).ready(function(){
	$("#like_click_3214").click(function(){
		postid = $("#compost_id_3214").val();
		sendlikecom = $("#fillcom_id_3214").val();
	    $.post("../ajax-php/likes.php",{ sublikecom: "submit",postid: postid,sendlikecom: sendlikecom});
	});
	$("#dislike_click_3214").click(function(){
		postids = $("#compost_id_3214").val();
		senddilikecom = $("#fillcom_id_3214").val();
	    $.post("../ajax-php/likes.php",{ subdilikecom: "submit",postids: postids,senddilikecom: senddilikecom});	
	});
});

$(document).ready(function() {
	$("#submit_click_1236").click(function(){
	var postid = $("#post_id_1236").val();
	$("#com"+ postid +" .progress5").fadeOut(function(){
	var postid = $("#post_id_1236").val();
	$("#com"+ postid +" .progress-bar5").width('0%');
	});
	var html = $("#com"+ postid +" .append_ertop_4477").html();
	var postid = $("#post_id_1236").val();
	if($("#com"+ postid +" .aopik_4477 .img_4477").length == 0){
	$("#com"+ postid +" .add_img_edit_4477").css('margin-left','230px');
	$("#com"+ postid +" .move_4477").css('margin-left','155px');
	$("#com"+ postid +" .move_4477 .imagescomment").append(html);
	$("#com"+ postid +" .append_ertop_4477").empty();
	}else {
    if($("#com"+ postid +" .aopik_4477 .img_4477").length == 1){
	$("#com"+ postid +" .add_img_edit_4477").css('margin-left','60px');
	$("#com"+ postid +" .move_4477").css('margin-left','-15px');
	$("#com"+ postid +" .move_4477 .imagescomment").append(html);
	$("#com"+ postid +" .append_ertop_4477").empty();
	}
	else {
	if($("#com"+ postid +" .aopik_4477 .img_4477").length == 2){
    $("#com"+ postid +" .move_4477 .imagescomment").append(html);
	$("#com"+ postid +" .append_ertop_4477").empty();
	$("#com"+ postid +" .add_img_edit_4477").css('margin-left','8px');	
	$("#com"+ postid +" .add_img_edit_4477").css('width','87px');	
	$("#com"+ postid +" .add_img_edit_4477 img").css('margin-left','-26px');	
	setTimeout(function(){
	var postid = $("#post_id_1236").val();
	$("#com"+ postid +" .aopik_4477").css('margin-left','-110px');
	},200);					
	setTimeout(function(){
	var postid = $("#post_id_1236").val();
	$("#com"+ postid +" .right_scroll_4477,#com"+ postid +" .left_scroll_4477").fadeIn(100);
	},600);
	}else {
	if($("#com"+ postid +" .aopik_4477 .img_4477").length > 2){
	$("#com"+ postid +" .move_4477 .imagescomment").append(html);
	$("#com"+ postid +" .append_ertop_4477").empty();
	}
	}
	}
	}
    $(".falseupl4477").click(function(){
	var postid = $("#post_id_1236").val();
	$(this).closest(".pocdiv_4477").remove();
	if($("#com"+ postid +" .aopik_4477 .img_4477").length == 0){
	$("#com"+ postid +" .add_img_edit_4477").css('margin-left','335px');
	$("#com"+ postid +" .move_4477").css('margin-left','260px');
	}else {
	if($("#com"+ postid +" .aopik_4477 .img_4477").length == 1){
	$("#com"+ postid +" .right_scroll_4477,#com"+ postid +" .left_scroll_4477").fadeOut(function(){
	var postid = $("#post_id_1236").val();
	$("#com"+ postid +" .add_img_edit_4477").css('margin-left','230px');
	$("#com"+ postid +" .move_4477").css('margin-left','155px');
	$("#com"+ postid +" .aopik_4477").css('margin-left','0px');
	});
	}else {
	if($("#com"+ postid +" .aopik_4477 .img_4477").length == 2){
	$("#com"+ postid +" .right_scroll_4477,#com"+ postid +" .left_scroll_4477").fadeOut(function(){
	var postid = $("#post_id_1236").val();
	$("#com"+ postid +" .aopik_4477").css('margin-left','0px');
	$("#com"+ postid +" .add_img_edit_4477").css('width','142px');
	$("#com"+ postid +" .add_img_edit_4477").css('margin-left','60px');
	$("#com"+ postid +" .add_img_edit_4477 img").css('margin-left','-24px');
	$("#com"+ postid +" .move_4477").css('margin-left','-15px');
	});
	}
	}
	}
	});
	});
}); 
$(document).ready(function(){
	$("#click_getcoms_1236").click(function(){
		var cpostid = $("#post_id_1236").val();
		$.post("../ajax-php/comments.php", {cpostid: cpostid}, function(data){ $("#"+ cpostid +" .notajax-allcom").html(data);});
	});
});
