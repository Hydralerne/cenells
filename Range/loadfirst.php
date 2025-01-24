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
if(isset($_POST['setitnow'])){
$from = $id;
$to = $user;
$setyopo = mysql_query("SELECT * FROM chat WHERE type='type_check' AND to_id='$to' AND from_id='$from'");
while($fetch = mysql_fetch_assoc($setyopo)){
	$checit = $fetch['id'];
}
if(empty($checit)){
$insertit = mysql_query("INSERT INTO chat(from_id,to_id,type,msid,online) VALUES('$from','$to','type_check','true','insert')");	
}else {
$updateit = mysql_query("UPDATE chat SET msid='true',online='insert' WHERE type='type_check' AND from_id='$from' AND to_id='$to'");
}
}
if(isset($_POST['setofnow'])){
$from = $id;
$to = $user;
$setyopo = mysql_query("SELECT * FROM chat WHERE type='type_check' AND to_id='$to' AND from_id='$from'");
while($fetch = mysql_fetch_assoc($setyopo)){
	$checit = $fetch['id'];
}
if(empty($checit)){
$insertit = mysql_query("INSERT INTO chat(from_id,to_id,type,msid,online) VALUES('$from','$to','type_check','false','insert')");	
}else {
$updateit = mysql_query("UPDATE chat SET msid='false',online='insert' WHERE type='type_check' AND from_id='$from' AND to_id='$to'");
}
}
?>


<?php

if(isset($_GET['getype'])){

$from = $user;
$to = $id;

$querysesioer = mysql_query("SELECT * FROM chat WHERE type='type_check' AND from_id='$from' AND to_id='$to' AND online='insert'");
while($fetchater = mysql_fetch_array($querysesioer)){
$chatider = $fetchater['id'];
if(!empty($chatider)){
$finisher = mysql_query("UPDATE chat SET online='send' WHERE id='$chatider'");
if(isset($finisher)){
$toidrter = $fetchater['from_id'];
$selectpoper = mysql_query("SELECT * FROM cerange WHERE id='$toidrter'");
while($fetuseer = mysql_fetch_array($selectpoper)){
	$userimgoer = $fetuseer['pro_img'];
	$userid = $fetuseer['cemail_id'];
}

if($fetchater['msid'] == "true"){
?>
<script>
$("#<?php echo $userid; ?> #hidechecknono").val("true");
dofademat<?php echo $userid; ?>();
$("#hidechecknono").val("true");
dofademat();
</script>
<?php
}else {
?>
<script>
$("#<?php echo $userid; ?> #hidechecknono").val("false");
dofademat<?php echo $userid; ?>();
$("#hidechecknono").val("false");
dofademat();
</script>
<?php
}

}
}
}
}
?>