<?php

include ("../connectdb/index.php");

?>

<?php

// follow alert request

if($_GET['getonfolow']){

$querya = mysql_query("SELECT * FROM follow_alert WHERE to_id='$id' AND forse='follow' AND online='insert' ORDER BY id DESC");
while($fetca = mysql_fetch_array($querya)){
$alertid = $fetca['id'];
$updatei = mysql_query("UPDATE follow_alert SET online='send' WHERE id='$alertid' AND to_id='$id' AND forse='follow' AND online='insert'");
if(isset($updatei)){
$frid = $fetca['user_id'];
$fetequ = mysql_query("SELECT * FROM users WHERE id='$frid'");
while($fetea = mysql_fetch_array($fetequ)){

$user_img = $fetea['pro_img'];
$user_name = $fetea['name'];

?>
<script>
var span = $(".ajax_count_foll span").text();
var valo = Number(span) + 1;
$(".ajax_count_foll span").text(valo);
$(".ajax_count_foll").fadeIn(100);
var audio = document.getElementById("noti_audio_main");
audio.play();
</script>
<div class="mini_alert" id="mif<?php echo $fetca['id']; ?>">

<div class="right_follownoti_hforse">
<img src="../upload/images/low/<?php echo $user_img; ?>" id="alert_user_img" />
<a href="../<?php echo $frid ?>">
<p><?php echo $user_name; ?></p>
</a>
</div>

<?php
if($fetca['type'] == "activ_follow"){

if($fetea['c_sex'] == "male"){
	$sex_follow = "لقد وافقت علي طلبه لمتابعتك";
}else{
	$sex_follow = "لقد وافقتِ علي طلبه لمتابعتك";
}

$date = $fetca['date'];
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

}else {}
?>
<div class="follow_notitext">
<span><?php echo $sex_follow; ?></span>
<button type="button" id="delfolaaa">حذف</button>
<h5><?php echo $finaldate; ?></h5>
<script>
$("#addf").click(function(){
	setTimeout(function(){
    $.post("../ajax-php/follow-alert.php", {subfolalseen: "submit",alertid: "<?php echo $fetca['id']; ?>"});
},1000);
});
$("#mif<?php echo $fetca['id']; ?> #delfolaaa").click(function(){
setTimeout(function(){
    $.post("../ajax-php/follow-alert.php", {subnofollow: "submit",userfolid: "<?php echo $fetca['user_id']; ?>"});
},1000);
});
</script>
</div>
<?php

}

if($fetca['type'] == "per_follow"){
?>

<?php

if($fetea['c_sex'] == "male"){
	$sex_follow = "ارسل لك طلب متابعة";
}else {
	$sex_follow = "ارسلت لك طلب متابعة";
}
$date = $fetca['date'];
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

}else {}
?>
<div class="follow_notitext notifollow_request">

<span><?php echo $sex_follow; ?></span>

<button type="button" class="<?php echo "yes_".$fetca['id']."_follow"; ?>" id="yesfollow">موافق</button>
<button type="button" class="<?php echo "no_".$fetca['id']."_follow"; ?>" id="nofollow">حذف</button>

<h5><?php echo $finaldate; ?></h5>
<script>

$(".<?php echo "yes_".$fetca['id']."_follow"; ?>").click(function(){
    $.post("../ajax-php/follow-alert.php", {subfollowing: "submit",userfolid: "<?php echo $fetca['user_id']; ?>"});
});

$(".<?php echo "no_".$fetca['id']."_follow"; ?>").click(function(){
    $.post("../ajax-php/follow-alert.php", {subnofollow: "submit",userfolid: "<?php echo $fetca['user_id']; ?>"});
});

$("#addf").click(function(){
	setTimeout(function(){
    $.post("../ajax-php/follow-alert.php", {subfolalseen: "submit",alertid: "<?php echo $fetca['id']; ?>"});
},1000);
});

</script>
</div>
<?php
}
if($fetca['type'] == "pub_follow"){
?>

<?php

if($fetea['c_sex'] == "male"){
	$sex_follow = "قام بمتابعتك ارسل له التحية";
}else{
	$sex_follow = "قامت بمتابعتك ارسل لها التحية";
}
$date = $fetca['date'];
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

}else {}

?>
<div class="follow_notitext">
<span><?php echo $sex_follow; ?></span>
<button type="button" id="delfoluuu">حذف</button>
<h5><?php echo $finaldate; ?></h5>
<script>
$("#addf").click(function(){
	setTimeout(function(){
    $.post("../ajax-php/follow-alert.php", {subfolalseen: "submit",alertid: "<?php echo $fetca['id']; ?>"});
},1000);
});
$("#mif<?php echo $fetca['id']; ?> #delfoluuu").click(function(){
    $.post("../ajax-php/follow-alert.php", {subnofollow: "submit",userfolid: "<?php echo $fetca['user_id']; ?>"},function(e){$(".scripts").html(e)});
});
</script>
</div>
<?php
}
?>

<?php

if($fetca['type'] == "accept_follow"){

?>

<?php

if($fetea['c_sex'] == "male"){
	$sex_follow = "لقد وافق علي طلبك لمتابعته";
}else{
	$sex_follow = "لقد وافقت علي طلبك لمتابعتها";
}
$date = $fetca['date'];
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

}else {}

?>

<div class="follow_notitext">
<span><?php echo $sex_follow; ?></span>
<button type="button" id="delfoluuu">حذف</button>
<h5><?php echo $finaldate; ?></h5>
<script>
$("#addf").click(function(){
	setTimeout(function(){
    $.post("../ajax-php/follow-alert.php", {subfolalseen: "submit",alertid: "<?php echo $fetca['id']; ?>"});
},1000);
});
$("#mif<?php echo $fetca['id']; ?> #delfoluuu").click(function(){
    $.post("../ajax-php/follow-alert.php", {subnofollow: "submit",userfolid: "<?php echo $fetca['user_id']; ?>"},function(e){$(".scripts").html(e)});
});
</script>
</div>
<?php

}

?>

</div>

<?php

}

}

}

}

?>






