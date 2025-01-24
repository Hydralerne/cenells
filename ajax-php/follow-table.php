<?php

include ("../connectdb/index.php");

?>


<?php

if(isset($_POST['subunfol'])){

$folid = addslashes(htmlspecialchars(strip_tags(trim($_POST['userid']))));
$folid = preg_replace('/ +/', '', $folid);

$delfol = mysql_query("DELETE FROM follow WHERE follow='$id' AND following='$folid'");
$delnoti = mysql_query("DELETE FROM follow_alert WHERE user_id='$id' AND to_id='$folid' AND forse='follow'");
?>
<svg viewBox="0 0 24 24" id="foll_svg32" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
</svg>
<?php
}
if(isset($_POST['subgofol'])){
$folid = addslashes(htmlspecialchars(strip_tags(trim($_POST['userid']))));
$folid = preg_replace('/ +/', '', $folid);
$query = mysql_query("SELECT account_secrit FROM info WHERE user_id='$folid'");
while($fetch = mysql_fetch_array($query)){
	$beact = $fetch['account_secrit'];
}

if($beact == "per"){
$sertw = mysql_query("SELECT * FROM follow WHERE follow='$id' AND following='$folid'");
while($retio = mysql_fetch_array($sertw)){
	$ewqop = $retio['id'];
}
if(empty($ewqop)){
$infol = mysql_query("INSERT INTO follow(follow,following,follow_date,follow_type,follow_active) VALUES('$id','$folid','$timedate','req','false')");
$inalert = mysql_query("INSERT INTO follow_alert(user_id,to_id,forse,type,date,seen,online) VALUES('$id','$folid','follow','per_follow','$timedate','no','insert')");
}
?>
<svg viewBox="0 0 24 24" class="requestedsvg_table" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
</svg>
<?php
}
else {
$qqque = mysql_query("SELECT * FROM follow WHERE follow='$id' AND following='$folid'");
while($ertre = mysql_fetch_array($qqque)){
	$eee = $ertre['id'];
}
if(empty($eee)){
$infol = mysql_query("INSERT INTO follow(follow,following,follow_date,follow_type,follow_active) VALUES('$id','$folid','$timedate','pub','true')");
$inalert = mysql_query("INSERT INTO follow_alert(user_id,to_id,forse,type,date,seen,online) VALUES('$id','$folid','follow','pub_follow','$timedate','no','insert')");
}
?>
<svg class="truefol_like" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
</svg>
<svg viewBox="0 0 24 24" class="folfol_like" class="hide-folsvg" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<?php
}
}
?>
