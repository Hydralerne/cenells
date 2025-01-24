<?php
ob_start();
session_start();
mysql_connect('127.0.0.1','root','asdwqe123') or die(mysql_error());
mysql_select_db('cemail') or die(mysql_error());


function profile_connected(){
	
	$data = array();
	$c_email = $_SESSION['c_email'];
	$query = mysql_query("SELECT * FROM users WHERE c_email='$c_email'");
	
	
	
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

$timedate = "$dayl, $day $month (2016) الساعة $hour:$min $ampm";

?>


<?php

if($_POST['getnotimin']){



$query = mysql_query("SELECT * FROM alert WHERE to_id='$id' AND seen='no' AND forse!='follow' ORDER BY id DESC");
while($fetc = mysql_fetch_array($query)){
$empty = "no";



if($fetc['type'] == "comment_post"){
?>
<div class="mini_alert">

<?php
$frid = $fetc['user_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$frid'");
while($fete = mysql_fetch_array($fetequ)){

$user_img = $fete['pro_img'];
$user_name = $fete['name'];

if($fete['c_sex'] == "male"){
	$sex = "علق علي منشور خاص بك";
}else {
	$sex = "علقت علي منشور خاص بك";
}

}
?>
<img src="../../upload/images/<?php echo $user_img; ?>" id="alert_user_img" />
<a href="../../<?php echo $frid ?>">
<p><?php echo $user_name; ?></p>
</a>

<span>علق علي منشور خاص بك</span>
<?php
if(empty($fetc['for_to'])){
$postuy = $fetc['for_id'];
}else {
$postuy = $fetc['for_to'];	
}

$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){

if(!empty($frto['post_video'])){
	$post_type = "media";
}else if(!empty($frto['post_img'])){
	$post_type = "media";
}else {
	if(!empty($frto['post_text'])){
		$post_type = "text";
	}
}

}

if($post_type == "media"){
	echo '<img id="media_post_87" draggable="false" src="../../img/profile/type-post.png" />';
}
if($post_type == "text"){
	echo '<img id="text_post_87" draggable="false" src="../../img/profile/write-post.png">';
}

?>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<h5><?php echo $fetc['date']; ?></h5>


<script>
$(".noti_ico").click(function(){
	setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subalertseen: "submit",alertid: "<?php echo $fetc['id']; ?>"});
},1000);
});
</script>


</div>
<?php
}
if($fetc['type'] == "reply_comment"){
?>
<div class="mini_alert">

<?php
$frid = $fetc['user_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$frid'");
while($fete = mysql_fetch_array($fetequ)){

$user_img = $fete['pro_img'];
$user_name = $fete['name'];

if($fete['c_sex'] == "male"){
	$sex = "رد علي تعليقك علي منشور";
}else {
	$sex = "ردت علي تعليقك علي منشور";
}

}

$postyy = $fetc['for_to'];
$wyyqu = mysql_query("SELECT user_id FROM posts WHERE id='$postyy'");
while($erto = mysql_fetch_array($wyyqu)){
	$whoid = $erto['user_id'];
$serro = mysql_query("SELECT first_name,id FROM users WHERE id='$whoid'");
while($erty = mysql_fetch_array($serro)){
	if($erty['id'] == $info['id']){
	$forname == "خاص بك";
	}else{
	$forname = $erty['first_name'];
}
}
}

$finalert = $forname;
if(strlen($finalert) > 6){
	$rr = "".substr($finalert,0,6)."..";
}else {
	$rr = $finalert;
}

?>
<img src="../../upload/images/<?php echo $user_img; ?>" id="alert_user_img" />
<a href="../../<?php echo $frid ?>">
<p><?php echo $user_name; ?></p>
</a>

<span><?php echo $rr; echo " "; echo $sex; ?></span>
<?php
if(empty($fetc['for_to'])){
$postuy = $fetc['for_id'];
}else {
$postuy = $fetc['for_to'];	
}

$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){

if(!empty($frto['post_video'])){
	$post_type = "media";
}else if(!empty($frto['post_img'])){
	$post_type = "media";
}else {
	if(!empty($frto['post_text'])){
		$post_type = "text";
	}
}

}

if($post_type == "media"){
	echo '<img id="media_post_87" draggable="false" src="../../img/profile/type-post.png" />';
}
if($post_type == "text"){
	echo '<img id="text_post_87" draggable="false" src="../../img/profile/write-post.png">';
}

?>


<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<h5><?php echo $fetc['date']; ?></h5>
<script>
$(".noti_ico").click(function(){
	setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subalertseen: "submit",alertid: "<?php echo $fetc['id']; ?>"});
},1000);
});
</script>
</div>
<?php
}
if($fetc['type'] == "like_post"){
?>
<div class="mini_alert">

<?php
$frid = $fetc['user_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$frid'");
while($fete = mysql_fetch_array($fetequ)){

$user_img = $fete['pro_img'];
$user_name = $fete['name'];
if($fete['c_sex'] == "male"){
	$sex = "اعجب بمنشور خاص بك";
}else {
	$sex = "اعجبت بمنشور خاص بك";
}
}
?>
<img src="../../upload/images/<?php echo $user_img; ?>" id="alert_user_img" />
<a href="../../<?php echo $frid ?>">
<p><?php echo $user_name; ?></p>
</a>

<span><?php echo $sex; ?></span>
<?php
if(empty($fetc['for_to'])){
$postuy = $fetc['for_id'];
}else {
$postuy = $fetc['for_to'];	
}

$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){

if(!empty($frto['post_video'])){
	$post_type = "media";
}else if(!empty($frto['post_img'])){
	$post_type = "media";
}else {
	if(!empty($frto['post_text'])){
		$post_type = "text";
	}
}

}

if($post_type == "media"){
	echo '<img id="media_post_87" draggable="false" src="../../img/profile/type-post.png" />';
}
if($post_type == "text"){
	echo '<img id="text_post_87" draggable="false" src="../../img/profile/write-post.png">';
}

?>


<img id="like_alert_ico" src="../../img/icons/sublike.png" />
<h5><?php echo $fetc['date']; ?></h5>
<script>
$(".noti_ico").click(function(){
	setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subalertseen: "submit",alertid: "<?php echo $fetc['id']; ?>"});
},1000);
});
</script>
</div>
<?php
}
if($fetc['type'] == "dislike_post"){
?>
<div class="mini_alert">

<?php
$frid = $fetc['user_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$frid'");
while($fete = mysql_fetch_array($fetequ)){

$user_img = $fete['pro_img'];
$user_name = $fete['name'];

if($fete['c_sex'] == "male"){
	$sex = "لم يعجب بمنشور خاص بك";
}else {
	$sex = "لم تعجب بمنشور خاص بك";
}

}
?>
<img src="../../upload/images/<?php echo $user_img; ?>" id="alert_user_img" />
<a href="../../<?php echo $frid ?>">
<p><?php echo $user_name; ?></p>
</a>

<span><?php echo $sex; ?></span>
<?php
if(empty($fetc['for_to'])){
$postuy = $fetc['for_id'];
}else {
$postuy = $fetc['for_to'];	
}

$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){

if(!empty($frto['post_video'])){
	$post_type = "media";
}else if(!empty($frto['post_img'])){
	$post_type = "media";
}else {
	if(!empty($frto['post_text'])){
		$post_type = "text";
	}
}

}

if($post_type == "media"){
	echo '<img id="media_post_87" draggable="false" src="../../img/profile/type-post.png" />';
}
if($post_type == "text"){
	echo '<img id="text_post_87" draggable="false" src="../../img/profile/write-post.png">';
}

?>


<img id="dislike_alert_ico" src="../../img/icons/subdislike.png" />
<h5><?php echo $fetc['date']; ?></h5>
<script>
$(".noti_ico").click(function(){
	setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subalertseen: "submit",alertid: "<?php echo $fetc['id']; ?>"});
},1000);
});
</script>
</div>
<?php
}
if($fetc['type'] == "like_comment"){
?>
<div class="mini_alert">

<?php
$frid = $fetc['user_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$frid'");
while($fete = mysql_fetch_array($fetequ)){

$user_img = $fete['pro_img'];
$user_name = $fete['name'];

if($fete['c_sex'] == "male"){
	$sex = "اعجب بتعليقك علي منشور";
}else {
	$sex = "اعجبت بتعليقك علي منشور";
}

}

$postyy = $fetc['for_to'];
$wyyqu = mysql_query("SELECT user_id FROM posts WHERE id='$postyy'");
while($erto = mysql_fetch_array($wyyqu)){
	$whoid = $erto['user_id'];
$serro = mysql_query("SELECT first_name,id FROM users WHERE id='$whoid'");
while($erty = mysql_fetch_array($serro)){
	if($erty['id'] == $info['id']){
	$forname == "خاص بك";
	}else{
	$forname = $erty['first_name'];
}
}
}

$finalert = $forname;
if(strlen($finalert) > 6){
	$rr = "".substr($finalert,0,6)."..";
}else {
	$rr = $finalert;
}

?>
<img src="../../upload/images/<?php echo $user_img; ?>" id="alert_user_img" />
<a href="../../<?php echo $frid ?>">
<p><?php echo $user_name; ?></p>
</a>

<span><?php echo $rr; echo " "; echo $sex; ?></span>
<?php
if(empty($fetc['for_to'])){
$postuy = $fetc['for_id'];
}else {
$postuy = $fetc['for_to'];	
}

$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){

if(!empty($frto['post_video'])){
	$post_type = "media";
}else if(!empty($frto['post_img'])){
	$post_type = "media";
}else {
	if(!empty($frto['post_text'])){
		$post_type = "text";
	}
}

}

if($post_type == "media"){
	echo '<img id="media_post_87" draggable="false" src="../../img/profile/type-post.png" />';
}
if($post_type == "text"){
	echo '<img id="text_post_87" draggable="false" src="../../img/profile/write-post.png">';
}

?>


<img id="like_alert_ico" src="../../img/icons/sublike.png" />

<h5><?php echo $fetc['date']; ?></h5>
<script>
$(".noti_ico").click(function(){
	setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subalertseen: "submit",alertid: "<?php echo $fetc['id']; ?>"});
},1000);
});
</script>
</div>
<?php
}
if($fetc['type'] == "dislike_comment"){
?>
<div class="mini_alert">

<?php

$frid = $fetc['user_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$frid'");
while($fete = mysql_fetch_array($fetequ)){

$user_img = $fete['pro_img'];
$user_name = $fete['name'];

if($fete['c_sex'] == "male"){
	$sex = "لم يعجب بتعليقك علي منشور";
}else {
	$sex = "لم تعجب بتعليقك علي منشور";
}

}

$postyy = $fetc['for_to'];
$wyyqu = mysql_query("SELECT user_id FROM posts WHERE id='$postyy'");
while($erto = mysql_fetch_array($wyyqu)){
	$whoid = $erto['user_id'];
$serro = mysql_query("SELECT first_name,id FROM users WHERE id='$whoid'");
while($erty = mysql_fetch_array($serro)){
	if($erty['id'] == $info['id']){
	$forname == "خاص بك";
	}else{
	$forname = $erty['first_name'];
}
}
}

$finalert = $forname;
if(strlen($finalert) > 6){
	$rr = "".substr($finalert,0,6)."..";
}else {
	$rr = $finalert;
}

?>
<img src="../../upload/images/<?php echo $user_img; ?>" id="alert_user_img" />
<a href="../../<?php echo $frid; ?>">
<p><?php echo $user_name; ?></p>
</a>

<span><?php echo $rr; echo " "; echo $sex; ?></span>
<?php
if(empty($fetc['for_to'])){
$postuy = $fetc['for_id'];
}else {
$postuy = $fetc['for_to'];	
}

$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){

if(!empty($frto['post_video'])){
	$post_type = "media";
}else if(!empty($frto['post_img'])){
	$post_type = "media";
}else {
	if(!empty($frto['post_text'])){
		$post_type = "text";
	}
}

}

if($post_type == "media"){
	echo '<img id="media_post_87" draggable="false" src="../../img/profile/type-post.png" />';
}
if($post_type == "text"){
	echo '<img id="text_post_87" draggable="false" src="../../img/profile/write-post.png">';
}

?>


<img id="dislike_alert_ico" src="../../img/icons/subdislike.png" />

<h5><?php echo $fetc['date']; ?></h5>
<script>
$(".noti_ico").click(function(){
	setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subalertseen: "submit",alertid: "<?php echo $fetc['id']; ?>"});
},1000);
});
</script>
</div>
<?php
}
?>



<?php


}


if(empty($empty)){
	echo "
	<img src='../../img/alert.png' id='empty_alert_ico' />
	<span id='emptyspanalert'>عفواً صندوق الاشعارات لديك فارغ</span>
	";
}
?>


<?

}

?>


