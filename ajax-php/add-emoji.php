<?php
include("../connectdb/index.php");
?>
<?php
if(isset($_POST['subadd'])){
$postid = addslashes(strip_tags(htmlspecialchars($_POST['postid'])));
$type = addslashes(strip_tags(htmlspecialchars($_POST['type'])));
$postid = preg_replace('/ +/','',$postid);
$type = preg_replace('/ +/','',$type);
$array = array('1','2','3','4','5');
if(in_array($type,$array)){
$seluse = mysql_query("SELECT user_id FROM posts WHERE id='$postid'");
while($fetuse = mysql_fetch_array($seluse)){
	$toid = $fetuse['user_id'];
}
$select = mysql_query("SELECT COUNT(id) FROM emoji WHERE post_id='$postid' AND user_id='$id' AND type='$type' AND session='emopost'");
$count = mysql_result($select,0);
if(!empty($toid) && $count == 0){
$delete = mysql_query("DELETE FROM emoji WHERE post_id='$postid' AND user_id='$id' AND to_id='$toid' AND session='emopost'");
$insert = mysql_query("INSERT INTO emoji(user_id,to_id,post_id,session,type,date) VALUES('$id','$toid','$postid','emopost','$type','$timedate')");
$delete = mysql_query("DELETE FROM alert WHERE post_id='$postid' AND user_id='$id' AND to_id='$toid' AND type='emoji_post'");
$inalrt = mysql_query("INSERT INTO alert(user_id,to_id,post_id,forse,type,session,date,seen,online) VALUES('$id','$toid','$postid','post','emoji_post','$type','$timedate','no','insert')");
}else {}
}else {}
}
?>

<?php
if(isset($_POST['subrem'])){
$postid = addslashes(strip_tags(htmlspecialchars($_POST['postid'])));
$postid = preg_replace('/ +/','',$postid);
$delete = mysql_query("DELETE FROM emoji WHERE post_id='$postid' AND user_id='$id'");
$delete = mysql_query("DELETE FROM alert WHERE post_id='$postid' AND user_id='$id' AND type='emoji_post'");
}
?>