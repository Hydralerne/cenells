<?php

include ("../connectdb/index.php");

?>


<?php



if($_POST['subcomment']){

$postst = addslashes(htmlspecialchars(strip_tags(trim($_POST['comment']))));
$fillcomment = preg_replace('/ +/', '', $postst);
$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$img = addslashes(htmlspecialchars(strip_tags(trim($_POST['postimg']))));
$array = addslashes(htmlspecialchars(strip_tags(trim($_POST['array']))));
if(!empty($img)){
$imgsrc = "../upload/comments/images/full/low/$img";
list($imgwidth, $imgheight) = getimagesize($imgsrc);
$check = $info['c_check'];
}else {}
if(!empty($fillcomment)){

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
			$out .= '<p class="rtl-comment">'.$strsub.'</p>';
			}else {
			$out .= '<p class="ltr-comment">'.$strsub.'</p>';
			}
        }
    }
	return $out;
}

$postst = nl2p($postst);

include "emotions.php";

$insertco = mysql_query("INSERT INTO comments(from_id,text,post_id,date,type,img,array,img_width,img_height,c_check) VALUES('$id','$postst','$postid','$timedate','comment','$img','$array','$imgwidth','$imgheight','$check')");
if(isset($insertco)){


$selpuinqu = mysql_query("SELECT * FROM posts WHERE id='$postid'");
while($fety = mysql_fetch_array($selpuinqu)){
	$ddid = $fety['user_id'];
}
$aaasdfaew = mysql_query("SELECT * FROM comments WHERE post_id='$postid' AND from_id='$id' AND type='comment' ORDER BY id DESC LIMIT 1");
while($fetoere = mysql_fetch_array($aaasdfaew)){
	$comentid = $fetoere['id'];
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
		$selmenold = mysql_query("SELECT COUNT(id) FROM alert WHERE user_id='$id' AND to_id='$usermenid' AND post_id='$postid' AND forse='comment' AND type='menshin_comment'");
		$menoldcou = mysql_result($selmenold,0);
		if($menoldcou == 0){
		$inseraler = mysql_query("INSERT INTO alert(user_id,to_id,forse,type,date,seen,post_id,for_id,online) VALUES('$id','$usermenid','comment','menshin_comment','$timedate','no','$postid','$comentid','insert')");
		}else {}
		}else {}
	}
}else {}
}else {}

$inalert = mysql_query("INSERT INTO alert(user_id,to_id,for_to,forse,type,date,seen,post_id,online) VALUES('$id','$ddid','$comentid','post','comment_post','$timedate','no','$postid','insert')");

if(isset($inalert)){
$qurcom = mysql_query("SELECT * FROM comments WHERE post_id='$postid' AND from_id='$id' AND type='comment' ORDER BY ID DESC LIMIT 1");
while($fetc = mysql_fetch_array($qurcom)){
$user_id = $fetc['from_id'];
$ecty = mysql_query("SELECT * FROM users WHERE id='$user_id'");
while($erpw = mysql_fetch_array($ecty)){
	$user_name = $erpw['name'];
	$user_img = $erpw['pro_img'];
	$cename = $erpw['user_name'];
}
$commid = $fetc['id'];
$postid = $fetc['post_id'];
include "coment-body.php";
$empty = $fetc['id'];
}
}else {}
}else {}
}else {}
}

?>

