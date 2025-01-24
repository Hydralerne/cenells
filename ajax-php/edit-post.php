<?php

include ("../connectdb/index.php");

?>

<?php

$fillpostid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['postid'])))));
$filarray = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['array'])))));
$filpostimg = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['postimg'])))));
$postid = preg_replace('/ +/', '', $fillpostid);
$array = preg_replace('/ +/', '', $filarray);
$postimg = preg_replace('/ +/', '', $filpostimg);
if(empty($array)){
	$array_type = "";
}else {
	$array_type = "img";
}
$postst = addslashes(html_entity_decode(nl2br(strip_tags(htmlspecialchars(trim($_POST['postpro']))))));
$posths = $postst;

if(isset($_POST['updatepost'])){

//Convert urls to <a> links
$postst = preg_replace("/([\w]+\:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/", "<a target=\"_blank\" class=\"href-post\" href=\"$1\">$1</a>", $postst);

//Convert hashtags to twitter searches in <a> links

$postst = preg_replace("/#+([ا-ب-ت-ث-ج-ح-خ-د-ذ-ر-ز-ز-س-ش-ص-ض-ط-ظ-ع-غ-ف-ق-ك-ل-م-ن-ه-و-ي_]+)/", "<a target=\"_blank\" class=\"href-post rtlhash\" href=\"../hashtags/?q=$1\">#$1</a>", $postst);
$postst = preg_replace("/#+([a-zA-Z1-9_]+)/", "<a target=\"_blank\" class=\"href-post ltrhash\" href=\"../hashtags/?q=$1\">#$1</a>", $postst);

//Convert attags to twitter profiles in &lt;a&gt; links
$postst = preg_replace("/@([A-Za-z0-9\/\._-]*)/", "<a class=\"href-post menthin-post\" href=\"../$1\">@$1</a>", $postst);

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
$emptypost = preg_replace('/ +/', '', $postst);

include "emotions.php";
if(empty($postimg) && empty($array) && empty($emptypost)){
$insertp = mysql_query("DELETE FROM posts WHERE id='$postid'");
echo '<script>$(".post#'.$postid.'").remove();</script>';
}
if(empty($postimg) && empty($array) && !empty($emptypost)){
$insertp = mysql_query("UPDATE posts SET post_text='$postst',post_img='',img_width='',img_height='',array='',array_type='' WHERE id='$postid'") or die(mysql_error());
}
if(!empty($postimg) && empty($array)){
$imgsrc = "../upload/posts/images/full/low/$postimg";
list($imgwidth, $imgheight) = getimagesize($imgsrc);
$newwidth = '600';
$newheight = $imgheight * $newwidth / $imgwidth;
$insertp = mysql_query("UPDATE posts SET post_text='$postst',post_img='$postimg',img_width='$newwidth',img_height='$newheight',array='',array_type='' WHERE id='$postid'") or die(mysql_error());	
echo '<script>/*setTimeout(function(){location.reload();},500);*/</script>';
}
if(empty($postimg) && !empty($array)){
$insertp = mysql_query("UPDATE posts SET post_text='$postst',post_img='',img_width='',img_height='',array='$array',array_type='$array_type' WHERE id='$postid'") or die(mysql_error());		
echo '<script>/*setTimeout(function(){location.reload();},500);*/</script>';
}



if(isset($insertp)){

if(!empty($posths) && empty($postimg)){
	$post_type = "text";
}else {
if(empty($postimg)){
	$post_type = "image";
}else {
	$prevent = "true";
}
}

if($prevent == "true"){} else {
preg_match_all("/#+([ا-ب-ت-ث-ج-ح-خ-د-ذ-ر-ز-ز-س-ش-ص-ض-ط-ظ-ع-غ-ف-ق-ك-ل-م-ن-ه-و-يa-zA-z1-9_]+)/", $posths, $matches);  
if (!empty($matches)) {
	foreach($matches[0] as $hash){
		$hash = str_replace("#","",$hash);
		$selecthah = mysql_query("SELECT COUNT(id) FROM hashtags WHERE user_id='$id' AND type='normal' AND post_id='$postid'");
		$counthash = mysql_result($selecthah,0);
		if($counthash == 0){
		$inserhash = mysql_query("INSERT INTO hashtags(user_id,post_type,type,post_id,name,date) VALUES('$id','$post_type','normal','$postid','$hash','$timedate')");
		}else {
		$deleteold = mysql_query("DELETE FROM hashtags WHERE user_id='$id' AND type='normal' AND post_id='$postid'");
		}
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
?>
<script>
$(document).ready(function(){
	$(".subedit_4556,.canseledit_4556").removeAttr("disabled","disabled");
	$("#loading_4556").fadeOut();
	$(".edit_div_type").css({"background": "#fff","cursor": "text"});
	$(".edit_div_type").attr("contenteditable","true");
	$(".post_edit_tools_main,#edit_full_screen").fadeOut(function(){
	$(".div_4556").remove();
    $(".edit_div_type").empty();
	$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats,.center_left_main").removeClass("blurfullscreen");
	$("#loading_4556").fadeOut(0);
	$("#emotion_4556").fadeIn(0);
	});
});
</script>
<?php

}


}

if(isset($_POST['deletpost'])){

$fildpostid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['postid'])))));
$dpostid = preg_replace('/ +/', '', $fildpostid);

$subdel = mysql_query("DELETE FROM posts WHERE id='$dpostid' OR tag_id='$dpostid' AND group_admin='$id' OR share_id='$dpostid'");
$subdel = mysql_query("DELETE FROM likes WHERE post_id='$dpostid'");
$subdel = mysql_query("DELETE FROM likecom WHERE post_id='$dpostid'");
$subdel = mysql_query("DELETE FROM comments WHERE post_id='$dpostid'");

if(isset($subdel)){

echo '
<script>
$(document).ready(function(){
$("#accept_delete_4555,#denyed_delete_4555").removeAttr("disabled");
$("#fullscrdeltool,.text_type_4555").fadeOut(100,function(){
$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats,.center_left_main").removeClass("blurfullscreen");
});
$(".post#'.$dpostid.'").remove();
});
</script>
';	

}

}

?>


<?php
if(isset($_POST['uposteshara'])){
$postid = addslashes(htmlspecialchars(strip_tags(trim($_POST['eshara']))));
$groubfill = addslashes(htmlspecialchars(strip_tags(trim($_POST['groub']))));
$postid = preg_replace('/ +/', '', $postid);
$grouballm = preg_replace('/ +/', '', $groubfill);
$grouballm = str_replace('-null', '', $grouballm);
if(!empty($grouballm)){
$updates = mysql_query("UPDATE posts SET group_share='$grouballm',type_all='taged_from',group_admin='$id' WHERE id='$postid' AND type='ori'");
$deltold = mysql_query("DELETE FROM posts WHERE tag_id='$postid' AND type='taged' AND type_all='taged_to'");
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
}else {
$deltolo = mysql_query("DELETE FROM posts WHERE tag_id='$postid' AND type='taged' AND type_all='taged_to'");
$updatei = mysql_query("UPDATE posts SET group_share='',group_admin='',type_all='' WHERE id='$postid' AND type='ori'");	
}
echo '
<script>
location.reload();
</script>
';
}
?>





















