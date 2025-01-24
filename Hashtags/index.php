<?php
include ("../connectdb/index.php");
if(isset($_GET['q']) && empty($_GET['q'])){
	Header("Location:../hashtags/");
}else {}
?>
<!DOCTYPE html>
<html>
<head>
<title>
<?php
$qurhashname = strip_tags(htmlspecialchars(trim($_GET['q'])));
$qurhashname = preg_replace('/ +/', '', $qurhashname);

$selecthash = mysql_query("SELECT post_type,name FROM hashtags WHERE type='antily' AND name='$qurhashname' AND post_type!=''");
while($fetqnk = mysql_fetch_array($selecthash)){
	$tadwincount = $fetqnk['post_type'];
	$tadwisnames = $fetqnk['name'];
}
$leftdate = date("Y-m-d");
$seleallhah = mysql_query("SELECT COUNT(id) FROM hashtags WHERE type='normal' AND post_type!='' AND LEFT(date,10) = '$leftdate'");
$allhashcoun = mysql_result($seleallhah,0);

if(empty($_GET['q'])){
	echo 'سينيلز - الهاشتاجات';
}else {
	if(!empty($tadwincount)){
		echo '#'.$tadwisnames.' - سينيلز';
	}else {
		echo 'الهاشتاج غير موجود';
	}
}
?>
</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="../style/index-style.css" />
<link rel="stylesheet" type="text/css" href="../style/option-style.css" />
<link rel="stylesheet" type="text/css" href="../style/posts-style.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/href-font.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/fonts/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/fonts/font-awesome.min.css" />
<link rel="shortcut icon" href="../img/favicon.ico" />
<script src="../js/jquery.js"></script>
<script src="../js/ajaxfileup.js"></script>
<script src="../js/jquery.filedrop.js"></script>
<link rel="stylesheet" type="text/css" href="../style/home-style.css" />
<link rel="stylesheet" type="text/css" href="../style/emoicons-style.css" />
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
	$.post("../ajax-php/online-check.php",{online: "submit"});
	setTimeout(updateon,30000);
}
updateon();
console.log = function() {}

</script>
</head>
<body>

<?php

include "../body-html/menu-top.php";
include "../body-html/right-main.php";

?>
<div class="hashtags_menumain">
<div class="rightinset_hashtags">
<div class="topopert_mainhash">
<span>
<?php
if($_GET['q'] && !empty($_GET['q'])){
echo "#".strip_tags(htmlspecialchars($_GET['q']));
}else {
echo 'هاشتاجات اليوم';
}
?>
</span>
<p>
<?php
if($_GET['q']){
echo $tadwincount;
}else {
echo $allhashcoun;
}
?>
</p><a>عدد التدوينات :</a>
</div>
</div>
<div class="lefthash_menumain">
<div class="insetflex_hashtags">
<div class="over_1111 first_over_111">
<svg class="filrsthash_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M22 13h-8v-2h8v2zm0-6h-8v2h8V7zm-8 10h8v-2h-8v2zm-2-8v6c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V9c0-1.1.9-2 2-2h6c1.1 0 2 .9 2 2zm-1.5 6l-2.25-3-1.75 2.26-1.25-1.51L3.5 15h7z" />
</svg>
<span>جميع التدوينات</span>
</div>
<div class="over_1111 secound_over_1111">
<svg version="1.1" class="postshash_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 792 792" xml:space="preserve">
<g> 
<path d="M109.548,0c0,0-18.468,0-18.468,17.604V774.36c0,17.64,18.468,17.64,18.468,17.64h572.903c0,0,18.469,0,18.469-17.604V180 
H548.461c0,0-38.125,0-38.125-36V0H109.548z M205.452,108H434.16v36H205.452V108z M205.452,216H434.16v36H205.452V216z 
M586.619,684H205.452v-36h381.167V684z M586.619,576H205.452v-36h381.167V576z M586.619,468H205.452v-36h381.167V468z 
M586.619,324v36H205.452v-36H586.619z"/>
<polygon points="548.496,144 685.836,144 548.496,13.212 		"/> 
</g>
</svg>
<span>المنشورات</span>
<?php
$postexthas = mysql_query("SELECT COUNT(id) FROM hashtags WHERE post_type='text' AND name='$qurhashname'");
$postscount = mysql_result($postexthas,0);
?>
<p><?php echo $postscount; ?></p>
</div>
<div class="over_1111 third_over_1111">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
</svg>
<span>الصور</span>
<?php
$postimghas = mysql_query("SELECT COUNT(id) FROM hashtags WHERE post_type='image' AND name='$qurhashname'");
$hashimagco = mysql_result($postimghas,0);
?>
<p><?php echo $hashimagco; ?></p>
</div>
<div class="over_1111 fourd_ovewr_1111">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8 12.5v-9l6 4.5-6 4.5z"></path>
</svg>
<span>الفيديو</span>
<p>0</p>
</div>
<div class="over_1111 fifed_over_1111">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 5h-3v5.5c0 1.38-1.12 2.5-2.5 2.5S10 13.88 10 12.5s1.12-2.5 2.5-2.5c.57 0 1.08.19 1.5.51V5h4v2zM4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6z"></path>
</svg>
<?php
$postaudhas = mysql_query("SELECT COUNT(id) FROM hashtags WHERE post_type='audio' AND name='$qurhashname'");
$hashaduoco = mysql_result($postaudhas,0);
?>
<span>الصوت</span>
<p><?php echo $hashaduoco; ?></p>
</div>
</div>
<div class="searchashtags_mian">
<div class="mainhashserch_icon">
<svg class="searchashtags_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
</div>
</div>
</div>
<div class="main_hashtagsview">
<div class="tophashtasg_desc">
<span>الاعلي هذا اليوم</span>
<div class="searchash_diviset">
<input type="text" placeholder="اكتب اسم الهاشتاج للبحث" class="searchash_input" />
</div>
<script>
$(".searchashtags_svg").click(function(){
var attr = $(this).attr("data-done");
if (attr !== 'back') {
$(".tophashtasg_desc span").fadeOut(100,function(){
$(".searchash_diviset").fadeIn(100);
$(".searchash_diviset input").focus();
});
var html = '<path d="M0 0h24v24H0z" fill="none"></path>' +
'<path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>';
$(this).html(html);
$(this).attr("data-done","back");
} else {
$(".searchash_diviset").fadeOut(100,function(){
$(".tophashtasg_desc span").fadeIn(100);
});
var xmls= '<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>' +
'<path d="M0 0h24v24H0z" fill="none"></path>';
$(this).html(xmls);
$(this).attr("data-done","click");
}
});
$(".news_selcetli").removeClass("hary_selected");
$(".hashtags_selectli").addClass("hary_selected");
$(".searchash_input").keyup(function(){
	var text = $(this).val();
	$.post("hash-search.php",{search: "submit",text: text},function(e){$(".insethashtags_viewmain").html(e)});
});
</script>

</div>
<div class="insethashtags_viewmain">
<?php
$hashrightdate = date("Y-m-d");
$queryhash = mysql_query("SELECT * FROM hashtags WHERE LEFT(date,10) = '$hashrightdate' AND type='antily' AND post_type!='none' ORDER BY post_type DESC LIMIT 8");
while($fethash = mysql_fetch_array($queryhash)){
?>
<div class="hash_7548"><a href="../hashtags/?q=<?php echo $fethash['name']; ?>">#<?php echo $fethash['name']; ?></a><p><span><?php echo $fethash['post_type']; ?></span> من التدوينات</p></div>
<?php
$emptyhash = "true";
}
if(empty($emptyhash)){
	echo '
	<div class="empty_hashtags"><span>لا يوجد هاشتاجات متوفرة اليوم</span></div>
	';
}
?>
</div>
<div class="footerhashtags"><span>© 2017 | CENells . All Rights Reserved</span></div>
</div>

<?php

if(isset($_GET['q']) && !$_GET['type']){

$hashname = addslashes(strip_tags(htmlspecialchars(trim($_GET['q']))));
$hashname = preg_replace('/ +/', '', $hashname);
if(!empty($hashname)){
?>


<div class="container">
<div class="hastags_getype">
<span>جميع التدوينات الخاصة بالهاشتاج</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M22 13h-8v-2h8v2zm0-6h-8v2h8V7zm-8 10h8v-2h-8v2zm-2-8v6c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V9c0-1.1.9-2 2-2h6c1.1 0 2 .9 2 2zm-1.5 6l-2.25-3-1.75 2.26-1.25-1.51L3.5 15h7z"></path>
</svg>
</div>
<div class="hashtags_centermain">
<div class="hashposts_page">
<div class="hashinset_poats"></div>
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
</div>
<script>
$(document).ready(function(){
var loop = 1;
$.ajax({
	cache: false,
	type: "GET",
	url: "queryall.php",
    data: {
		'all': 'submit',
		'hashname': '<?php echo strip_tags(htmlspecialchars($_GET['q'])); ?>',
		'offset': 0,
		'limit': 4
	},
	success: function(data){
		$(".hashinset_poats").append(data);
		loop += 3;
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
	url: "queryall.php",
    data: {
		'all': 'submit',
		'hashname': '<?php echo strip_tags(htmlspecialchars($_GET['q'])); ?>',
		'offset': loop,
		'limit': 4
	},
	success: function(data){
		$(".hashinset_poats").append(data);
		loop += 4;
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
});
});
</script>


<?php
}else {}
}
if($_GET['q'] !== "" && $_GET['type'] == "post"){
?>

<div class="container">
<div class="hastags_getype postshahs_select">
<span>المنشورات الخاصة بالهاشتاج</span>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 792 792" xml:space="preserve">
<g> 
<path d="M109.548,0c0,0-18.468,0-18.468,17.604V774.36c0,17.64,18.468,17.64,18.468,17.64h572.903c0,0,18.469,0,18.469-17.604V180 
H548.461c0,0-38.125,0-38.125-36V0H109.548z M205.452,108H434.16v36H205.452V108z M205.452,216H434.16v36H205.452V216z 
M586.619,684H205.452v-36h381.167V684z M586.619,576H205.452v-36h381.167V576z M586.619,468H205.452v-36h381.167V468z 
M586.619,324v36H205.452v-36H586.619z"></path>
<polygon points="548.496,144 685.836,144 548.496,13.212 		"></polygon> 
</g>
</svg>
</div>
<div class="hashtags_centermain">
<div class="hashposts_page">
<div class="hashinset_poats"></div>
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
</div>
<script>
$(document).ready(function(){
var loop = 1;
$.ajax({
	cache: false,
	type: "GET",
	url: "queryall.php",
    data: {
		'post': 'submit',
		'hashname': '<?php echo strip_tags(htmlspecialchars($_GET['q'])); ?>',
		'offset': 0,
		'limit': 4
	},
	success: function(data){
		$(".hashinset_poats").append(data);
		loop += 3;
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
	url: "queryall.php",
    data: {
		'post': 'submit',
		'hashname': '<?php echo strip_tags(htmlspecialchars($_GET['q'])); ?>',
		'offset': loop,
		'limit': 4
	},
	success: function(data){
		$(".hashinset_poats").append(data);
		loop += 4;
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
});
});
</script>


<?php
}else {}
if($_GET['q'] !== "" && $_GET['type'] == "image"){
?>

<div class="container">
<div class="hastags_getype imageshahs_select">
<span>الصور الخاصة بالهاشتاج</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"></path>
</svg>
</div>
<div class="hashtags_centermain">
<div class="hashposts_page">
<div class="hashinset_poats"></div>
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
</div>
<script>
$(document).ready(function(){
var loop = 1;
$.ajax({
	cache: false,
	type: "GET",
	url: "queryall.php",
    data: {
		'image': 'submit',
		'hashname': '<?php echo strip_tags(htmlspecialchars($_GET['q'])); ?>',
		'offset': 0,
		'limit': 4
	},
	success: function(data){
		$(".hashinset_poats").append(data);
		loop += 3;
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
	url: "queryall.php",
    data: {
		'image': 'submit',
		'hashname': '<?php echo strip_tags(htmlspecialchars($_GET['q'])); ?>',
		'offset': loop,
		'limit': 4
	},
	success: function(data){
		$(".hashinset_poats").append(data);
		loop += 4;
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
});
});
</script>


<?php
}else {}

if($_GET['q'] !== "" && $_GET['type'] == "audio"){
?>

<div class="container">
<div class="hastags_getype audiohahs_select">
<span>مقاطع الصوت الخاصة بالهاشتاج</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 5h-3v5.5c0 1.38-1.12 2.5-2.5 2.5S10 13.88 10 12.5s1.12-2.5 2.5-2.5c.57 0 1.08.19 1.5.51V5h4v2zM4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6z"></path>
</svg>
</div>
<div class="hashtags_centermain">
<div class="hashposts_page">
<div class="hashinset_poats"></div>
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
</div>
<script>
$(document).ready(function(){
var loop = 1;
$.ajax({
	cache: false,
	type: "GET",
	url: "queryall.php",
    data: {
		'audio': 'submit',
		'hashname': '<?php echo strip_tags(htmlspecialchars($_GET['q'])); ?>',
		'offset': 0,
		'limit': 4
	},
	success: function(data){
		$(".hashinset_poats").append(data);
		loop += 3;
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
	url: "queryall.php",
    data: {
		'audio': 'submit',
		'hashname': '<?php echo strip_tags(htmlspecialchars($_GET['q'])); ?>',
		'offset': loop,
		'limit': 4
	},
	success: function(data){
		$(".hashinset_poats").append(data);
		loop += 4;
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
});
});
</script>


<?php
}else {}
?>
<?php
if(!$_GET){
?>

<div class="container">
<div class="hastags_getype">
<span>
<?php
if($_GET['q']){
echo 'جميع التدوينات الخاصة بالهاشتاج';
}else {
echo 'منشورات المتابعين';
}
?>
</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M22 13h-8v-2h8v2zm0-6h-8v2h8V7zm-8 10h8v-2h-8v2zm-2-8v6c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V9c0-1.1.9-2 2-2h6c1.1 0 2 .9 2 2zm-1.5 6l-2.25-3-1.75 2.26-1.25-1.51L3.5 15h7z"></path>
</svg>
</div>
<div class="hashtags_centermain">
<div class="hashposts_page">
<div class="hashinset_poats"></div>
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
</div>
<script>
$(document).ready(function(){
var loop = 1;
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/index-post.php",
    data: {
		'offset': 0,
		'limit': 4
	},
	success: function(data){
		$(".hashinset_poats").append(data);
		loop += 3;
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
	url: "../ajax-php/index-post.php",
    data: {
		'offset': loop,
		'limit': 4
	},
	success: function(data){
		$(".hashinset_poats").append(data);
		loop += 4;
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
});
});
</script>

<?php
}else {}
?>

<div class="option_postmain_page">
<?php

include "../body-html/edit-tools.php";

?>
</div>

<?php

include "../body-html/left-main.php";

?>


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
<?php
if($_GET['q'] && !empty($_GET['q'])){
?>
$(".fifed_over_1111").click(function(){
	window.location = "../hashtags/?type=audio&q=<?php echo strip_tags(htmlspecialchars($_GET['q'])); ?>";
});
$(".third_over_1111").click(function(){
	window.location = "../hashtags/?type=image&q=<?php echo strip_tags(htmlspecialchars($_GET['q'])); ?>";
});
$(".secound_over_1111").click(function(){
	window.location = "../hashtags/?type=post&q=<?php echo strip_tags(htmlspecialchars($_GET['q'])); ?>";
});
$(".first_over_111").click(function(){
	window.location = "../hashtags/?q=<?php echo strip_tags(htmlspecialchars($_GET['q'])); ?>";
});
<?php
}else {
?>
$(".over_1111").css('cursor','default');
<?php
}
?>
$(".hashtags_selectli").mousedown(function(e){
	w.preventDefault();
	return false;
});
</script>

<?php
include "../body-html/ajax-php.php";
?>
<div class="scripts"></div>
</body>
</html>
