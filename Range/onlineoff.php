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

?>



<?php

if(isset($_GET['getnow'])){

$from = $user;
$to = $id;

$querysesio = mysql_query("SELECT * FROM chat WHERE type='message' AND from_id='$from' AND to_id='$to' AND online='insert' OR type='alert' AND from_id='$from' AND to_id='$to' AND online='insert' ORDER BY id DESC");
while($fetchat = mysql_fetch_array($querysesio)){
$chatid = $fetchat['id'];
if(!empty($chatid)){
$finish = mysql_query("UPDATE chat SET online='send' WHERE id='$chatid'");
if(isset($finish)){
$toidrt = $fetchat['from_id'];
$selectpop = mysql_query("SELECT * FROM cerange WHERE id='$toidrt'");
while($fetuse = mysql_fetch_array($selectpop)){
	$userimgo = $fetuse['pro_img'];
	$userid = $fetuse['cemail_id'];
}

if($fetchat['type'] == "message"){
?>
<div class="main_message_all">
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
<script>
var color = $("#<?php echo $userid; ?> .send_svg_7959").css("fill");
$(".likemessage_main").css('fill',color);
</script>
<?php
}else {
?>
<h3>
<?php
echo $fetchat['message'];
}
?>
</h3>
</div>
</div>
</div>
</div>
<script>
$("#hidedivappend").val("true");
</script>
<?php
}
if($fetchat['type'] == "alert" && $fetchat['alert'] == "color"){
?>
<div class="main_message_all">
<div class="border_back" style="border-bottom: 1px solid <?php echo $fetchat['color']; ?>;"></div>
<div class="body_outborder">
<p style="color: <?php echo $fetchat['color']; ?>;border: 1px solid <?php echo $fetchat['color']; ?>">
تم تغيير الوان المحادثة
</p>
</div>
</div>
<?php
echo '
<script>
$(document).ready(function(){
$(".mes-to-text .text_main_85 h3,#subcolor").css("background","'.$fetchat['color'].'");
$(".mes-to-text .mestire").css("color","'.$fetchat['color'].'");
});
</script>
';

}
?>
<script>
$(".show-chat").animate({ scrollTop: $('.show-chat').prop("scrollHeight")},0);
setTimeout(function(){
$("#<?php echo $userid; ?> .chat_body_9989").animate({ scrollTop: $('#<?php echo $userid; ?> .chat_body_9989')[0].scrollHeight},500);
},100);
if($(".chat#<?php echo $userid; ?> #hidenfocusmainmes").val() == "true"){
	var audio = document.getElementById("noti_message_main");
	audio.play();
}else {}
</script>
<?php
}
}
}
}
?>

