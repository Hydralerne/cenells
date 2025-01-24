<?php

include ("../connectdb/index.php");

?>


<?php

if(isset($_POST['follow'])){

$folid = addslashes(htmlspecialchars(strip_tags(trim($_POST['user_id']))));
$folid = preg_replace('/ +/', '', $folid);

$query = mysql_query("SELECT account_secrit FROM info WHERE user_id='$folid'");
while($fetch = mysql_fetch_array($query)){
	$beact = $fetch['account_secrit'];
}

if($beact == "pub"){
$qqque = mysql_query("SELECT * FROM follow WHERE follow='$id' AND following='$folid' AND follow_type='pub'");
while($ertre = mysql_fetch_array($qqque)){
	$eee = $ertre['id'];
}
if(empty($eee)){
$infol = mysql_query("INSERT INTO follow(follow,following,follow_date,follow_type,follow_active) VALUES('$id','$folid','$timedate','pub','true')");
$inalert = mysql_query("INSERT INTO follow_alert(user_id,to_id,forse,type,date,seen,online) VALUES('$id','$folid','follow','pub_follow','$timedate','no','insert')");
}
?>
<script>
$(document).ready(function(){
$(".follow button").removeAttr("disabled");
$(".followit_inset_45 button").removeAttr("disabled");
$(".follow button").attr("doing","unfollow");
$(".followit_inset_45 button").attr("doing","unfollow");
$(".follow button").addClass("unfollow");
$(".follow button").addClass("unfollowstyle");
var html = 'Following' +
    '<svg class="unfolsvg averto" id="fol-img" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M0 0h24v24H0z" fill="none"/>' +
    '<path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>' +
    '</svg>' +
    '<svg style="visibility:hidden;" viewBox="0 0 24 24" id="fol-img" class="hide-folsvg averto" xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>' +
'</svg>';
var xmls = 'تتابعة' +
    '<svg class="unfolsvgit_45 avertoit_45" id="folimg_45" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M0 0h24v24H0z" fill="none"/>' +
    '<path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>' +
    '</svg>' +
    '<svg style="visibility:hidden;" viewBox="0 0 24 24" id="folimg_45" class="lolsvgit_45fol avertoit_45" xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>' +
'</svg>';
$(".follow button").html(html);
$(".followit_inset_45 button").html(xmls);
$(".follow button").mouseenter(function(){
	$(".unfolsvg").css("visibility","hidden");
	$(".hide-folsvg").css("visibility","visible");
});

$(".follow button").mouseleave(function(){
	$(".unfolsvg").css("visibility","visible");
	$(".hide-folsvg").css("visibility","hidden");
});
$(".followit_inset_45 button").mouseenter(function(){
	$(".unfolsvgit_45").css("visibility","hidden");
	$(".lolsvgit_45fol").css("visibility","visible");
});
$(".followit_inset_45 button").mouseleave(function(){
	$(".unfolsvgit_45").css("visibility","visible");
	$(".lolsvgit_45fol").css("visibility","hidden");
});
});
</script>
<?php
}
if($beact == "per"){
$sertw = mysql_query("SELECT * FROM follow WHERE follow='$id' AND following='$folid' AND follow_type='req'");
while($retio = mysql_fetch_array($sertw)){
	$ewqop = $retio['id'];
}
if(empty($ewqop)){
$infol = mysql_query("INSERT INTO follow(follow,following,follow_date,follow_type,follow_active) VALUES('$id','$folid','$timedate','req','false')");
$inalert = mysql_query("INSERT INTO follow_alert(user_id,to_id,forse,type,date,seen,online) VALUES('$id','$folid','follow','per_follow','$timedate','no','insert')");
}
?>
<script>
$(document).ready(function(){
$(".follow button").removeAttr("disabled");
$(".followit_inset_45 button").removeAttr("disabled");
$(".follow button").attr("doing","unfollow");
$(".followit_inset_45 button").attr("doing","unfollow");
$(".follow button").addClass("unfollow");
$(".follow button").addClass("requested");
var html = 'Requested' +
'<svg viewBox="0 0 24 24"  class="unfolsvg requestedsvg" id="fol-img" xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>' +
    '<path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>' +
    '</svg>'+
    '<svg style="visibility:hidden;" viewBox="0 0 24 24" id="fol-img" class="hide-folsvg" xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>' +
'</svg>';
var xmls = 'مطلوب' +
'<svg viewBox="0 0 24 24"  class="unfolsvgit_45 requestedsvgit_45" id="folimg_45" xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>' +
    '<path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>' +
    '</svg>'+
    '<svg style="visibility:hidden;" viewBox="0 0 24 24" id="folimg_45" class="lolsvgit_45fol" xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>' +
'</svg>';
$(".follow button").html(html);
$(".followit_inset_45 button").html(xmls);
$(".follow button").mouseenter(function(){
	$(".unfolsvg").css("visibility","hidden");
	$(".hide-folsvg").css("visibility","visible");
});
$(".follow button").mouseleave(function(){
	$(".unfolsvg").css("visibility","visible");
	$(".hide-folsvg").css("visibility","hidden");
});
$(".followit_inset_45 button").mouseenter(function(){
	$(".unfolsvgit_45").css("visibility","hidden");
	$(".lolsvgit_45fol").css("visibility","visible");
});
$(".followit_inset_45 button").mouseleave(function(){
	$(".unfolsvgit_45").css("visibility","visible");
	$(".lolsvgit_45fol").css("visibility","hidden");
});
});
</script>
<?php
}
}

if(isset($_POST['unfollow'])){

$folid = addslashes(htmlspecialchars(strip_tags(trim($_POST['user_id']))));
$folid = preg_replace('/ +/', '', $folid);
$delfol = mysql_query("DELETE FROM follow WHERE follow='$id' AND following='$folid'");		
$delnoi = mysql_query("DELETE FROM follow_alert WHERE user_id='$id' AND to_id='$folid' AND forse='follow'");
?>
<script>
$(document).ready(function(){
$(".follow button").removeAttr("disabled");
$(".followit_inset_45 button").removeAttr("disabled");
$(".follow button").attr("doing","follow");
$(".followit_inset_45 button").attr("doing","follow");
$(".follow button").attr("class","followbtn");
var html = 'Follow' +
'<svg id="fol-img" xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M0 0h24v24H0z" fill="none"></path>' +
    '<path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>' +
'</svg>';
var xmls = 'متابعة' +
'<svg id="folimg_45" xmlns="http://www.w3.org/2000/svg">' +
    '<path d="M0 0h24v24H0z" fill="none"></path>' +
    '<path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>' +
'</svg>';
$(".follow button").html(html);
$(".followit_inset_45 button").html(xmls);
});
</script>
<?php	
}
?>
