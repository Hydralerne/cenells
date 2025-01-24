<?php

include ("../connectdb/index.php");

?>

<?php

if(isset($_POST['subfollowing'])){
	$filluserfolid = addslashes(htmlspecialchars(strip_tags(trim($_POST['userfolid']))));
	$userfolid = preg_replace('/ +/', '', $filluserfolid);
	$updtealrt = mysql_query("UPDATE follow_alert SET type='activ_follow' WHERE to_id='$id' AND user_id='$userfolid'");
	$updatefol = mysql_query("UPDATE follow SET follow_type='per',follow_active='true' WHERE follow='$userfolid' AND following='$id'");
	$selectqro = mysql_query("SELECT COUNT(id) FROM follow_alert WHERE user_id='' AND to_id='' AND forse='' AND type=''");
	$countfola = mysql_result($selectqro,0);
	if($countfola == 0){
	$inseealrt = mysql_query("INSERT INTO follow_alert(user_id,to_id,forse,type,date,seen) VALUES('$id','$userfolid','follow','accept_follow','$timedate','no')");
	}else {}

}
if(isset($_POST['subnofollow'])){
	$filluserfolid = addslashes(htmlspecialchars(strip_tags(trim($_POST['userfolid']))));
	$userfolid = preg_replace('/ +/', '', $filluserfolid);
	$updtealrt = mysql_query("DELETE FROM follow_alert WHERE forse='follow' AND to_id='$id' AND user_id='$userfolid'");
	$updatefol = mysql_query("DELETE FROM follow WHERE follow='$userfolid' AND following='$id'");
}
// seen alert noti

if(isset($_POST['subalertseen'])){
	$fillalertid = addslashes(htmlspecialchars(strip_tags(trim($_POST['alertid']))));
	$alertid = preg_replace('/ +/', '', $fillalertid);

	$updateseen = mysql_query("UPDATE follow_alert SET seen='yes' WHERE to_id='$id' AND id='$alertid'");
	
}


if(isset($_POST['subfolalseen'])){
	$fillalertid = addslashes(htmlspecialchars(strip_tags(trim($_POST['alertid']))));
	$alertid = preg_replace('/ +/', '', $fillalertid);
	
	$updateseen = mysql_query("UPDATE follow_alert SET seen='yes' WHERE to_id='$id' AND id='$alertid'");
	
}
?>

