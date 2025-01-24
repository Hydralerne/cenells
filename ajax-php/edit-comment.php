<?php

include ("../connectdb/index.php");

?>

<?php


if(isset($_POST['updatecomm'])){

$postid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['postid'])))));
$commid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['commid'])))));
$postid = preg_replace('/ +/', '', $postid);
$commid = preg_replace('/ +/', '', $commid);
$postst = addslashes(html_entity_decode(nl2br(htmlspecialchars(strip_tags(trim($_POST['textpr']))))));
$filltext = preg_replace('/ +/','',$postst);
if(!empty($filltext)){

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

$updatecomment = mysql_query("UPDATE comments SET text='$postst' WHERE id='$commid' AND post_id='$postid' AND type='comment' AND from_id='$id'");
if(isset($updatecomment)){

$deleteold = mysql_query("DELETE FROM alert WHERE user_id='$id' AND forse='comment' AND type='menshin_comment' AND post_id='$postid' AND for_id='$commid'");

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
		$inseraler = mysql_query("INSERT INTO alert(user_id,to_id,forse,type,date,seen,post_id,for_id,online) VALUES('$id','$usermenid','comment','menshin_comment','$timedate','no','$postid','$commid','insert')");
		}else {}
		}else {}
	}
}else {}

	echo '
	<script>
	$(document).ready(function(){
		$("#888'.$commid.' .comment-main-text").removeAttr("style");
		$("#888'.$commid.' .comment-main-text").removeClass("h3comment_conteidable");
	});
	</script>
	';
}

}

}

?>


<?php


if(isset($_POST['updaterep'])){

$postid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['postid'])))));
$replid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['replid'])))));
$postid = preg_replace('/ +/', '', $postid);
$replid = preg_replace('/ +/', '', $replid);
$postst = addslashes(html_entity_decode(nl2br(htmlspecialchars(strip_tags(trim($_POST['textre']))))));
$filltext = preg_replace('/ +/','',$postst);
if(!empty($filltext)){

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

$updatecomment = mysql_query("UPDATE comments SET text='$postst' WHERE id='$replid' AND post_id='$postid' AND type='reply' AND from_id='$id'");
if(isset($updatecomment)){

$deleteold = mysql_query("DELETE FROM alert WHERE user_id='$id' AND forse='reply' AND type='menshin_reply' AND post_id='$postid' AND for_id='$replid'");

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
		$inseraler = mysql_query("INSERT INTO alert(user_id,to_id,forse,type,date,seen,post_id,for_id,online) VALUES('$id','$usermenid','reply','menshin_reply','$timedate','no','$postid','$replid','insert')");
		}else {}
		}else {}
	}
}else {}

	echo '
	<script>
	$(document).ready(function(){
		$(".reply#'.$replid.' .reply_main_text").removeAttr("style");
		$(".reply#'.$replid.' .reply_main_text").removeClass("h3reply_conteidable");
	});
	</script>
	';
}

}

}

?>




