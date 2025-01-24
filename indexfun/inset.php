<?php
if($headerinset == "true"){
?>
<!DOCTYPE html>
<html>
<head>
<title>سينيلز - الصفحة الرئيسية</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="style/index-style.css" />
<link rel="stylesheet" type="text/css" href="style/posts-style.css" />
<link rel="stylesheet" type="text/css" href="style/fonts/href-font.css" />
<link rel="stylesheet" type="text/css" href="style/fonts/fonts/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="style/fonts/fonts/font-awesome.min.css" />
<link rel="shortcut icon" href="../img/favicon.ico" />
<script src="js/jquery.js"></script>
<script src="js/profile/account-menu.js"></script>
<script src="../js/ajaxfileup.js"></script>
<script src="../js/jquery.filedrop.js"></script>
<link rel="stylesheet" type="text/css" href="style/home-style.css" />
<link rel="stylesheet" type="text/css" href="style/emoicons-style.css" />
<!--
/////////////////////////////
//                         //
//  This Web by :          //
//  Abdelhamed Mohamed     //
//                         //
//  Powered By :           //
//  CE Technology          //
//                         //
/////////////////////////////
-->

<script>
function updateon(){
	$.post("ajax-php/online-check.php",{online: "submit"});
	setTimeout(updateon,30000);
}
updateon();
console.log = function() {}
</script>
</head>
<body>
<?php

include "body-html/menu-top.php";


?>

<style>

.progress-div {
    width: 550px;
    height: 20px;
    background: #eee;
    overflow: hidden;
    border-radius: 100px;
    margin-left: 50px;
}

.progress-bar {
    background: #404040;
    height: 100%;
    border-radius: 100px;
    transition: .3s;
}
.targetLayer8 {
	display: none;
}
.progress {
    margin-bottom: 50px!important;
	display: none;
}

</style>


<?php

$rtiyiyiyi = mysql_query("SELECT * FROM online WHERE user_id='$id' AND session='online' LIMIT 1");
while($fetiyiy = mysql_fetch_array($rtiyiyiyi)){
	$sesid = $fetiyiy['id'];
}
$dateonline =  date("Y-m-d H:i:s");
if(empty($sesid)){
	mysql_query("INSERT INTO online(user_id,session,state,time_start) VALUE('$id','online','true','$dateonline')");
} else {
	mysql_query("UPDATE online SET time_start='$dateonline',state='true' WHERE user_id='$id' AND session='online'");
}

?>
<?php

include "body-html/right-main.php";
include "body-html/left-main.php";

?>
<div class="centerindex_main">
<div class="center_left_main">
<div class="inset_center_main">
<div class="top_square_1954">
<div class="emotion_date">
<div class="emotion_data_main">
<div class="emotion_menu">
<div class="inliner_ertooi_emotio">
<div class="data_main_87548">
<div class="divselect_emotion erto1"><img src="../img/imotions/main/v1/1f600" class="emotion_select_click" /></div>
<div class="divselect_emotion erto2"><img src="../img/imotions/main/v1/1f436" class="emotion_select_click" /></div>
<div class="divselect_emotion erto3"><img src="../img/imotions/main/v1/1f34f" class="emotion_select_click" /></div>
<div class="divselect_emotion erto4"><img src="../img/imotions/main/v1/26bd" class="emotion_select_click" /></div>
<div class="divselect_emotion erto5"><img src="../img/imotions/main/v1/1f698" class="emotion_select_click" /></div>
<div class="divselect_emotion erto6"><img src="../img/imotions/main/v1/23f0" class="emotion_select_click" /></div>
<div class="divselect_emotion erto7"><img src="../img/imotions/main/v1/2764" class="emotion_select_click" /></div>
<div class="divselect_emotion erto8"><img src="../img/imotions/main/v1/1f1e6-1f1ea" class="emotion_select_click" /></div>
</div>
<div class="more_emotion_div">
<svg xmlns="http://www.w3.org/2000/svg" id="more_emotion_svg" viewBox="0 0 24 24">
    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
</div>
</div>
<?php include "ajax-php/emoticons-data.php"; ?>
</div>
</div>
<div class="first_idea_lol">
<div class="max_top_1954">
<div class="max_right_1954">
<?php
$monthlyfollow = date("Y-m");
$selcofol = mysql_query("SELECT COUNT(id) FROM follow WHERE LEFT(follow_date,7) = '$monthlyfollow' AND following='$id' AND follow_active='true'");
$countfol = mysql_result($selcofol,0);
?>
<p>لديك هذا الشهر</p>
<span>(<a><?php echo $countfol; ?></a>) متابعين جدد</span>
<?php
if($countfol == "0"){
?>
<svg viewBox="0 0 24 24" style="fill: #e74c3c;" xmlns="http://www.w3.org/2000/svg">
    <path d="M16 18l2.29-2.29-4.88-4.88-4 4L2 7.41 3.41 6l6 6 4-4 6.3 6.29L22 12v6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<?php
}else {
?>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<?php
}
?>
</div>
<div class="max_left_1954">
<p>معدل التفاعل في</p>
<span>(<a>-2%</a>) هذا الاسبوع</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M16 18l2.29-2.29-4.88-4.88-4 4L2 7.41 3.41 6l6 6 4-4 6.3 6.29L22 12v6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
</div>
<div class="max_bottom_1954">
<div class="rroror_1954">
<span>: التقييم النهائي لحسابك هو</span>
<p>اجعل محتواك هادف وبناء وراقي</p>
<p class="b_1954">لتجذب المزيد من المتابعين</p>
</div>
<div class="max_leftbotom_1954">
<div class="taquemat_count55">
<div class="insset_this55">4.6</div>
<div class="holagoyn1"></div>
<div class="holagoyn2"></div>
<div class="holagoyn3"></div>
</div>
</div>
</div>
</div>
</div>

<div class="bottom_square_1954">
<div class="top_main_3237">
<span>قم بانشاء حساب علي رانج لتتواصل</span>
<span class="secoriop_45">مع من تريد عبر محادثات نصية</span>
<span class="secoriop_46">ومكالمات مجانية بلاحدود</span>
<img src="../img/logo/2.png" class="dewscrip_3237" />
</div>
<div class="right_main_3237">
<div class="tadwinat_week_count">
<?php
$seltdall = mysql_query("SELECT COUNT(id) FROM posts WHERE user_id='$id' AND type='ori'");
$countdal = mysql_result($seltdall,0);
?>
<span>عدد التدوينات في</span>
<span class="bottom_0001">(<a><?php echo $countdal; ?></a>) جميع الاوقات</span>
</div>
</div>
<div class="left_main_3237">
<div class="tadwinat_all_count">
<?php
$tdwinleftdate = date("Y-m-d");
$seltdooi = mysql_query("SELECT COUNT(id) FROM posts WHERE LEFT(post_date,10) = '$tdwinleftdate' AND user_id='$id' AND type='ori'");
$countdwi = mysql_result($seltdooi,0);
?>
<span>عدد التدوينات في</span>
<span class="bottom_0001">(<a><?php echo $countdwi; ?></a>) هذا اليوم</span>
</div>
</div>
</div>
<div class="hashtags_centerleft">
<div class="top_description_hashtags">
<span>اعلي الهاشتاجات هذا اليوم</span>
</div>
<div class="main_hashtags_body">
<?php
$hashrightdate = date("Y-m-d");
$queryhash = mysql_query("SELECT * FROM hashtags WHERE LEFT(date,10) = '$hashrightdate' AND type='antily' AND post_type!='none' ORDER BY post_type DESC LIMIT 5");
while($fethash = mysql_fetch_array($queryhash)){
?>
<a href="../hashtags/?q=<?php echo $fethash['name']; ?>"><p><?php echo $fethash['post_type']; ?></p> #<?php echo $fethash['name']; ?></a>
<?php
}
?>
</div>
</div>
</div>
<div class="footer_main_inset">
<div class="top_footer_main">
<div class="first_backage_5055">
<a href="#">مركز المساعدة</a>
<a href="#">سياسة الخصوصية</a>
</div>
<div class="secondbackage_5055">
<a href="#">اتفاقية الاستخدام</a>
<a href="#">المطورون</a>
<a href="#">عن الموقع</a>
</div>
</div>
<!--
<div class="language_select_footer">
<ul>
<li><a href="#"></a>العربية</li>
<li><a href="#"></a>English (US)</li>
<li><a href="#"></a>Français (France)</li>
<li><a href="#"></a>Español</li>
<li><a href="#"></a>Türkçe</li>
<li><a href="#"></a>فارسی‏</li>
<li class="mor_languageslsct"></li>
</ul>
</div>
-->
<div class="bottom_footer_5055">
<div class="text_main_all"><span>© 2017 | CENells . All Rights Reserved</span></div>
</div>
</div>

</div>
<div class="center_main">
<div class="container">
<?php
include "body-html/posts-field.php";
?>
<div class="ertineo_center">
<div class="menu_ajax_548">
<div class="people_maybe_know"><p>أشخاص قد تعرفهم</p></div>
<div class="se458_div">
<svg id="set458_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path>
</svg>
</div>
</div>
<div class="aslikeit_acc">

</div>
<div class="sadawsaq"></div>
<script>
$.post("ajax-php/account-like.php",{getacclike: "submit"},function(e){$(".aslikeit_acc").append(e);});
</script>
</div>
</div>
<?php

include "body-html/edit-tools.php";

?>
<div class="container">
<div class="insetposts_topdescrip">
<span>تدوينات المتابَعون</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M2 6H0v5h.01L0 20c0 1.1.9 2 2 2h18v-2H2V6zm20-2h-8l-2-2H6c-1.1 0-1.99.9-1.99 2L4 16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7 15l4.5-6 3.5 4.51 2.5-3.01L21 15H7z"></path>
</svg>
</div>
<div class="poats">
<div class="inset_poats"></div>
<div class="loading_poats">
<div class="ce-loaging-posts">
<div class="circle-posts"></div>
<div class="circle-small-posts"></div>
<div class="circle-big-posts"></div>
<div class="circle-inner-inner-posts"></div>
<div class="circle-inner-posts"></div>
</div>
</div>
</div>
</div>



<input type="hidden" id="postoffsetval" value="0"/>
<script>
$(document).ready(function(){
$.ajax({
	cache: false,
	type: "GET",
	url: "ajax-php/index-post.php",
    data: {
		'offset': 0,
		'limit': 4
	},
	success: function(data){
		$(".inset_poats").append(data);
		var thsval = $("#postoffsetval").val();
		var loop = 4;
		var val = +loop + +thsval;
		$("#postoffsetval").val(val);
		scrolldo();
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
function scrolldo(){
$(window).scroll(function(){
if($(window).scrollTop() + $(window).height() == $(document).height()) {
var offset = $("#postoffsetval").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "ajax-php/index-post.php",
    data: {
		'offset': offset,
		'limit': 4
	},
	success: function(data){
		$(".inset_poats").append(data);
		var scrol = $("#postoffsetval").val();
		var voop = 4;
		var gal = +voop + +scrol;
		$("#postoffsetval").val(gal);
		},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
});
}

});
/*
function gethash(){
	$.post("ajax-php/hashtags.php",{gethash: "submit"},function(e){$(".hashtags").append(e);});
}
gethash();*/
</script>

</div>
</div>
<div class="offset_bomvoia_emam">
<div class="saved_main_allofthat">
<div class="container">
<div class="top_descripto_1230">
<svg viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<span>جميع العناصر المحفوظة</span>
</div>
<div class="inset_saved_ofthat">
<div class="ce-loaging-1230">
<div class="text-loading-1230"><span>... جاري التحميل يرجي الانتظار</span></div>
<div class="circle-1230"></div>
<div class="circle-small-1230"></div>
<div class="circle-big-1230"></div>
<div class="circle-inner-inner-1230"></div>
<div class="circle-inner-1230"></div>
</div>
</div>
<button type="button" class="loadmorefollowing">تحميل المزيد</button>
</div>
</div>
<div class="follow_main_opert_1231">
<div class="container">
<div class="top_descripto_1231">
<input type="hidden" id="folowharyoffset" />
<div class="right_descript_1231">
<span>المتابِعون</span>
</div>
<div class="center_discriotp_1231">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M16.5 12c1.38 0 2.49-1.12 2.49-2.5S17.88 7 16.5 7C15.12 7 14 8.12 14 9.5s1.12 2.5 2.5 2.5zM9 11c1.66 0 2.99-1.34 2.99-3S10.66 5 9 5C7.34 5 6 6.34 6 8s1.34 3 3 3zm7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75zM9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.25c0-.85.33-2.34 2.37-3.47C10.5 13.1 9.66 13 9 13z"></path>
</svg>
<span>قوائم المتابعة</span>
</div>
<div class="left_descrip_1231">
<span>المتابَعون</span>
</div>
</div>
<div class="inset_follow_ofthat">
<div class="injax_follow_ofthat">
</div>
<div class="ce-loaging-1230">
<div class="text-loading-1230"><span>... جاري التحميل يرجي الانتظار</span></div>
<div class="circle-1230"></div>
<div class="circle-small-1230"></div>
<div class="circle-big-1230"></div>
<div class="circle-inner-inner-1230"></div>
<div class="circle-inner-1230"></div>
</div>
<button type="button" class="loadmorefollowing">تحميل المزيد</button>
<button type="hidden" style="display: none!important" class="clickjaxbtnfollow"></button>
</div>
</div>
</div>


<script>
$(".clickjaxbtnfollow").click(function(){
if($(this).attr("done") !== "done" && $(this).attr("data-get") == "follow"){
$.ajax({
	cache: false,
	type: "GET",
	url: "ajax-php/getfollowhary.php",
    data: {
		'getfollow': 'submit',
		'offset': 0,
		'limit': 8
	},
	success: function(data){
		$(".inset_follow_ofthat .ce-loaging-1230").fadeOut(100);
		setTimeout(function(){
		$(".injax_follow_ofthat").html(data);
		var thsval = $("#folowharyoffset").val();
		var loop = 8;
		var val = +loop + +thsval;
		$("#folowharyoffset").val(val);
		$(".loadmorefollowing,.injax_follow_ofthat").fadeIn(100);
		},100);
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
$(".loadmorefollowing").click(function(){
$(this).attr("disabled","disabled");
var offset = $("#folowharyoffset").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "ajax-php/getfollowhary.php",
    data: {
		'getfollow': 'submit',
		'offset': offset,
		'limit': 8
	},
	success: function(data){
		$(".ofset_haryfollow_1231").append(data);
		var scrol = $("#folowharyoffset").val();
		var voop = 8;
		var gal = +voop + +scrol;
		$("#folowharyoffset").val(gal);
		$(".loadmorefollowing").removeAttr("disabled");
		},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
});
$(this).attr("done","done");
}else {}

if($(this).attr("done") !== "done" && $(this).attr("data-get") == "following"){
$.ajax({
	cache: false,
	type: "GET",
	url: "ajax-php/getfollowinghary.php",
    data: {
		'getfollow': 'submit',
		'offset': 0,
		'limit': 8
	},
	success: function(data){
		$(".inset_follow_ofthat .ce-loaging-1230").fadeOut(100);
		setTimeout(function(){
		$(".injax_follow_ofthat").html(data);
		var thsval = $("#folowharyoffset").val();
		var loop = 8;
		var val = +loop + +thsval;
		$("#folowharyoffset").val(val);
		$(".loadmorefollowing,.injax_follow_ofthat").fadeIn(100);
		},100);
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
$(".loadmorefollowing").click(function(){
$(this).attr("disabled","disabled");
var offset = $("#folowharyoffset").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "ajax-php/getfollowinghary.php",
    data: {
		'getfollow': 'submit',
		'offset': offset,
		'limit': 8
	},
	success: function(data){
		$(".ofset_haryfollowing_1231").append(data);
		var scrol = $("#folowharyoffset").val();
		var voop = 8;
		var gal = +voop + +scrol;
		$("#folowharyoffset").val(gal);
		$(".loadmorefollowing").removeAttr("disabled");
		},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
});
$(this).attr("done","done");
}else {}


});
$(".saved_selectli").click(function(){
	$(".center_main,.follow_main_opert_1231").fadeOut(100);
	setTimeout(function(){
		$(".saved_main_allofthat").fadeIn(100,function(){
			if($(".mini_save_file").length == 0){
			$.get("ajax-php/getsavedfile.php",{getsaved: "submit"},function(e){$(".inset_saved_ofthat").html(e)});
			}else {}
		});
	},100);
});
$(".follow_slectedli").click(function(){
if($(".clickjaxbtnfollow").attr("data-page") !== 'true'){
	$(".center_main,.saved_main_allofthat").fadeOut(100);
	setTimeout(function(){
		$(".follow_main_opert_1231").fadeIn(100,function(){
		$(".clickjaxbtnfollow").attr('data-page','true');
		$(".clickjaxbtnfollow").attr('data-get','follow');
		$(".loadmorefollowing").fadeOut(0);
		$(".clickjaxbtnfollow").click();
		});
	},100);
}else {}
});
$(".left_descrip_1231").click(function(){
    $(".clickjaxbtnfollow").attr('done','false');
	$(".clickjaxbtnfollow").attr('data-get','follow');
	$(".loadmorefollowing,.injax_follow_ofthat").fadeOut(100);
	$(".ce-loaging-1230").fadeIn(100);
	$(".clickjaxbtnfollow").click();
});
$(".right_descript_1231").click(function(){
    $(".clickjaxbtnfollow").attr('done','false');
    $(".clickjaxbtnfollow").attr('data-get','following');
	$(".loadmorefollowing,.injax_follow_ofthat").fadeOut(100);
	$(".ce-loaging-1230").fadeIn(100);
	$(".clickjaxbtnfollow").click();
});
$(".news_selcetli").click(function(){
	$(".saved_main_allofthat,.follow_main_opert_1231").fadeOut(100);
	setTimeout(function(){
		$(".center_main").fadeIn(100);
	},100);
});
</script>



<script>
/*

$(window).scroll(function() {
    $('.myVid').each(function() {
        if(isInView(this)) {
            this.play();
        } else {
            this.pause();
        }
    });
});

function isInView(el) {
    windowTop = $(window).scrollTop();
    windowButtom = windowTop + $(window).height();
    elTop = $(el).offset().top;
    elButtom = elTop + $(el).height();

    return (elTop >= windowTop && elButtom <= windowButtom);
}

*/

$(document).ready(function(){
function checkPersian( firstChar ) {
    if( typeof this.characters == 'undefined' )
        this.characters = ['ث','ا', 'ب', 'پ', 'ت', 'أ', 'ج', 'چ', 'ح', 'خ', 'ج','د','ذ', 'ر', 'ز', 'ژ', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ك', 'گ', 'ل', 'م', 'ن', 'و', 'ه', 'ي'];
    return this.characters.indexOf( firstChar ) != -1;
}
function checkInput(){
	var x = checkPersian( jQuery( this ).val().substr( 0, 1 ) ) ? 'rtl' : 'ltr';
	var y = checkPersian( jQuery( this ).val().substr( 0, 1 ) ) ? 'right' : 'left';
    $(this).css('direction',x);
    $(this).css('text-align',y);

if($("#serch_online_input").val() == ""){
	$(this).css({'text-align': 'right','direction': 'rtl'});
}
}
$("#serch_online_input,#search-in").change(checkInput);
$("#serch_online_input,#search-in").keydown(checkInput);
$("#serch_online_input,#search-in").keyup(checkInput);

function checkInputy(){
	var x = checkPersian( jQuery( this ).val().substr( 0, 1 ) ) ? 'rtl' : 'ltr';
	var y = checkPersian( jQuery( this ).val().substr( 0, 1 ) ) ? 'right' : 'left';
    $(this).css('direction',x);
    $(this).css('text-align',y);

if($("#search-in").val() == ""){
	$(this).css({'text-align': 'left','direction': 'ltr'});
}

}



$("#search-in").change(checkInputy);
$("#search-in").keydown(checkInputy);
$("#search-in").keyup(checkInputy);

});


</script>
<?php
include "body-html/ajax-php.php";
?>
<div class="scripts"></div>

</body>
</html>

<?php
}else {
	Header("Location:../");
}
?>