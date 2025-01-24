<?php

include ("../connectdb/index.php");


if($_POST['getcount']){

	$alertcouqu = mysql_query("SELECT COUNT(id) FROM alert WHERE to_id='$id' AND seen='no'");
	$aralertcou = mysql_result($alertcouqu,0);
	
if($aralertcou > 99){
	$alertcou = "+99";
}else {
	$alertcou = $aralertcou;
}

if($alertcou !== "0"){
echo $alertcou;
}
}

if($_POST['getfolcount']){

	$alertcouqu = mysql_query("SELECT COUNT(id) FROM follow_alert WHERE to_id='$id' AND seen='no'");
	$aralertcou = mysql_result($alertcouqu,0);
	
if($aralertcou > 99){
	$alertcou = "+99";
}else {
	$alertcou = $aralertcou;
}

if($alertcou !== "0"){
echo $alertcou;
}
}
?>