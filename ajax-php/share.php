<?php

include ("../connectdb/index.php");

?>


<?php


if(isset($_POST['subshare'])){
$fillpostid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['postid'])))));
$filldrobox = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['drobox'])))));
$postid = preg_replace('/ +/', '', $fillpostid);
$drobox = preg_replace('/ +/', '', $filldrobox);

$postst = addslashes(html_entity_decode(nl2br(strip_tags(htmlspecialchars(trim($_POST['postpro']))))));
$posths = $postst;


//Convert urls to <a> links
$postst = preg_replace("/([\w]+\:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/", "<a target=\"_blank\" class=\"href-post\" href=\"$1\">$1</a>", $postst);

//Convert hashtags to twitter searches in <a> links
$postst = preg_replace("/#+([ا-ب-ت-ث-ج-ح-خ-د-ذ-ر-ز-ز-س-ش-ص-ض-ط-ظ-ع-غ-ف-ق-ك-ل-م-ن-ه-و-يa-zA-z1-9_]+)/", "<a target=\"_blank\" class=\"href-post\" href=\"../hashtags/?q=$1\">#$1</a>", $postst);

//Convert attags to twitter profiles in &lt;a&gt; links
$postst = preg_replace("/@([A-Za-z0-9\/\._-]*)/", "<a class=\"href-post menthin-post\" href=\"../$1\">@$1</a>", $postst);

function nl2p($postst) {
    $arr = explode("\n",$postst);
    $out = '';
    $count = count($arr);
    $i = 0;
    $letarray = array('ا','ب','ت','ث','ج','ح','خ','د','ذ','ر','ز','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ك','ل','م','ن','ه','و','ي','أ','ئ','ء','ؤ','لآ','َ','ً','ُ','ٍ','ِ');
    for (; $i<$count; $i++) {
        if( strlen(trim($arr[$i])) > 0 ) {
			$strsub = trim($arr[$i]);
			$fillst = strip_tags(preg_replace('/ +/', '', $strsub));
			$fillst = str_replace('#', '', $fillst);
			if(in_array(mb_substr($fillst,1,1,'utf-8'),$letarray) || in_array(mb_substr($fillst,2,1,'utf-8'),$letarray) || in_array(mb_substr($fillst,3,1,'utf-8'),$letarray) || in_array(mb_substr($fillst,4,1,'utf-8'),$letarray)){
            $out .= '<p class="rtl">'.trim($strsub).'</p>';
			}else {
			$out .= '<p class="ltr">'.trim($strsub).'</p>';
			}
        }
    }
	return $out;
}

$postst = nl2p($postst);

include "emotions.php";

if($drobox == "normal"){
$countnor = mysql_query("SELECT COUNT(id) FROM posts WHERE id='$postid' AND type!='share' AND share_id=''");
$ifnormal = mysql_result($countnor,0);
if($ifnormal == 1){
	$ofbox = "normal";
}else {}
}else {
if($drobox == "share"){
$countshr = mysql_query("SELECT * FROM posts WHERE id='$postid' AND type='share' AND share_id!=''");
while($fetch = mysql_fetch_array($countshr)){
	$ifshared = $fetch['id'];
	$queryfet = $fetch['share_id'];
}
if(!empty($ifshared) && $ifshared == $postid){
	$sharid = $queryfet;
	$ofbox = "share";
}else {}
}else {}
}

if($ofbox == "normal"){
$insertshare = mysql_query("INSERT INTO posts(user_id,share_id,type,post_date,post_text) VALUES('$id','$postid','share','$timedate','$postst')");
$selectuse = mysql_query("SELECT user_id FROM posts WHERE id='$postid'");
while($fetu = mysql_fetch_array($selectuse)){
	$usermenid = $fetu['user_id'];
}
$inseraler = mysql_query("INSERT INTO alert(user_id,to_id,forse,type,date,seen,post_id,online) VALUES('$id','$usermenid','post','share_post','$timedate','no','$postid','insert')");
}else {
if($ofbox == "share"){
$insertshare = mysql_query("INSERT INTO posts(user_id,share_id,type,post_date,post_text) VALUES('$id','$sharid','share','$timedate','$postst')");	
$selectuse = mysql_query("SELECT user_id FROM posts WHERE id='$sharid'");
while($fetu = mysql_fetch_array($selectuse)){
	$usermenid = $fetu['user_id'];
}
$inseraler = mysql_query("INSERT INTO alert(user_id,to_id,forse,type,date,seen,post_id,online) VALUES('$id','$usermenid','post','share_post','$timedate','no','$sharid','insert')");
}else {
echo '
<script>
alert("حدث خطأ - يرجي المحاولة مرة اخري");
</script>
';
}
}

if(!empty($postst) && empty($inputimurl) && empty($postvidew) && empty($audiomain)){
	$post_type = "text";
}else {
if(!empty($inputimurl) && empty($postvidew) && empty($audiomain)){
	$post_type = "image";
}else {
if(empty($inputimurl) && !empty($postvidew) && empty($audiomain)){
	$post_type = "video";
}else {
if(empty($inputimurl) && empty($postvidew) && !empty($audiomain)) {
	$post_type = "audio";
}else {
	$prevent = "true";
}
}
}
}
if($prevent == "true"){} else {
preg_match_all("/#+([ا-ب-ت-ث-ج-ح-خ-د-ذ-ر-ز-ز-س-ش-ص-ض-ط-ظ-ع-غ-ف-ق-ك-ل-م-ن-ه-و-يa-zA-z1-9_]+)/", $posths, $matches);  
if (!empty($matches)) {
	foreach($matches[0] as $hash){
		$hash = str_replace("#","",$hash);
		$selecthah = mysql_query("SELECT COUNT(id) FROM hashtags WHERE user_id='$id' AND post_type='$post_type' AND type='normal' AND post_id='$postid' AND name='$hash'");
		$counthash = mysql_result($selecthah,0);
		if($counthash == 0){
		$inserhash = mysql_query("INSERT INTO hashtags(user_id,post_type,type,post_id,name) VALUES('$id','$post_type','normal','$postid','$hash')");
		}else {}
		$selchashc = mysql_query("SELECT COUNT(id) FROM hashtags WHERE type='antily' AND name='$hash'");
		$hashcount = mysql_result($selchashc,0);
		if($hashcount == 0){
		$insercoun = mysql_query("INSERT INTO hashtags(type,name) VALUES('antily','$hash')");
		}else {
		$queryvoyr = mysql_query("SELECT COUNT(id) FROM hashtags WHERE name='$hash' AND type='normal' AND post_type!='none'");
		$resulthah = mysql_result($queryvoyr,0);
		if($resulthah == 0){
		}else {
		$updathash = mysql_query("UPDATE hashtags SET post_type='$resulthah' WHERE type='antily' AND name='$hash'");
		}
		}	
	}
}else {}
}

echo '
<script>
$(".shareit_post").removeAttr("disabled");
$("#sharewindow_back,.share_window_main").fadeOut(0,function(){
	$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats,.center_left_main").removeClass("blurfullscreen");
});
</script>
';

}


?>