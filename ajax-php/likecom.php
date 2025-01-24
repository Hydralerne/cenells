<?php

include ("../connectdb/index.php");

?>

<?php


if(isset($_POST['subremlikecom'])){
	$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
	$commid = addslashes(htmlspecialchars(strip_tags(trim($_POST['commid']))));  
	mysql_query("DELETE FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND from_id='$id' AND do='like' AND type='comment'");
	$delnoti = mysql_query("DELETE FROM alert WHERE user_id='$id' AND post_id='$postid' AND for_id='$commid' AND forse='comment' AND type='like_comment'");
}

if(isset($_POST['subremdislike'])){
	$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
	$commid = addslashes(htmlspecialchars(strip_tags(trim($_POST['commid']))));  
	mysql_query("DELETE FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND from_id='$id' AND do='dislike' AND type='comment'");
	$delnoti = mysql_query("DELETE FROM alert WHERE user_id='$id' AND post_id='$postid' AND for_id='$commid' AND forse='comment' AND type='dislike_comment'");
}

if(isset($_POST['sublikecom'])){
$commid = addslashes(htmlspecialchars(strip_tags(trim($_POST['commid']))));
$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$selcoplcom = mysql_query("SELECT COUNT(id) FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND from_id='$id' AND do='like' AND type='comment'");
$likeimg = mysql_result($selcoplcom,0);
if($likeimg == "0"){
$selpuinqu = mysql_query("SELECT from_id FROM comments WHERE id='$commid' AND type='comment'");
while($fety = mysql_fetch_array($selpuinqu)){
    $ddid = $fety['from_id'];
}
$qutypecom = mysql_query("INSERT INTO likecom(post_id,for_id,to_id,from_id,type,do,date) VALUES('$postid','$commid','$ddid','$id','comment','like','$timedate')");		
$deldiscom = mysql_query("DELETE FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND from_id='$id' AND do='dislike' AND type='comment'");
$inalert = mysql_query("INSERT INTO alert(user_id,to_id,post_id,for_id,forse,type,date,seen,online) VALUES('$id','$ddid','$postid','$commid','comment','like_comment','$timedate','no','insert')");
$delnoti = mysql_query("DELETE FROM alert WHERE user_id='$id' AND to_id='$ddid' AND forse='comment' AND type='dislike_comment' AND post_id='$postid' AND for_id='$commid'");
}else {}
}


if(isset($_POST['subdilikecom'])){
$commid = addslashes(htmlspecialchars(strip_tags(trim($_POST['commid']))));
$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$selcoplcom = mysql_query("SELECT COUNT(id) FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND from_id='$id' AND do='dislike' AND type='comment'");
$likeimg = mysql_result($selcoplcom,0);
if($likeimg == "0"){
$selpuinqu = mysql_query("SELECT from_id FROM comments WHERE id='$commid' AND type='comment'");
while($fety = mysql_fetch_array($selpuinqu)){
    $ddid = $fety['from_id'];
}
$qutypecom = mysql_query("INSERT INTO likecom(post_id,for_id,to_id,from_id,type,do,date) VALUES('$postid','$commid','$ddid','$id','comment','dislike','$timedate')");		
$deldiscom = mysql_query("DELETE FROM likecom WHERE post_id='$postid' AND for_id='$commid' AND from_id='$id' AND do='like' AND type='comment'");
$inalert = mysql_query("INSERT INTO alert(user_id,to_id,post_id,for_id,forse,type,date,seen,online) VALUES('$id','$ddid','$postid','$commid','comment','dislike_comment','$timedate','no','insert')");
$delnoti = mysql_query("DELETE FROM alert WHERE user_id='$id' AND to_id='$ddid' AND forse='comment' AND type='like_comment' AND post_id='$postid' AND for_id='$commid'");
}else {}
}




?>