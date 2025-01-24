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

// follow alert request

if($_POST['sufollow']){

$querya = mysql_query("SELECT * FROM alert WHERE user_id='$id' AND forse='follow' ORDER BY id DESC");
while($fetca = mysql_fetch_array($querya)){

if($fetca['type'] == "activ_follow"){

?>

<div class="mini_alert" id="mif<?php echo $fetca['id']; ?>">

<?php
$frid = $fetca['to_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$frid'");
while($fetea = mysql_fetch_array($fetequ)){

$user_img = $fetea['pro_img'];
$user_name = $fetea['name'];

if($fetea['c_sex'] == "male"){
	$sex_follow = "لقد وافق علي طلبك لمتابعته";
}else{
	$sex_follow = "لقد وافقت علي طلبك لمتابعتها";
}

}
?>
<img src="../../upload/images/<?php echo $user_img; ?>" id="alert_user_img" />
<a href="../../<?php echo $frid ?>">
<p><?php echo $user_name; ?></p>
</a>
<span><?php echo $sex_follow; ?></span>
<button type="button" id="delfolaaa">حذف</button>
<h5><?php echo $fetca['date']; ?></h5>
<script>
$("#addf").click(function(){
	setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subfolalseen: "submit",alertid: "<?php echo $fetca['id']; ?>"});
},1000);
});
$("#mif<?php echo $fetca['id']; ?> #delfolaaa").click(function(){
	alert("#mif<?php echo $fetca['id']; ?>");
setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subnofollower: "submit",userfolider: "<?php echo $fetca['user_id']; ?>"});
},1000);
});
</script>
</div>

<?php

}

}

$queryf = mysql_query("SELECT * FROM alert WHERE to_id='$id' AND forse='follow' ORDER BY id DESC");
while($fetcf = mysql_fetch_array($queryf)){
if($fetcf['type'] == "per_follow"){
?>
<div class="mini_alert" id="mif<?php echo $fetcf['id']; ?>">

<?php
$fridf = $fetcf['user_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$fridf'");
while($fetef = mysql_fetch_array($fetequ)){

$user_imgf = $fetef['pro_img'];
$user_namef = $fetef['name'];

if($fete['c_sex'] == "male"){
	$sex_follow = "ارسل لك طلب متابعة";
}else {
	$sex_follow = "ارسلت لك طلب متابعة";
}

}
?>
<img src="../../upload/images/<?php echo $user_imgf; ?>" id="alert_user_img" />
<a href="../../<?php echo $fridf ?>">
<p><?php echo $user_namef; ?></p>
</a>

<span><?php echo $sex_follow; ?></span>

<button type="button" class="<?php echo "yes_".$fetcf['id']."_follow"; ?>" id="yesfollow">موافق</button>
<button type="button" class="<?php echo "no_".$fetcf['id']."_follow"; ?>" id="nofollow">حذف</button>

<h5><?php echo $fetcf['date']; ?></h5>
<script>

$(".<?php echo "yes_".$fetcf['id']."_follow"; ?>").click(function(){
    $.post("../../ajax-php/follow-alert.php", {subfollowing: "submit",userfolid: "<?php echo $fetcf['user_id']; ?>"});
});

$(".<?php echo "no_".$fetcf['id']."_follow"; ?>").click(function(){
    $.post("../../ajax-php/follow-alert.php", {subnofollow: "submit",userfolid: "<?php echo $fetcf['user_id']; ?>"});
});

$("#addf").click(function(){
	setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subfolalseen: "submit",alertid: "<?php echo $fetcf['id']; ?>"});
},1000);
});

</script>
</div>

<?php
}
if($fetcf['type'] == "pub_follow"){
?>
<div class="mini_alert" id="mif<?php echo $fetcf['id']; ?>">

<?php
$frid = $fetcf['user_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$frid'");
while($fete = mysql_fetch_array($fetequ)){

$user_img = $fete['pro_img'];
$user_name = $fete['name'];

if($fete['c_sex'] == "male"){
	$sex_follow = "قام بمتابعتك ارسل له التحية";
}else{
	$sex_follow = "قامت بمتابعتك ارسل لها التحية";
}

}
?>
<img src="../../upload/images/<?php echo $user_img; ?>" id="alert_user_img" />
<a href="../../<?php echo $frid ?>">
<p><?php echo $user_name; ?></p>
</a>

<span><?php echo $sex_follow; ?></span>
<button type="button" id="delfoluuu">حذف</button>
<h5><?php echo $fetcf['date']; ?></h5>
<script>
$("#addf").click(function(){
	setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subfolalseen: "submit",alertid: "<?php echo $fetcf['id']; ?>"});
},1000);
});
$("#mif<?php echo $fetcf['id']; ?> #delfoluuu").click(function(){
	setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subnofollow: "submit",userfolid: "<?php echo $fetcf['user_id']; ?>"});
},1000);
});
</script>
</div>
<?php
}
if($fetcf['type'] == "activ_follow"){
?>

<div class="mini_alert" id="mif<?php echo $fetcf['id']; ?>">

<?php
$frid = $fetcf['user_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$frid'");
while($fete = mysql_fetch_array($fetequ)){

$user_img = $fete['pro_img'];
$user_name = $fete['name'];

if($fete['c_sex'] == "male"){
	$sex_follow = "لقد وافقت علي طلبه لمتابعتك";
}else{
	$sex_follow = "لقد وافقت علي طلبها لمتابعتك";
}

}
?>
<img src="../../upload/images/<?php echo $user_img; ?>" id="alert_user_img" />
<a href="../../<?php echo $frid ?>">
<p><?php echo $user_name; ?></p>
</a>
<span><?php echo $sex_follow; ?></span>
<button type="button" class="delsubrrt" id="delfolaaa">حذف</button>
<h5><?php echo $fetcf['date']; ?></h5>
<script>
$("#addf").click(function(){
	setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subfolalseen: "submit",alertid: "<?php echo $fetcf['id']; ?>"});
},1000);
});
$("#mif<?php echo $fetcf['id']; ?> .delsubrrt").click(function(){
	setTimeout(function(){
    $.post("../../ajax-php/follow-alert.php", {subnofollow: "submit",userfolid: "<?php echo $fetcf['user_id']; ?>"});
},1000);
});
</script>
</div>

<?php
}
?>


<?php

}

}

?>






