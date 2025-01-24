<div class="p-menu-t">
<div class="betaversion">
<span>BETA</span>
</div>
<div class="container">
<div class="left_logo_main">
<a href="../">
<img draggable="false" src="../img/icons/logo.png" id="logo" />
</a>
</div>
</div>
<div class="container">
<div class="user-name">
<a href="#"><h4><?php echo $info['first_name']; ?></h4></a>
</div>
</div>
<div class="container">
<div class="account">
<img src="../img/profile/account-icons/account.png" draggable="false" id="p-img" />
<div class="container">
<div class="search-div">
<img src="../img/profile/header/search.png" id="search" class="search" draggable="false" />
<input autocomplete="off" type="text" id="search-in" class="search-in" placeholder="Search">
<div id="searchresult_div">
<div class="injax_searchresult"></div>
<div class="search-more">
<a href="#">
<h4>
بحث عن مزيد من النتائج
</h4>
<i class="fa fa-search" aria-hidden="true"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="href-top">
<center>
<div class="home-href">
<a href="../" id="home-a">
<h5>الصفحة الرئيسية</h5>
</a>
<img src="../img/profile/header/home.png" id="home-img" />
</div>
</center>
</div>
<div class="icons-td">
<div class="alert_ico_43">
<img src="../img/profile/header/noti.png" class="noti_ico" id="noti" />
<div class="ajax_count_alert">
<div>
<span>
</span>
</div>
</div>
</div>
<img src="../img/icons/range.png" id="message-show-menu" />
<div class="count_follal">
<img src="../img/profile/header/addf.png" id="addf" />
<div class="ajax_count_foll"><div><span></span></div></div>
</div>
</div>
<div class="message_system">
<div class="message-mini">
</div>
<a href="../">
<div class="show_all_message">
<span>عرص كافة الرسائل</span>
</div>
</a>
</div>
<div class="noti_system">
<div class="noti">
<div class="inset_menunoti_ajax">
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
<div class="showbox_menualert">
<div class="loader_menualert">
<svg class="circular_menualert" viewBox="25 25 50 50">
<circle class="path_circle_menualert" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
</svg>
</div>
</div>
</div>
<a href="../notifications/">
<div class="show-all-noti">
<span>عرض كافة الاشعارات</span>
</div>
</a>
</div>
<div class="follow_alert_system">
<div class="noti_follow">
</div>
<div class="show_allfol">
<span>عرض كافة المتابعات</span>
</div>
</div>
</div>
</div>
<audio src="../audio/noti.mp3" id="noti_audio_main" style="display: none!important;"></audio>
<audio src="../audio/mes.m4r" id="noti_message_main" style="display: none!important;"></audio>
<div class="hideninputofpupciou" style="display: none!important"></div>
<script>
$(document).mouseup(function (e){
var container = $(".count_follal,.follow_alert_system");
if (!container.is(e.target) && container.has(e.target).length === 0) {
$(".follow_alert_system").fadeOut(100);
}
});
$(document).mouseup(function (e){
var container = $("#message-show-menu,.message_system");
if (!container.is(e.target) && container.has(e.target).length === 0) {
$(".message_system").fadeOut(100);
}
});
$(document).mouseup(function (e){
var container = $(".noti_ico,.noti_system");
if (!container.is(e.target) && container.has(e.target).length === 0) {
$(".noti_system").fadeOut(100);
}
});
$(document).mouseup(function (e){
var container = $("#search-in");
if (!container.is(e.target) && container.has(e.target).length === 0) {
$("#searchresult_div").fadeOut(100);
}
});
$(document).mouseup(function (e){
var container = $(".account-menu,#p-img");
if (!container.is(e.target) && container.has(e.target).length === 0) {
$(".account-menu").fadeOut(100);
}
});
$("#message-show-menu").click(function(){
	$(".message_system").fadeIn(100);
});
$("#addf").click(function(){
	$(".follow_alert_system").fadeIn(100);

});
$(".noti_ico").click(function(){
	$(".ajax_count_alert").fadeOut(100,function(){
		$(this).find("span").empty();
	});
});
$("#addf").click(function(){
	$(".ajax_count_foll").fadeOut();
});
$.post("../ajax-php/alert-count.php", {getcount: "submit"} ,function(post){
$(".ajax_count_alert div span").html(post);
if($(".ajax_count_alert div span").text() !== ""){
$(".ajax_count_alert").fadeIn(100);
}else {}
});
$.post("../ajax-php/alert-count.php", {getfolcount: "submit"} ,function(post){
$(".ajax_count_foll div span").html(post);
if($(".ajax_count_foll div span").text() !== ""){
$(".ajax_count_foll").fadeIn(100);
}else {}
});
$.post("../ajax-php/alert-follow.php", {sufollow: "submit"} ,function(post){ $(".noti_follow").html(post);});
$(".noti_ico").click(function(){
	$(".noti_system").fadeIn(100);
});
$(document).ready(function(){
$("#search-in").keyup(function(event){
var search = $(this).val();
$(".search-more a").attr("href","../search/?q="+ search +"");
if(search.replace(/ /g,'').length > 0) {
if (event.keyCode == 13) {
var href = $(".search-more a").attr("href");
window.location("../"+ href);      
}else {
$.get("../ajax-php/search.php",{search: search},function(e){
	$("#injax_searchresult").html(e);
	$("#searchresult_div").fadeIn(100);
});
}
}else {
$("#searchresult_div").fadeOut(0);
}
});
});
function getonalertf(){
	$.get("../ajax-php/onlinealert.php",{getonalert: "submit"},function(e){
		$(".noti").prepend(e);
	});
	$.get("../ajax-php/onlinefolno.php",{getonfolow: "submit"},function(e){
		$(".noti_follow").prepend(e);
	});	/*
	setTimeout(getonalertf,1000);*/
}
getonalertf();
function geseeino(){
	$.get("../ajax-php/getonsesion.php",{getsession: "submit"},function(e){
		if(e !== ""){
			$(".alert_scripts").html(e);
		}
	});/*
	setTimeout(geseeino,1000);*/
}
geseeino();

$(document).ready(function(){
function menunoti(){
var loop = 1;
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/alert-noti.php",
    data: {
		'menu': 'submit',
		'offset': 0,
		'limit': 15
	},
	success: function(data){
		$(".inset_menunoti_ajax").html(data);
		loop += 14;
		$(".showbox_menualert").fadeIn(0);
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});

$(window).scroll(function(){
if($(window).scrollTop() + $(window).height() == $(document).height()) {
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/alert-noti.php",
    data: {
		'menu': 'submit',
		'offset': loop,
		'limit': 15
	},
	success: function(data){
		$(".inset_menunoti_ajax").append(data);
		loop += 15;
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
});
}
menunoti();
});

$(document).ready(function(){
$("#search-in").focusin(function(){
    $(".icons-td").fadeOut(250);
	setTimeout(function(){
		$("#search-in").css('width','350px');
	},100);
});
$("#search-in").focusout(function(){
	$("#search-in").css('width', '60px');
	$("#search-in").val("");
	setTimeout(function(){
		$(".icons-td").fadeIn(500);
	},250);
});
$("#search-in").focusin(function(){
	
});
});
</script>

<div class="alert_scripts"></div>

