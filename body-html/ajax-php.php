<div class="ajax-php" style="display: none!important;">
<input type="hidden" id="valpostemokim" />
<input type="hidden" id="valposthovemo" />
<input type="hidden" id="valposthoveid" />
<input type="hidden" id="valpostimoval" />
<input type="hidden" id="hivalpostupco" />
<input type="hidden" id="hivalpostupre" />
<input type="hidden" id="hidenpostbtnf" />
<div class="likepostsystem">
<script>
$.fn.Likepost = function(){
	var postid = $(this).closest(".post-main-tvi").attr("id");
	if($(this).attr("data-done") == "false" && $(this).attr("data-dexr") == "true"){
		$.post("../ajax-php/likes.php",{sublikepost: "submit",postid: postid});
		$(this).closest(".like-main").addClass("donelikediv");
		$(this).attr("data-dexr","false");
		$(this).attr("data-done","true");
		var x = $(this).closest(".like-main").find("span").text().replace(',','');
		var y = +x + +1;
		$(this).closest(".like-main").find("span").text(y);
		$(this).closest(".like-main").find("span").fadeIn(0);
		// remove dislike old
		$(this).closest(".like").find(".dislike-main").removeClass("donedislikediv");
		if($(this).closest(".like").find(".send_dislikepost").attr("data-done") == "true" && $(this).closest(".like").find(".send_dislikepost").attr("data-dexr") == "false"){
		$(this).closest(".like").find(".send_dislikepost").attr("data-dexr","true");
		$(this).closest(".like").find(".send_dislikepost").attr("data-done","false");
		var d = $(this).closest(".like").find(".dislike-main span").text().replace(',','');
		var c = d - 1;
		$(this).closest(".like").find(".dislike-main span").text(c);
		}else {}
	}else {
	if($(this).attr("data-done") == "true" && $(this).attr("data-dexr") == "false"){
		$.post("../ajax-php/likes.php",{subremovepost: "submit",postid: postid});
		$(this).closest(".like-main").removeClass("donelikediv");
		$(this).attr("data-dexr","true");
		$(this).attr("data-done","false");
		var w = $(this).closest(".like-main").find("span").text().replace(',','');
		var q = w - 1;
		$(this).closest(".like-main").find("span").text(q);
	}else {}
	}
}
$.fn.Dislikepost = function(){
	var postid = $(this).closest(".post-main-tvi").attr("id");
	if($(this).attr("data-done") == "false" && $(this).attr("data-dexr") == "true"){
		$.post("../ajax-php/likes.php",{subdislikepost: "submit",postid: postid});
		$(this).closest(".dislike-main").addClass("donedislikediv");
		$(this).attr("data-dexr","false");
		$(this).attr("data-done","true");
		var x = $(this).closest(".dislike-main").find("span").text().replace(',','');
		var y = +x + +1;
		$(this).closest(".dislike-main").find("span").text(y);
		$(this).closest(".dislike-main").find("span").fadeIn(0);
        // remove like old
		$(this).closest(".like").find(".like-main").removeClass("donelikediv");
		if($(this).closest(".like").find(".send_likepost").attr("data-done") == "true" && $(this).closest(".like").find(".send_likepost").attr("data-dexr") == "false"){
		$(this).closest(".like").find(".send_likepost").attr("data-dexr","true");
		$(this).closest(".like").find(".send_likepost").attr("data-done","false");
		var d = $(this).closest(".like").find(".like-main span").text().replace(',','');
		var c = d - 1;
		$(this).closest(".like").find(".like-main span").text(c);
		}else {}
	}else {
	if($(this).attr("data-done") == "true" && $(this).attr("data-dexr") == "false"){
		$.post("../ajax-php/likes.php",{subredispost: "submit",postid: postid});
		$(this).closest(".dislike-main").removeClass("donedislikediv");
		$(this).attr("data-dexr","true");
		$(this).attr("data-done","false");
		var a = $(this).closest(".dislike-main").find("span").text().replace(',','');
		var v = a - 1;
		$(this).closest(".dislike-main").find("span").text(v);
	}else {}
	}
}


</script>
</div>
<div class="emojipost-ajaxsystem">
<script>
$.fn.emotions = function(){
var postid = $(this).closest(".post-main-tvi").attr("id");
var divids = $(this).attr("id");
if ($("#"+ postid +" #"+ divids +"").attr("select") !== "true") {
var type = $("#"+ postid +" #"+ divids +"").attr("data-type");
var html = '<img src="../img/imogi/'+ type +'.png" class="smlemoji_selected" />';
$(".post#"+ postid +" .selected_emoji").html(html);
$(".textemoji_descrip").fadeOut(100);
$.post("../ajax-php/add-emoji.php",{subadd: "submit",postid: postid,type: type});
var o = $(".post#"+ postid +" .clickemoji_post[select=true]").closest(".offsetemoji").find("span").text().replace(",","");
var c = o - 1;
$(".post#"+ postid +" .clickemoji_post[select=true]").closest(".offsetemoji").find("span").text(c);
var x = $("#"+ postid +" #"+ divids +"").closest(".offsetemoji").find("span").text().replace(",","");
var y = +x + 1;
$("#"+ postid +" #"+ divids +"").closest(".offsetemoji").find("span").text(y);
$(".post#"+ postid +" .clickemoji_post").removeAttr("select");
$("#"+ postid +" #"+ divids +"").attr("select","true");
}else {
$(".post#"+ postid +" .selected_emoji").empty(html);
$(".textemoji_descrip").fadeOut(100);
$(".post#"+ postid +" .clickemoji_post").removeAttr("select");
$("#"+ postid +" #"+ divids +"").attr("select","false");
$.post("../ajax-php/add-emoji.php",{subrem: "submit",postid: postid});
var x = $("#"+ postid +" #"+ divids +"").closest(".offsetemoji").find("span").text().replace(",","");
var y = x - 1;
$("#"+ postid +" #"+ divids +"").closest(".offsetemoji").find("span").text(y);
}
}
</script>
</div>
<div class="comments-while-ajax">
<input type="hidden" id="comment_id_3214" />
<input type="hidden" id="reply_id_3214" />
<input type="hidden" id="compost_id_3214" />
<input type="hidden" id="fillcom_id_3214" />
<div class="old_comtxt_3214"></div>
<div class="old_reptxt_3214"></div>
<div class="reply_3214">
<script>
$(document).ready(function(){
$.fn.addReply = function(){
var reply = $(this).text();
var postid = $(this).closest(".post-main-tvi").attr("id");
var commid = $(this).closest(".comment-texta").attr("id").substr(3);
if(reply.replace(/ /g,'') !== ""){
var html = '<div class="reply-texta opacityfiftyreply">' +
'<img draggable="false" class="reply-userimg" src="'+ $(".post#"+ postid +" .coment-imgpro").attr("src") +'" >' +
'<span class="user_name_reply">'+ $(".post#"+ postid +" .coment-imgpro").attr("data-name") +'</span>' +
'<div class="replytextmain_div">' +
'<h4 class="reply_main_text">'+ reply +'</h4>' +
'</div>' +
'<div class="reply_likesystemain">' +
'<div class="insetreply_likdis">' +
'<div class="reply_likes">' +
'<button type="button" class="send_likeply">' +
'<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">' +
'<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">' +
'<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>' +
'<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>' +
'</g>' +
'</svg>' +
'</button>' +
'</div>' +
'<div class="reply_dislike">' +
'<button type="button" class="send_dislikeply">' +
'<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">' +
'<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">' +
'<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>' +
'<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>' +
'</g>' +
'</svg>' +
'</button>' +
'</div>' +
'</div>' +
'</div>' +
'</div>';
if($(".post#"+ postid +" .comment-texta").attr("reply-done") == "true"){
    $("#888"+ commid +" .all_commentrep").prepend(html);
}else {
	$("#888"+ commid +" .injax_replays").prepend(html);
}
$.ajax({
	cache: false,
	type: "POST",
	url: "../ajax-php/add-reply.php",
    data: {
		'subreply': 'submit',
		'reply': reply,
		'postid': postid,
		'commid': commid
	},
	success: function(data){
		$("#888"+ commid +" .right_notifacmin_comm").fadeIn(0);
		$("#888"+ commid +" .opacityfiftyreply").remove();
		$("#888"+ commid +" .injax_replays").prepend(data);
		var x = $("#888"+ commid +" .relreplycountcom").text();
		var y = +x + +1;
		$("#888"+ commid +" .relreplycountcom").text(y);
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
$(this).empty();
}else {}
}
});
</script>
</div>
<div class="getre_3214">
<input type="hidden" id="commidreplay" />
<input type="hidden" id="postidreplay" />
<script>

$(document).ready(function(){
$.fn.getReplys = function(){
if($(this).attr("class") == "reply-commenta"){
	$(this).closest(".comment-texta").find(".reply-div-type,.right_notifacmin_comm").fadeIn();
}else {}
var commid = $(this).closest(".comment-texta").attr("id").substr(3);
var postid = $(this).closest(".post-main-tvi").attr("id");
$("#commidreplay").val(commid);
$("#postidreplay").val(postid);
if($(this).closest(".comment-texta").attr("reply-done") !== "true"){
var html = '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
'<path d="M0 0h24v24H0z" fill="none"/>';
$(this).closest(".relatev-a").find(".right_notifacmin_comm svg").html(html);
$(this).closest(".relatev-a").find(".right_notifacmin_comm svg").attr("close","true");
$("#888"+ commid +" .replying-all").fadeIn();
$("#888"+ commid +" .showbox_replys").fadeIn(0);
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/reply.php",
    data: {
		'gtrply': 'submit',
		'commid': commid,
		'postid': postid,
		'offset': 0,
		'limit': 5
	},
	success: function(data){
        var commid = $("#commidreplay").val();
		$("#888"+ commid +" .injax_replays").append(data);
		$("#888"+ commid +" #offsetreplyc").val("5");
		$("#888"+ commid +" .showbox_replys").fadeOut(100,function(){
		var commid = $("#commidreplay").val();
		$("#888"+ commid +" .injax_replays").slideDown();
		$("#888"+ commid +" .limit-add-replys").attr("lock","false");
		});
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
$(this).closest(".comment-texta").attr("reply-done","true");
}else {}
}
$.fn.appendReply = function(){
var valc = $(this).closest(".comment-texta").attr("id");
var valp = $(this).closest(".post-main-tvi").attr("id");
$("#commidreplay").val(valc.substr(3));
$("#postidreplay").val(valp);
var commid = $("#commidreplay").val();
var postid = $("#postidreplay").val();
$("#888"+ commid +" .limit-add-replys").addClass("loadingcomment");
var offset = $("#888"+ commid +" #offsetreplyc").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/reply.php",
    data: {
		'gtrply': 'submit',
		'commid': commid,
		'postid': postid,
		'offset': offset,
		'limit': 5
	},
	success: function(data){
        var commid = $("#commidreplay").val();
		$("#888"+ commid +" .injax_replays").append(data);
		var scrol = $("#888"+ commid +" #offsetreplyc").val();
		var voop = 5;
		var gal = +voop + +scrol;
		$("#888"+ commid +" #offsetreplyc").val(gal);
		$("#888"+ commid +" .limit-add-replys").removeClass("loadingcomment");
		},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$.fn.closeReplys = function(){
if($(this).attr("close") == "true"){
var html = '<path d="M0 0h24v24H0z" fill="none"/>' +
'<path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>';
$(this).html(html);
var commid = $(this).closest(".comment-texta").attr("id").substr(3);
$("#888"+ commid +" #offsetreplyc").val("0");
$("#888"+ commid +" .replying-all").fadeOut(function(){
var commid = $(this).closest(".comment-texta").attr("id").substr(3);
$("#888"+ commid +" .limit-add-replys").removeClass("endqueryjax");
$("#888"+ commid +" .limit-add-replys").removeClass("loadingcomment");
$("#888"+ commid +"").attr("reply-done","false");
$("#888"+ commid +" .injax_replays").empty();
$("#888"+ commid +" .showbox_replys").fadeIn(0);
$("#888"+ commid +" .reply-div-type").fadeOut(0);
if($("#888"+ commid +" .relreplycountcom").text == "0"){
	$("#888"+ commid +" .relreplycountcom").fadeOut(100);
}
});
$(this).attr("close","false");
}
}
});

</script>
</div>
<div class="comlike_3214">
<script>
$.fn.commLike = function(){
	var commid = $(this).closest(".comment-texta").attr("id").substr(3);
    var postid = $(this).closest(".post-main-tvi").attr("id");
	if($(this).attr("data-done") == "false" && $(this).attr("data-dexr") == "true"){
		$("#fillcom_id_3214").val(commid);
	    $("#compost_id_3214").val(postid);
	    $(this).vortexFirst();
		$(this).closest(".commlike-mian").addClass("donelikediv");
		$(this).attr("data-dexr","false");
		$(this).attr("data-done","true");
		var x = $(this).closest(".commlike-mian").find("span").text().replace(',','');
		var y = +x + +1;
		$(this).closest(".commlike-mian").find("span").text(y);
		$(this).closest(".commlike-mian").find("span").fadeIn(0);
		// remove dislike old
		$(this).closest(".ofsetdirec_mian_commn").find(".commdislike_main").removeClass("donedislikediv");
		if($(this).closest(".ofsetdirec_mian_commn").find(".send-discomen").attr("data-done") == "true" && $(this).closest(".ofsetdirec_mian_commn").find(".send-discomen").attr("data-dexr") == "false"){
		$(this).closest(".ofsetdirec_mian_commn").find(".send-discomen").attr("data-dexr","true");
		$(this).closest(".ofsetdirec_mian_commn").find(".send-discomen").attr("data-done","false");
		var d = $(this).closest(".ofsetdirec_mian_commn").find(".commdislike_main span").text().replace(',','');
		var c = d - 1;
		$(this).closest(".ofsetdirec_mian_commn").find(".commdislike_main span").text(c);
        if(c == 0){
		$(this).closest(".ofsetdirec_mian_commn").find(".commdislike_main span").fadeOut(0);
		}else {
		$(this).closest(".ofsetdirec_mian_commn").find(".commdislike_main span").fadeIn(0);
		}
		}else {}
	}else {
	if($(this).attr("data-done") == "true" && $(this).attr("data-dexr") == "false"){
		$("#fillcom_id_3214").val(commid);
	    $("#compost_id_3214").val(postid);
		$(this).vortexSecound();
		$(this).closest(".commlike-mian").removeClass("donelikediv");
		$(this).attr("data-dexr","true");
		$(this).attr("data-done","false");
		var w = $(this).closest(".commlike-mian").find("span").text().replace(',','');
		var q = w - 1;
		$(this).closest(".commlike-mian").find("span").text(q);
        if(q == 0){
		$(this).closest(".commlike-mian").find("span").fadeOut(0);
		}else {
		$(this).closest(".commlike-mian").find("span").fadeIn(0);
		}
	}else {}
	}
}
$.fn.commDislike = function(){
	var commid = $(this).closest(".comment-texta").attr("id").substr(3);
    var postid = $(this).closest(".post-main-tvi").attr("id");
	if($(this).attr("data-done") == "false" && $(this).attr("data-dexr") == "true"){
		$("#fillcom_id_3214").val(commid);
	    $("#compost_id_3214").val(postid);
	    $(this).vortexThird();
		$(this).closest(".commdislike_main").addClass("donedislikediv");
		$(this).attr("data-dexr","false");
		$(this).attr("data-done","true");
		var x = $(this).closest(".commdislike_main").find("span").text().replace(',','');
		var y = +x + +1;
		$(this).closest(".commdislike_main").find("span").text(y);
		$(this).closest(".commdislike_main").find("span").fadeIn(0);
        // remove like old
		$(this).closest(".ofsetdirec_mian_commn").find(".commlike-mian").removeClass("donelikediv");
		if($(this).closest(".ofsetdirec_mian_commn").find(".send-likecoma").attr("data-done") == "true" && $(this).closest(".ofsetdirec_mian_commn").find(".send-likecoma").attr("data-dexr") == "false"){
		$(this).closest(".ofsetdirec_mian_commn").find(".send-likecoma").attr("data-dexr","true");
		$(this).closest(".ofsetdirec_mian_commn").find(".send-likecoma").attr("data-done","false");
		var d = $(this).closest(".ofsetdirec_mian_commn").find(".commlike-mian span").text().replace(',','');
		var c = d - 1;
		$(this).closest(".ofsetdirec_mian_commn").find(".commlike-mian span").text(c);
        if(c == 0){
		$(this).closest(".ofsetdirec_mian_commn").find(".commlike-mian span").fadeOut(0);
		}else {
		$(this).closest(".ofsetdirec_mian_commn").find(".commlike-mian span").fadeIn(0);
		}
		}else {}
	}else {
	if($(this).attr("data-done") == "true" && $(this).attr("data-dexr") == "false"){
		$("#fillcom_id_3214").val(commid);
	    $("#compost_id_3214").val(postid);
		$(this).vortexFourd();
		$(this).closest(".commdislike_main").removeClass("donedislikediv");
		$(this).attr("data-dexr","true");
		$(this).attr("data-done","false");
		var a = $(this).closest(".commdislike_main").find("span").text().replace(',','');
		var v = a - 1;
		$(this).closest(".commdislike_main").find("span").text(v);
        if(v == 0){
		$(this).closest(".commdislike_main").find("span").fadeOut(0);
		}else {
		$(this).closest(".commdislike_main").find("span").fadeIn(0);
		}
	}else {}
	}
}
$(document).ready(function(){
	$.fn.vortexFirst = function(){
		postid = $("#compost_id_3214").val();
		commid = $("#fillcom_id_3214").val();
	    $.post("../ajax-php/likecom.php",{ sublikecom: "submit",postid: postid,commid: commid});
	}
	$.fn.vortexSecound = function(){
		postid = $("#compost_id_3214").val();
		commid = $("#fillcom_id_3214").val();
	    $.post("../ajax-php/likecom.php",{ subremlikecom: "submit",postid: postid,commid: commid});
	}
	$.fn.vortexThird = function(){
		postid = $("#compost_id_3214").val();
		commid = $("#fillcom_id_3214").val();
	    $.post("../ajax-php/likecom.php",{ subdilikecom: "submit",postid: postid,commid: commid});	
	}
	$.fn.vortexFourd = function(){
		postid = $("#compost_id_3214").val();
		commid = $("#fillcom_id_3214").val();
	    $.post("../ajax-php/likecom.php",{ subremdislike: "submit",postid: postid,commid: commid});
	}
});
</script>
</div>
<div class="replylike_1452">
<input type="hidden" id="replys_id_1452" />
<input type="hidden" id="repost_id_1452" />
<script>
$.fn.replyLike = function(){
	var replid = $(this).closest(".reply-texta").attr("id");
    var postid = $(this).closest(".post-main-tvi").attr("id");
	if($(this).attr("data-done") == "false" && $(this).attr("data-dexr") == "true"){
		$("#replys_id_1452").val(replid);
	    $("#repost_id_1452").val(postid);
	    $(this).kikassFirst();
		$(this).closest(".reply_likes").addClass("donelikediv");
		$(this).attr("data-dexr","false");
		$(this).attr("data-done","true");
		var x = $(this).closest(".reply_likes").find("span").text().replace(',','');
		var y = +x + +1;
		$(this).closest(".reply_likes").find("span").text(y);
		$(this).closest(".reply_likes").find("span").fadeIn(0);
		// remove dislike old
		$(this).closest(".reply_likesystemain").find(".reply_dislike").removeClass("donedislikediv");
		if($(this).closest(".reply_likesystemain").find(".send_dislikeply").attr("data-done") == "true" && $(this).closest(".reply_likesystemain").find(".send_dislikeply").attr("data-dexr") == "false"){
		$(this).closest(".reply_likesystemain").find(".send_dislikeply").attr("data-dexr","true");
		$(this).closest(".reply_likesystemain").find(".send_dislikeply").attr("data-done","false");
		var d = $(this).closest(".reply_likesystemain").find(".reply_dislike span").text().replace(',','');
		var c = d - 1;
		$(this).closest(".reply_likesystemain").find(".reply_dislike span").text(c);
        if(c == 0){
		$(this).closest(".reply_likesystemain").find(".reply_dislike span").fadeOut(0);
		}else {
		$(this).closest(".reply_likesystemain").find(".reply_dislike span").fadeIn(0);
		}
		}else {}
	}else {
	if($(this).attr("data-done") == "true" && $(this).attr("data-dexr") == "false"){
		$("#replys_id_1452").val(replid);
	    $("#repost_id_1452").val(postid);
	    $(this).kikassSecound();
		$(this).closest(".reply_likes").removeClass("donelikediv");
		$(this).attr("data-dexr","true");
		$(this).attr("data-done","false");
		var w = $(this).closest(".reply_likes").find("span").text().replace(',','');
		var q = w - 1;
		$(this).closest(".reply_likes").find("span").text(q);
        if(q == 0){
		$(this).closest(".reply_likes").find("span").fadeOut(0);
		}else {
		$(this).closest(".reply_likes").find("span").fadeIn(0);
		}
	}else {}
	}
}
$.fn.replyDeislike = function(){
	var replid = $(this).closest(".reply-texta").attr("id");
    var postid = $(this).closest(".post-main-tvi").attr("id");
	if($(this).attr("data-done") == "false" && $(this).attr("data-dexr") == "true"){
		$("#replys_id_1452").val(replid);
	    $("#repost_id_1452").val(postid);
	    $(this).kikassThird();
		$(this).closest(".reply_dislike").addClass("donedislikediv");
		$(this).attr("data-dexr","false");
		$(this).attr("data-done","true");
		var x = $(this).closest(".reply_dislike").find("span").text().replace(',','');
		var y = +x + +1;
		$(this).closest(".reply_dislike").find("span").text(y);
		$(this).closest(".reply_dislike").find("span").fadeIn(0);
        // remove like old
		$(this).closest(".reply_likesystemain").find(".reply_likes").removeClass("donelikediv");
		if($(this).closest(".reply_likesystemain").find(".send_likeply").attr("data-done") == "true" && $(this).closest(".reply_likesystemain").find(".send_likeply").attr("data-dexr") == "false"){
		$(this).closest(".reply_likesystemain").find(".send_likeply").attr("data-dexr","true");
		$(this).closest(".reply_likesystemain").find(".send_likeply").attr("data-done","false");
		var d = $(this).closest(".reply_likesystemain").find(".reply_likes span").text().replace(',','');
		var c = d - 1;
		$(this).closest(".reply_likesystemain").find(".reply_likes span").text(c);
        if(c == 0){
		$(this).closest(".reply_likesystemain").find(".reply_likes span").fadeOut(0);
		}else {
		$(this).closest(".reply_likesystemain").find(".reply_likes span").fadeIn(0);
		}
		}else {}
	}else {
	if($(this).attr("data-done") == "true" && $(this).attr("data-dexr") == "false"){
		$("#replys_id_1452").val(replid);
	    $("#repost_id_1452").val(postid);
	    $(this).kikassFourd();
		$(this).closest(".reply_dislike").removeClass("donedislikediv");
		$(this).attr("data-dexr","true");
		$(this).attr("data-done","false");
		var a = $(this).closest(".reply_dislike").find("span").text().replace(',','');
		var v = a - 1;
		$(this).closest(".reply_dislike").find("span").text(v);
        if(v == 0){
		$(this).closest(".reply_dislike").find("span").fadeOut(0);
		}else {
		$(this).closest(".reply_dislike").find("span").fadeIn(0);
		}
	}else {}
	}
}
$(document).ready(function(){
	$.fn.kikassFirst = function(){
		var replid = $("#replys_id_1452").val();
		var postid = $("#repost_id_1452").val();
	    $.post("../ajax-php/likereply.php",{ sublikereplys: "submit",postid: postid,replid: replid});
	}
	$.fn.kikassSecound = function(){
		var replid = $("#replys_id_1452").val();
		var postid = $("#repost_id_1452").val();
	    $.post("../ajax-php/likereply.php",{ subremlikerep: "submit",postid: postid,replid: replid});
	}
	$.fn.kikassThird = function(){
		var replid = $("#replys_id_1452").val();
		var postid = $("#repost_id_1452").val();
	    $.post("../ajax-php/likereply.php",{ subdilikerepl: "submit",postid: postid,replid: replid});	
	}
	$.fn.kikassFourd = function(){
		var replid = $("#replys_id_1452").val();
		var postid = $("#repost_id_1452").val();
	    $.post("../ajax-php/likereply.php",{ remdislikerep: "submit",postid: postid,replid: replid});
	}
});

</script>
</div>
</div>
<div class="post-while-ajax">
<input type="hidden" id="post_id_1236" />
<input type="hidden" id="post_id_7898" />
<div class="get_emotion_1236">

</div>
<div class="add_comment_1236">
<script>
$(document).ready(function(){
$.fn.addComment = function(){
if($(this).text().replace(/ /g,'') !== ""){
var postid = $(this).closest(".post-main-tvi").attr("id");
$("#post_id_7898").val(postid);
$("#com"+ postid +" .upload-comfilediv5").fadeOut(100,function(){
var postid = $("#post_id_7898").val();
$("#com"+ postid +" .h3coment-div-type").css('margin-bottom','0px');
$("#com"+ postid +" .hidecommentarr").remove();
$("#com"+ postid +" .add_img_edit_4477").removeAttr("style");
$("#com"+ postid +" .imagescomment,#com"+ postid +" .append_ertop_4477").empty();
});
if($("#com"+ postid +" .aopik_4477 .img_4477").length == 1){
var val = $("#com"+ postid +" .move_4477 .imagescomment .pocdiv_4477 .hidecommimgsrc");
var postimg = val.val();
}else {
var postimg = '';
}
var comment = $(".post#"+ postid +" .h3coment-div-type").text();
var html = '<div class="comment-texta opacityfiftycomm">' +
'<img draggable="false" class="comuseimga" src="'+ $(".post#"+ postid +" .coment-imgpro").attr("src") +'" >' +
'<span class="username-commespn">'+ $(".post#"+ postid +" .coment-imgpro").attr("data-name") +'</span>' +
'<div class="divmain_comments_text">' +
'<h4 class="comment-main-text">'+ comment +'</h4>' +
'</div>' +
'<div class="relatev-a">' +
'<div class="commlikes_system_main">' +
'<div class="ofsetdirec_mian_commn">' +
'<div class="commlike-mian">' +
'<button type="button" class="send-likecoma">' +
'<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">' +
'<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">' +
'<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>' +
'<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>' +
'</g>' +
'</svg>' +
'</button>' +
'</div>' +
'<div class="commdislike_main">' +
'<button type="button" class="send-discomen">' +
'<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">' +
'<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">' +
'<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>' +
'<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>' +
'</g>' +
'</svg>' +
'</button>' +
'</div>' +
'</div>' +
'<div class="left_ofsetmain_comment">' +
'<a class="reply-commenta">رد</a>' +
'</div>' +
'</div>' +
'</div>' +
'</div>';

if($(".post#"+ postid +" .coments-database").attr("done") == "done"){
    $(".post#"+ postid +" .notajax-allcom").prepend(html);
}else {
	$(".post#"+ postid +" .notajax-allcom").prepend(html);
	$(".post#"+ postid +" .coments-database").addldComm(postid);
}

$.ajax({
	cache: false,
	type: "POST",
	url: "../ajax-php/add-comment.php",
    data: {
		'subcomment': 'submit',
		'comment': comment,
		'postid': postid,
		'postimg': postimg
	},
	success: function(data){
		$(".post#"+ postid +" .opacityfiftycomm").remove();
		$(".post#"+ postid +" .notajax-allcom").prepend(data);
		var x = $(".post#"+ postid +" .comment-vlaunum").text();
		var y = +x + +1;
		$(".post#"+ postid +" .comment-vlaunum").text(y);
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
$(".post#"+ postid +" .h3coment-div-type").empty();
}else {}
}
});
$(document).ready(function(){
	$.fn.closeCommedit = function(type){
		if(type == "comment"){
	    var comid = $(this).closest(".comment-texta").attr("id");
		var oldtx = $(".old_comtxt_3214").html();
		$("#"+ comid +" .comment-main-text").removeClass("h3comment_conteidable");
		$("#"+ comid +" .comment-main-text").removeAttr("contenteditable");
        $("#"+ comid +" .comment-main-text").html(oldtx);
		$("#"+ comid +" .close-erto-font").fadeOut(0);
	    $("#"+ comid +" .optioncomment_888").fadeIn(0);
		}else {
		if(type == "reply"){
	    var repid = $(this).closest(".reply-texta").attr("id");
		var oldtx = $(".old_reptxt_3214").html();
		$(".reply#"+ repid +" .reply_main_text").removeClass("h3reply_conteidable");
		$(".reply#"+ repid +" .reply_main_text").removeAttr("contenteditable");
        $(".reply#"+ repid +" .reply_main_text").html(oldtx);
		$(".reply#"+ repid +" .close-reply-font").fadeOut(0);
	    $(".reply#"+ repid +" .optionreply_888").fadeIn(0);			
		}else {}
		}
	}
});

$(document).ready(function(){
	$.fn.editComment = function(type){
	if(type == "comment"){
	var comid = $(this).closest(".comment-texta").attr("id");
	$("#comment_id_3214").val(comid);
	var oldtx = $("#"+ comid +" .comment-main-text").html();
	$(".old_comtxt_3214").html(oldtx);
	$("#"+ comid +" .optioncomment_888").fadeOut(0);
	$("#"+ comid +" .close-erto-font").fadeIn(0);
	$("#"+ comid +" .comment-main-text").addClass("h3comment_conteidable");
	$("#"+ comid +" .comment-main-text").attr("contenteditable","PLAINTEXT-ONLY");
	$("#"+ comid +" .comment-main-text").attr("placeholder","اكتب تعديل لهذا التعليق");
	$("#"+ comid +" .comment-main-text img").each(function(){
		var comid = $("#comment_id_3214").val();
    	var img = $(this).attr("data-c");
		var src = $(this).attr("src");
		var thi = '<img data-c="'+ img +'" src="'+ src +'" class="emotiopost">';
		var ale = $("#"+ comid +" .comment-main-text").html().replace(thi,img);
		$("#"+ comid +" .comment-main-text").html(ale);
	});
	if($("#"+ comid +"").attr("data-edit") !== "true"){
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
			'cursor': 'default'
		});
		var commid = $(this).closest(".comment-texta").attr("id").substr(3);
		var postid = $(this).closest(".post-main-tvi").attr("id");
		var textpr = $(this).text();
		$.post("../ajax-php/edit-comment.php",{updatecomm: "submit",postid: postid,commid: commid,textpr: textpr},function(m){$(".scripts").append(m);});
	}
    });
	$("#"+ comid +"").attr("data-edit","true");
	}else {}
	}else {}
	if(type == "reply"){
	var repid = $(this).closest(".reply-texta").attr("id");
	$("#reply_id_3214").val(repid);
	var oldtx = $(".reply#"+ repid +" .reply_main_text").html();
	$(".old_reptxt_3214").val(oldtx);
	$(".reply#"+ repid +" .optionreply_888").fadeOut(0);
	$(".reply#"+ repid +" .close-reply-font").fadeIn(0);
	$(".reply#"+ repid +" .reply_main_text").addClass("h3reply_conteidable");
	$(".reply#"+ repid +" .reply_main_text").attr("contenteditable","PLAINTEXT-ONLY");
	$(".reply#"+ repid +" .reply_main_text").attr("placeholder","اكتب تعديل لهذا الرد");
	$(".reply#"+ repid +" .reply_main_text img").each(function(){
		var repid = $("#reply_id_3214").val();
    	var img = $(this).attr("data-c");
		var src = $(this).attr("src");
		var thi = '<img data-c="'+ img +'" src="'+ src +'" class="emotiopost">';
		var ale = $(".reply#"+ repid +" .reply_main_text").html().replace(thi,img);
		$(".reply#"+ repid +" .reply_main_text").html(ale);
	});
	if($(".reply#"+ repid +"").attr("data-edit") !== "true"){
    $(".reply#"+ repid +" .reply_main_text").keydown(function(event){
	if(event.keyCode == 13){
	    event.preventDefault();
		var repid = $("#reply_id_3214").val();
		$(".reply#"+ repid +" .close-reply-font").fadeOut(0);
	    $(".reply#"+ repid +" .optionreply_888").fadeIn(0);
		$(".reply#"+ repid +" .h3reply_conteidable").removeAttr("contenteditable");
		$(".reply#"+ repid +" .h3reply_conteidable").css({
			'background': '#f0f0f0',
			'color': '#888',
			'cursor': 'default'
		});
		var replid = $(this).closest(".reply-texta").attr("id");
		var postid = $(this).closest(".post-main-tvi").attr("id");
		var textre = $(this).text();
		$.post("../ajax-php/edit-comment.php",{updaterep: "submit",postid: postid,replid: replid,textre: textre},function(e){$(".scripts").append(e);});
	}
    });
	$(".reply#"+ repid +"").attr("data-edit","true");
	}else {}		
	}else {}
	}
});
$(document).ready(function(){
$.fn.addldComm = function(postid){
$(this).slideDown();
$(this).attr("done","done");
$(".post#"+ postid +" .showbox_comments").fadeIn(0);
$(".post#"+ postid +" .notajax-allcom").fadeIn(0);
$(".post#"+ postid +" .upcommentsdevo").fadeIn(0);
$("#post_id_1236").val(postid);
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/comments.php",
    data: {
		'cpostid': postid,
		'offset': 0,
		'limit': 8
	},
	success: function(data){
        var postid = $("#post_id_1236").val();
		$(".post#"+ postid +" .notajax-allcom").append(data);
		$(".post#"+ postid +" .comntofsetval").val("8");
		$(".post#"+ postid +" .showbox_comments").fadeOut(100,function(){
		var postid = $("#post_id_1236").val();
		$(".post#"+ postid +" .limit-add-comments").attr("lock","false");
		});	
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$.fn.getCommpost = function(){
$(this).slideDown();
$(this).attr("done","done");
var cpostid = $("#post_id_1236").val();
$(".post#"+ cpostid +" .showbox_comments").fadeIn(0);
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/comments.php",
    data: {
		'cpostid': cpostid,
		'offset': 0,
		'limit': 8
	},
	success: function(data){
        var cpostid = $("#post_id_1236").val();
		$(".post#"+ cpostid +" .notajax-allcom").append(data);
		$(".post#"+ cpostid +" .comntofsetval").val("8");
		$(".post#"+ cpostid +" .showbox_comments").fadeOut(100,function(){
		var cpostid = $("#post_id_1236").val();
		$(".post#"+ cpostid +" .notajax-allcom").slideDown();
		$(".post#"+ cpostid +" .limit-add-comments").attr("lock","false");
		});	
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$.fn.appendComments = function(){
var cpostid = $(this).closest(".post-main-tvi").attr("id");
$("#post_id_1236").val(cpostid);
$(".post#"+ cpostid +" .limit-add-comments").addClass("loadingcomment");
var offset = $(".post#"+ cpostid +" .comntofsetval").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/comments.php",
    data: {
		'cpostid': cpostid,
		'offset': offset,
		'limit': 8
	},
	success: function(data){
        var cpostid = $("#post_id_1236").val();
		$(".post#"+ cpostid +" .notajax-allcom").append(data);
		var scrol = $(".post#"+ cpostid +" .comntofsetval").val();
		var voop = 8;
		var gal = +voop + +scrol;
		$(".post#"+ cpostid +" .comntofsetval").val(gal);
		$(".post#"+ cpostid +" .limit-add-comments").removeClass("loadingcomment");
		},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
});

$.fn.upComments = function(){
var postid = $(this).closest(".post-main-tvi").attr("id");
$(this).fadeOut(0);
$("#post_id_1236").val(postid);
$(".post#"+ postid +" .comntofsetval").val("0");
$("#hivalpostupco").val(postid);
$(".post#"+ postid +" .coments-database").slideUp(1000,function(){
var postid = $("#hivalpostupco").val();
$(".post#"+ postid +" .limit-add-comments").removeClass("endqueryjax");
$(".post#"+ postid +" .limit-add-comments").removeClass("loadingcomment");
$(".post#"+ postid +" .coments-database").attr("done","false");
$(".post#"+ postid +" .notajax-allcom").empty();
$(".post#"+ postid +" .showbox_comments").fadeIn(0);
});
}
$.fn.vortexComm = function(){
var postid = $(this).closest(".post-main-tvi").attr("id");
$("#post_id_1236").val(postid);
$(".post#"+ postid +" .h3coment-div-type").focus();
if($(".post#"+ postid +" .coments-database").attr("done") !== "done"){
$(".post#"+ postid +" .coments-database").getCommpost();
$(".post#"+ postid +" .upcommentsdevo").fadeIn(0);
}else {
    return false;
}
}
$.fn.ajaxcomUpload = function(postid){
if($("#com"+ postid +" #userImage5").val()) {
$(this).ajaxSubmit({
target:   '#com'+ postid +' .imagescomment', 
beforeSubmit: function() {
$("#com"+ postid +" .progress-bar5").width('0%');
},
uploadProgress: function (event, position, total, percentComplete){
$("#com"+ postid +" .progress-bar5").width(percentComplete + '%');
},
success: function(){
	
},
error: function(){
	alert("خطأ - يرجي المحاولة مرة اخري");
},
resetForm: true 
}); 
return false; 
}
}
$.fn.digits = function(){ 
    return this.each(function(){ 
        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
    })
}
</script>
</div>
<div class="deletelements">
<script>
$.fn.deleteComment = function(type){
if(type == "comment"){
var commid = $(this).closest(".comment-texta").attr("id").substr(3);
var postid = $(this).closest(".post-main-tvi").attr("id");
$(".text_type_4777").attr("data-id",commid);
$(".text_type_4777").attr("data-po",postid);
$(".text_type_4777").attr("data-tp","comment");
$("#fullcomscrdeltool,.text_type_4777").fadeIn(100,function(){
$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").addClass("blurfullscreen");
});	
}else {
if(type == "reply"){
var commid = $(this).closest(".reply-texta").attr("id");
var postid = $(this).closest(".post-main-tvi").attr("id");
$(".text_type_4777").attr("data-id",commid);
$(".text_type_4777").attr("data-po",postid);
$(".text_type_4777").attr("data-tp","reply");
$("#fullcomscrdeltool,.text_type_4777").fadeIn(100,function(){
$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").addClass("blurfullscreen");
});	
}else {}
}
}
$.fn.deletePost = function(){
var postid = $(this).closest(".post-main-tvi").attr("id");
$(".text_type_4555").attr("data-id",postid);
$("#fullscrdeltool,.text_type_4555").fadeIn(100,function(){
	$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").addClass("blurfullscreen");
});
}
$.fn.sendFollow = function(){
var userid = $(this).attr("data-id");
var botnid = $(this).attr("id");
$("#hidenpostbtnf").val(botnid);
if($(this).attr("data-type") == "off"){
$(this).attr("disabled","disabled");
$.post("../ajax-php/follow-table.php",{subgofol: "submit",userid: userid},function(e){
var btnid = $("#hidenpostbtnf").val();
$("#"+btnid).html(e);
$("#"+btnid).attr("data-type","on");
$("#"+btnid).removeAttr("disabled");
});
}else {
if($(this).attr("data-type") == "on"){
$(this).attr("disabled","disabled");
$.post("../ajax-php/follow-table.php",{subunfol: "submit",userid: userid},function(e){
var btnid = $("#hidenpostbtnf").val();
$("#"+btnid).html(e);
$("#"+btnid).attr("data-type","off");
$("#"+btnid).removeAttr("disabled");
});
}
}
}
$.fn.mouseFollow = function(){
$(this).mouseenter(function(){
$(this).find(".truefol_like").fadeOut(0);
$(this).find(".folfol_like").fadeIn(0);
});
$(this).mouseleave(function(){
$(this).find(".folfol_like").fadeOut(0);
$(this).find(".truefol_like").fadeIn(0);			
});
}
</script>
</div>
</div>
</div>