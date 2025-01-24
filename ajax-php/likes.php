<?php

include ("../connectdb/index.php");

?>

<?php


if(isset($_POST['subremovepost'])){
	$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
    mysql_query("DELETE FROM likes WHERE post_id='$postid' AND from_id='$id' AND do='like'");
	$selpuinqu = mysql_query("SELECT user_id FROM posts WHERE id='$postid'");	
  	while($fety = mysql_fetch_assoc($selpuinqu)){
			$rere = $fety['user_id'];
	}
	$delnoti = mysql_query("DELETE FROM alert WHERE user_id='$id' AND to_id='$rere' AND forse='post' AND type='like_post' AND post_id='$postid'");
}

if(isset($_POST['sublikepost'])){
$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$selcoplimg = mysql_query("SELECT COUNT(id) FROM likes WHERE post_id='$postid' AND from_id='$id' AND do='like'");
$likeimg = mysql_result($selcoplimg,0);
if($likeimg == "0"){
$selpuinqu = mysql_query("SELECT user_id FROM posts WHERE id='$postid'");
while($fety = mysql_fetch_assoc($selpuinqu)){
    $ddid = $fety['user_id'];
}
if(!empty($ddid)){
$qutype = mysql_query("INSERT INTO likes(post_id,from_id,to_id,do,date) VALUES('$postid','$id','$ddid','like','$timedate')");		
$deldisl = mysql_query("DELETE FROM likes WHERE post_id='$postid' AND from_id='$id' AND do='dislike'");
$inalert = mysql_query("INSERT INTO alert(user_id,to_id,post_id,forse,type,date,seen,online) VALUES('$id','$ddid','$postid','post','like_post','$timedate','no','insert')");
$delnoti = mysql_query("DELETE FROM alert WHERE user_id='$id' AND to_id='$ddid' AND forse='post' AND type='dislike_post' AND post_id='$postid'");
}
}
}



// dislike 

if(isset($_POST['subredispost'])){
	$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
    mysql_query("DELETE FROM likes WHERE post_id='$postid' AND from_id='$id' AND do='dislike'");
	$selpuinqu = mysql_query("SELECT user_id FROM posts WHERE id='$postid'");	
  	while($fety = mysql_fetch_assoc($selpuinqu)){
			$rere = $fety['user_id'];
	}
	$delnoti = mysql_query("DELETE FROM alert WHERE user_id='$id' AND to_id='$rere' AND forse='post' AND type='dislike_post' AND post_id='$postid'");
}

if(isset($_POST['subdislikepost'])){
$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$selcoplimg = mysql_query("SELECT COUNT(id) FROM likes WHERE post_id='$postid' AND from_id='$id' AND do='dislike'");
$likeimg = mysql_result($selcoplimg,0);
if($likeimg == "0"){
$selpuinqu = mysql_query("SELECT user_id FROM posts WHERE id='$postid'");
while($fety = mysql_fetch_assoc($selpuinqu)){
    $ddid = $fety['user_id'];
}
if(!empty($ddid)){
$qutype = mysql_query("INSERT INTO likes(post_id,from_id,to_id,do,date) VALUES('$postid','$id','$ddid','dislike','$timedate')");		
$deldisl = mysql_query("DELETE FROM likes WHERE post_id='$postid' AND from_id='$id' AND do='like'");
$inalert = mysql_query("INSERT INTO alert(user_id,to_id,post_id,forse,type,date,seen,online) VALUES('$id','$ddid','$postid','post','dislike_post','$timedate','no','insert')");
$delnoti = mysql_query("DELETE FROM alert WHERE user_id='$id' AND to_id='$ddid' AND forse='post' AND type='like_post' AND post_id='$postid'");
}
}
}



?>
