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
	$month = "�����";
}else if(date("m") == "02"){
	$month = "������";
}else if(date("m") == "03"){
	$month = "����";
}else if(date("m") == "04"){
	$month = "�����";
}else if(date("m") == "05"){
	$month = "����";
}else if(date("m") == "06"){
	$month = "�����";
}else if(date("m") == "07"){
	$month = "July";
}else if(date("m") == "08"){
	$month = "�����";
}else if(date("m") == "09"){
	$month = "������";
}else if(date("m") == "10"){
	$month = "������";
}else if(date("m") == "11"){
	$month = "������";
}else if(date("m") == "12"){
	$month = "������";
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
	$ampm = "������";
}else if($hour <= 12) {
	$ampm = "�����";
}

// days name
if(date("l") == "Saturday"){
	$dayl = "�����";
}else if(date("l") == "Sunday"){
	$dayl = "�����";	
}else if(date("l") == "Monday"){
	$dayl = "�������";	
}else if(date("l") == "Tuesday"){
	$dayl = "��������";
}else if(date("l") == "Wednesday"){
	$dayl = "��������";	
}else if(date("l") == "Thursday"){
	$dayl = "������";
}else if(date("l") == "Friday"){
	$dayl = "������";	
}

$id = $info['id'];

$timedate = "$dayl, $day $month (2016) ������ $hour:$min $ampm";

?>
