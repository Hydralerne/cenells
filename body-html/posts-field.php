<div class="follow_4353">
<div class="menu_4353">
<div class="return_bak_bostool">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
</svg>
<input type="hidden" id="return_bostool_input" />
</div>
<div class="post_blog_main">
<div class="post-img-ico">
<div id="p2">
<img src="../img/profile/add-img.png" draggable="false" title="Add Photo" id="add-img">
</div>
<div id="p3">
<img src="../img/profile/add-video.png" draggable="false" title="Add Video" id="add-video">
</div>
<div id="p4">
<img src="../img/profile/location.png" draggable="false" title="Add Location" id="location-post">
</div>
<div id="p5">
<img src="../img/icons/face_m.png" draggable="false" Title="Add State" id="state">
</div>
<div id="p6">
<img src="../img/profile/pin-per.png" draggable="false" title="Pin To Persons" id="pin-per">
</div>
<div id="p7">
<img src="../img/profile/lock.png" draggable="false" title="Change Settings" id="lock-set">
</div>
</div>
<div class="blog_post">
<button type="button" id="blog_post_sub">تدوين</button>
<div>
<img src="../img/loading.gif" />
</div>
</div>
</div>

</div>
<div class="filters_all">
<svg class="defs-only1">
  <filter id="monochrome" color-interpolation-filters="sRGB"
          x="0" y="0" height="100%" width="100%">
    <feColorMatrix type="matrix"
      values="0.95 0 0 0 0.05 
              0.85 0 0 0 0.15  
              0.50 0 0 0 0.50 
              0    0 0 1 0" />
  </filter>
</svg>
<svg class="defs-only2">
  <filter id="duotone" color-interpolation-filters="sRGB"
          x="0" y="0" height="100%" width="100%">
    <feColorMatrix type="matrix"
      values="0.95 0 0 0  0.05 
              0.65 0 0 0  0.15  
              0.15 0 0 0  0.50 
                0  0 0 1  0" />
  </filter>
</svg>
<svg class="defs-only3">
  <filter id="duotone2" color-interpolation-filters="sRGB"
          x="0" y="0" height="100%" width="100%">
    <feColorMatrix type="matrix"
      values="0.90 0 0 0   0.40 
              0.95 0 0 0  -0.10  
             -0.20 0 0 0   0.65 
                0  0 0 1   0" />
  </filter>
</svg>
<svg class="defs-only4">
  <filter id="gamma-red" color-interpolation-filters="sRGB"
          x="0" y="0" height="100%" width="100%">
     <feComponentTransfer>
      <feFuncR type="gamma" exponent="0.5" />
      <feFuncG type="gamma" exponent="1.1" />
      <feFuncB type="gamma" exponent="1.4" />
	    </feComponentTransfer>
  </filter>
</svg>


</div>
<div class="blog_77">
<input type="hidden" class="hiddenfunctionval" />
<input type="hidden" class="hiddenfunctiontyp" />
<button type="hidden" id="hidenget_empthion" style="display: none!important"></button>
<script>
var delete_cookie = function(name) {
    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};
$(function() {
    $(".more_emotion_div").each(function() {
        var count = 0;
        $(this).click(function(){
        count++;
        if (count === 1) {
	    $(".data_main_87548").css('margin-left','80px');
		$("#more_emotion_svg").css('transform','rotate(270deg)');
        }
        else{

		$(".data_main_87548").css('margin-left','45px');
		$("#more_emotion_svg").css('transform','rotate(90deg)');
		count = 0;
        }
        });
    });
});
$(".text-div-type").focus(function(){
	$(".hiddenfunctiontyp").val("post");
});
$(document).ready(function(){
$(".text-div-type").keyup(function(){
var text = $(".text-div-type").text();
document.cookie = "setdivtext="+ text +"; expires=Thu, 18 Dec 2020 12:00:00 UTC; path=/";
});
});

function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
} 

var textcookie = getCookie("setdivtext");

if(textcookie == null){
	$(".text-div-type").empty();
	$(".text-div-type").css('border-radius','100px');	
}else {
setTimeout(function(){
var textcookie = getCookie("setdivtext");
if(textcookie == ""){
}else {
	$(".text-div-type").html(textcookie);
	$(".text-div-type").css('border-radius','0px');
}
},1000);
}
$("#state").click(function(){
	$(".hiddenfunctiontyp").val("post");
    $("#hidenget_empthion").click();
});

	$(".people").fadeIn(0);
	$(".people").css('transform','scale(1)');
$(".erto1").click(function(){
	$(".emojiser").css('transform','scale(0)');
	setTimeout(function(){
	$(".emojiser").fadeOut(0);
	$(".people").fadeIn(0);
	$(".people").css('transform','scale(1)');
	},300);
});
$(".erto2").click(function(){
	$(".emojiser").css('transform','scale(0)');
	setTimeout(function(){
	$(".emojiser").fadeOut(0);
	$(".nature").fadeIn(0);
	$(".nature").css('transform','scale(1)');
	},300);
});
$(".erto3").click(function(){
	$(".emojiser").css('transform','scale(0)');
	setTimeout(function(){
	$(".emojiser").fadeOut(0);
	$(".foods").fadeIn(0);
	$(".foods").css('transform','scale(1)');
	},300);
});
$(".erto4").click(function(){
	$(".emojiser").css('transform','scale(0)');
	setTimeout(function(){
	$(".emojiser").fadeOut(0);
	$(".activity").fadeIn(0);
	$(".activity").css('transform','scale(1)');
	},300);
});
$(".erto5").click(function(){
	$(".emojiser").css('transform','scale(0)');
	setTimeout(function(){
	$(".emojiser").fadeOut(0);
	$(".places").fadeIn(0);
	$(".places").css('transform','scale(1)');
	},300);
});
$(".erto6").click(function(){
	$(".emojiser").css('transform','scale(0)');
	setTimeout(function(){
	$(".emojiser").fadeOut(0);
	$(".objects").fadeIn(0);
	$(".objects").css('transform','scale(1)');
	},300);
});
$(".erto7").click(function(){
	$(".emojiser").css('transform','scale(0)');
	setTimeout(function(){
	$(".emojiser").fadeOut(0);
	$(".symbols").fadeIn(0);
	$(".symbols").css('transform','scale(1)');
	},300);
});
$(".erto8").click(function(){
	$(".emojiser").css('transform','scale(0)');
	setTimeout(function(){
	$(".emojiser").fadeOut(0);
	$(".flags").fadeIn(0);
	$(".flags").css('transform','scale(1)');
	},300);
});
$(document).mouseup(function(e){
var container = $(".emotion_date");
var sentainer = $(".text-div-type");
var mentainer = $("#state");
var lentainer = $("#add-imotions1064");
var wentainer = $(".h3coment-div-type");
if (!container.is(e.target) && container.has(e.target).length === 0 && !sentainer.is(e.target) && sentainer.has(e.target).length === 0 && !mentainer.is(e.target) && mentainer.has(e.target).length === 0 && !lentainer.is(e.target) && lentainer.has(e.target).length === 0 && !wentainer.is(e.target) && wentainer.has(e.target).length === 0 ){
	$(".emotion_date").css('transform','scale(0)');
	setTimeout(function(){
	$(".emotion_date").fadeOut(0);
	$(".first_idea_lol").fadeIn(0);
	$(".first_idea_lol").css('transform','scale(1)');		
	},300);
}
});
$(".flags .emoji").click(function(){
	var a = $(this).find("i").text();
	var text = a + ' ';
	if($(".hiddenfunctiontyp").val() == "post"){
	$(".text-div-type").append(text);
	}else {
		var postid = $(".hiddenfunctiontyp").val();
		$(".post#"+ postid +" .h3coment-div-type").append(text);
	}
});
$(".people .emoji, .nature .emoji, .foods .emoji, .activity .emoji, .places .emoji, .objects .emoji, .symbols .emoji").click(function(){
	var a = $(this).find("i").text();
	if($(".hiddenfunctiontyp").val() == "post"){
	$(".text-div-type").append(a);
	}else {
		var postid = $(".hiddenfunctiontyp").val();
		$(".post#"+ postid +" .h3coment-div-type").append(a);
	}
});
$("#hidenget_empthion").click(function(){
	$(".first_idea_lol").css('transform','scale(0)');
	setTimeout(function(){
	$(".first_idea_lol").fadeOut(0);
	$(".emotion_date").fadeIn(0);
	$(".emotion_date").css('transform','scale(1)');		
	},300);
});
</script>

<div class="setpost_main_textdiv">
<div contenteditable="PLAINTEXT-ONLY" id="text-div-type" class="text-div-type" placeholder="اكتب تدوينتك واخبر المتابعين باللذي يحدث"></div>
<input type="hidden" id="hiddengroupval" />
</div>
<div class="share_get_main">
<div class="load_main"></div>
<div class="ajax_share_div"></div>
</div>
<input type="hidden" id="hidden_3242" />
<div class="slideshow8">
<center>
<div id="slider8"><ul></ul></div>
</center>
<div class="controls_32428">
<a class="control_next8">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
    <path d="M0-.5h24v24H0z" fill="none"/>
</svg>
</a>
<a class="control_prev8">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
    <path d="M0-.5h24v24H0z" fill="none"/>
</svg>
</a>
<div class="checkbox_svgicon_548">
<svg id="pause_458" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<svg id="play_458" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M8 5v14l11-7z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<input type="checkbox" id="checkbox">
</div>
</div>

<div class="upload-comfilediv">

<form id="uploadForm" action="../ajax-php/ajax-postupload.php" method="post">
<input style="display: none!important;" name="userImage" id="userImage" type="file" class="demoInputBox" />
<input style="display: none!important;" type="submit" id="btnSubmit" value="Submit" class="btnSubmit" />
<div class="progress">
<div class="progress-div"><div class="progress-bar"></div></div>
<div class="progress-value"></div>
</div>
<div class="upload-shytoh">
<div class="targetLayer8" id="targetLayer8">
<section id="edit_post_ico">
<svg viewBox="0 0 24 24" class="edit_onr_34" id="edit_onr_34" xmlns="http://www.w3.org/2000/svg"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
<svg viewBox="0 0 24 24" class="del_etrerjh" id="del_etrerjh" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0V0z" fill="none"/>
    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zm2.46-7.12l1.41-1.41L12 12.59l2.12-2.12 1.41 1.41L13.41 14l2.12 2.12-1.41 1.41L12 15.41l-2.12 2.12-1.41-1.41L10.59 14l-2.13-2.12zM15.5 4l-1-1h-5l-1 1H5v2h14V4z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</section>
</div>
<div class="edit_row_645"></div>
</div>
</form>
</div>

<div class="hidden_654" style="display: none;!important"></div>
<div class="hidinfop_ert90"></div>
<div class="arrayino8" style="display: none!important;"></div>
<div class="eshara_to_followers">
<div class="eshara_selected_4444">
<div class="with_8678778">
<div class="eshara_body_454568"></div>
</div>
</div>
<div class="inset_8768785">
<span><i class="fa fa-times" aria-hidden="true"></i></span>

<input type="text" class="input_eshara_type" placeholder="مع من تريد مشاركة هذه التدوينة" />
</div>
<div class="eshara_resault_main"></div>
</div>

<div class="select_post_media">
<div class="right_media_music">
<span>تحميل مقطع صوتي</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 5h-3v5.5c0 1.38-1.12 2.5-2.5 2.5S10 13.88 10 12.5s1.12-2.5 2.5-2.5c.57 0 1.08.19 1.5.51V5h4v2zM4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6z"/>
</svg>
</div>
<div class="left_media_videos">
<span>تحميل مقطع فيديو</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8 12.5v-9l6 4.5-6 4.5z"/>
</svg>
</div>
</div>

<div class="audio_media_upload">
<form id="uploadForm9" action="../ajax-php/audio-upload.php" method="post">
<input style="display: none!important;" name="userImage" id="userImage9" accept="audio/*" type="file" class="demoInputBox">
<input style="display: none!important;" type="submit" id="btnSubmit9" value="Submit" class="btnSubmit">
<div class="progress9">
<div class="progress9-div"><div class="progress9-bar"></div></div>
<div class="progress9-value"></div>
</div>
</form>
<div class="audio_upload_target" style="display: none!important;"></div>
<div class="audio_src_viewmain">
<audio style="display: none" ontimeupdate="updateTrackTime(this);" id="hideaudioview_mani" src="#" controls="controls"></audio>
<div class="audio_post_main">
<div class="audio_body_back">
<div class="left_controls_audio">
<button type="button" class="play_audio_main">
<svg xmlns="http://www.w3.org/2000/svg" class="audio_svgplay" viewBox="0 0 24 24">
     <path d="M8 5v14l11-7z"></path>
     <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" class="audio_svgpasue" viewBox="0 0 24 24">
     <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"></path>
     <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</button>
<button type="button" class="next_second_audio">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
     <path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z"></path>
     <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</button>
<button type="button" class="back_second_audio">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
     <path d="M6 6h2v12H6zm3.5 6l8.5 6V6z"></path>
     <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</button>
</div>
<div class="cent_controls_audio">
<div class="niceright_border_main"></div>
<div class="progress_audio_main">
<div class="outline_progress_off">
<div class="inline_progress_on"></div>
<div class="loaded_progress_on"></div>
</div>
</div>
<div class="time_audio_madeio">
<span class="cerintly_timeopert">0:00</span><a> / </a><span class="filltime_mainopert">0:00</span>
</div>
</div>
<div class="rigt_controls_audio">
<div class="divbutton_valumeop">
<div class="rightaudiovlm_border"></div>
<div class="inliner_volumain">
<div class="offset_volumanin"></div>
</div>
</div>
<button type="button" class="muite_volem_main_opert">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="volem_onsvg_mainop">
     <path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"></path>
     <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="volem_offsvg_mainop">
     <path d="M7 9v6h4l5 5V4l-5 5H7z"></path>
     <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</button>
</div>
</div>
</div>
</div>
</div>

<script>
$(".rigt_controls_audio").mouseenter(function(){
	$(".time_audio_madeio").fadeOut(0,function(){
		$(".divbutton_valumeop").fadeIn(0);
	});
});
$(".rigt_controls_audio").mouseleave(function(){
	$(".divbutton_valumeop").fadeOut(100,function(){
		$(".time_audio_madeio").fadeIn(0);
	});
});
// audio player script 
$(".play_audio_main").mousedown(function(){
	$(this).css('background','#ddd');
});
$(".play_audio_main").mouseup(function(){
	$(this).css('background','none');
});
$(".play_audio_main").click(function(){
	var audio = document.getElementById("hideaudioview_mani");
    if (audio.paused == false) {
        audio.pause();
		$(".audio_svgpasue").fadeOut(0)
		$(".audio_svgplay").fadeIn(0);
    } else {
        audio.play();
		$(".audio_svgplay").fadeOut(0)
		$(".audio_svgpasue").fadeIn(0);
    }
});

// time print all in audio

function updateTrackTime(track){
var currtime = Math.floor(track.currentTime).toString(); 
var fildurat = Math.floor(track.duration).toString();
var cerintim = cerntlytimemain(currtime);
if (alltimesmainmor(fildurat) == "NaN:NaN:NaN"){
    duration = '0:00';
} else {
    duration = alltimesmainmor(fildurat);
}
/*
if(duration == cerintim){
$(".filltime_mainopert").text("0:00");
$(".cerintly_timeopert").text("0:00");
$(".audio_svgpasue").fadeOut(0)
$(".audio_svgplay").fadeIn(0);
$(".loaded_progress_on").css('width','0%');
$(".inline_progress_on").css('width','0%');

} else {*/
$(".filltime_mainopert").text(duration);
$(".cerintly_timeopert").text(cerintim);
/*
}*/

var audio = document.getElementById("hideaudioview_mani");
var barlength = Math.round(audio.currentTime * (100 / audio.duration));
$(".inline_progress_on").css('width',''+ barlength + '%');

var buffered = audio.buffered;
if(buffered.length) {
var loaded = Math.round(100 * buffered.end(0) / audio.duration);
$(".loaded_progress_on").css('width',''+ loaded + '%');
}


}

function cerntlytimemain(s) {
    var h = Math.floor(s/3600); //Get whole hours
    s -= h*3600;
    var m = Math.floor(s/60); //Get remaining minutes
    s -= m*60;
    if(h == 0){
    var time = (m < 10 ? ''+m : m)+":"+(s < 10 ? '0'+s : s);
    }else {
    var time = h+":"+(m < 10 ? ''+m : m)+":"+(s < 10 ? '0'+s : s);
    }
    return time;
}

function alltimesmainmor(s) {
    var h = Math.floor(s/3600); //Get whole hours
    s -= h*3600;
    var m = Math.floor(s/60); //Get remaining minutes
    s -= m*60;
    if(h == 0){
    var time = (m < 10 ? ''+m : m)+":"+(s < 10 ? '0'+s : s);
    }else {
    var time = h+":"+(m < 10 ? ''+m : m)+":"+(s < 10 ? '0'+s : s);
    }
    return time;
}






</script>
<script>
/*
$("#text-div-type").on("paste", function(){
	$("#blog_post_sub").removeAttr("disabled");
	setTimeout(function(){
	var text = $("#text-div-type").text();
    var urlRegex = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
    var arete = text.replace(urlRegex, '<a class="getinfo_url" href="$1">$1</a>')
    var domert = $('<div>' + arete + '</div>');
    if( $('.getinfo_url', domert).length !== 0 ) {
	$("#blog_post_sub").animate({'margin-left': '180px'});
	setTimeout(function(){
	$(".blog_post div").fadeIn();
	$.post("ajax-php/shareurl.php",{geturlshare: "submit",urlere: arete},function(e){$(".ajax_share_div").html(e);});
	},300);
    }
	},500);
});*/

$(".left_media_videos").click(function(){
	alertText("عفوا - تدوينات مقاطع الفيديو غير متوقرة "+ "<br />" + "في الاصدار التجريبي",false);
});

$(document).ready(function() {
	 $('#uploadForm9').submit(function(e) {
		if($('#userImage9').val()) {
			e.preventDefault();
			
			$(this).ajaxSubmit({
				target:   '.audio_upload_target', 
				beforeSubmit: function() {
				  $(".progress9-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){
					$(".progress9-bar").width(percentComplete + '%');
				},
				success:function (){
	            $(".progress9").fadeOut(function(){
					$(".progress9-bar").width('0%');
				});
				$("#uploadForm9").fadeOut(0,function(){
				$(".setpost_main_textdiv").css('transform','scale(1)');
				$(".audio_src_viewmain").fadeIn(100);
				})
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
});
$(".right_media_music").click(function(){
	$("#userImage9").click();
});
$("#userImage9").change(function(){
	$("#uploadForm9").submit();
	$(".select_post_media").fadeOut(500,function(){
		$(".audio_media_upload,.progress9").fadeIn(100);
	});
});
$("#add-video").click(function(){
	$(".setpost_main_textdiv").css('transform','scale(0)');
	setTimeout(function(){
		$(".select_post_media").fadeIn();
	},500);
	$("#return_bostool_input").val("vida");
});
$(".return_bak_bostool").click(function(){
	if($("#return_bostool_input").val() == "vida"){
	$(".select_post_media").fadeOut(function(){
	$(".setpost_main_textdiv").css('transform','scale(1)');
	});
	$("#return_bostool_input").val("");	
	}
});
$("#pin-per").click(function(){
	$(".eshara_to_followers").slideDown(500);
	setTimeout(function(){
		$(".inset_8768785").fadeIn(100);
	},500);
});
$(".inset_8768785 span").click(function(){
	$(".inset_8768785,.eshara_selected_4444").fadeOut(100);
	setTimeout(function(){
		$(".eshara_to_followers").slideUp(500);
	},100);	
});
$(".input_eshara_type").keyup(function(){
	var name = $(this).val();
	if(name == ""){
	$(".eshara_resault_main").fadeOut(0);
	}else {
	$.post("../ajax-php/eshara-opert.php",{get: "submit",name: name},function(e){$(".eshara_resault_main").html(e)});
	}
});
$(document).ready(function(){
$("#del_etrerjh").click(function(){
if($("#slider8 ul li").length == 0){
$("#edit_post_ico").fadeOut(0);
$(".targetLayer8").slideUp(function(){
$(".targetLayer8 center").remove();
$(".hidden_654").empty();
});
}else {
var src = $("#hiddensrceimg").val();
var img = $("#slider8 li img[src$='"+ src +"']");
var min = img.closest("li");
min.remove();
}
});
});
$(document).ready(function(){
	$("#text-div-type").focusin(function(){
		if($(this).text() == 0){
		$(this).css({'border-color':'#ccc','border-radius':'0px'});
		}
	});
	$("#text-div-type").focusout(function(){
		if($(this).text() == 0){
			$(this).css({'border-color':'#999','border-radius':'100px'});
		}
	});
});
// contenteditable
$(document).ready(function(){
$("#text-div-type").keyup(function (){
	if($("#text-div-type").text() == 0){
		$("#blog_post_sub").attr("disabled","true");
		$(this).css({'border-color':'#ccc'});
	}else {
		$(this).css({'border-color':'#999'});
		$("#blog_post_sub").removeAttr("disabled");
	}
});
	if($("#text-div-type").text() == 0){
		$("#blog_post_sub").attr("disabled","true");
	}else {
		$("#blog_post_sub").removeAttr("disabled");
	}

$("#blog_post_sub").click(function(){
	$(this).attr("disabled","true");
	$(this).css('background','#aaa');
	$(this).animate({'margin-left': '165px'});
	setTimeout(function(){
	$(".blog_post div").fadeIn();
	},500);
$("#text-div-type").css({'opacity': '0.5','cursor': 'default','user-select': 'none'});
$("#text-div-type").mousedown(function(){
	return false;
});
var postpro = $("#text-div-type").text();
if($(".blog_77 #slider8 ul li").length > 1){
$(".hidinfop_ert90 input").each(function(){
	var a = "'"+ $(this).val() +"',";
	$(".arrayino8").append(a);
});
}else {
	var x = $("#hideinimgsrc").val();
	var y = $("#hidden_3242").val(x);
}
if($(".short_daruyi_ment").length > 0){
	$(".short_daruyi_ment").each(function(){
    var oldval = $("#hiddengroupval").val();
	var thsval = ""+ $(this).attr("dataid") +"-"+ oldval +"";
	$("#hiddengroupval").val(thsval);
	});
}else {
if($(".short_daruyi_ment").length == 1){
	$("#hiddengroupval").val("");	
}else {}
}
if($("#audiofilenameval").length > 0){
	audio = $("#audiofilenameval").val();
}else {
	audio = "";
}
var sendimgurs = $("#hidden_3242").val();
var array = $(".arrayino8").html();
var groub = $("#hiddengroupval").val();
var lockarray = $(".or_485412_ar").text();
var locktype = $(".selectmenu_vortex li").attr("data-view");
$.ajax({
	cache: false,
	type: "POST",
	url: "../ajax-php/add-post.php",
    data: {
		insertpost: "submit",
		array: array,
		groub: groub,
		audio: audio,
		sendimgurs: sendimgurs,
		postpro: postpro,
		locktype: locktype,
		lockarray: lockarray
	},
	success: function(data){
		$(".scripts").append(data);
		delete_cookie('setdivtext');
		$(".or_485412_ar").empty();
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
});
});

$(document).ready(function(){
var filesInput = document.getElementById("userImage");
filesInput.addEventListener("change", function(event){
var files = event.target.files; //FileList object
var output = document.getElementById("targetLayer8");
for(var i = 0; i< files.length; i++){
var file = files[i];
//Only pics
if(!file.type.match('image'))
continue;
var picReader = new FileReader();
picReader.addEventListener("load",function(event){
var picFile = event.target;
var div = document.createElement("center");
div.innerHTML = "<li><div><img draggable='false' id='thumbnail' class='thumbnail' src='" + picFile.result + "'/></div></li>";
output.insertBefore(div,null);				
if($(".blog_77 .targetLayer8 li").length > 1){
    $(".blog_77 .targetLayer8 li").appendTo("#slider8 ul");
	$("#slider8").show(0,function(){
	$(".controls_32428").fadeIn(100);
	});
}
setTimeout(function(){
$("#slider8 img").hover(function(){
	var src = $(this).attr("src");
	if($("#del_etrerjh").attr("data-delete") !== src){
	$("#del_etrerjh").attr("data-delete",src);
	}else {}
});
$(".blog_77 #targetLayer8 img").hover(function(){
	var src = $(this).attr("src");
	if($("#del_etrerjh").attr("data-delete") !== src){
	$("#del_etrerjh").attr("data-delete",src);
	}else {}
});
},500);

$(".blog_77 #targetLayer8 img").mouseenter(function(){
	$("#edit_post_ico").fadeIn(100);
	$(this).css('filter','blur(10px)');
});
$(".blog_77 #targetLayer8 img").mouseleave(function(){
	$("#edit_post_ico").fadeOut(0);
	$(this).css('filter','blur(0px)');
});
$("#edit_post_ico svg").mouseenter(function(){
	$("#edit_post_ico").fadeIn(0);
	$(".blog_77 #targetLayer8 img").css('filter','blur(10px)');
});
$("#edit_post_ico svg").mouseleave(function(){
	$("#edit_post_ico").fadeOut(0);
	$(".blog_77 #targetLayer8 img").css('filter','blur(0px)');
});

});

//Read the image
picReader.readAsDataURL(file);
}
});
});  
$(document).ready(function() {
	 $('#uploadForm').submit(function(e) {
		if($('#userImage').val()) {
			e.preventDefault();
			
			$(this).ajaxSubmit({
				target:   '.hidden_654', 
				beforeSubmit: function() {
				  $(".progress-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){
					$(".progress-bar").width(percentComplete + '%');
				},
				success:function (){
	            $(".progress").fadeOut(function(){
					$(".progress-bar").width('0%');
				});
				var input = $(".hidden_654").html();
				$(".hidinfop_ert90").append(input);
				$(".hidden_654").empty();
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
});

$(document).ready(function(){
$("#slider8 ul,#edit_post_ico svg").mouseenter(function(){
	$("#edit_post_ico").fadeIn(100);
	$("#slider8 img").css('filter','blur(10px)');
});
$("#slider8 ul,#edit_post_ico svg").mouseleave(function(){
	$("#edit_post_ico").fadeOut(0);
	$("#slider8 img").css('filter','blur(0px)');
});
});
$("#del_etrerjh").click(function(){
	alertText("عفوا - ميزة التعديل علي الصور" + "<br /> غير متوفرة في الاصدار التجريبي",false);
});
$("#add-img").click(function(){
	$("#userImage").click();
});
$("#userImage").change(function(){
	$("#uploadForm").submit();
	$(".progress").fadeIn(function(){
		$(".targetLayer8").slideDown();
	});
});
</script>


</div>
</div>