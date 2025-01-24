<?php
include ("../connectdb/index.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>CENells - التدوينات</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="../style/index-style.css" />
<link rel="stylesheet" type="text/css" href="../style/option-style.css" />
<link rel="stylesheet" type="text/css" href="../style/posts-style.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/href-font.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/fonts/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/fonts/font-awesome.min.css" />
<link rel="shortcut icon" href="../img/title.png" />
<script src="../js/jquery.js"></script>
<script src="../js/ajaxfileup.js"></script>
<script src="../js/jquery.filedrop.js"></script>
<link rel="stylesheet" type="text/css" href="../style/home-style.css" />
<link rel="stylesheet" type="text/css" href="../style/emoicons-style.css" />
<style>
.post-main-tvi {
	margin-top: 50px!important;
}
</style>
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
<div class="option_postmain_page">
<?php
include "../body-html/edit-tools.php";
?>
</div>
<div class="container">
<div class="postpage_centermain">
<div class="posts_topdescrip">
<span>تدوينات المتابَعون</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M2 6H0v5h.01L0 20c0 1.1.9 2 2 2h18v-2H2V6zm20-2h-8l-2-2H6c-1.1 0-1.99.9-1.99 2L4 16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7 15l4.5-6 3.5 4.51 2.5-3.01L21 15H7z"/>
</svg>
</div>
<div class="posts_page">
<div class="inset_poats">
<?php
if($_GET){
$header_type = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['header_type'])))));
$local_view = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['local_view'])))));
$header_id = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['headerID'])))));
$nouser_id = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['userID'])))));
$nofrom_id = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['fromID'])))));
$commentid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['commentID'])))));
$header_type = preg_replace('/ +/', '', $header_type);
$local_view = preg_replace('/ +/', '', $local_view);
$header_id = preg_replace('/ +/', '', $header_id);
$nouser_id = preg_replace('/ +/', '', $nouser_id);
$nofrom_id = preg_replace('/ +/', '', $nofrom_id);
$commentid = preg_replace('/ +/', '', $commentid);
$checkpost = mysql_query("SELECT * FROM posts WHERE id='$header_id' LIMIT 1");
while($topert = mysql_fetch_assoc($checkpost)){
	$chec_post_likeid = $topert['id'];
	$checkuserid_post = $topert['user_id'];
	$shareidcheckit = $topert['share_id'];
}
$checkuserquery = mysql_query("SELECT * FROM users WHERE id='$nouser_id'");
while($fetuse = mysql_fetch_assoc($checkuserquery)){
	$fetnoti_usernm = $fetuse['first_name'];
	$userimg_noti = $fetuse['pro_img'];
}
if(isset($_GET['header_type']) && $header_type == "localPost" && !empty($nouser_id) && $checkuserid_post == $nouser_id && !empty($chec_post_likeid) && $local_view == "1"){
include "querypost.php";
?>
<script>
$(".posts_topdescrip span").text("تم اضافة تدوينة جديدة من قبل <?php echo $fetnoti_usernm; ?>");
$(".posts_topdescrip svg").remove();
$(".posts_topdescrip").append("<img src='../upload/images/low/<?php echo $userimg_noti; ?>' />");
</script>
<?php
}else {
if(isset($_GET['header_type']) && $header_type == "actionPost" && !empty($chec_post_likeid) && !empty($nouser_id) && !empty($commentid) && $local_view == "5"){
$queryorelikes = mysql_query("SELECT * FROM likes WHERE from_id='$nouser_id' AND post_id='$header_id' AND for_id='$commentid' AND do='dislike'");
while($fetlicom = mysql_fetch_assoc($queryorelikes)){
$chec_user_likcom = $fetlicom['id'];
}
if(!empty($chec_user_likcom)){
include "querypost.php";
?>
<script>
$(".posts_topdescrip span").text("عدم الاحجاب بتعليقك من قبل <?php echo $fetnoti_usernm; ?>");
$(".posts_topdescrip svg").remove();
$(".posts_topdescrip").append("<img src='../upload/images/low/<?php echo $userimg_noti; ?>' />");
</script>
<?php
}else {
include "error.php";	
}
}else {
if(isset($_GET['header_type']) && $header_type == "actionPost" && !empty($chec_post_likeid) && !empty($nouser_id) && !empty($commentid) && $local_view == "4"){
$queryorelikes = mysql_query("SELECT * FROM likes WHERE from_id='$nouser_id' AND post_id='$header_id' AND for_id='$commentid' AND do='like'");
while($fetlicom = mysql_fetch_assoc($queryorelikes)){
$chec_user_likcom = $fetlicom['id'];
}
if(!empty($chec_user_likcom)){
include "querypost.php";
?>
<script>
$(".posts_topdescrip span").text("الاعجاب بتعليقك من قبل <?php echo $fetnoti_usernm; ?>");
$(".posts_topdescrip svg").remove();
$(".posts_topdescrip").append("<img src='../upload/images/low/<?php echo $userimg_noti; ?>' />");
</script>
<?php
}else {
include "error.php";	
}
}else {
if(isset($_GET['header_type']) && $header_type == "actionPost" && !empty($chec_post_likeid) && !empty($nouser_id) && $checkuserid_post == $id && !empty($commentid) && $local_view == "3"){
$querycomm = mysql_query("SELECT * FROM comments WHERE id='$commentid' AND from_id='$nouser_id' AND post_id='$header_id'");
while($fetcom = mysql_fetch_assoc($querycomm)){
$chec_user_comment = $fetcom['post_id'];
}
if(!empty($chec_user_comment)){
include "querypost.php";
?>
<script>
$(".posts_topdescrip span").text("التعليق علي تدوينتك من قبل <?php echo $fetnoti_usernm; ?>");
$(".posts_topdescrip svg").remove();
$(".posts_topdescrip").append("<img src='../upload/images/low/<?php echo $userimg_noti; ?>' />");
</script>
<?php
}else {
include "error.php";	
}
}else {
if(isset($_GET['header_type']) && $header_type == "actionPost" && !empty($chec_post_likeid) && !empty($nouser_id) && $checkuserid_post == $id && $local_view == "1"){
$querylikes = mysql_query("SELECT * FROM likes WHERE from_id='$nouser_id' AND post_id='$header_id' AND do='like'");
while($fetlike = mysql_fetch_assoc($querylikes)){
$chec_user_likeid = $fetlike['post_id'];
}
if(!empty($chec_user_likeid)){
include "querypost.php";
?>
<script>
$(".posts_topdescrip span").text("الاعجاب بتدوينتك من قبل <?php echo $fetnoti_usernm; ?>");
$(".posts_topdescrip svg").remove();
$(".posts_topdescrip").append("<img src='../upload/images/low/<?php echo $userimg_noti; ?>' />");
</script>
<?php
}else {
include "error.php";	
}
}else {
if(isset($_GET['header_type']) && $header_type == "actionPost" && !empty($chec_post_likeid) && !empty($nouser_id) && $checkuserid_post == $id && $local_view == "2"){
$querylikes = mysql_query("SELECT * FROM likes WHERE from_id='$nouser_id' AND post_id='$header_id' AND do='dislike'");
while($fetlike = mysql_fetch_assoc($querylikes)){
$chec_user_likeid = $fetlike['post_id'];
}
if(!empty($chec_user_likeid)){
include "querypost.php";
?>
<script>
$(".posts_topdescrip span").text("عدم الاعجاب بتدوينتك من قبل <?php echo $fetnoti_usernm; ?>");
$(".posts_topdescrip svg").remove();
$(".posts_topdescrip").append("<img src='../upload/images/low/<?php echo $userimg_noti; ?>' />");
</script>
<?php
}else {
include "error.php";
}
}else {
$selmenold = mysql_query("SELECT COUNT(id) FROM alert WHERE user_id='$nouser_id' AND to_id='$id' AND post_id='$header_id' AND forse='post' AND type='menshin_post'");
$menoldcou = mysql_result($selmenold,0);
if(isset($_GET['header_type']) && $header_type == "localPost" && $menoldcou > 0 && !empty($nouser_id) && $checkuserid_post == $nouser_id && !empty($chec_post_likeid) && $local_view == "6"){
include "querypost.php";
?>
<script>
$(".posts_topdescrip span").text("الاشارة لك في تدوينة من قبل <?php echo $fetnoti_usernm; ?>");
$(".posts_topdescrip svg").remove();
$(".posts_topdescrip").append("<img src='../upload/images/low/<?php echo $userimg_noti; ?>' />");
</script>
<?php
}else {
$selectios = mysql_query("SELECT id,first_name FROM users WHERE id='$nofrom_id'");
while($bombom = mysql_fetch_array($selectios)){
	$usercount = $bombom['id'];
	$firsharenm = $bombom['first_name'];
}
$checkshare = mysql_query("SELECT * FROM posts WHERE user_id='$usercount' AND id='$shareidcheckit' LIMIT 1");
while($vefo = mysql_fetch_assoc($checkshare)){
	$checpostshare = $vefo['id'];
}
if(isset($_GET['header_type']) && $header_type == "localPost" && !empty($usercount) && !empty($nouser_id) && $checkuserid_post == $nouser_id && $checpostshare == $shareidcheckit && !empty($chec_post_likeid) && $local_view == "7"){
include "querypost.php";
?>
<script>
<?php
if($nofrom_id == $id){
?>
$(".posts_topdescrip span").text("قام <?php echo $fetnoti_usernm; ?> باعادة تدوين تدوينة خاصة بك");
<?php
}else {
?>
$(".posts_topdescrip span").text("قام <?php echo $fetnoti_usernm; ?> باعادة تدوين تدوينة خاصة بـ <?php echo $firsharenm; ?>");
<?php
}
?>
$(".posts_topdescrip svg").remove();
$(".posts_topdescrip").append("<img src='../upload/images/low/<?php echo $userimg_noti; ?>' />");
</script>
<?php
}else {
    include "error.php";
}
}
}
}
}
}
}
}
}else {}
?>
</div>
<?php
if(!$_GET){
?>
<div class="loading_poats">
<div class="ce-loaging-posts">
<div class="circle-posts"></div>
<div class="circle-small-posts"></div>
<div class="circle-big-posts"></div>
<div class="circle-inner-inner-posts"></div>
<div class="circle-inner-posts"></div>
</div>
</div>
<?php
}else{}
?>
</div>
<?php
if(!$_GET){
?>
<input type="hidden" id="postoffsetval" value="0" />
<script>
$(document).ready(function(){
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/index-post.php",
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
	url: "../ajax-php/index-post.php",
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

})
</script>
<?php
}else {}
?>
</div>
</div>
<?php
include "../body-html/left-main.php";
include "../body-html/ajax-php.php";
?>
<div class="scripts"></div>
</body>
</html>
