<?php

include ("../connectdb/index.php");

?>

<?php

if(isset($_POST['insertpost'])){

$sendvidpos = addslashes(htmlspecialchars(strip_tags(trim($_POST['sendvidpos']))));
$audiomain = addslashes(htmlspecialchars(strip_tags(trim($_POST['audio']))));
$arrayfill = addslashes(htmlspecialchars(strip_tags(trim($_POST['array']))));
$groubfill = addslashes(htmlspecialchars(strip_tags(trim($_POST['groub']))));
$inputimurl = addslashes(htmlspecialchars(strip_tags(trim($_POST['sendimgurs']))));
$locktype = addslashes(strip_tags(htmlspecialchars(trim($_POST['locktype']))));
$lockarray = addslashes(strip_tags(htmlspecialchars(trim($_POST['lockarray']))));
$arrayrela = preg_replace('/ +/', '', $arrayfill);
$grouballm = preg_replace('/ +/', '', $groubfill);
$grouballm = str_replace('-null', '', $grouballm);
$audiomain = preg_replace('/ +/', '', $audiomain);
$locktype = preg_replace('/ +/','',$locktype);
$lockarray = preg_replace('/ +/','',$lockarray);

if(empty($arrayrela)){
	$array_type = "none";
}else {
	$array_type = "img";
}
$array = substr($arrayrela,0,-1);
if(empty($array) && !empty($inputimurl) && empty($audiomain)){
$imgsrc = "../upload/posts/images/full/low/$inputimurl";
list($imgwidth, $imgheight) = getimagesize($imgsrc);
}else {
	if(empty($array) && empty($inputimurl) && !empty($audiomain)){
		$audiomain = $audiomain;
	}else {
		$audiomain = "";
		if(!empty($array) && empty($inputimurl) && empty($audiomain)){
			$array = $array;
		}else {
			$array = "";
		}
	}
}

$postst = addslashes(html_entity_decode(nl2br(strip_tags(htmlspecialchars(trim($_POST['postpro']))))));
$posths = $postst;

//Convert urls to <a> links
$postst = preg_replace("/([\w]+\:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/", "<a target=\"_blank\" class=\"href-post\" href=\"$1\">$1</a>", $postst);

//Convert hashtags to twitter searches in <a> links
$postst = preg_replace("/#+([ا-ب-ت-ث-ج-ح-خ-د-ذ-ر-ز-ز-س-ش-ص-ض-ط-ظ-ع-غ-ف-ق-ك-ل-م-ن-ه-و-ي_]+)/", "<a target=\"_blank\" class=\"href-post rtlhash\" href=\"../hashtags/?q=$1\">#$1</a>", $postst);
$postst = preg_replace("/#+([a-zA-Z1-9_]+)/", "<a target=\"_blank\" class=\"href-post ltrhash\" href=\"../hashtags/?q=$1\">#$1</a>", $postst);

//Convert attags to twitter profiles in &lt;a&gt; links
if(!empty($postst)){
preg_match_all("/@([A-Za-z0-9\/\._-]*)/", $postst, $checmin);  
if (!empty($checmin)) {
	foreach($checmin[0] as $sinz){
		$sinz = str_replace('@','',$sinz);
		$selecin = mysql_query("SELECT id FROM users WHERE user_name='$sinz'");
		while($froio = mysql_fetch_array($selecin)){
			$uservoltext = $froio['id'];
		}
		if(!empty($uservoltext)){
        $postst = preg_replace("/@([A-Za-z0-9\/\._-]*)/", "<a class=\"href-post menthin-post\" href=\"../$1\">@$1</a>", $postst);
		}else {}
	}
}else {}
}else {}
function nl2p($postst) {
    $arr = explode("\n",$postst);
    $out = '';
    $count = count($arr);
    $i = 0;
	for (; $i<$count; $i++) {
        if( strlen(trim($arr[$i])) > 0 ) {
			$strsub = trim($arr[$i]);
			if(preg_match('/([ا-ب-ت-ث-ج-ح-خ-د-ذ-ر-ز-ز-س-ش-ص-ض-ط-ظ-ع-غ-ف-ق-ك-ل-م-ن-ه-و-ي])/',$postst)){
			$out .= '<p class="rtl">'.$strsub.'</p>';
			}else {
			$out .= '<p class="ltr">'.$strsub.'</p>';
			}
        }
    }
	return $out;
}

$postst = nl2p($postst);

include "emotions.php";

if(!empty($grouballm)){
if(strpos($grouballm, '-') !== false) {
$groupadmin = $id;
$postype = 'taged_from';
}else {}
}else {}

$insertp = mysql_query("INSERT INTO posts(post_img,post_text,user_id,post_video,audio,post_date,type,type_all,array_type,array,img_width,img_height,group_share,group_admin) VALUES('$inputimurl','$postst','$id','$sendvidpos','$audiomain','$timedate','ori','$postype','$array_type','$array','$imgwidth','$imgheight','$grouballm','$groupadmin')") or die(mysql_error());


if(isset($insertp)){

/*
preg_match_all("/(#\w+)/u", $string, $matches);  
if ($matches) {
foreach ($matches[1] as $value) {
// do something here
}
}

*/

$selectop = mysql_query("SELECT id FROM posts WHERE user_id='$id' ORDER BY id DESC LIMIT 1");
while($many = mysql_fetch_array($selectop)){
	$postid = $many['id'];
}

$lockcheck = array('v1','v2','v3','v4','v5');
if(in_array($locktype,$lockcheck)){
if($locktype == "v5" || $locktype == "v4"){
$explock = explode('-',$lockarray);
foreach($explock as $lok){
    $locexpc = mysql_query("SELECT COUNT(id) FROM users WHERE id='$lok'");
	$ifloc = mysql_result($locexpc,0);
    $selquer = mysql_query("SELECT COUNT(id) FROM posts_query WHERE user_id='$id' AND to_id='$lok' AND post_id='$postid' AND session='lockview' AND type='$locktype' AND type_all='custom'");
	$ifque = mysql_result($selquer,0);
	if($ifloc > 0 && $lok !== $id && $ifque == 0){
		$query = mysql_query("INSERT INTO posts_query(user_id,to_id,post_id,session,type,type_all,date) VALUES('$id','$lok','$postid','lockview','$locktype','custom','$timedate')");
	}else {}
}
}else {
$selquer = mysql_query("SELECT COUNT(id) FROM posts_query WHERE user_id='$id' AND post_id='$postid' AND session='lockview' AND type='$locktype' AND type_all='all'");
$ifque = mysql_result($selquer,0);
if($ifque == 0){
$query = mysql_query("INSERT INTO posts_query(user_id,post_id,session,type,type_all,date) VALUES('$id','$postid','lockview','$locktype','all','$timedate')");
}else {}
}
}else {
echo '
<script>
alert("حدث خطأ - يرجي المحاولة مرة اخري");
</script>
';
}





if(!empty($grouballm)){
	$exgroup = explode('-',$grouballm);
	foreach($exgroup as $exp){
		$sertleng = mysql_query("SELECT COUNT(id) FROM posts WHERE user_id='$exp' AND type='taged' AND type_all='taged_to' AND tag_id='$postid'");
		$countold = mysql_result($sertleng,0);
		$expcount = mysql_query("SELECT COUNT(id) FROM users WHERE id='$exp'");
		$ifexp = mysql_result($expcount,0);
		if($ifexp > 0 && $exp !== $id && $countold == 0){
			$insertp = mysql_query("INSERT INTO posts(user_id,type,type_all,tag_id,group_share,group_admin) VALUES('$exp','taged','taged_to','$postid','$grouballm','$id')") or die(mysql_error());
		}else {}
	}
}else {}


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
		$inserhash = mysql_query("INSERT INTO hashtags(user_id,post_type,type,post_id,name,date) VALUES('$id','$post_type','normal','$postid','$hash','$timedate')");
		}else {}
		$selchashc = mysql_query("SELECT COUNT(id) FROM hashtags WHERE type='antily' AND name='$hash'");
		$hashcount = mysql_result($selchashc,0);
		if($hashcount == 0){
		$insercoun = mysql_query("INSERT INTO hashtags(type,name,post_type,date) VALUES('antily','$hash','1','$timedate')");
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

if(!empty($postst)){
preg_match_all("/@([A-Za-z0-9\/\._-]*)/", $postst, $minhsan);  
if (!empty($minhsan)) {
	foreach($minhsan[0] as $mins){
		$mins = str_replace('@','',$mins);
		$selectuse = mysql_query("SELECT id FROM users WHERE user_name='$mins'");
		while($fetiduse = mysql_fetch_array($selectuse)){
			$usermenid = $fetiduse['id'];
		}
		if(!empty($usermenid)){
		$selmenold = mysql_query("SELECT COUNT(id) FROM alert WHERE user_id='$id' AND to_id='$usermenid' AND post_id='$postid' AND forse='post' AND type='menshin_post'");
		$menoldcou = mysql_result($selmenold,0);
		if($menoldcou == 0){
		$inseraler = mysql_query("INSERT INTO alert(user_id,to_id,forse,type,date,seen,post_id,online) VALUES('$id','$usermenid','post','menshin_post','$timedate','no','$postid','insert')");
		}else {}
		}else {}
	}
}else {}
}else {}

	echo '
	<script>
	$(document).ready(function(){
	setTimeout(function(){
	$(".blog_post div").fadeOut(function(){
	$("#text-div-type").attr("contenteditable","PLAINTEXT-ONLY");
	$("#text-div-type").removeAttr("style");
	$("#slider8,.controls_32428").fadeOut();
	$("#blog_post_sub").removeAttr("disabled");
	$("#blog_post_sub").css("background","#d3394c");
	$("#blog_post_sub").animate({"margin-left": "135px"});		
	$("#hidden_3242").val("");		
	$("#hideinimgsrc").val("");		
	$(".targetLayer8 center").remove();
	$(".arrayino8,.eshara_body_454568,.eshara_array_456789,#text-div-type").empty();
	$(".audio_media_upload,.audio_src_viewmain").fadeOut(function(){
	$("#hideaudioview_mani").attr("src","");
	$(".audio_svgplay").fadeIn();
	$(".audio_svgpasue").fadeOut();
	$(".time_audio_madeio span").text("0:00");
	$(".inline_progress_on,.loaded_progress_on").css("width","0%");
	});
	$(".inset_8768785,.eshara_selected_4444").fadeOut(100,function(){
		$(".eshara_to_followers").slideUp(500);
	});	
	});
	},500);
	});
	</script>
	';
}


}


?>








