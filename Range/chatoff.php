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

$id = $info['id'];
?>

<?php


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

if($hour >= 12){
	$ampm = "صباحاً";
}else if($hour <= 12) {
	$ampm = "مساءً";
}

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


$id = $info['id'];

$to = $user;
$from = $id;

?>





<?php
if($_GET){

$offset = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['offset'])))));
$limit = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['limit'])))));
$offset = preg_replace('/ +/', '', $offset);
$limit = preg_replace('/ +/', '', $limit);

?>
<div class="chat-style">
<?php

$selecterer = mysql_query("SELECT * FROM chat WHERE type='style' AND from_id='$from' AND to_id='$to' OR type='style' AND from_id='$to' AND to_id='$from'");
while($fet = mysql_fetch_array($selecterer)){

$colorfull = $fet['color'];
$fonstylef = $fet['font_style'];

if(!empty($fet['color'])){
echo '
<script>
$(document).ready(function(){
function colories(){
$(".show-chat .mes-to-text .text_main_85 h3,#subcolor").css("background","'.$fet['color'].'");
$(".show-chat .send_svg").css("fill","'.$fet['color'].'");
$(".show-chat .mes-to-text .mestire").css("color","'.$fet['color'].'");
}
colories();
});
</script>
';
}
if(!empty($fet['font_style'])){
$stylerrz = substr($fet['font_style'],0,-2);
echo '
<style>
.show-chat .text_main_85 h3 {
'.$stylerrz.'
}
</style>
';
$hider = substr($fet['font_style'],-2);
echo '
<script>
$(document).ready(function(){
$(".show-chat .text_main_85 h3").attr("id","'.$hider.'");
});
</script>
';
}else {}

}

?>
</div>
<?php


$getochat = mysql_query("SELECT * FROM chat WHERE from_id='$from' AND to_id='$to' OR from_id='$to' AND to_id='$from' AND online!='insert' ORDER BY id DESC LIMIT $limit OFFSET $offset");
$getcocht = mysql_query("SELECT * FROM chat WHERE from_id='$from' AND to_id='$to' OR from_id='$to' AND to_id='$from' AND online!='insert'");
$numreslt = mysql_num_rows($getcocht);
$counter = 0;

while($fetchat = mysql_fetch_array($getochat)){
$counter++;
if ($counter == $numreslt) {
    $removechat = "true";
}
	
$toidrt = $fetchat['from_id'];
$selectpop = mysql_query("SELECT * FROM cerange WHERE id='$toidrt'");
while($fetuse = mysql_fetch_array($selectpop)){
	$userido = $fetuse['id'];
	$userimgo = $fetuse['pro_img'];
	$username = $fetuse['name'];
	$firstname = $fetuse['first_name'];
}

$selectre = mysql_query("SELECT * FROM cerange WHERE id='$user'");
while($fetre = mysql_fetch_array($selectre)){
	$usermid = $fetre['cemail_id'];
}

$mozid = $fetchat['from_id'];

if($fetchat['type'] == "message"){
if($id == $mozid){
?>

<div class="main_message_all" prepend="false" seen="<?php echo $fetchat['seen']; ?>">
<div class="message-to">
<div class="ifatar_rags">
<img draggable="false" src="../../upload/images/low/<?php echo $userimgo; ?>" class="afatar_img" />
</div>
<div class="mes-to-text">
<div class="text_main_85">
<?php 
if($fetchat['message'] == "___SEND_LIKEMESSAGE_TOKENVALUE"){
?>
<h3 class="emptytext">
<svg viewBox="0 0 24 24" class="likemessage_main" xmlns="http://www.w3.org/2000/svg">
<path d="M0 0h24v24H0z" fill="none"></path>
<path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
</svg>
</h3>
<?php
}else {
?>
<h3>
<?php echo $fetchat['message']; ?>
</h3>
<?php
}
?>
</div>
</div>
</div>
</div>
<?php
}
else {
?>
<div class="main_message_all" seen="<?php echo $fetchat['seen']; ?>">
<div class="message-from">
<div class="ifatar_rags">
<img draggable="false" src="../../upload/images/low/<?php echo $userimgo; ?>" class="afatar_img" />
</div>
<div class="mes-from-text">
<div class="text_main_85">
<?php 
if($fetchat['message'] == "___SEND_LIKEMESSAGE_TOKENVALUE"){
?>
<h3 class="emptytext">
<svg viewBox="0 0 24 24" class="likemessage_main" xmlns="http://www.w3.org/2000/svg">
<path d="M0 0h24v24H0z" fill="none"></path>
<path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
</svg>
</h3>
<?php
}else {
?>
<h3>
<?php echo $fetchat['message']; ?>
</h3>
<?php
}
?>
</div>
</div>
</div>
</div>
<?php
}
}
}
$selectpops = mysql_query("SELECT * FROM cerange WHERE id='$user'");
while($fetuses = mysql_fetch_array($selectpops)){
	$userimgo = $fetuses['pro_img'];
}

?>
</div>
<script>
<?php
if(!empty($colorfull)){
echo '
$(".chat#'.$usermid.' .close_minicht_9989, .setting_minicht_9989").css("color","'.$colorfull.'");
$(".chat#'.$usermid.' .infoget_minicht_9989 svg,.send_svg_7959").css("fill","'.$colorfull.'");
$(".chat#'.$usermid.' .mes-to-text .text_main_85 h3,#subcolor").css("background","'.$colorfull.'");
$(".chat#'.$usermid.' .send_svg").css("fill","'.$colorfull.'");
$(".chat#'.$usermid.' .mes-to-text .mestire").css("color","'.$colorfull.'");
';
if(!empty($fonstylef)){
$stylerrz = substr($fonstylef,0,-2);
echo '
<style>
.chat#'.$usermid.' .text_main_85 h3 {
'.$stylerrz.'
}
</style>
';
$hider = substr($fonstylef,-2);
echo '
<script>
$(document).ready(function(){
$(".chat#'.$usermid.' .text_main_85 h3").attr("id","'.$hider.'");
});
</script>
';
}else {}
}else {}
if($offset == 0){
?>
$("#hidescrollchk").val("true");
$(".right_img").append('<img src="../../upload/images/low/<?php echo $userimgo; ?>" />');
doscroll();
appendmes();
$(document).ready(function(){
	doscroll<?php echo $usermid; ?>
});
<?php
}else {
?>
prependmes();
<?php
}
if($removechat == "true"){
?>
$(".showbox_range").remove();
<?php
}else{}
?>
</script>
<?php
}
?>

