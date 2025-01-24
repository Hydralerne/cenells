<?php

include ("../connectdb/index.php");

?>


<?php

if($_POST['subreply']){
$postst = addslashes(htmlspecialchars(strip_tags(rtrim($_POST['reply']))));
$postid = addslashes(htmlspecialchars(strip_tags(rtrim($_POST['postid']))));
$commid = addslashes(htmlspecialchars(strip_tags(rtrim($_POST['commid']))));
$commid = preg_replace('/ +/', '', $commid);
if(preg_replace('/ +/', '', $postst) !== ""){

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
			$out .= '<p class="rtl-reply">'.$strsub.'</p>';
			}else {
			$out .= '<p class="ltr-reply">'.$strsub.'</p>';
			}
        }
    }
	return $out;
}

$postst = nl2p($postst);

include "emotions.php";

$insertco = mysql_query("INSERT INTO comments(from_id,text,post_id,for_id,date,type) VALUES('$id','$postst','$postid','$commid','$timedate','reply')");

if(isset($insertco)){
$selpuinqu = mysql_query("SELECT * FROM comments WHERE id='$commid'");
while($fety = mysql_fetch_array($selpuinqu)){
	$ddid = $fety['from_id'];
}
$rueythewu = mysql_query("SELECT * FROM comments WHERE for_id='$commid' AND post_id='$postid' AND from_id='$id' AND type='reply' ORDER BY ID DESC LIMIT 1");
while($fort = mysql_fetch_array($rueythewu)){
	$replyid = $fort['id'];
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
		$selmenold = mysql_query("SELECT COUNT(id) FROM alert WHERE user_id='$id' AND to_id='$usermenid' AND post_id='$postid' AND forse='reply' AND type='menshin_reply'");
		$menoldcou = mysql_result($selmenold,0);
		if($menoldcou == 0){
		$inseraler = mysql_query("INSERT INTO alert(user_id,to_id,forse,type,date,seen,post_id,for_id,online) VALUES('$id','$usermenid','reply','menshin_reply','$timedate','no','$postid','$replyid','insert')");
		}else {}
		}else {}
	}
}else {}
}else {}

$inalert = mysql_query("INSERT INTO alert(user_id,to_id,post_id,for_id,forse,type,date,seen,for_to,online) VALUES('$id','$ddid','$postid','$commid','comment','reply_comment','$timedate','no','$replyid','insert')");

$qurep = mysql_query("SELECT * FROM comments WHERE for_id='$commid' AND post_id='$postid' AND from_id='$id' AND type='reply' ORDER BY ID DESC LIMIT 1");
while($fetr = mysql_fetch_array($qurep)){
$auser_id = $fetr['from_id'];
$aecty = mysql_query("SELECT name,pro_img FROM users WHERE id='$auser_id'");	
while($aerpw = mysql_fetch_array($aecty)){
	$auser_name = $aerpw['name'];
	$auser_img = $aerpw['pro_img'];
	$auser_check = $aerpw['c_check'];
}
include "reply-body.php";
$empty = $fetr['id'];
}
}
}
}

?>















