<?php

include ("../connectdb/index.php");

?>

<?php
if(isset($_GET['getmini'])){

$userid = addslashes(htmlspecialchars(strip_tags(trim($_GET['userid']))));

$query = mysql_query("SELECT * FROM users WHERE id='$userid'");
while($fet = mysql_fetch_assoc($query)){
$nonameur = $fet['first_name'];
$cerangq = mysql_query("SELECT * FROM cerange WHERE cemail_id='$userid'");
while($tet = mysql_fetch_assoc($cerangq)){

?>

<div class="top_text_sender">
<input type="hidden" id="hidenfocusmainmes" value="true" />
<div class="right_setopr_9989">
<a class="close_minicht_9989">
<i class="fa fa-times" aria-hidden="true"></i>
</a>
<a class="setting_minicht_9989">
<i class="fa fa-cog" aria-hidden="true"></i>
</a>
<a class="infoget_minicht_9989">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"/>
</svg>
</a>
</div>
<div class="info_main_9989">
<img src="../upload/images/low/<?php echo $fet['pro_img']; ?>" class="image_user_9989" />
<a href="../<?php echo $fet['id']; ?>"><span><?php echo $fet['name']; ?></span></a>
</div>
</div>
<div class="chat_body_9989">
<div class="chat-ajax-show">
<div class="chat_main_epopo">
<div class="showbox_range">
<div class="loader_range">
<svg class="circular_range" viewBox="25 25 50 50">
<circle class="path_circle_range" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
</svg>
</div>
</div>
<div class="inset_chatallmes_range">
<div class="ce-loaging">
<div class="text-loading"><span>... جاري التحميل يرجي الانتظار</span></div>
<div class="circle"></div>
<div class="circle-small"></div>
<div class="circle-big"></div>
<div class="circle-inner-inner"></div>
<div class="circle-inner"></div>
</div>
</div>
</div>
<div class="prepend_message_hidden" style="display: none!important;"></div>
<div class="type_now_main">
<div class="right_img">
</div>
<div class="inliner_main_type">
<div class="in_58886">
<div class="first_fo"></div>
<div class="secon_fo"></div>
<div class="third_fo"></div>
</div>
</div>
</div>
</div>
</div>
<div class="bottom_text_sender">
<div class="right_send_7959">
<svg class="send_svg_7959" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<svg viewBox="0 0 24 24" class="send_svg_8452" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"></path>
</svg>
<button type="hidden" class="sendmesbut_7959" style="display: none!important"></button>
</div>
<div class="emotion_icons_7959">
<svg class="emotion_click_7959" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"></path>
</svg>
</div>
<div contenteditable="PLAINTEXT-ONLY" id="chat-div-type" class="chat-div-type" placeholder="اكتب رسالة"></div>
<div class="left_icons_type_7959">
<svg class="microphone_recorder_7959" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 14c1.66 0 2.99-1.34 2.99-3L15 5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3zm5.3-3c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
<div class="hidden_chat_9989">
<button type="hidden" class="sendmesbut" style="display: none!important"></button>
<button type="hidden" class="sendlikbut" style="display: none!important"></button>
<input type="hidden" id="hidechecktype" value="false" />
<input type="hidden" id="hideoflinetyp" value="false" />
<input type="hidden" id="hidedonechtyp" value="false" />
<input type="hidden" id="hidechecknono" value="false" />

</div>
</div>
<script>
//
$(document).mouseup(function (e){
var container = $(".chat#<?php echo $userid; ?>");
if (!container.is(e.target) && container.has(e.target).length === 0) {
$(".chat#<?php echo $userid; ?> #hidenfocusmainmes").val("true");
}else {
$(".chat#<?php echo $userid; ?> #hidenfocusmainmes").val("false");
}
});
// be ready main on chat 
$(document).ready(function(){
$("#<?php echo $userid; ?> .close_minicht_9989").click(function(){
$(this).closest(".mini_chatframe_9999").fadeOut(100);
});
});
$("#<?php echo $userid; ?> #chat-div-type").keydown(function(event) {
    if (event.keyCode == 13) {
		event.preventDefault();
		$("#<?php echo $userid; ?> .sendmesbut").click();
		$("#<?php echo $userid; ?> #hidechecktype").val("false");
    }
});
$("#<?php echo $userid; ?> .send_svg_7959").click(function(){
	$("#<?php echo $userid; ?> .sendmesbut").click();
	$("#<?php echo $userid; ?> #hidechecktype").val("false");	
});


// get chat script source

function appendmes(){
	if($(".chat#<?php echo $userid; ?> .prepend_message_hidden .main_message_all").length > 0){
	$(".chat#<?php echo $userid; ?> .inset_chatallmes_range").empty();
	$(".chat#<?php echo $userid; ?> .prepend_message_hidden .main_message_all").each(function(){
		$(this).attr("prepend","true");
		$(this).prependTo(".chat#<?php echo $userid; ?> .inset_chatallmes_range");
	});
	}else {}
}
function prependmes(){
	if($(".chat#<?php echo $userid; ?> .prepend_message_hidden .main_message_all").length > 0){
	$(".chat#<?php echo $userid; ?> .prepend_message_hidden .main_message_all").each(function(){
		$(this).attr("prepend","true");
		$(this).prependTo(".chat#<?php echo $userid; ?> .inset_chatallmes_range");
	});
	}else {}
}
$(document).ready(function(){
var loop<?php echo $userid; ?> = 1;
$.ajax({
	cache: false,
	type: "GET",
	url: "../range/<?php echo $tet['r_user']; ?>/chat.php",
    data: {
		'offset': 0,
		'limit': 20
	},
	success: function(data){
		$(".chat#<?php echo $userid; ?> .prepend_message_hidden").html(data);
		loop<?php echo $userid; ?> += 19;
		$(".chat#<?php echo $userid; ?> .showbox_range").fadeOut(0);
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});

$(".chat#<?php echo $userid; ?> .chat_body_9989").scroll(function(){
if($(".chat#<?php echo $userid; ?> .chat_body_9989").scrollTop() == 0){
$(".chat#<?php echo $userid; ?> .showbox_range").fadeIn(0);
$.ajax({
	cache: false,
	type: "GET",
	url: "../range/<?php echo $tet['r_user']; ?>/chat.php",
    data: {
		'offset': loop<?php echo $userid; ?>,
		'limit': 20
	},
	success: function(data){
		$(".chat#<?php echo $userid; ?> .prepend_message_hidden").html(data);
		loop<?php echo $userid; ?> += 20;
		$(".chat#<?php echo $userid; ?> .showbox_range").fadeOut(0);
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});

}
});
});

// sow typing main source

$("#<?php echo $userid; ?> #chat-div-type").keypress(function(){
	$("#<?php echo $userid; ?> #hidechecktype").val("true");
});
$("#<?php echo $userid; ?> #chat-div-type").keyup(function(event){
	var text = $("#<?php echo $userid; ?> -div-type").text();
	var retm = text.replace(/ /g, "");
	if(retm == "" && event.keyCode == 8){
	$("#<?php echo $userid; ?> #hidechecktype").val("false");
	}
});
var timer = null;
$('#<?php echo $userid; ?> #chat-div-type').keydown(function(){
    clearTimeout(timer); 
    timer = setTimeout(stop<?php echo $userid; ?>, 5000)
});
function stop<?php echo $userid; ?>() {
    $("#<?php echo $userid; ?> #hidechecktype").val("false");
}
function check<?php echo $userid; ?>(){
	var val = $("#<?php echo $userid; ?> #hidechecktype").val();
	if(val == "false"){
		$("#<?php echo $userid; ?> #hidedonechtyp").val("false");
		var mol = $("#<?php echo $userid; ?> #hideoflinetyp").val();
		if(mol == "false"){
		donesto<?php echo $userid; ?>();
		$("#<?php echo $userid; ?> #hideoflinetyp").val("true");
		}else {}
	}else {
		$("#<?php echo $userid; ?> #hideoflinetyp").val("false");
		var mal = $("#<?php echo $userid; ?> #hidedonechtyp").val();
		if(mal == "false"){
		donetyp<?php echo $userid; ?>();
		$("#<?php echo $userid; ?> #hidedonechtyp").val("true");
		}else {}
	}
	setTimeout(check<?php echo $userid; ?>,100);
}
check<?php echo $userid; ?>();
function donetyp<?php echo $userid; ?>(){
	$.post("../range/<?php echo $tet['r_user']; ?>/load.php",{setitnow: "submit"},function(e){$(".scripts").html(e);});
}
function donesto<?php echo $userid; ?>(){
	$.post("../range/<?php echo $tet['r_user']; ?>/load.php",{setofnow: "submit"},function(e){$(".scripts").html(e);});
}

// send chat main event 

$(document).ready(function(){
$("#<?php echo $userid; ?> .sendmesbut").click(function(){
	var message = $("#<?php echo $userid; ?> .chat-div-type").text();
	var spacere = message.replace(/ /g, "");
    if(spacere !== ""){
	var color = $("#<?php echo $userid; ?> .send_svg_7959").css("fill");
	var html = '<div class="main_message_all">' + 
	'<div class="message-to">' +
	'<div class="ifatar_rags">' +
	'<img draggalbe="false" src="../../upload/images/low/<?php echo $info['pro_img']; ?>" class="afatar_img" />' +
	'</div>' +
	'<div class="mes-to-text">' +
	'<div class="text_main_85">' +
	'<h3 style="background: '+ color +'">' + message + '</h3>' +
	'</div>' +
	'</div>' +
	'</div>' +
	'</div>';
	$("#<?php echo $userid; ?> .chat_main_epopo").append(html);
	$.post("../range/<?php echo $tet['r_user']; ?>/send.php",{sendmessage: "submit",message: message},function(e){$(".scripts").append(e);});
	$("#<?php echo $userid; ?> .chat-div-type").empty();
    $("#<?php echo $userid; ?> .chat_body_9989").animate({ scrollTop: $('#<?php echo $userid; ?> .chat_body_9989')[0].scrollHeight},500);

    }
});
$("#<?php echo $userid; ?> .sendlikbut").click(function(){
	var color = $("#<?php echo $userid; ?> .send_svg_7959").css("fill");
	var message = '<svg viewBox="0 0 24 24" class="likemessage_main" style="fill: '+ color +'" xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M0 0h24v24H0z" fill="none"></path>' +
    '<path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>' +
    '</svg>';
	var html = '<div class="message-to">' +
	'<div class="mes-to-text">' +
	'<div class="text_main_85">' +
	'<h3 style="background: none!important">' + message + '</h3>' +
	'</div>' +
	'</div>' +
	'</div>' +
	'</div>';
	$("#<?php echo $userid; ?> .chat_main_epopo").append(html);
	$.post("../range/<?php echo $tet['r_user']; ?>/send.php",{sendmessage: "submit",type: "like"},function(e){$(".scripts").append(e);});
	$("#<?php echo $userid; ?> .chat-div-type").empty();
    $("#<?php echo $userid; ?> .chat_body_9989").animate({ scrollTop: $('#<?php echo $userid; ?> .chat_body_9989')[0].scrollHeight},500);
});
});
$("#<?php echo $userid; ?> .chat-div-type").keyup(function(){
    var message = $(this).text();
	var spacere = message.replace(/ /g, "");
	if(spacere == ""){
		$("#<?php echo $userid; ?> .send_svg_7959").fadeOut(0,function(){
			$("#<?php echo $userid; ?> .send_svg_8452").fadeIn(0);
		});
	}else {
		$("#<?php echo $userid; ?> .send_svg_8452").fadeOut(0,function(){
			$("#<?php echo $userid; ?> .send_svg_7959").fadeIn(0);
		})		
	}
});
$("#<?php echo $userid; ?> .send_svg_8452").click(function(){
$("#<?php echo $userid; ?> .sendlikbut").click();
$("#<?php echo $userid; ?> #hidechecktype").val("false");
$(".likemessage_main[done!=tru]").each(function(){
	$(this).closest(".text_main_85 h3").addClass("emptytext");
	$(this).closest(".text_main_85 h3").attr("done","true");
	$(this).closest(".main_message_all").find(".ifatar_rags").remove();  
});
});
$("#<?php echo $userid; ?> .send_svg_8452").mouseenter(function(){
var html = '<path d="M0 0h24v24H0z" fill="none"></path>' +
           '<path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>';
$(this).html(html);
});
$("#<?php echo $userid; ?> .send_svg_8452").mouseleave(function(){
var html = '<path d="M0 0h24v24H0z" fill="none"></path>' +
    '<path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"></path>';
$(this).html(html);
});

// empty text add remove class

$(document).ready(function(){
	function emptext<?php echo $userid; ?>(){
	$(".text_main_85 h3").each(function(){
    if ($(this).text().trim().length == 0 && $(this).find("svg").length == 0) {
		if($(this).attr("done") !== "true"){
		$(this).css('transition','0s');
        $(this).addClass("emptytext");
		$(this).css('transition','.3s');
		$(this).attr("done","true");
		}else {}
		}else {}
    });
	$(".emptytext").each(function(){
		if($(this).attr("doing") !== "true"){
	    $(this).closest(".main_message_all").find(".ifatar_rags").remove();  
	    $(this).attr("doing","true");
		}
	});
	setTimeout(emptext<?php echo $userid; ?>, 100);
	}
	emptext<?php echo $userid; ?>();
});

// fast chat source main

function getnew<?php echo $userid; ?>(){
    $.get("../range/<?php echo $tet['r_user']; ?>/fast.php",{getnow: "submit"},function(e){$("#<?php echo $userid; ?> .chat_main_epopo").append(e);});
	$.get("../range/<?php echo $tet['r_user']; ?>/load.php",{getype: "submit"},function(c){$(".scripts").html(c);});
	setTimeout(getnew<?php echo $userid; ?>,500);
}
getnew<?php echo $userid; ?>();

function dofademat<?php echo $userid; ?>(){
var val = $("#<?php echo $userid; ?> #hidechecknono").val();
if(val == "false"){
	$("#<?php echo $userid; ?> .type_now_main").fadeOut(0);
}else {
	$("#<?php echo $userid; ?> .type_now_main").fadeIn(100);
	var val = $("#<?php echo $userid; ?> #hidechecktype").val();
	if(val == "false" && $("#<?php echo $userid; ?> .chat_body_9989").scrollTop() - $("#<?php echo $userid; ?> .chat_main_epopo").height() > - $(document).height() + 150){
	    $("#<?php echo $userid; ?> .chat_body_9989").animate({ scrollTop: $('#<?php echo $userid; ?> .chat_body_9989').prop("scrollHeight")},500);
	}
}
}
dofademat<?php echo $userid; ?>();

function dofademat(){
	// for range main only 
}

// scrol and added all option

function doscroll(){
	// for range main only 
}

function doscroll<?php echo $userid; ?>(){
	$("#<?php echo $userid; ?> .chat_body_9989").animate({ scrollTop: $('#<?php echo $userid; ?> .chat_body_9989').prop("scrollHeight")},500);
}
doscroll<?php echo $userid; ?>();
</script>
<?php
$empty = "true";
}
}
if(empty($empty)){
	echo '
	<a class="close_minicht_9989 offout_close_9999">
    <i class="fa fa-times" aria-hidden="true"></i>
    </a>
	<div class="errono_rangeacc">
	<span>عفوا هذا الشخص غير متاح حاليا</span>
	<p>'.$nonameur.' غير مسجل في رانج</p>
	</div>
	<script>
	$(".offout_close_9999").click(function(){
    $(this).closest(".mini_chatframe_9999").fadeOut(100);
    });
	</script>';
}
}
?>