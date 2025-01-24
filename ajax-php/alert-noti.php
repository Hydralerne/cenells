<?php

include ("../connectdb/index.php");

?>

<?php

if($_GET){

$offset = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['offset'])))));
$limit = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['limit'])))));
$offset = preg_replace('/ +/', '', $offset);
$limit = preg_replace('/ +/', '', $limit);
if(isset($_GET['menu'])){
$query = mysql_query("SELECT * FROM alert WHERE to_id='$id' AND online!='insert' AND seen!='yes' ORDER BY id DESC LIMIT $limit offset $offset");
$count = mysql_query("SELECT COUNT(id) FROM alert WHERE to_id='$id' AND online!='insert' AND seen!='yes'");
}else {
$query = mysql_query("SELECT * FROM alert WHERE to_id='$id' AND online!='insert' ORDER BY id DESC LIMIT $limit offset $offset");
$count = mysql_query("SELECT COUNT(id) FROM alert WHERE to_id='$id' AND forse!='follow' AND online!='insert'");
}
$result = mysql_num_rows($count);
$reloop = 0;
while($fetc = mysql_fetch_array($query)){
$reloop++;
$empty = "no";
$date = $fetc['date'];
$alert_id = $fetc['id'];
$userid = $fetc['user_id'];
$postid = $fetc['post_id'];
$commid = $fetc['for_to'];
$forsid = $fetc['for_id'];
$toid = $fetc['to_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$userid'");
while($fete = mysql_fetch_array($fetequ)){
$user_img = $fete['pro_img'];
$user_name = $fete['first_name'];
}
$selpost = mysql_query("SELECT * FROM posts WHERE id='$postid'");
while($frto = mysql_fetch_array($selpost)){
$post_img = $frto['post_img'];
$post_txt = $frto['post_text'];
$post_aud = $frto['audio'];
$post_use = $frto['user_id'];
}
?>
<div class="mini_alert" id="alert<?php echo $alert_id; ?>">
<div class="alert_rightuse_5545">
<img src="../upload/images/low/<?php echo $user_img; ?>" />
</div>
<?php
if($fetc['type'] == "comment_post"){
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postid' AND id='$commid' AND from_id='$userid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$headertext = $fort['text'];
}
?>
<div class="bodytext_notifacation">
<span>
<svg class="comentnoti_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
أضاف <a><?php echo $user_name; ?></a> تعليق لتدوينتك
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php
}else {}
if($fetc['type'] == "reply_comment"){
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postid' AND id='$commid' AND from_id='$userid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$headertext = $fort['text'];
}
$queryaha = mysql_query("SELECT * FROM users WHERE id='$post_use'");
while($ropo = mysql_fetch_assoc($queryaha)){
	$usrepostmo = $ropo['first_name'];
}
?>
<div class="bodytext_notifacation">
<span>
<svg class="comentnoti_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
رد <a><?php echo $user_name; ?></a> علي تعليقك لتدوينة <a><?php echo $usrepostmo; ?></a>
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php
}else {}
if($fetc['type'] == "like_reply"){
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postid' AND id='$forsid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$headertext = $fort['text'];
	$usermencex = $fort['from_id'];
}
$queryaha = mysql_query("SELECT * FROM users WHERE id='$usermencex'");
while($ropo = mysql_fetch_assoc($queryaha)){
	$usrepostmo = $ropo['first_name'];
}
?>
<div class="bodytext_notifacation">
<span>
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000" class="notimainitlike_svg">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
اعجب <a><?php echo $user_name; ?></a> بردك علي تعليق <a><?php echo $usrepostmo; ?></a>
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php
}else {}
if($fetc['type'] == "like_comment"){
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postid' AND id='$forsid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$headertext = $fort['text'];
}
$queryaha = mysql_query("SELECT * FROM users WHERE id='$post_use'");
while($ropo = mysql_fetch_assoc($queryaha)){
	$usrepostmo = $ropo['first_name'];
}
?>
<div class="bodytext_notifacation">
<span>
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000" class="notimainitlike_svg">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
اعجب <a><?php echo $user_name; ?></a> بتعليقك لتدوينة <a><?php echo $usrepostmo; ?></a>
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php	
}else {}
if($fetc['type'] == "menshin_comment"){
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postid' AND id='$forsid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$headertext = $fort['text'];
}
$queryaha = mysql_query("SELECT * FROM users WHERE id='$post_use'");
while($ropo = mysql_fetch_assoc($queryaha)){
	$usrepostmo = $ropo['first_name'];
}
?>
<div class="bodytext_notifacation">
<span>
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000" class="notimenshinin_svg">
<g transform="translate(0.000000,96.000000) scale(0.100000,-0.100000)"
 stroke="none">
<path d="M145 855 l-25 -24 0 -311 0 -311 25 -24 c22 -23 32 -25 117 -25 l92
0 63 -62 63 -62 63 62 63 62 92 0 c85 0 95 2 117 25 l25 24 0 311 0 311 -25
24 -24 25 -311 0 -311 0 -24 -25z m392 -125 c71 -43 63 -154 -14 -186 -51 -22
-106 -5 -133 39 -24 38 -25 68 -5 107 29 57 96 75 152 40z m75 -275 c65 -23
108 -64 108 -104 l0 -31 -240 0 -240 0 0 26 c0 36 15 59 53 83 83 51 216 62
319 26z"/>
</g>
</svg>
اشار <a><?php echo $user_name; ?></a> اليك في تعليق لتدوينة <a><?php echo $usrepostmo; ?></a>
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php	
}else {}
if($fetc['type'] == "menshin_reply"){
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postid' AND id='$forsid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$headertext = $fort['text'];
	$usermencex = $fort['from_id'];
}
$queryaha = mysql_query("SELECT * FROM users WHERE id='$usermencex'");
while($ropo = mysql_fetch_assoc($queryaha)){
	$usrepostmo = $ropo['first_name'];
}
?>
<div class="bodytext_notifacation">
<span>
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000" class="notimenshinin_svg">
<g transform="translate(0.000000,96.000000) scale(0.100000,-0.100000)"
 stroke="none">
<path d="M145 855 l-25 -24 0 -311 0 -311 25 -24 c22 -23 32 -25 117 -25 l92
0 63 -62 63 -62 63 62 63 62 92 0 c85 0 95 2 117 25 l25 24 0 311 0 311 -25
24 -24 25 -311 0 -311 0 -24 -25z m392 -125 c71 -43 63 -154 -14 -186 -51 -22
-106 -5 -133 39 -24 38 -25 68 -5 107 29 57 96 75 152 40z m75 -275 c65 -23
108 -64 108 -104 l0 -31 -240 0 -240 0 0 26 c0 36 15 59 53 83 83 51 216 62
319 26z"/>
</g>
</svg>
اشار <a><?php echo $user_name; ?></a> اليك في رد علي تعليق <a><?php echo $usrepostmo; ?></a>
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php	
}else {}
if($fetc['type'] == "dislike_reply"){
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postid' AND id='$forsid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$headertext = $fort['text'];
	$usermencex = $fort['from_id'];
}
$queryaha = mysql_query("SELECT * FROM users WHERE id='$usermencex'");
while($ropo = mysql_fetch_assoc($queryaha)){
	$usrepostmo = $ropo['first_name'];
}
?>
<div class="bodytext_notifacation">
<span>
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000" class="notimainitdislike_svg">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
لم يعجب <a><?php echo $user_name; ?></a> بردك علي تعليق <a><?php echo $usrepostmo; ?></a>
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php
}else {}
if($fetc['type'] == "dislike_comment"){
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postid' AND id='$forsid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$headertext = $fort['text'];
}
$queryaha = mysql_query("SELECT * FROM users WHERE id='$post_use'");
while($ropo = mysql_fetch_assoc($queryaha)){
	$usrepostmo = $ropo['first_name'];
}
?>
<div class="bodytext_notifacation">
<span>
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000" class="notimainitdislike_svg">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
لم يعجب <a><?php echo $user_name; ?></a> بتعليقك لتدوينة <a><?php echo $usrepostmo; ?></a>
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php
}else {}
if($fetc['type'] == "like_post"){
$headertext = $post_txt;
?>
<div class="bodytext_notifacation">
<span>
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000" class="notimainitlike_svg">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
اعجب <a><?php echo $user_name; ?></a> بتدوينتك
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php
}else {}
if($fetc['type'] == "dislike_post"){
$headertext = $post_txt;
?>
<div class="bodytext_notifacation">
<span>
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000" class="notimainitdislike_svg">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
لم يعجب <a><?php echo $user_name; ?></a> بتدوينتك
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php
}else {}
if($fetc['type'] == "emoji_post"){
$headertext = $post_txt;
$emojiarray = array('1','2','3','4','5');
if(in_array($fetc['session'],$emojiarray)){
$sessionemoji = $fetc['session'];
$textarray = array(
'1' => 'فرحان',
'2' => 'غضبان',
'3' => 'منفعل',
'4' => 'لا يبالي',
'5' => 'مستمتع'
);
?>
<div class="bodytext_notifacation">
<span>
<img src="../img/imogi/<?php echo $fetc['session']; ?>" class="notiemoji_tafaol" />
تفاعل <a><?php echo $user_name; ?></a> مع تدويتنك <text>(<?php echo $textarray[$sessionemoji]; ?>)</text>
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php
}else {}
}else {}
?>
<?php
if($fetc['type'] == "menshin_post"){
$headertext = $post_txt;
?>
<div class="bodytext_notifacation">
<span>
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000" class="notimenshinin_svg">
<g transform="translate(0.000000,96.000000) scale(0.100000,-0.100000)"
 stroke="none">
<path d="M145 855 l-25 -24 0 -311 0 -311 25 -24 c22 -23 32 -25 117 -25 l92
0 63 -62 63 -62 63 62 63 62 92 0 c85 0 95 2 117 25 l25 24 0 311 0 311 -25
24 -24 25 -311 0 -311 0 -24 -25z m392 -125 c71 -43 63 -154 -14 -186 -51 -22
-106 -5 -133 39 -24 38 -25 68 -5 107 29 57 96 75 152 40z m75 -275 c65 -23
108 -64 108 -104 l0 -31 -240 0 -240 0 0 26 c0 36 15 59 53 83 83 51 216 62
319 26z"/>
</g>
</svg>
اشار <a><?php echo $user_name; ?></a> اليك في تدوينته
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php
}else {}
?>
<?php
if($fetc['type'] == "share_post"){
$headertext = $post_txt;
?>
<div class="bodytext_notifacation">
<span>
<svg xmlns="http://www.w3.org/2000/svg" class="reposted_svg_noti" version="1.0" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M1752 4042 c1 -5 75 -99 163 -210 l160 -201 800 -3 c710 -3 804 -5 835 -19 46 -21 89 -65 111 -114 17 -37 19 -78 19 -592 l0 -553 -315 0 c-173 0 -315 -3 -315 -7 0 -11 836 -1055 844 -1054 8 0 846 1045 846 1055 0 3 -142 6 -315 6 l-315 0 0 534 c0 577 -5 647 -50 763 -67 175 -201 301 -397 376 l-58 22 -1008 3 c-571 1 -1007 -1 -1005 -6z"></path>
<path d="M642 3311 c-232 -291 -422 -531 -422 -535 0 -3 142 -6 315 -6 l315 0 0 -534 c0 -577 5 -647 50 -763 67 -175 201 -301 397 -376 l58 -22 1008 -3 c571 -1 1007 1 1005 6 -1 5 -75 99 -163 210 l-160 201 -800 3 c-710 3 -804 5 -835 19 -46 21 -89 65 -111 114 -17 37 -19 78 -19 593 l0 552 315 0 c173 0 315 3 315 8 0 5 -812 1026 -838 1054 -4 4 -197 -231 -430 -521z"></path>
</g>
</svg>
اعاد <a><?php echo $user_name; ?></a> تدوين تدوينة خاصة بك
</span>
<?php
include "alertright-body.php";
?>
</div>
<?php
}else {}
?>
<script>
$(".noti_ico").click(function(){
	setTimeout(function(){
    $.post("../ajax-php/follow-alert.php", {subalertseen: "submit",alertid: "<?php echo $fetc['id']; ?>"});
},1000);
});
</script>
</div>
<?php
if($reloop == $result){
echo '
<script>
$(".showbox_noti").remove();
</script>
';
}else {}

}

if(empty($empty) && isset($_GET['menu']) && $offset == "0"){
	echo "
	<img src='../img/alert.png' id='empty_alert_ico' />
	<span id='emptyspanalert'>عفواً صندوق الاشعارات لديك فارغ</span>
	<script>
	$('.showbox_menualert').remove();
	</script>
	";
}

}

?>


