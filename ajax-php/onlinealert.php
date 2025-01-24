<?php

include ("../connectdb/index.php");

?>

<?php
if($_GET['getonalert']){
$query = mysql_query("SELECT * FROM alert WHERE to_id='$id' AND forse!='follow' AND online='insert'");
while($fetc = mysql_fetch_assoc($query)){
$date = $fetc['date'];
$alert_id = $fetc['id'];
$userid_n = $fetc['user_id'];

$updatei = mysql_query("UPDATE alert SET online='send' WHERE id='$alert_id' AND to_id='$id' AND forse!='follow' AND online='insert'");
if(isset($updatei)){


?>

<div class="mini_alert" id="alert<?php echo $alert_id; ?>">

<?php
$frid = $fetc['user_id'];
$toid = $fetc['to_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$frid'");
while($fete = mysql_fetch_array($fetequ)){

$user_img = $fete['pro_img'];
$user_name = $fete['first_name'];


}
?>
<div class="alert_rightuse_5545">
<img src="../upload/images/low/<?php echo $user_img; ?>" />
</div>
<?php


if($fetc['type'] == "comment_post"){

$commid = $fetc['for_to'];
$postuy = $fetc['post_id'];
$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){
$post_img = $frto['post_img'];
$post_aud = $frto['audio'];
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postuy' AND id='$commid' AND from_id='$frid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$commentxt = $fort['text'];
}
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
<div class="rightext_noti_5545">
<?php
if(!empty($commentxt)){
$commhetxt = str_replace("<p>","",$commentxt);
$commhetxt = str_replace("</p>","",$commhetxt);
$posthetxt = preg_replace("#\<a.*?\>(.*?)\<\/a\>#si","",$posthetxt);

echo '<h3 title="'.strip_tags($commhetxt).'"><p>'.$commhetxt.'</p></h3>';
}else {}
if(!empty($date)){
	
    $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "اسبوع", "شهر", "سنة", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "منذ";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "{$tense} $difference $periods[$j]";
    echo '<h5>'.$finaldate.'</h5>';

}else {}
?>
</div>

<?php
if(!empty($commentxt) && empty($post_img) && empty($post_aud)){
	echo '<img id="text_post_87" draggable="false" src="../img/profile/write-post.png" />';
}else {
if(!empty($post_img) && empty($post_aud)){
echo '<img id="image_post_87" draggable="false" src="../upload/posts/images/sml/'.$post_img.'" />';
}else {
if(!empty($post_aud) && empty($post_img)){
?>
<svg xmlns="http://www.w3.org/2000/svg" class="audiobackground_notif" viewBox="0 0 75 75">
<g id="g1"><polygon id="polygon1" points="39.389,13.769 22.235,28.606 6,28.606 6,47.699 21.989,47.699 39.389,62.75 39.389,13.769" style="stroke:#ffffff;stroke-width:5;stroke-linejoin:round;fill:#ffffff;"/>
<path id="path1" d="M 48.128,49.03 C 50.057,45.934 51.19,42.291 51.19,38.377 C 51.19,34.399 50.026,30.703 48.043,27.577" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path2" d="M 55.082,20.537 C 58.777,25.523 60.966,31.694 60.966,38.377 C 60.966,44.998 58.815,51.115 55.178,56.076" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path1" d="M 61.71,62.611 C 66.977,55.945 70.128,47.531 70.128,38.378 C 70.128,29.161 66.936,20.696 61.609,14.01" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
</g>
</svg>
<?php
}else {}
}
}
?>
</div>

<script>
$("#alert<?php echo $alert_id; ?>").click(function(){
	window.location = "../posts/?header_type=actionPost&local_view=3&userID=<?php echo $userid_n; ?>&headerID=<?php echo $postuy; ?>&commentID=<?php echo $commid; ?>";
});
</script>

<?php
}else {}


if($fetc['type'] == "reply_comment"){

$commid = $fetc['for_to'];
$postuy = $fetc['post_id'];
$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){
$post_img = $frto['post_img'];
$post_use = $frto['user_id'];
$post_aud = $frto['audio'];
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postuy' AND id='$commid' AND from_id='$frid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$commentxt = $fort['text'];
}
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
<div class="rightext_noti_5545">
<?php
if(!empty($commentxt)){
$commhetxt = str_replace("<p>","",$commentxt);
$commhetxt = str_replace("</p>","",$commhetxt);
$posthetxt = preg_replace("#\<a.*?\>(.*?)\<\/a\>#si","",$posthetxt);

echo '<h3 title="'.strip_tags($commhetxt).'"><p>'.$commhetxt.'</p></h3>';
}else {}
if(!empty($date)){
	
    $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "اسبوع", "شهر", "سنة", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "منذ";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "{$tense} $difference $periods[$j]";
    echo '<h5>'.$finaldate.'</h5>';

}else {}
?>
</div>

<?php
if(!empty($commentxt) && empty($post_img) && empty($post_aud)){
	echo '<img id="text_post_87" draggable="false" src="../img/profile/write-post.png" />';
}else {
if(!empty($post_img) && empty($post_aud)){
echo '<img id="image_post_87" draggable="false" src="../upload/posts/images/sml/'.$post_img.'" />';
}else {
if(!empty($post_aud) && empty($post_img)){
?>
<svg xmlns="http://www.w3.org/2000/svg" class="audiobackground_notif" viewBox="0 0 75 75">
<g id="g1"><polygon id="polygon1" points="39.389,13.769 22.235,28.606 6,28.606 6,47.699 21.989,47.699 39.389,62.75 39.389,13.769" style="stroke:#ffffff;stroke-width:5;stroke-linejoin:round;fill:#ffffff;"/>
<path id="path1" d="M 48.128,49.03 C 50.057,45.934 51.19,42.291 51.19,38.377 C 51.19,34.399 50.026,30.703 48.043,27.577" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path2" d="M 55.082,20.537 C 58.777,25.523 60.966,31.694 60.966,38.377 C 60.966,44.998 58.815,51.115 55.178,56.076" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path1" d="M 61.71,62.611 C 66.977,55.945 70.128,47.531 70.128,38.378 C 70.128,29.161 66.936,20.696 61.609,14.01" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
</g>
</svg>
<?php
}else {}
}
}
?>
</div>


<?php
}else {}
if($fetc['type'] == "like_reply"){

$commid = $fetc['for_id'];
$postuy = $fetc['post_id'];
$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){
$post_img = $frto['post_img'];
$post_aud = $frto['audio'];
$post_use = $frto['user_id'];
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postuy' AND id='$commid' AND from_id='$toid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$commentxt = $fort['text'];
}
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
اعجب <a><?php echo $user_name; ?></a> بردك علي تعليق لتدوينة <a><?php echo $usrepostmo; ?></a>
</span>
<div class="rightext_noti_5545">
<?php
if(!empty($commentxt)){
$commhetxt = str_replace("<p>","",$commentxt);
$commhetxt = str_replace("</p>","",$commhetxt);
$posthetxt = preg_replace("#\<a.*?\>(.*?)\<\/a\>#si","",$posthetxt);

echo '<h3 title="'.strip_tags($commhetxt).'"><p>'.$commhetxt.'</p></h3>';
}else {}
if(!empty($date)){
	
    $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "اسبوع", "شهر", "سنة", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "منذ";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "{$tense} $difference $periods[$j]";
    echo '<h5>'.$finaldate.'</h5>';

}else {}
?>
</div>

<?php
if(!empty($commentxt) && empty($post_img) && empty($post_aud)){
	echo '<img id="text_post_87" draggable="false" src="../img/profile/write-post.png" />';
}else {
if(!empty($post_img) && empty($post_aud)){
echo '<img id="image_post_87" draggable="false" src="../upload/posts/images/sml/'.$post_img.'" />';
}else {
if(!empty($post_aud) && empty($post_img)){
?>
<svg xmlns="http://www.w3.org/2000/svg" class="audiobackground_notif" viewBox="0 0 75 75">
<g id="g1"><polygon id="polygon1" points="39.389,13.769 22.235,28.606 6,28.606 6,47.699 21.989,47.699 39.389,62.75 39.389,13.769" style="stroke:#ffffff;stroke-width:5;stroke-linejoin:round;fill:#ffffff;"/>
<path id="path1" d="M 48.128,49.03 C 50.057,45.934 51.19,42.291 51.19,38.377 C 51.19,34.399 50.026,30.703 48.043,27.577" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path2" d="M 55.082,20.537 C 58.777,25.523 60.966,31.694 60.966,38.377 C 60.966,44.998 58.815,51.115 55.178,56.076" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path1" d="M 61.71,62.611 C 66.977,55.945 70.128,47.531 70.128,38.378 C 70.128,29.161 66.936,20.696 61.609,14.01" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
</g>
</svg>
<?php
}else {}
}
}
?>
</div>


<script>
$("#alert<?php echo $alert_id; ?>").click(function(){
	window.location = "../posts/?header_type=actionPost&local_view=4&userID=<?php echo $frid; ?>&headerID=<?php echo $postuy; ?>&commentID=<?php echo $commid; ?>";
});
</script>


<?php	
}else {}
if($fetc['type'] == "like_comment"){

$commid = $fetc['for_id'];
$postuy = $fetc['post_id'];
$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){
$post_img = $frto['post_img'];
$post_aud = $frto['audio'];
$post_use = $frto['user_id'];
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postuy' AND id='$commid' AND from_id='$toid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$commentxt = $fort['text'];
}
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
<div class="rightext_noti_5545">
<?php
if(!empty($commentxt)){
$commhetxt = str_replace("<p>","",$commentxt);
$commhetxt = str_replace("</p>","",$commhetxt);
$posthetxt = preg_replace("#\<a.*?\>(.*?)\<\/a\>#si","",$posthetxt);

echo '<h3 title="'.strip_tags($commhetxt).'"><p>'.$commhetxt.'</p></h3>';
}else {}
if(!empty($date)){
	
    $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "اسبوع", "شهر", "سنة", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "منذ";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "{$tense} $difference $periods[$j]";
    echo '<h5>'.$finaldate.'</h5>';

}else {}
?>
</div>

<?php
if(!empty($commentxt) && empty($post_img) && empty($post_aud)){
	echo '<img id="text_post_87" draggable="false" src="../img/profile/write-post.png" />';
}else {
if(!empty($post_img) && empty($post_aud)){
echo '<img id="image_post_87" draggable="false" src="../upload/posts/images/sml/'.$post_img.'" />';
}else {
if(!empty($post_aud) && empty($post_img)){
?>
<svg xmlns="http://www.w3.org/2000/svg" class="audiobackground_notif" viewBox="0 0 75 75">
<g id="g1"><polygon id="polygon1" points="39.389,13.769 22.235,28.606 6,28.606 6,47.699 21.989,47.699 39.389,62.75 39.389,13.769" style="stroke:#ffffff;stroke-width:5;stroke-linejoin:round;fill:#ffffff;"/>
<path id="path1" d="M 48.128,49.03 C 50.057,45.934 51.19,42.291 51.19,38.377 C 51.19,34.399 50.026,30.703 48.043,27.577" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path2" d="M 55.082,20.537 C 58.777,25.523 60.966,31.694 60.966,38.377 C 60.966,44.998 58.815,51.115 55.178,56.076" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path1" d="M 61.71,62.611 C 66.977,55.945 70.128,47.531 70.128,38.378 C 70.128,29.161 66.936,20.696 61.609,14.01" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
</g>
</svg>
<?php
}else {}
}
}
?>
</div>


<script>
$("#alert<?php echo $alert_id; ?>").click(function(){
	window.location = "../posts/?header_type=actionPost&local_view=4&userID=<?php echo $frid; ?>&headerID=<?php echo $postuy; ?>&commentID=<?php echo $commid; ?>";
});
</script>


<?php	
}else {}
if($fetc['type'] == "dislike_reply"){

$commid = $fetc['for_id'];
$postuy = $fetc['post_id'];
$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){
$post_img = $frto['post_img'];
$post_aud = $frto['audio'];
$post_use = $frto['user_id'];
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postuy' AND id='$commid' AND from_id='$toid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$commentxt = $fort['text'];
}
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
لم يعجب <a><?php echo $user_name; ?></a> بردك علي تعليق لتدوينة <a><?php echo $usrepostmo; ?></a>
</span>
<div class="rightext_noti_5545">
<?php
if(!empty($commentxt)){
$commhetxt = str_replace("<p>","",$commentxt);
$commhetxt = str_replace("</p>","",$commhetxt);
$posthetxt = preg_replace("#\<a.*?\>(.*?)\<\/a\>#si","",$posthetxt);

echo '<h3 title="'.strip_tags($commhetxt).'"><p>'.$commhetxt.'</p></h3>';
}else {}
if(!empty($date)){
	
    $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "اسبوع", "شهر", "سنة", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "منذ";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "{$tense} $difference $periods[$j]";
    echo '<h5>'.$finaldate.'</h5>';

}else {}
?>
</div>

<?php
if(!empty($commentxt) && empty($post_img) && empty($post_aud)){
	echo '<img id="text_post_87" draggable="false" src="../img/profile/write-post.png" />';
}else {
if(!empty($post_img) && empty($post_aud)){
echo '<img id="image_post_87" draggable="false" src="../upload/posts/images/sml/'.$post_img.'" />';
}else {
if(!empty($post_aud) && empty($post_img)){
?>
<svg xmlns="http://www.w3.org/2000/svg" class="audiobackground_notif" viewBox="0 0 75 75">
<g id="g1"><polygon id="polygon1" points="39.389,13.769 22.235,28.606 6,28.606 6,47.699 21.989,47.699 39.389,62.75 39.389,13.769" style="stroke:#ffffff;stroke-width:5;stroke-linejoin:round;fill:#ffffff;"/>
<path id="path1" d="M 48.128,49.03 C 50.057,45.934 51.19,42.291 51.19,38.377 C 51.19,34.399 50.026,30.703 48.043,27.577" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path2" d="M 55.082,20.537 C 58.777,25.523 60.966,31.694 60.966,38.377 C 60.966,44.998 58.815,51.115 55.178,56.076" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path1" d="M 61.71,62.611 C 66.977,55.945 70.128,47.531 70.128,38.378 C 70.128,29.161 66.936,20.696 61.609,14.01" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
</g>
</svg>
<?php
}else {}
}
}
?>
</div>

<script>
$("#alert<?php echo $alert_id; ?>").click(function(){
	window.location = "../posts/?header_type=actionPost&local_view=5&userID=<?php echo $frid; ?>&headerID=<?php echo $postuy; ?>&commentID=<?php echo $commid; ?>";
});
</script>
<?php
}else {}

if($fetc['type'] == "dislike_comment"){

$commid = $fetc['for_id'];
$postuy = $fetc['post_id'];
$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){
$post_img = $frto['post_img'];
$post_aud = $frto['audio'];
$post_use = $frto['user_id'];
$querycoment = mysql_query("SELECT * FROM comments WHERE post_id='$postuy' AND id='$commid' AND from_id='$toid'");
while($fort = mysql_fetch_assoc($querycoment)){
	$commentxt = $fort['text'];
}
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
<div class="rightext_noti_5545">
<?php
if(!empty($commentxt)){
$commhetxt = str_replace("<p>","",$commentxt);
$commhetxt = str_replace("</p>","",$commhetxt);
$posthetxt = preg_replace("#\<a.*?\>(.*?)\<\/a\>#si","",$posthetxt);

echo '<h3 title="'.strip_tags($commhetxt).'"><p>'.$commhetxt.'</p></h3>';
}else {}
if(!empty($date)){
	
    $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "اسبوع", "شهر", "سنة", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "منذ";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "{$tense} $difference $periods[$j]";
    echo '<h5>'.$finaldate.'</h5>';

}else {}
?>
</div>

<?php
if(!empty($commentxt) && empty($post_img) && empty($post_aud)){
	echo '<img id="text_post_87" draggable="false" src="../img/profile/write-post.png" />';
}else {
if(!empty($post_img) && empty($post_aud)){
echo '<img id="image_post_87" draggable="false" src="../upload/posts/images/sml/'.$post_img.'" />';
}else {
if(!empty($post_aud) && empty($post_img)){
?>
<svg xmlns="http://www.w3.org/2000/svg" class="audiobackground_notif" viewBox="0 0 75 75">
<g id="g1"><polygon id="polygon1" points="39.389,13.769 22.235,28.606 6,28.606 6,47.699 21.989,47.699 39.389,62.75 39.389,13.769" style="stroke:#ffffff;stroke-width:5;stroke-linejoin:round;fill:#ffffff;"/>
<path id="path1" d="M 48.128,49.03 C 50.057,45.934 51.19,42.291 51.19,38.377 C 51.19,34.399 50.026,30.703 48.043,27.577" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path2" d="M 55.082,20.537 C 58.777,25.523 60.966,31.694 60.966,38.377 C 60.966,44.998 58.815,51.115 55.178,56.076" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path1" d="M 61.71,62.611 C 66.977,55.945 70.128,47.531 70.128,38.378 C 70.128,29.161 66.936,20.696 61.609,14.01" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
</g>
</svg>
<?php
}else {}
}
}
?>
</div>

<script>
$("#alert<?php echo $alert_id; ?>").click(function(){
	window.location = "../posts/?header_type=actionPost&local_view=5&userID=<?php echo $frid; ?>&headerID=<?php echo $postuy; ?>&commentID=<?php echo $commid; ?>";
});
</script>
<?php
}else {}
if($fetc['type'] == "like_post"){

$postuy = $fetc['for_id'];

$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){
$post_txt = $frto['post_text'];
$post_img = $frto['post_img'];
$post_aud = $frto['audio'];
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
اعجب <a><?php echo $user_name; ?></a> بتدوينتك
</span>
<div class="rightext_noti_5545">
<?php
if(!empty($post_txt)){
$posthetxt = str_replace("<p>","",$post_txt);
$posthetxt = str_replace("</p>","",$posthetxt);
$posthetxt = preg_replace("#\<a.*?\>(.*?)\<\/a\>#si","",$posthetxt);

echo '<h3 title="'.strip_tags($posthetxt).'"><p>'.$posthetxt.'</p></h3>';
}else {}
if(!empty($date)){
	
    $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "اسبوع", "شهر", "سنة", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "منذ";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "{$tense} $difference $periods[$j]";
    echo '<h5>'.$finaldate.'</h5>';

}else {}
?>
</div>

<?php
if(!empty($post_txt) && empty($post_img) && empty($post_aud)){
	echo '<img id="text_post_87" draggable="false" src="../img/profile/write-post.png" />';
}else {
if(!empty($post_img) && empty($post_aud)){
echo '<img id="image_post_87" draggable="false" src="../upload/posts/images/sml/'.$post_img.'" />';
}else {
if(!empty($post_aud) && empty($post_img)){
?>
<svg xmlns="http://www.w3.org/2000/svg" class="audiobackground_notif" viewBox="0 0 75 75">
<g id="g1"><polygon id="polygon1" points="39.389,13.769 22.235,28.606 6,28.606 6,47.699 21.989,47.699 39.389,62.75 39.389,13.769" style="stroke:#ffffff;stroke-width:5;stroke-linejoin:round;fill:#ffffff;"/>
<path id="path1" d="M 48.128,49.03 C 50.057,45.934 51.19,42.291 51.19,38.377 C 51.19,34.399 50.026,30.703 48.043,27.577" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path2" d="M 55.082,20.537 C 58.777,25.523 60.966,31.694 60.966,38.377 C 60.966,44.998 58.815,51.115 55.178,56.076" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path1" d="M 61.71,62.611 C 66.977,55.945 70.128,47.531 70.128,38.378 C 70.128,29.161 66.936,20.696 61.609,14.01" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
</g>
</svg>
<?php
}else {}
}
}
?>
</div>
<script>
$("#alert<?php echo $alert_id; ?>").click(function(){
	window.location = "../posts/?header_type=actionPost&local_view=1&userID=<?php echo $userid_n; ?>&headerID=<?php echo $postuy; ?>";
});
</script>

<?php
}else {}
if($fetc['type'] == "dislike_post"){
	
$postuy = $fetc['for_id'];

$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){
$post_txt = $frto['post_text'];
$post_img = $frto['post_img'];
$post_aud = $frto['audio'];

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
لم يعجب <a><?php echo $user_name; ?></a> بتدوينتك
</span>
<div class="rightext_noti_5545">
<?php
if(!empty($post_txt)){
$posthetxt = str_replace("<p>","",$post_txt);
$posthetxt = str_replace("</p>","",$posthetxt);
$posthetxt = preg_replace("#\<a.*?\>(.*?)\<\/a\>#si","",$posthetxt);

echo '<h3 title="'.strip_tags($posthetxt).'"><p>'.$posthetxt.'</p></h3>';
}else {}
if(!empty($date)){
	
    $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "اسبوع", "شهر", "سنة", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "منذ";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "{$tense} $difference $periods[$j]";
    echo '<h5>'.$finaldate.'</h5>';

}else {}
?>
</div>
<?php
if(!empty($post_txt) && empty($post_img) && empty($post_aud)){
	echo '<img id="text_post_87" draggable="false" src="../img/profile/write-post.png" />';
}else {
if(!empty($post_img) && empty($post_aud)){
echo '<img id="image_post_87" draggable="false" src="../upload/posts/images/sml/'.$post_img.'" />';
}else {
if(!empty($post_aud) && empty($post_img)){
?>
<svg xmlns="http://www.w3.org/2000/svg" class="audiobackground_notif" viewBox="0 0 75 75">
<g id="g1"><polygon id="polygon1" points="39.389,13.769 22.235,28.606 6,28.606 6,47.699 21.989,47.699 39.389,62.75 39.389,13.769" style="stroke:#ffffff;stroke-width:5;stroke-linejoin:round;fill:#ffffff;"/>
<path id="path1" d="M 48.128,49.03 C 50.057,45.934 51.19,42.291 51.19,38.377 C 51.19,34.399 50.026,30.703 48.043,27.577" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path2" d="M 55.082,20.537 C 58.777,25.523 60.966,31.694 60.966,38.377 C 60.966,44.998 58.815,51.115 55.178,56.076" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path1" d="M 61.71,62.611 C 66.977,55.945 70.128,47.531 70.128,38.378 C 70.128,29.161 66.936,20.696 61.609,14.01" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
</g>
</svg>
<?php
}else {}
}
}
?>
</div>

<script>
$("#alert<?php echo $alert_id; ?>").click(function(){
	window.location = "../posts/?header_type=actionPost&local_view=2&userID=<?php echo $userid_n; ?>&headerID=<?php echo $postuy; ?>";
});
</script>

<?php
}else {}

if($fetc['type'] == "emoji_post"){
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

$postuy = $fetc['for_id'];

$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){
$post_txt = $frto['post_text'];
$post_img = $frto['post_img'];
$post_aud = $frto['audio'];
}

?>

<div class="bodytext_notifacation">
<span>
<img src="../img/imogi/<?php echo $fetc['session']; ?>" class="notiemoji_tafaol" />
تفاعل <a><?php echo $user_name; ?></a> مع تدويتنك <text>(<?php echo $textarray[$sessionemoji]; ?>)</text>
</span>
<div class="rightext_noti_5545">
<?php
if(!empty($post_txt)){
$posthetxt = str_replace("<p>","",$post_txt);
$posthetxt = str_replace("</p>","",$posthetxt);
$posthetxt = preg_replace("#\<a.*?\>(.*?)\<\/a\>#si","",$posthetxt);

echo '<h3 title="'.strip_tags($posthetxt).'"><p>'.$posthetxt.'</p></h3>';
}else {}
if(!empty($date)){
	
    $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "اسبوع", "شهر", "سنة", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "منذ";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "{$tense} $difference $periods[$j]";
    echo '<h5>'.$finaldate.'</h5>';

}else {}
?>
</div>

<?php
if(!empty($post_txt) && empty($post_img) && empty($post_aud)){
	echo '<img id="text_post_87" draggable="false" src="../img/profile/write-post.png" />';
}else {
if(!empty($post_img) && empty($post_aud)){
echo '<img id="image_post_87" draggable="false" src="../upload/posts/images/sml/'.$post_img.'" />';
}else {
if(!empty($post_aud) && empty($post_img)){
?>
<svg xmlns="http://www.w3.org/2000/svg" class="audiobackground_notif" viewBox="0 0 75 75">
<g id="g1"><polygon id="polygon1" points="39.389,13.769 22.235,28.606 6,28.606 6,47.699 21.989,47.699 39.389,62.75 39.389,13.769" style="stroke:#ffffff;stroke-width:5;stroke-linejoin:round;fill:#ffffff;"/>
<path id="path1" d="M 48.128,49.03 C 50.057,45.934 51.19,42.291 51.19,38.377 C 51.19,34.399 50.026,30.703 48.043,27.577" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path2" d="M 55.082,20.537 C 58.777,25.523 60.966,31.694 60.966,38.377 C 60.966,44.998 58.815,51.115 55.178,56.076" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path1" d="M 61.71,62.611 C 66.977,55.945 70.128,47.531 70.128,38.378 C 70.128,29.161 66.936,20.696 61.609,14.01" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
</g>
</svg>
<?php
}else {}
}
}
?>
</div>
<script>
$("#alert<?php echo $alert_id; ?>").click(function(){
	window.location = "../posts/?header_type=actionPost&local_view=1&userID=<?php echo $userid_n; ?>&headerID=<?php echo $postuy; ?>";
});
</script>

<?php
}else {}
}else {}
?>

<?php
if($fetc['type'] == "menshin_post"){

$postuy = $fetc['post_id'];

$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){
$post_txt = $frto['post_text'];
$post_img = $frto['post_img'];
$post_aud = $frto['audio'];
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
اشار <a><?php echo $user_name; ?></a> اليك في تدوينته
</span>
<div class="rightext_noti_5545">
<?php
if(!empty($post_txt)){
$posthetxt = str_replace("<p>","",$post_txt);
$posthetxt = str_replace("</p>","",$posthetxt);
$posthetxt = preg_replace("#\<a.*?\>(.*?)\<\/a\>#si","",$posthetxt);

echo '<h3 title="'.strip_tags($posthetxt).'"><p>'.$posthetxt.'</p></h3>';
}else {}
if(!empty($date)){
	
    $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "اسبوع", "شهر", "سنة", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "منذ";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "{$tense} $difference $periods[$j]";
    echo '<h5>'.$finaldate.'</h5>';

}else {}
?>
</div>

<?php
if(!empty($post_txt) && empty($post_img) && empty($post_aud)){
	echo '<img id="text_post_87" draggable="false" src="../img/profile/write-post.png" />';
}else {
if(!empty($post_img) && empty($post_aud)){
echo '<img id="image_post_87" draggable="false" src="../upload/posts/images/sml/'.$post_img.'" />';
}else {
if(!empty($post_aud) && empty($post_img)){
?>
<svg xmlns="http://www.w3.org/2000/svg" class="audiobackground_notif" viewBox="0 0 75 75">
<g id="g1"><polygon id="polygon1" points="39.389,13.769 22.235,28.606 6,28.606 6,47.699 21.989,47.699 39.389,62.75 39.389,13.769" style="stroke:#ffffff;stroke-width:5;stroke-linejoin:round;fill:#ffffff;"/>
<path id="path1" d="M 48.128,49.03 C 50.057,45.934 51.19,42.291 51.19,38.377 C 51.19,34.399 50.026,30.703 48.043,27.577" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path2" d="M 55.082,20.537 C 58.777,25.523 60.966,31.694 60.966,38.377 C 60.966,44.998 58.815,51.115 55.178,56.076" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path1" d="M 61.71,62.611 C 66.977,55.945 70.128,47.531 70.128,38.378 C 70.128,29.161 66.936,20.696 61.609,14.01" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
</g>
</svg>
<?php
}else {}
}
}
?>
</div>
<script>
$("#alert<?php echo $alert_id; ?>").click(function(){
	window.location = "../posts/?header_type=localPost&local_view=6&userID=<?php echo $userid_n; ?>&headerID=<?php echo $postuy; ?>";
});
</script>

<?php
}else {}
?>



<?php
if($fetc['type'] == "share_post"){

$postuy = $fetc['post_id'];

$selpost = mysql_query("SELECT * FROM posts WHERE id='$postuy'");
while($frto = mysql_fetch_array($selpost)){
$post_txt = $frto['post_text'];
$post_img = $frto['post_img'];
$post_aud = $frto['audio'];
}

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
<div class="rightext_noti_5545">
<?php
if(!empty($post_txt)){
$posthetxt = str_replace("<p>","",$post_txt);
$posthetxt = str_replace("</p>","",$posthetxt);
$posthetxt = preg_replace("#\<a.*?\>(.*?)\<\/a\>#si","",$posthetxt);

echo '<h3 title="'.strip_tags($posthetxt).'"><p>'.$posthetxt.'</p></h3>';
}else {}
if(!empty($date)){
	
    $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "اسبوع", "شهر", "سنة", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "منذ";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "{$tense} $difference $periods[$j]";
    echo '<h5>'.$finaldate.'</h5>';

}else {}
?>
</div>

<?php
if(!empty($post_txt) && empty($post_img) && empty($post_aud)){
	echo '<img id="text_post_87" draggable="false" src="../img/profile/write-post.png" />';
}else {
if(!empty($post_img) && empty($post_aud)){
echo '<img id="image_post_87" draggable="false" src="../upload/posts/images/sml/'.$post_img.'" />';
}else {
if(!empty($post_aud) && empty($post_img)){
?>
<svg xmlns="http://www.w3.org/2000/svg" class="audiobackground_notif" viewBox="0 0 75 75">
<g id="g1"><polygon id="polygon1" points="39.389,13.769 22.235,28.606 6,28.606 6,47.699 21.989,47.699 39.389,62.75 39.389,13.769" style="stroke:#ffffff;stroke-width:5;stroke-linejoin:round;fill:#ffffff;"/>
<path id="path1" d="M 48.128,49.03 C 50.057,45.934 51.19,42.291 51.19,38.377 C 51.19,34.399 50.026,30.703 48.043,27.577" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path2" d="M 55.082,20.537 C 58.777,25.523 60.966,31.694 60.966,38.377 C 60.966,44.998 58.815,51.115 55.178,56.076" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path1" d="M 61.71,62.611 C 66.977,55.945 70.128,47.531 70.128,38.378 C 70.128,29.161 66.936,20.696 61.609,14.01" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
</g>
</svg>
<?php
}else {}
}
}
?>
</div>
<script>
<?php
$selectshareid = mysql_query("SELECT share_id FROM posts WHERE id='$postuy'");
while($coio = mysql_fetch_array($selectshareid)){
	$fetchoplop = $coio['share_id'];
}
?>
$("#alert<?php echo $alert_id; ?>").click(function(){
	window.location = "../posts/?header_type=localPost&local_view=7&userID=<?php echo $userid_n; ?>&fromID=<?php echo $id; ?>&headerID=<?php echo $fetchoplop; ?>";
});
</script>

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
<script>
$(".showbox_noti").remove();
</script>
<?php
}
}
}
?>


