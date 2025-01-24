
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