<?php

include ("../connectdb/index.php");

?>

<?php


if(isset($_POST['subremlikerep'])){
	$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
	$replid = addslashes(htmlspecialchars(strip_tags(trim($_POST['replid']))));  
	mysql_query("DELETE FROM likecom WHERE post_id='$postid' AND for_id='$replid' AND from_id='$id' AND do='like' AND type='reply'");
	$delnoti = mysql_query("DELETE FROM alert WHERE user_id='$id' AND post_id='$postid' AND for_id='$replid' AND forse='reply' AND type='like_reply'");
}

if(isset($_POST['remdislikerep'])){
	$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
	$replid = addslashes(htmlspecialchars(strip_tags(trim($_POST['replid']))));  
	mysql_query("DELETE FROM likecom WHERE post_id='$postid' AND for_id='$replid' AND from_id='$id' AND do='dislike'");
	$delnoti = mysql_query("DELETE FROM alert WHERE user_id='$id' AND post_id='$postid' AND for_id='$replid' AND forse='reply' AND type='dislike_reply'");
}

if(isset($_POST['sublikereplys'])){
$replid = addslashes(htmlspecialchars(strip_tags(trim($_POST['replid']))));
$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$selcoplcom = mysql_query("SELECT COUNT(id) FROM likecom WHERE post_id='$postid' AND for_id='$replid' AND from_id='$id' AND do='like' AND type='reply'");
$likeimg = mysql_result($selcoplcom,0);
if($likeimg == "0"){
$selpuinqu = mysql_query("SELECT from_id FROM comments WHERE id='$replid' AND type='reply'");
while($fety = mysql_fetch_array($selpuinqu)){
    $ddid = $fety['from_id'];
}
$qutypecom = mysql_query("INSERT INTO likecom(post_id,for_id,to_id,from_id,type,do,date) VALUES('$postid','$replid','$ddid','$id','reply','like','$timedate')");		
$deldiscom = mysql_query("DELETE FROM likecom WHERE post_id='$postid' AND for_id='$replid' AND from_id='$id' AND do='dislike' AND type='reply'");
$inalert = mysql_query("INSERT INTO alert(user_id,to_id,post_id,for_id,forse,type,date,seen,online) VALUES('$id','$ddid','$postid','$replid','reply','like_reply','$timedate','no','insert')");
$delnoti = mysql_query("DELETE FROM alert WHERE user_id='$id' AND to_id='$ddid' AND forse='reply' AND type='dislike_reply' AND post_id='$postid' AND for_id='$replid'");
}else {}
}


if(isset($_POST['subdilikerepl'])){
$replid = addslashes(htmlspecialchars(strip_tags(trim($_POST['replid']))));
$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$selcoplcom = mysql_query("SELECT COUNT(id) FROM likecom WHERE post_id='$postid' AND for_id='$replid' AND from_id='$id' AND do='dislike' AND type='reply'");
$likeimg = mysql_result($selcoplcom,0);
if($likeimg == "0"){
$selpuinqu = mysql_query("SELECT from_id FROM comments WHERE id='$replid' AND type='reply'");
while($fety = mysql_fetch_array($selpuinqu)){
    $ddid = $fety['from_id'];
}
$qutypecom = mysql_query("INSERT INTO likecom(post_id,for_id,to_id,from_id,type,do,date) VALUES('$postid','$replid','$ddid','$id','reply','dislike','$timedate')");		
$deldiscom = mysql_query("DELETE FROM likecom WHERE post_id='$postid' AND for_id='$replid' AND from_id='$id' AND do='like' AND type='reply'");
$inalert = mysql_query("INSERT INTO alert(user_id,to_id,post_id,for_id,forse,type,date,seen,online) VALUES('$id','$ddid','$postid','$replid','reply','dislike_reply','$timedate','no','insert')");
$delnoti = mysql_query("DELETE FROM alert WHERE user_id='$id' AND to_id='$ddid' AND forse='reply' AND type='like_reply' AND post_id='$postid' AND for_id='$replid'");
}else {}
}




?>