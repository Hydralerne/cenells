<?php

include ("../connectdb/index.php");

?>


<?php


if(isset($_POST['save'])){
$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$postid = preg_replace('/ +/', '', $postid);	
$query = mysql_query("SELECT * FROM saved WHERE post_id='$postid' AND user_id='$id'");
while($fetch = mysql_fetch_assoc($query)){
	$empty = $fetch['id'];
}
if(empty($empty)){
$insert = mysql_query("INSERT INTO saved(user_id,post_id,time_date) VALUES('$id','$postid','$timedate')");
if(isset($insert)){
	echo '
	<script>
	var aerzz = \'<svg viewBox="0 0 24 24" class="postsavedit_svgico"  xmlns="http://www.w3.org/2000/svg">\' +
    \'<path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>\' +
    \'<path d="M0 0h24v24H0z" fill="none"/>\' +
    \'</svg>\';
	$(".post#'.$postid.' .post_viewtimes_main span").append(aerzz);
	$(".post#'.$postid.' .save_7569").html("<img src=\'../img/picon/csave.png\' class=\'img_477\' />");
	$(".post#'.$postid.' .save_477").html("<img src=\'../img/picon/csave.png\' class=\'img_477\' /><span>الغاء حفظ التدوينة</span>");
	$(".post#'.$postid.' .save_7569,.post#'.$postid.' .save_477").attr("data-type","2");
	</script>
	';
}
}
}

if(isset($_POST['removesave'])){
$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['postid']))));
$postid = preg_replace('/ +/', '', $postid);	
$remove = mysql_query("DELETE FROM saved WHERE post_id='$postid' AND user_id='$id'");
if(isset($remove)){
	echo '
	<script>
	$(".post#'.$postid.' .post_viewtimes_main .postsavedit_svgico").remove();
	$(".post#'.$postid.' .save_7569").html("<img src=\'../img/picon/save.png\' class=\'img_477\' />");
	$(".post#'.$postid.' .save_477").html("<img src=\'../img/picon/save.png\' class=\'img_477\' /><span>حفظ التدوينة</span>");
	$(".post#'.$postid.' .save_7569,.post#'.$postid.' .save_477").attr("data-type","1");
	</script>
	';	
}
}

?>