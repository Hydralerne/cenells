<?php
ob_start();
session_start();
mysql_connect('127.0.0.1','root','asdwqe123') or die(mysql_error());
mysql_select_db('cemail') or die(mysql_error());

function profile_connected(){
	
	$data = array();
	$cerange = $_SESSION['cerange'];
	$query = mysql_query("SELECT * FROM cerange WHERE r_user='$cerange'");
	
	
	
	while($rows = mysql_fetch_assoc($query)){
		$data[] = $rows;
	}
	return $data;
	
	
}
$data = profile_connected();

foreach($data as $info){

}

date_default_timezone_set('Africa/Cairo');

$timedate = date("Y-m-d H:i:s");

$id = $info['id'];

date_default_timezone_set('Africa/Cairo');

// months 
if(date("m") == "01"){
	$month = "يناير";
}else if(date("m") == "02"){
	$month = "فيراير";
}else if(date("m") == "03"){
	$month = "مارس";
}else if(date("m") == "04"){
	$month = "ابريل";
}else if(date("m") == "05"){
	$month = "مايو";
}else if(date("m") == "06"){
	$month = "يوليو";
}else if(date("m") == "07"){
	$month = "July";
}else if(date("m") == "08"){
	$month = "أغسطس";
}else if(date("m") == "09"){
	$month = "سبتمبر";
}else if(date("m") == "10"){
	$month = "اكتوبر";
}else if(date("m") == "11"){
	$month = "نوفمبر";
}else if(date("m") == "12"){
	$month = "ديسمبر";
}


// days


if(date("d") == "01"){
	$day = "1";
}else if(date("d") == "02"){
	$day = "2";
}else if(date("d") == "03"){
	$day = "3";
}else if(date("d") == "04"){
	$day = "4";
}else if(date("d") == "05"){
	$day = "5";
}else if(date("d") == "06"){
	$day = "6";
}else if(date("d") == "07"){
	$day = "7";
}else if(date("d") == "08"){
	$day = "8";
}else if(date("d") == "09"){
	$day = "9";
}else if(date("d") == "10"){
	$day = "10";
}else if(date("d") == "11"){
	$day = "11";
}else if(date("d") == "12"){
	$day = "12";
}else if(date("d") == "13"){
	$day = "13";
}else if(date("d") == "14"){
	$day = "14";
}else if(date("d") == "15"){
	$day = "15";
}else if(date("d") == "15"){
	$day = "15";
}else if(date("d") == "16"){
	$day = "16";
}else if(date("d") == "17"){
	$day = "17";
}else if(date("d") == "18"){
	$day = "18";
}else if(date("d") == "19"){
	$day = "19";
}else if(date("d") == "20"){
	$day = "20";
}else if(date("d") == "21"){
	$day = "21";
}else if(date("d") == "22"){
	$day = "22";
}else if(date("d") == "23"){
	$day = "23";
}else if(date("d") == "24"){
	$day = "24";
}else if(date("d") == "25"){
	$day = "25";
}else if(date("d") == "26"){
	$day = "26";
}else if(date("d") == "27"){
	$day = "27";
}else if(date("d") == "28"){
	$day = "28";
}else if(date("d") == "29"){
	$day = "29";
}else if(date("d") == "30"){
	$day = "30";
}else if(date("d") == "31"){
	$day = "31";
}

// years

$year = date("Y");

// time  

$hour = date("h");
$min = date("i");
$soc = date("sa");
$ampm = h >= 12 ? 'PM' : 'AM';

// days name
if(date("l") == "Saturday"){
	$dayl = "السبت";
}else if(date("l") == "Sunday"){
	$dayl = "الاحد";	
}else if(date("l") == "Monday"){
	$dayl = "الاثنين";	
}else if(date("l") == "Tuesday"){
	$dayl = "الثلاثاء";
}else if(date("l") == "Wednesday"){
	$dayl = "الاربعاء";	
}else if(date("l") == "Thursday"){
	$dayl = "الخميس";
}else if(date("l") == "Friday"){
	$dayl = "الجمعة";	
}

$queryuser = mysql_query("SELECT * FROM cerange WHERE id='$user' LIMIT 1");
while($envo = mysql_fetch_assoc($queryuser)){
	$envo_name = $envo['name'];
	$envo_number = $envo['number'];
	$envo_user = $envo['r_user'];
	$envo_first = $envo['first_name'];
	$envo_last = $envo['last_name'];
	$envo_img = $envo['pro_img'];
	$envo_check = $envo['check'];
	$envo_cemail = $envo['cemail_id'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="../../style/home-chat.css" />
<link rel="stylesheet" type="text/css" href="../../style/fonts/href-font.css" />
<link rel="stylesheet" type="text/css" href="../../style/fonts/chat-fonts.css" />
<link rel="stylesheet" type="text/css" href="../../style/fonts/fonts/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="../../style/fonts/fonts/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="../../style/chat-style.css" />
<link rel="stylesheet" type="text/css" href="../../style/emoicons-style.css" />
<link rel="shortcut icon" href="../3.png" />
<script src="../../js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="../../style/profile-style.css" />
<script src="../../js/profile/account-menu.js"></script>
<script src="../../js/ajaxfileup.js"></script>

<style>

</style>
</head>
<body>

<div class="header">
<div class="container">
<a href="../">
<img draggable="false" src="../../img/1.png" id="logorange">
</a>
</div>
</div>
<?php
include "../menu-top.php";
?>
<div class="container">
<div class="chat">
<div class="messages-all">
<div class="kafat_message">
<p>كافة الرسائل</p>
</div>
</div>
<script>
$(document).ready(function(){
$.get("selc.php",{geterto: "submit"},function(e){$(".messages-all").append(e);});
});
</script>
<div class="top_menu_main_chat"></div>
<div class="topchat-shadow"></div>
<div class="show-chat">
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
<div class="show-chat-back"></div>
<div class="bottomchat-shadow"></div>
<div class="chat-room">
<div class="all-chat-icons">

<div class="first-package-ssm">
<svg viewBox="0 0 24 24" id="chat-settings-svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"/>
</svg>
<svg viewBox="0 0 24 24" id="coor-chat-svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<svg viewBox="0 0 24 24" id="text-format-svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M5 17v2h14v-2H5zm4.5-4.2h5l.9 2.2h2.1L12.75 4h-1.5L6.5 15h2.1l.9-2.2zM12 5.98L13.87 11h-3.74L12 5.98z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<svg id="animation-chat-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"></path>
</svg>
</div>
<div class="seco-package-ssm">
<svg viewBox="0 0 24 24" id="audio-call-svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
</svg>
<svg viewBox="0 0 24 24" id="vid-camsvg-chat" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z"/>
</svg>

<svg  viewBox="0 0 24 24" id="add-chat-img" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM14 13v4h-4v-4H7l5-5 5 5h-3z"/>
</svg>


<svg viewBox="0 0 24 24" id="add-style-chat" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.53 19.65l1.34.56v-9.03l-2.43 5.86c-.41 1.02.08 2.19 1.09 2.61zm19.5-3.7L17.07 3.98c-.31-.75-1.04-1.21-1.81-1.23-.26 0-.53.04-.79.15L7.1 5.95c-.75.31-1.21 1.03-1.23 1.8-.01.27.04.54.15.8l4.96 11.97c.31.76 1.05 1.22 1.83 1.23.26 0 .52-.05.77-.15l7.36-3.05c1.02-.42 1.51-1.59 1.09-2.6zM7.88 8.75c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-2 11c0 1.1.9 2 2 2h1.45l-3.45-8.34v6.34z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>

</div>

</div>

<div class="all-colors-div">

<div class="colors">
<div class="colorok">
<button type="button" id="subcolor">تطبيق اللون</button>
<div class="close-color">
<i class="fa fa-times" aria-hidden="true"></i>
</div>
<input type="hidden" id="hidcolorcode" />
</div>
<div class="colors-packages">
<div class="strrange-color-package">
<button id="color1" class="cngmescolor" value="rgb(243, 83, 105)"></button>
<button id="color2" class="cngmescolor" value="#8e44ad"></button>
<button id="color3" class="cngmescolor" value="#1abc9c"></button>
<button id="color4" class="cngmescolor" value="#ff5ca1"></button>
<button id="color5" class="cngmescolor" value="#d696bb"></button>
<button id="color6" class="cngmescolor" value="#f39c12"></button>
</div>
<div class="first-color-package">
<button id="pink" class="cngmescolor" value="#e43da1"></button>
<button id="lightblue" class="cngmescolor" value="#00a1bb"></button>
<button id="orange" class="cngmescolor" value="#dc7921"></button>
<button id="lightgreen" class="cngmescolor" value="rgb(66, 183, 42)"></button>
<button id="lightbrown" class="cngmescolor" value="#af9e79"></button>
<button id="lightblack" class="cngmescolor" value="#34495e"></button>
</div>
<div class="sec-color-package">
<button id="red" class="cngmescolor" value="#c0392b"></button>
<button id="blue" class="cngmescolor" value="#125ccc"></button>
<button id="yellow" class="cngmescolor" value="#afa900"></button>
<button id="green" class="cngmescolor" value="#158800"></button>
<button id="brown" class="cngmescolor" value="#6e4e37"></button>
<button id="black" class="cngmescolor" value="#404040"></button>
</div>
</div>
</div>

</div>

<div class="all-fonts-div scale">
<div class="sub_font_format">
<div class="close-fontf">
<i class="fa fa-times" aria-hidden="true"></i>
</div>
<button type="button" id="subfontalls">تطبيق</button>
<input type="hidden" id="font_size_attr" />
<input type="hidden" id="hideattrid" />
<input type="hidden" id="hidenvalbold" />
<input type="hidden" id="font_height_attr" />
<input type="hidden" id="hidenvalunder" />
</div>




<div class="format-box">
<svg viewBox="0 0 24 24" id="font-size" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M9 4v3h5v12h3V7h5V4H9zm-6 8h3v7h3v-7h3V9H3v3z"></path>
</svg>
<svg viewBox="0 0 24 24" id="font-bold" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.6 10.79c.97-.67 1.65-1.77 1.65-2.79 0-2.26-1.75-4-4-4H7v14h7.04c2.09 0 3.71-1.7 3.71-3.79 0-1.52-.86-2.82-2.15-3.42zM10 6.5h3c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-3v-3zm3.5 9H10v-3h3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<svg viewBox="0 0 24 24" id="font-height" xmlns="http://www.w3.org/2000/svg">
    <path d="M6 7h2.5L5 3.5 1.5 7H4v10H1.5L5 20.5 8.5 17H6V7zm4-2v2h12V5H10zm0 14h12v-2H10v2zm0-6h12v-2H10v2z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<svg baseProfile="tiny" viewBox="0 0 24 24" id="font-type" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0V0z" fill="none"></path>
    <path d="M9.93 13.5h4.14L12 7.98zM20 2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-4.05 16.5l-1.14-3H9.17l-1.12 3H5.96l5.11-13h1.86l5.11 13h-2.09z"></path>
</svg>
<svg viewBox="0 0 24 24" id="font-under" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 17c3.31 0 6-2.69 6-6V3h-2.5v8c0 1.93-1.57 3.5-3.5 3.5S8.5 12.93 8.5 11V3H6v8c0 3.31 2.69 6 6 6zm-7 2v2h14v-2H5z"></path>
</svg>
<svg viewBox="0 0 24 24" id="font-shape" xmlns="http://www.w3.org/2000/svg">
    <path d="M23 7V1h-6v2H7V1H1v6h2v10H1v6h6v-2h10v2h6v-6h-2V7h2zM3 3h2v2H3V3zm2 18H3v-2h2v2zm12-2H7v-2H5V7h2V5h10v2h2v10h-2v2zm4 2h-2v-2h2v2zM19 5V3h2v2h-2zm-5.27 9h-3.49l-.73 2H7.89l3.4-9h1.4l3.41 9h-1.63l-.74-2zm-3.04-1.26h2.61L12 8.91l-1.31 3.83z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>

</div>

<div class="text-sized scale">
<span>اختر حجم الخط</span>
<input type="number" id="font-sizein" value="15" min="15" max="35" />
<button type="button" id="subfontsiz">حفظ</button>
</div>

<div class="text-height scale">
<span>اختر حجم الخط</span>
<input type="number" id="font-heightin" value="30" min="30" max="50" />
<button type="button" id="subfonthie">حفظ</button>
</div>

<div class="text-bolder scale">
<span>الخط الثقيل</span>
<input type="checkbox" id="font-bolder" />
<button type="button" id="subfontbold">حفظ</button>
</div>

<div class="text-under scale">
<span>الخط السفلي</span>
<input type="checkbox" id="font-underin" />
<button type="button" id="subfontunder">حفظ</button>
</div>

<div class="text-family scale">
<span>اختر نوع الخط</span>
<div class="clickthizaa">
<li id="edmknsa">حدد نوع الخط</li>
<svg viewBox="0 0 24 24" id="select-icon-80" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0V0z" fill="none"></path>
    <path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"></path>
</svg>
</div>
<div class="font_select_maih">
<ul>
<li id="f1">مثال تجريبي</li>
<li id="f2">مثال تجريبي</li>
<li id="f3">مثال تجريبي</li>
<li id="f4">مثال تجريبي</li>
<li id="f5">مثال تجريبي</li>
<li id="f6">مثال تجريبي</li>
<li id="f7">مثال تجريبي</li>
<li id="f8">مثال تجريبي</li>
<li id="f9">مثال تجريبي</li>
<li id="f10">مثال تجريبي</li>
<li id="f11">مثال تجريبي</li>
<li id="f12">مثال تجريبي</li>
<li id="f13">مثال تجريبي</li>
<li id="f14">مثال تجريبي</li>
<li id="f15">مثال تجريبي</li>
<li id="f16">مثال تجريبي</li>
<li id="f17">مثال تجريبي</li>
</ul>
</div>

<button type="button" id="subfontfam">حفظ</button>
</div>
<script>
$(document).ready(function(){
	
$("#subfontalls").click(function(){
$(this).attr("disabled","disabled");
	setTimeout(function(){
	var fontsize = $("#font_size_attr").val();
	var liheight = $("#font_height_attr").val();
	var fontfaml = $("#hideattrid").val();
	var fontbold = $("#hidenvalbold").val();
	var fontunde = $("#hidenvalunder").val();
	$.post("send.php",{subfontalls: "submit",fontsize: fontsize,liheight: liheight,fontfaml: fontfaml,fontbold: fontbold,fontunde: fontunde},function(e){$(".scripts").append(e);});
	},500);
});
$(".clickthizaa").click(function(){
	$(".font_select_maih").toggleClass("activefore");
});
$(".font_select_maih ul li").click(function(){
	$(".clickthizaa li").remove();
	$(".font_select_maih").removeClass("activefore");
	$(this).clone().appendTo(".clickthizaa");
	var id = $(this).attr("id");
	$("#hideattrid").val(id);
	$(".text_main_85 h3").each(function(){
		$(this).removeAttr("id");
		$(this).removeAttr("style");
		var id = $("#hideattrid").val();
		$(this).attr("id",id);
		var minfill = $(this).css("font-size");
		var min = minfill.substring(0,2);
		$("#font-sizein").attr("min",min);
		$("#font-sizein").val(min);
		var ertoi = $(this).css("line-height");
		var mini = ertoi.substring(0,2);
		$("#font-heightin").attr("min",mini);
		$("#font-heightin").val(mini);
	});
});
	$("#font-sizein").change(function(){
		var s = $(this).val() + "px";
		$(".text_main_85 h3").css('font-size',s);
		var fs = $(this).val();
        $("#font_size_attr").val(fs);
	});
	$("#font-heightin").change(function(){
		var h = $(this).val() + "px";
		$(".text_main_85 h3").css('line-height',h);
		var fh = $(this).val();
        $("#font_height_attr").val(fh);
	});
});
	$("#font-bolder").click(function(){
		var asre = document.getElementById('font-bolder');
		if(asre.checked) {
        $(".text_main_85 h3").css('font-weight','bold');
		$("#hidenvalbold").val("true");
		}else{
        $(".text_main_85 h3").css('font-weight','normal');
		$("#hidenvalbold").val("false");
		}
	});
	$("#font-underin").click(function(){
		var asre = document.getElementById('font-underin');
		if(asre.checked) {
        $(".text_main_85 h3").css('text-decoration','underline');
		$("#hidenvalunder").val("true");
		}else{
        $(".text_main_85 h3").css('text-decoration','none');
		$("#hidenvalunder").val("false");
		}
	});
	
$(".close-fontf").click(function(){
	$(".all-fonts-div").css({'transform': 'scale(0)'});
	setTimeout(function(){$(".all-fonts-div").css('display','none');
	$(".all-chat-icons").fadeIn(0);
	$(".all-chat-icons").css({'transform': 'scale(1)'});},500);
	$(".close-fontf").fadeOut(500);
});
</script>

<div class="all-chatdiv-style">

<div class="wallpaper-set scale">




<div class="buttons scale">

<div class="upload_photo_chat">
<button type="button" id="show-upwallch">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
<span>اختر الصورة</span>
</button>

<input type="file" id="hidfileall" style="display: none!important" />



</div>

<div class="get_photo_chat">

<span class="or">أو</span>
<button type="button" id="show-getwebch">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<span>استرد من موقع ويب</span>
</button>

<script>
$(document).ready(function(){
	$("#show-getwebch").click(function(){
		$(".buttons").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".buttons").css('display','none');
		$(".hideinget").fadeIn(0);
		$(".hideinget").css({'transform': 'scale(1)'});
		},500);
	});
});
$(document).ready(function(){
	$(".close-12121").click(function(){
		$(".wallpaper-set,.hideinget").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".wallpaper-set,.hideinget").css('display','none');
		$(".all-chat-icons").fadeIn(0);
		$(".all-chat-icons").css({'transform': 'scale(1)'});
		},500);
	});
});
$(document).ready(function(){
	$(".close-img").click(function(){
		$(".wallpaper-set,.filters-divs,.full-options-icon,.close-img,#suballfil").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".wallpaper-set,.filters-divs,.full-options-icon,.close-img,#suballfil").css('display','none');
		$(".all-chat-icons").fadeIn(0);
		$(".all-chat-icons").css({'transform': 'scale(1)'});
		},500);
	});
});
</script>

</div>
</div>

<div class="hideinget scale">
<div class="close-12121">
<i class="fa fa-times" aria-hidden="true"></i>
</div>
<span>قم بادخال رابط الصورة</span>
<input autocomplete="off" type="text" id="getfilein" name="getfilein" />
<input type="submit" name="subgetin" value="استيراد" id="subgetin" />
</div>


<div class="progerss_chat_main">
<img src="../../img/Loading.gif" id="load_chat_images" />




<div class="upload-comfilediv6">
<input type="hidden" id="hiddenbackimg" />
<form id="uploadForm" action="../chat-upload.php" method="post">
<input style="display: none!important;" name="userImage" id="userImage" type="file" class="demoInputBox" />
<input style="display: none!important;" type="submit" id="btnSubmit" value="Submit" class="btnSubmit" />
<div class="progress5">
<div class="progress-div5"><div class="progress-bar5"></div></div>
<div class="progress-value5"></div>
</div>
<div class="upload-shytoh5">
<div class="targetLayer5" id="targetLayer5">

</div>
<div class="edit_row_6455"></div>
</div>
</form>
</div>


<script>
 
$(document).ready(function() {
	 $('#uploadForm').submit(function(e) {
		if($('#userImage').val()) {
			e.preventDefault();
			
			$(this).ajaxSubmit({
				target:   '.show-chat-back', 
				beforeSubmit: function() {
				  $(".progress-bar5").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){
					$(".progress-bar5").width(percentComplete + '%');
				},
				success:function (){
	            $("#load_chat_images").fadeOut(100);
		        $(".progress5").fadeOut(100,function(){
				$(".progress-bar5").width('0%');
				$(".wall-rrsback").removeClass("scale");
				$(".full-options-icon,.close-img,#suballfil").fadeIn(0);
				$(".full-options-icon,.close-img,#suballfil").css({'transform': 'scale(1)'});					
				});	

				},
				resetForm: true 
			}); 
			return false; 
		}
	});
}); 

</script>

<script>
 $(document).ready(function(){
	$("#userImage").change(function(){
		$("#uploadForm").submit();
		$(".buttons").fadeOut(100);
		$("#load_chat_images").fadeIn(100);
		$(".progress5").fadeIn(100);
	});
});
$(document).ready(function(){
	$("#show-upwallch").click(function(){
		$("#userImage").click();
	});
});
</script>


<script>
/*
        var filesInput = document.getElementById("userImage");
        
        filesInput.addEventListener("change", function(event){
            
            var files = event.target.files; //FileList object
            
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                
                //Only pics
                if(!file.type.match('image'))
                  continue;
                
                var picReader = new FileReader();
                
                 picReader.addEventListener("load",function(event){ 
                 var picFile = event.target;
                 $("#hiddenbackimg").val(picFile.result);
				 var style = $(".show-chat-back").attr("style");
				 });
                 //Read the image
                picReader.readAsDataURL(file);
            }                               
           
        });
*/  
</script>

</div>


<div class="hide-options-walg">



<div class="wall-rrsback scale">


<div class="full-options">


<div class="full-options-icon">

<svg viewBox="0 0 24 24" id="edit" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M17 15h2V7c0-1.1-.9-2-2-2H9v2h8v8zM7 17V1H5v4H1v2h4v10c0 1.1.9 2 2 2h10v4h2v-4h4v-2H7z"/>
</svg>
<svg viewBox="0 0 24 24" id="filters" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M18.7 12.4c-.28-.16-.57-.29-.86-.4.29-.11.58-.24.86-.4 1.92-1.11 2.99-3.12 3-5.19-1.79-1.03-4.07-1.11-6 0-.28.16-.54.35-.78.54.05-.31.08-.63.08-.95 0-2.22-1.21-4.15-3-5.19C10.21 1.85 9 3.78 9 6c0 .32.03.64.08.95-.24-.2-.5-.39-.78-.55-1.92-1.11-4.2-1.03-6 0 0 2.07 1.07 4.08 3 5.19.28.16.57.29.86.4-.29.11-.58.24-.86.4-1.92 1.11-2.99 3.12-3 5.19 1.79 1.03 4.07 1.11 6 0 .28-.16.54-.35.78-.54-.05.32-.08.64-.08.96 0 2.22 1.21 4.15 3 5.19 1.79-1.04 3-2.97 3-5.19 0-.32-.03-.64-.08-.95.24.2.5.38.78.54 1.92 1.11 4.2 1.03 6 0-.01-2.07-1.08-4.08-3-5.19zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"/>
</svg>
<svg viewBox="0 0 24 24" id="animation" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM8 17.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5zM9.5 8c0-1.38 1.12-2.5 2.5-2.5s2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5S9.5 9.38 9.5 8zm6.5 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
</svg>

</div>



<div class="filters-divs scale">
<div class="firs_filter_bacage">
<img src="../../img/icons/filter6.png" id="filter1" />
<img src="../../img/icons/filter5.png" id="filter2" />
<img src="../../img/icons/filter4.png" id="filter3" />
</div>
<div class="second_filter_backage">
<img src="../../img/icons/filter.png" id="filter6" />
<img src="../../img/icons/filter2.png" id="filter5" />
<img src="../../img/icons/filter3.png" id="filter4" />
</div>
</div>

<div class="upload_style">
<div class="close-img">
<i class="fa fa-times" aria-hidden="true"></i>
</div>
<input type="hidden" id="hideallfil" name="hideallfil" />
<button type="button" id="suballfil">تطبيق</button>
</div>

<script>
$(document).ready(function(){
	$("#suballfil").click(function(){
		$(this).attr("disabled","disabled");
		var fotyo = $("#hideallfil").val();
		var imgback = $("#sorry_input2").val();
		setTimeout(function(){
		$.post("send.php",{subertopmba: "submit",hideallfil: fotyo,imgback: imgback},function(e){$(".scripts").append(e);});
		},500);
	});
});
</script>

<div class="blur-filter scale d1">
<span class="filter-span">اختر القيمة</span>
<div class="allfilo">
<span class="filter-">-</span>
<span class="filter-plus">+</span>
<div id="filform">
<input type="hidden" id="hidinblur" name="hidinblur" />
<input type="range" value="0" class="filter-value" id="blur-value" min="0" max="30" />
<input type="submit" id="subfil" class="1" value="حفظ" />
</div>
</div>
</div>






<div class="brightness-filter scale d2">
<span class="filter-span">اختر القيمة</span>
<div class="allfilo">
<span class="filter-">-</span>
<span class="filter-plus">+</span>
<div id="filform">
<input type="range" value="100" class="filter-value" id="brightness-value" min="0" max="1000" />
<input type="submit" id="subfil" class="2" value="حفظ" />
</div>
</div>
</div>



<div class="saturate-filter scale d3">
<span class="filter-span">اختر القيمة</span>
<div class="allfilo">
<span class="filter-">-</span>
<span class="filter-plus">+</span>
<div id="filform">
<input type="range" value="100" class="filter-value" id="saturate-value" min="0" max="1000" />
<input type="submit" id="subfil" class="3" value="حفظ" />
</div>
</div>
</div>

<div class="sepia-filter scale d4">
<span class="filter-span">اختر القيمة</span>
<div class="allfilo">
<span class="filter-">-</span>
<span class="filter-plus">+</span>
<div id="filform">
<input type="range" value="0" class="filter-value" id="sepia-value" min="0" max="100" />
<input type="submit" id="subfil" class="4" value="حفظ"/>
</div>
</div>
</div>

<div class="invert-filter scale d5">
<span class="filter-span">اختر القيمة</span>
<div class="allfilo">
<span class="filter-">-</span>
<span class="filter-plus">+</span>
<div id="filform">
<input type="range" value="0" class="filter-value" id="invert-value" min="0" max="100" />
<input type="submit" id="subfil" class="5" value="حفظ" />
</div>
</div>
</div>

<div class="grayscale-filter scale d6">
<span class="filter-span">اختر القيمة</span>
<div class="allfilo">
<span class="filter-">-</span>
<span class="filter-plus">+</span>
<div id="filform">
<input type="range" value="0" class="filter-value" id="grayscale-value" min="0" max="100" />
<input type="submit" id="subfil" class="6" value="حفظ"/>
</div>
</div>
</div>

<input type="hidden" id="sorry_input" />
<input type="hidden" id="sorry_input2" />
<script>

$(document).ready(function(){
	function style(){
    var x = $("#ggback_ret").val();
	$("#sorry_input2").val(x);
	var s = $("#hideallfil").val();
	$("#sorry_input").val(s);
	var a = $("#sorry_input").val();
	$(".show-chat-back").attr("style",a);
	var all = "blur("  + $("#blur-value").val() + "px)" + 
	"brightness(" + $("#brightness-value").val() + "%)" + 
	"saturate(" + $("#saturate-value").val() + "%)" +
	"sepia(" + $("#sepia-value").val() + "%)" + 
	"invert(" + $("#invert-value").val() + "%)" + 
	"grayscale(" + $("#grayscale-value").val() + "%);";
    $("#hideallfil").val('-webkit-filter:' + all);
	setTimeout(style,100);
	}
	style();
});


$(document).ready(function(){
	$(".1,.2,.3,.4,.5,.6").click(function(){
		$(".d1,.d2,.d3,.d4,.d5,.d6").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".d1,.d2,.d3,.d4,.d5,.d6").css('display','none');
		$(".filters-divs").fadeIn(0);
		$(".filters-divs").css({'transform': 'scale(1)'});
		},500);
		
	});
});

</script>









</div>



</div>


<div class="getfromweb-chat scale">
<input type="text" autocomplete="off" id="getwallchatin" />
<button type="button" id="subwallfromw"></button>
</div>




</div>






</div>






</div>



<div class="file-chat-upload">

</div>




</div>
<div class="sendmes-room">
<div class="emotion_date">
<div class="emotion_data_main">
<div class="emotion_menu">
<div class="inliner_ertooi_emotio">
<div class="data_main_87548">
<div class="divselect_emotion erto1"><img src="../../img/imotions/main/v1/1f600" class="emotion_select_click" /></div>
<div class="divselect_emotion erto2"><img src="../../img/imotions/main/v1/1f436" class="emotion_select_click" /></div>
<div class="divselect_emotion erto3"><img src="../../img/imotions/main/v1/1f34f" class="emotion_select_click" /></div>
<div class="divselect_emotion erto4"><img src="../../img/imotions/main/v1/26bd" class="emotion_select_click" /></div>
<div class="divselect_emotion erto5"><img src="../../img/imotions/main/v1/1f698" class="emotion_select_click" /></div>
<div class="divselect_emotion erto6"><img src="../../img/imotions/main/v1/23f0" class="emotion_select_click" /></div>
<div class="divselect_emotion erto7"><img src="../../img/imotions/main/v1/2764" class="emotion_select_click" /></div>
<div class="divselect_emotion erto8"><img src="../../img/imotions/main/v1/1f1e6-1f1ea" class="emotion_select_click" /></div>
</div>
</div>
</div>
<div class="border_emotion_0000"></div>
<?php include "../../ajax-php/emoticons-data.php"; ?>
</div>
</div>

<div class="bottom-sender">
<div class="right-send">
<svg class="send_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<button type="hidden" class="sendmesbut" style="display: none!important"></button>
</div>
<div class="emotion_icons">
<svg class="emotion_click" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/>
</svg>
</div>
<div contenteditable="PLAINTEXT-ONLY" id="chat-div-type" class="chat-div-type" placeholder="أرسل رسالة"></div>
<div class="left-icons-type-000">
<svg class="microphone_recorder" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 14c1.66 0 2.99-1.34 2.99-3L15 5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3zm5.3-3c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
</div>
</div>
</div>
<div class="outfulen_main">
<div class="recored_audio_0000">
<div class="fullscreen" id="fullrecored_screen"></div>
<div class="main_body_lopop">
<div class="container">
<div class="whit_zindex">
<h3>تسجيل رسالة صوتية</h3>
<div class="align_54545" style="margin-left: -57.5px; margin-top: -137.5px;">
<button class="start_record" disabled="disabled"><svg class="nomicrophone_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0zm0 0h24v24H0z" fill="none"></path><path d="M19 11h-1.7c0 .74-.16 1.43-.43 2.05l1.23 1.23c.56-.98.9-2.09.9-3.28zm-4.02.17c0-.06.02-.11.02-.17V5c0-1.66-1.34-3-3-3S9 3.34 9 5v.18l5.98 5.99zM4.27 3L3 4.27l6.01 6.01V11c0 1.66 1.33 3 2.99 3 .22 0 .44-.03.65-.08l1.66 1.66c-.71.33-1.5.52-2.31.52-2.76 0-5.3-2.1-5.3-5.1H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c.91-.13 1.77-.45 2.54-.9L19.73 21 21 19.73 4.27 3z"></path></svg></button>
<button class="stop_record" disabled="">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M6 6h12v12H6z"></path>
</svg>
</button>
<div class="back_animation_rec">
<div class="demo_4523">
  <svg class="loader_4523">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="#F4F519" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385"></circle>
  </svg>
  <svg class="loader_4523 loader-2">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="#DE2FFF" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385"></circle>
  </svg>
  <svg class="loader_4523 loader-3">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="#FF5932" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385"></circle>
  </svg>
  <svg class="loader_4523 loader-4">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="#E97E42" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385"></circle>
  </svg>
  <svg class="loader_4523 loader-5">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="white" stroke-width="6" stroke-linecap="round"></circle>
  </svg>
  <svg class="loader_4523 loader-6">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="#00DCA3" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385"></circle>
  </svg>
  <svg class="loader_4523 loader-7">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="purple" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385"></circle>
  </svg>
  <svg class="loader_4523 loader-8">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="#AAEA33" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385"></circle>
  </svg>
</div>
</div>
</div>
<div id="recordingslist"></div>
<input type="hidden" id="hidemainvareco" value="false">
<script>
$(document).ready(function(){
$(".start_record").click(function(){
	$(this).fadeOut(0,function(){
		$(".stop_record").fadeIn(0);
		startRecording();
	});
});
$(".stop_record").click(function(){
	$(this).fadeOut(0,function(){
		$(".start_record").fadeIn(0);
		stopRecording();
		
	});
});
});

  var audio_context;
  var recorder;

  function startUserMedia(stream) {
    var input = audio_context.createMediaStreamSource(stream);
    // audio jack creted carefuly
	// echo hertez __log("input sample rate " +input.context.sampleRate);

    // Feedback!
    //input.connect(audio_context.destination);
    //__log('Input connected to audio context destination.');

    recorder = new Recorder(input, {
                  numChannels: 1
                });
    // __log('Recorder initialised.');
  }
// start_record
  function startRecording() {
    recorder && recorder.record();
    $(".start_record").attr("disabled","disabled");
    $(".stop_record").removeAttr("disabled");	
  }

  function stopRecording() {
    recorder && recorder.stop();
    $(".stop_record").attr("disabled","disabled");
    $(".start_record").removeAttr("disabled");
    // create WAV download link using audio data blob
    createDownloadLink();
    recorder.clear();
	$(".whit_zindex").fadeOut(function(){
	$(".main_body_lopop,#fullrecored_screen").fadeOut(0);
	$(".expertion,.chat").removeClass("blurfullscreen");		
	});
	
  }

  function createDownloadLink() {
    recorder && recorder.exportWAV(function(blob) {
    });
  }

$(document).ready(function(){
    try {
      // webkit shim
      window.AudioContext = window.AudioContext || window.webkitAudioContext;
      navigator.getUserMedia = ( navigator.getUserMedia ||
                       navigator.webkitGetUserMedia ||
                       navigator.mozGetUserMedia ||
                       navigator.msGetUserMedia);
      window.URL = window.URL || window.webkitURL;
      audio_context = new AudioContext;
    } catch (e) {

    }
    navigator.getUserMedia({audio: true}, startUserMedia, function(e) {
		$(".start_record").attr("disabled","disabled");
		var html = '<svg class="nomicrophone_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">' +
        '<path d="M0 0h24v24H0zm0 0h24v24H0z" fill="none"/>' +
        '<path d="M19 11h-1.7c0 .74-.16 1.43-.43 2.05l1.23 1.23c.56-.98.9-2.09.9-3.28zm-4.02.17c0-.06.02-.11.02-.17V5c0-1.66-1.34-3-3-3S9 3.34 9 5v.18l5.98 5.99zM4.27 3L3 4.27l6.01 6.01V11c0 1.66 1.33 3 2.99 3 .22 0 .44-.03.65-.08l1.66 1.66c-.71.33-1.5.52-2.31.52-2.76 0-5.3-2.1-5.3-5.1H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c.91-.13 1.77-.45 2.54-.9L19.73 21 21 19.73 4.27 3z"/>' +
        '</svg>';
		$(".start_record").html(html);
		$(".whit_zindex").append('<p>تأكد من توصيل الميكروفون او من السماح للموقع باستخدام الميكروفون</p>');
	});
});
</script>

<script src="../js/recordmp3v2.js"></script>

<p>تأكد من توصيل الميكروفون او من السماح للموقع باستخدام الميكروفون</p></div>
</div>
</div>

</div>
<script>
$(document).ready(function(){
$(".microphone_recorder").click(function(){
	$("#hidemainvareco").val("true");
	$(".whit_zindex").fadeIn(0);
	$("#fullrecored_screen,.main_body_lopop").fadeIn(0);
	$(".expertion,.chat").addClass("blurfullscreen");
});
$("#fullrecored_screen").click(function(){
	$(".main_body_lopop,#fullrecored_screen").fadeOut(0);
	$(".expertion,.chat").removeClass("blurfullscreen");
});
});
</script>
</div>

<div class="hideinputmaindiv">
<div class="hide_info_cerently">
<input type="hidden" id="hidenurlname" value="<?php echo $envo_name; ?>" />
<input type="hidden" id="hidenurlfirs" value="<?php echo $envo_first; ?>" />
<input type="hidden" id="hidenurlastn" value="<?php echo $envo_last; ?>" />
<input type="hidden" id="hidenurlimag" value="<?php echo $envo_img; ?>" />
<input type="hidden" id="hidenurlnumb" value="<?php echo $envo_number; ?>" />
<input type="hidden" id="hidenurluser" value="<?php echo $envo_user; ?>" />
<input type="hidden" id="hidenurlchek" value="<?php echo $envo_check; ?>" />
<!-- finish session -->
<input type="hidden" id="hidenurlusid" value="<?php echo $user; ?>" />
</div>
<div class="hide_info_comeing">
<input type="hidden" id="cidenurlname" />
<input type="hidden" id="cidenurlfirs" />
<input type="hidden" id="cidenurlimag" />
<input type="hidden" id="cidenurluser" />
<input type="hidden" id="cidenurlmeng" />
<!-- finish session -->
<input type="hidden" id="cidenurlusid" />
</div>
<div class="hide_info_serchae">
<input type="hidden" id="sidenurlname" />
<input type="hidden" id="sidenurlimag" />
<input type="hidden" id="sidenurluser" />
<!-- finish session -->
<input type="hidden" id="sidenurlusid" />
</div>
<div class="hide_all_inputing">
<input type="hidden" id="hidechecktype" value="false" />
<input type="hidden" id="hidedonechtyp" value="false" />
<input type="hidden" id="hideoflinetyp" value="false" />
<input type="hidden" id="hidechecknono" value="false" />
<input type="hidden" id="hidenumb_4444" value="" />
<input type="hidden" id="mibobo_4563ho" value="" />

</div>
</div>

<div class="expertion">
<div class="cemail_in_range">
<div class="menu_cemail_range">
</div>
<iframe src="../../m/"></iframe>
</div>
</div>
</div>
<!-- cerange user script v1 -->
<script>
$(document).ready(function(){
$(window).resize(function(){
var x = $(".whit_zindex").width();
var y = x / 2;
var o = y - 70;
$(".align_54545").css('margin-left',''+ o +'px');
var xx = $(".whit_zindex").height();
var yy = x / 2;
var oo = y - 150;
$(".align_54545").css('margin-top',''+ oo +'px');
});
});
$(window).resize(function(){
var xxx = $(".full-options-icon").height();
var eee = xxx / 2;
var ooo = eee - 45;
$("#edit,#filters,#animation").css('margin-top',''+ ooo +'px');
var xx = $(".firs_filter_bacage").height();
var ee = xx / 2;
var oo = ee - 25;
var dd = ee - 15;
$("#filter1,#filter3").css('margin-top',''+ oo +'px');
$("#filter2").css('margin-top',''+ dd +'px');
var x = $(".second_filter_backage").height();
var e = x / 2;
var o = e - 26;
var d = e - 30;
var t = e - 23;
$("#filter5").css('margin-bottom',''+ o +'px');
$("#filter4").css('margin-bottom',''+ d +'px');
$("#filter6").css('margin-bottom',''+ t +'px');
});
$(document).ready(function(){
$(".emotion_click").click(function(){
	$(".emotion_date").fadeIn(100);
});
});
$(function() {
    $(".more_emotion_div").each(function() {
        var count = 0;
        $(this).click(function(){
        count++;
        if (count === 1) {
	    $(".data_main_87548").css('margin-top','-120px');
        }else if(count === 2){
	    $(".data_main_87548").css('margin-top','-240px');
		$("#more_emotion_svg").css('transform','rotate(0deg)');
        }
        else{
		$(".data_main_87548").css('margin-top','0px');
		count = 0;
        }
        });
    });
});
$(document).ready(function(){
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
});

$(document).mouseup(function(e){
var container = $(".emotion_date");
var mentainer = $(".emotion_click");
if (!container.is(e.target) && container.has(e.target).length === 0 && !mentainer.is(e.target)){
container.hide();
}
});

$(".flags .emoji").click(function(){
	var a = $(this).find("i").text();
	var text = a + ' ';
	$(".chat-div-type").append(text);
});
$(".people .emoji, .nature .emoji, .foods .emoji, .activity .emoji, .places .emoji, .objects .emoji, .symbols .emoji").click(function(){
	var a = $(this).find("i").text();
	$(".chat-div-type").append(a);
});
$(document).ready(function(){

function checkRtl(character) {
  var RTL = ['ث','ا', 'ب', 'پ', 'ت', 'أ', 'ج', 'چ', 'ح', 'خ', 'ج','د','ذ', 'ر', 'ز', 'ژ', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ك', 'گ', 'ل', 'م', 'ن', 'و', 'ه', 'ي'];
  if (RTL.indexOf(character) > -1) {
    return true;
  } else {
    return false;
  }

}

function sethoy(){
$(".text_main_85 p").each(function(){
  var chatText = $(this);
  for (var i = 0; i < chatText.length; i++) {
    var eachLine = chatText[i].innerHTML;
    var firstChar = eachLine.charAt(0);
    if (checkRtl(firstChar)) {
      chatText[i].classList.add('rtl');
    }else {
      chatText[i].classList.add('ltr');
	}

  }
});
    setTimeout(sethoy, 100);
}
sethoy();
});
$(document).ready(function(){
	function emptext(){
	$(".text_main_85 h3").each(function(){
    if ($(this).text().trim().length == 0) {
		if($(this).attr("done") !== "true"){
		$(this).css('transition','0s');
        $(this).addClass("emptytext");
		$(this).css('transition','.3s');
		$(this).attr("done","true");
		}
		}
    });
	$(".emptytext").each(function(){
		if($(this).attr("doing") !== "true"){
	    $(this).closest(".main_message_all").find(".message-to .state_mriela svg").remove();  
	    $(this).closest(".main_message_all").find(".ifatar_rags").remove();  
	    $(this).closest(".main_message_all").find(".mestire").remove();  
	    $(this).attr("doing","true");
		}
	});
	setTimeout(emptext, 100);
	}
	emptext();
});
function checkname(){
$(".mini_5787_chat").each(function(){
	var name = $(this).attr("cename");
	var user = "<?php echo $envo_user; ?>";
	if(name == user){
		$(this).css('background','rgba(250, 246, 247, 0.5)');
	}
});
}
function getinfo(){
	var user = $("#hidenurlusid").val();
	$.post("../getinfo.php",{submit: "submit",user: user},function(e){$(".scripts").html(e);});
}
function reloadclk(){
	var user = $("#mibobo_4563ho").val();
	var name = $("#hidenumb_4444").val();
	var html = '<div class="ce-loaging">' +
    '<div class="text-loading"><span>... جاري التحميل يرجي الانتظار</span></div>' +
    '<div class="circle"></div>' +
    '<div class="circle-small"></div>' +
    '<div class="circle-big"></div>' +
    '<div class="circle-inner-inner"></div>' +
    '<div class="circle-inner"></div>' +
    '</div>';
	$(".show-chat").html(html);
	$("#hidenurlusid").val(user);
	window.history.pushState("", "", '/range/'+ name +'/');
	getmes();
	getinfo();
	$(".mini_5787_chat").css('background','#fff');
	$(".mini_5787_chat[id="+ user +"]").css('background','rgba(250, 246, 247, 0.498039)');
}
function uploadserch(){
	$("#search_result").fadeOut(0);
	var name = $("#sidenurlname").val();
    var eimg = $("#sidenurlimag").val();
    var ruse = $("#sidenurluser").val();
    var user = $("#sidenurlusid").val();
	$(".serchranip").val("");
	$(".serchranip").css('border-radius','100px');
	if($(".mini_5787_chat[id="+ user +"]").length == 0){
		var sesio = '<div class="mini_5787_chat" id="'+ user +'" cename="'+ ruse +'">' +
		'<img src="../../upload/images/low/'+ eimg +'" class="ertopio_5787" />' +
        '<span>' + name + '</span>' +
        '<p>لا يوجد بينكما رسائل حتي الان</p>' +
		'</div>';
		$(".main_inset_5787").prepend(sesio);
	$.post("../addataser.php",{submit: "submit",id: user,user: ruse},function(e){$(".scripts").html(e)});
	reloadclk();
	}else {
	reloadclk();
	}
}
function doclickup(){
	$(".mini_5787_chat").click(function(){
		var name = $(this).attr("cename");
		var ider = $(this).attr("id");
        $("#hidenumb_4444").val(name);
        $("#mibobo_4563ho").val(ider);
        reloadclk();
	});
}
doclickup();
</script>
<!-- cerange user screipt v1 -->
<script>
$(".send_svg").click(function(){
	$(".sendmesbut").click();
	$("#hidechecktype").val("false");
});
function eopoir(){
var x = $(".messages-all").width();
var y = x - 383;
var e = 385 + y;
$(".show-chat,.topchat-shadow,.sendmes-room,.bottom_hages,.top_menu_main_chat").css('margin-right',''+ e +'px');
var q = $(window).height();
var o = $(".show-chat").height();
var r = $(".chat-room").height();
var b = $(".bottom-sender").height();
var t = q - 77;
var p = q - 200;
var e = o + r;
var h = o + b;
var k = t - e;
var z = p - h;
var a = o + k;
var u = o + z;
$(".messages-all").css('height',''+ a +'px');
$(".show-chat").css('height',''+ u +'px');
var xx = $(".chat-div-type").width();
var ss = $(".show-chat").width();
var aa = ss - (110 + 35);
$(".chat-div-type").css('width',''+ aa +'px');
var xxx = $(".chat-room").height();
var yyy = xxx / 2;
var mmm = yyy - 80;
$(".first-package-ssm").css('margin-top',''+ mmm +'px');
var xxl = $(".chat-room").height();
var yyl = xxl / 2;
var mml = yyl - 80;
$(".seco-package-ssm").css('margin-bottom',''+ mml +'px');
var eee = $(".chat-room").height();
var ttt = eee / 2;
var lll = ttt - 77;
$(".colors-packages,.format-box").css('margin-top',''+ lll +'px');
var qwe = $(".chat-room").height();
var asd = qwe / 2;
var dsa = asd - 105;
$(".format-box").css('margin-top',''+ dsa +'px');
var rtr = $(".chat-room").height();
var wew = rtr / 2;
var asa = wew - 102;
$(".buttons").css('margin-top',''+ asa +'px');
}
eopoir();
function appendmes(){
	if($(".prepend_message_hidden .main_message_all").length > 0){
	$(".inset_chatallmes_range").empty();
	$(".prepend_message_hidden .main_message_all").each(function(){
		$(this).attr("prepend","true");
		$(this).prependTo(".inset_chatallmes_range");
	});
	}else {}
}
function prependmes(){
	if($(".prepend_message_hidden .main_message_all").length > 0){
	$(".prepend_message_hidden .main_message_all").each(function(){
		$(this).attr("prepend","true");
		$(this).prependTo(".inset_chatallmes_range");
	});
	}else {}
}
$(document).ready(function(){
var loop = 1;
$.ajax({
	cache: false,
	type: "GET",
	url: "chat.php",
    data: {
		'offset': 0,
		'limit': 20
	},
	success: function(data){
		$(".prepend_message_hidden").html(data);
		loop += 19;
		$(".showbox_range").fadeOut(0);
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});

$(".show-chat").scroll(function(){
if($(".show-chat").scrollTop() == 0){
$(".showbox_range").fadeIn(0);

$.ajax({
	cache: false,
	type: "GET",
	url: "chat.php",
    data: {
		'offset': loop,
		'limit': 20
	},
	success: function(data){
		$(".prepend_message_hidden").html(data);
		loop += 20;
		$(".showbox_range").fadeOut(0);
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});

}
});

});

$("#subcolor").click(function(){
	$(this).attr("disabled","disabled");
	setTimeout(function(){
	$.post("send.php",{chngcolor: "submit",color: $("#hidcolorcode").val()},function(e){$(".scripts").html(e);});
	},500);
});
$(".chat-div-type").keydown(function(event) {
    if (event.keyCode == 13) {
		event.preventDefault();
		$(".sendmesbut").click();
		$("#hidechecktype").val("false");
    }
});

function checksisio(){
	var mesg = $("#cidenurlmeng").val();
	var user = $("#cidenurlusid").val();
	var eimg = $("#cidenurlimag").val();
	var name = $("#cidenurlname").val();
	var firs = $("#cidenurlfirs").val();
	var ruse = $("#cidenurluser").val();
	if($(".mini_5787_chat#"+ user +"").length == 0){
		var sesio = '<div class="mini_5787_chat" id="'+ user +'" cename="'+ ruse +'">' +
		'<img src="../../upload/images/low/'+ eimg +'" class="ertopio_5787" />' +
        '<span>' + name + '</span>' +
		'<p>'+ firs +' : '+ mesg.substr(0,30) +'</p>' +
		'</div>';
		$(".main_inset_5787").prepend(sesio);
	}else {
		$(".mini_5787_chat#"+ user +" p").text(''+ name +' : '+ mesg.substr(0,30) +'');
	}
}
$(document).ready(function(){
$(".sendmesbut").click(function(){
	var message = $(".chat-div-type").text();
	var spacere = message.replace(/ /g, "");
    if(spacere !== ""){
    $(".show-chat").animate({ scrollTop: $('.show-chat').prop("scrollHeight")},500);
	var color = $(".mes-to-text .text_main_85 h3").css("background-color");
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
	$(".chat_main_epopo").append(html);
	$.post("send.php",{sendmessage: "submit",message: message},function(e){$(".scripts").append(e);});
	$(".chat-div-type").empty();
	var user = $("#hidenurlusid").val();
	var eimg = $("#hidenurlimag").val();
	var name = $("#hidenurlname").val();
	var ruse = $("#hidenurluser").val();
	if($(".mini_5787_chat[id="+ user +"]").length == 0){
		var sesio = '<div class="mini_5787_chat" id="'+ user +'" cename="'+ ruse +'">' +
		'<img src="../../upload/images/low/'+ eimg +'" class="ertopio_5787" />' +
        '<span>' + name + '</span>' +
		'<p>أنت : '+ message.substr(0,30) +'</p>' +
		'</div>';
		$(".main_inset_5787").prepend(sesio);
	}else {
		$(".mini_5787_chat#"+ user +" p").text('أنت : '+ message.substr(0,30) +'');
	}
	
	}
});
});

	$(document).ready(function(){
	$("#coor-chat-svg").click(function(){
	$(".all-chat-icons").css({'transform': 'scale(0)'});
	setTimeout(function(){
	$(".all-chat-icons").fadeOut(0);
	$(".colors").fadeIn(0);
	$(".colors").css({'transform': 'scale(1)'});},500);
	setTimeout(function(){$(".close-color").fadeIn(500);},500);	
	});
	});
	$(".cngmescolor").click(function(){
	var color = $(this).val();
	$(".message-to .text_main_85 h3").css('background',color);
	$("#subcolor").css('background',color);
	$(".message-to .mestire").css('color',color);
	$(".send_svg").css('fill',color);
	$("#hidcolorcode").val(color);
	});
	$(document).ready(function(){
	$(".close-color").click(function(){
	$(".colors").css({'transform': 'scale(0)'});
	setTimeout(function(){
	$(".colors").css('display','none');
	$(".all-chat-icons").fadeIn(0);
	$(".all-chat-icons").css({'transform': 'scale(1)'});
	},500);
	$(".close-color").fadeOut(500);
	});
	});
	$(document).ready(function(){
	$("#text-format-svg").click(function(){
	$(".close-fontf").fadeIn(100);
	$(".all-chat-icons").css({'transform': 'scale(0)'});
	setTimeout(function(){$(".all-chat-icons").fadeOut(0);
	$(".all-fonts-div").fadeIn(0);
	$(".all-fonts-div").css({'transform': 'scale(1)'});},500);
	});
	});
	$(document).ready(function(){
	$("#add-style-chat").click(function(){
	$(".all-chat-icons").css({'transform': 'scale(0)'});
	setTimeout(function(){
	$(".all-chat-icons").fadeOut(0);
	$(".wallpaper-set,.buttons").fadeIn(0);
	$(".wallpaper-set,.buttons").css({'transform': 'scale(1)'});
	},500);
	});
	});
	$(document).ready(function(){
	$("#filters").click(function(){
	$(".full-options-icon").css({'transform': 'scale(0)'});
	setTimeout(function(){
	$(".full-options-icon").css('display','none');
	$(".filters-divs").fadeIn(0);
	$(".filters-divs").css({'transform': 'scale(1)'});
	},500);
	});
	});
	$(document).ready(function(){
	$("#filter1").click(
    function(){
	$(".filters-divs").css({'transform': 'scale(0)'});
	setTimeout(function(){
	$(".filters-divs").css('display','none');
	$(".blur-filter").fadeIn(0);
	$(".blur-filter").css({'transform': 'scale(1)'});
	},500);
	});
	});
	$(document).ready(function(){
	$("#filter3").click(function(){
	$(".filters-divs").css({'transform': 'scale(0)'});
	setTimeout(function(){
	$(".filters-divs").css('display','none');
	$(".brightness-filter").fadeIn(0);
	$(".brightness-filter").css({'transform': 'scale(1)'});
	},500);
	});
	});
	$(document).ready(function(){
	$("#filter6").click(function(){
	$(".filters-divs").css({'transform': 'scale(0)'});
	setTimeout(function(){
	$(".filters-divs").css('display','none');
	$(".sepia-filter").fadeIn(0);
	$(".sepia-filter").css({'transform': 'scale(1)'});
	},500);
	});
	});
	$(document).ready(function(){
	$("#filter2").click(function(){
	$(".filters-divs").css({'transform': 'scale(0)'});
	setTimeout(function(){
	$(".filters-divs").css('display','none');
	$(".saturate-filter").fadeIn(0);
	$(".saturate-filter").css({'transform': 'scale(1)'});
	},500);
	});
	});
	$(document).ready(function(){
	$("#filter5").click(function(){
	$(".filters-divs").css({'transform': 'scale(0)'});
	setTimeout(function(){
	$(".filters-divs").css('display','none');
	$(".invert-filter").fadeIn(0);
	$(".invert-filter").css({'transform': 'scale(1)'});
	},500);
	});
	});
	$(document).ready(function(){
	$("#filter4").click(function(){
	$(".filters-divs").css({'transform': 'scale(0)'});
	setTimeout(function(){$(".filters-divs").css('display','none');
	$(".grayscale-filter").fadeIn(0);
	$(".grayscale-filter").css({'transform': 'scale(1)'});
	},500);
	});
	});
		
		
$(document).ready(function(){
	$("#font-size").click(function(){
		$(".all-fonts-div").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".all-fonts-div").css('display','none');
		$(".text-sized").fadeIn(0);
		$(".text-sized").css({'transform': 'scale(1)'});
		},500);
		
	});
});
$(document).ready(function(){
	$("#font-height").click(function(){
		$(".all-fonts-div").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".all-fonts-div").css('display','none');
		$(".text-height").fadeIn(0);
		$(".text-height").css({'transform': 'scale(1)'});
		},500);
		
	});
});
$(document).ready(function(){
	$("#subfonthie").click(function(){
		$(".text-height").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".text-height").css('display','none');
		$(".all-fonts-div").fadeIn(0);
		$(".all-fonts-div").css({'transform': 'scale(1)'});
		},500);
		
	});
});
$(document).ready(function(){
	$("#subfontsiz").click(function(){
		$(".text-sized").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".text-sized").css('display','none');
		$(".all-fonts-div").fadeIn(0);
		$(".all-fonts-div").css({'transform': 'scale(1)'});
		},500);
		
	});
});
$(document).ready(function(){
	$("#subfontfam").click(function(){
		$(".text-family").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".text-family").css('display','none');
		$(".all-fonts-div").fadeIn(0);
		$(".all-fonts-div").css({'transform': 'scale(1)'});
		},500);
		
	});
});
$(document).ready(function(){
	$("#font-shape").click(function(){
		$(".all-fonts-div").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".all-fonts-div").css('display','none');
		$(".text-family").fadeIn(0);
		$(".text-family").css({'transform': 'scale(1)'});
		},500);
		
	});
});
$(document).ready(function(){
	$("#font-bold").click(function(){
		$(".all-fonts-div").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".all-fonts-div").css('display','none');
		$(".text-bolder").fadeIn(0);
		$(".text-bolder").css({'transform': 'scale(1)'});
		},500);
		
	});
});
$(document).ready(function(){
	$("#subfontbold").click(function(){
		$(".text-bolder").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".text-bolder").css('display','none');
		$(".all-fonts-div").fadeIn(0);
		$(".all-fonts-div").css({'transform': 'scale(1)'});
		},500);
		
	});
});


$(document).ready(function(){
	$("#font-under").click(function(){
		$(".all-fonts-div").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".all-fonts-div").css('display','none');
		$(".text-under").fadeIn(0);
		$(".text-under").css({'transform': 'scale(1)'});
		},500);
		
	});
});
$(document).ready(function(){
	$("#subfontunder").click(function(){
		$(".text-under").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".text-under").css('display','none');
		$(".all-fonts-div").fadeIn(0);
		$(".all-fonts-div").css({'transform': 'scale(1)'});
		},500);
		
	});
});
$(document).ready(function(){
$(window).resize(function(){
eopoir();
});
});

/*
$(document).ready(function(){
	$("#show-upwallch").click(function(){
		$(".buttons").css({'transform': 'scale(0)'});
		setTimeout(function(){
		$(".buttons").css('display','none');
		$(".upload-back").fadeIn(0);
		$(".upload-back").css({'transform': 'scale(1)'});
		},500);
		
	});
});
*/
$(document).ready(function(){
function getnew(){
    $.get("fast.php",{getnow: "submit"},function(e){$(".chat_main_epopo").append(e);});
    $.get("load.php",{getype: "submit"},function(c){$(".scripts").html(c);});
	$.get("onse.php",{getsis: "submit"},function(o){$(".scripts").html(o);});
	setTimeout(getnew,500);
}
getnew();
});
</script>
<!-- cerange exim script v1 -->
<script>
$("#chat-div-type").keypress(function(){
	$("#hidechecktype").val("true");
});
$("#chat-div-type").keyup(function(event){
	var text = $(".chat-div-type").text();
	var retm = text.replace(/ /g, "");
	if(retm == "" && event.keyCode == 8){
	$("#hidechecktype").val("false");
	}
});
var timer = null;
$('#chat-div-type').keydown(function(){
    clearTimeout(timer); 
    timer = setTimeout(stopTyping, 5000)
});
function stopTyping() {
    $("#hidechecktype").val("false");
}
function checktype(){
	var val = $("#hidechecktype").val();
	if(val == "false"){
		$("#hidedonechtyp").val("false");
		var mol = $("#hideoflinetyp").val();
		if(mol == "false"){
		donestopall();
		$("#hideoflinetyp").val("true");
		}else {}
	}else {
		$("#hideoflinetyp").val("false");
		var mal = $("#hidedonechtyp").val();
		if(mal == "false"){
		donetypeall();
		$("#hidedonechtyp").val("true");
		}else {}
	}
	setTimeout(checktype,100);
}
checktype();
function donetypeall(){
	$.post("load.php",{setitnow: "submit"},function(e){$(".scripts").html(e);});
}
function donestopall(){
	$.post("load.php",{setofnow: "submit"},function(e){$(".scripts").html(e);});
}
function doscroll(){
$(".show-chat").animate({ scrollTop: $('.show-chat').prop("scrollHeight")},500);
}
doscroll();
function doscroll<?php echo $envo_cemail; ?>(){
	// for range mini frame only
}
function dofademat(){
var val = $("#hidechecknono").val();
if(val == "false"){
	$(".type_now_main").fadeOut(0);
}else {
	$(".type_now_main").fadeIn(100);
	var val = $("#hidechecktype").val();
	if(val == "false" && $(".show-chat").scrollTop() - $(".chat_main_epopo").height() > - $(document).height() + 150){
	    $(".show-chat").animate({ scrollTop: $('.show-chat').prop("scrollHeight")},500);
	}
}
}
dofademat();
function dofademat<?php echo $envo_cemail; ?>(){
	// for range mini frame only
}

$.post("../addataser.php",{submit: "submit",id: "<?php echo $user; ?>"},function(e){$(".scripts").html(e)});
</script>
<script>

/*
window.onerror = function() {  
 return true; 
}*/

</script>
<div class="hidemainvolert" style="display:none!important"></div>
<div class="scripts"></div>

</body>
</html>











