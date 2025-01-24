<?php

include ("../connectdb/index.php");

?>


<?php

if(isset($_POST['subonline'])){

?>

<div class="ofquery_online">

<?php

$queryfol = mysql_query("SELECT * FROM follow WHERE follow='$id' AND follow_active='true' ORDER BY id DESC LIMIT 20");
while($fetfo = mysql_fetch_array($queryfol)){
$useridfo = $fetfo['following'];
$queryonl = mysql_query("SELECT * FROM online WHERE user_id='$useridfo' AND session='online' AND state='true'");
while($feton = mysql_fetch_array($queryonl)){
$finaluserid = $feton['user_id'];
$queryuse = mysql_query("SELECT * FROM users WHERE id='$finaluserid'");
while($fet = mysql_fetch_array($queryuse)){

?>

<div class="mini_online_get" dataid="<?php echo $fet['id']; ?>">
<img class="mini_online_img" src="../upload/images/low/<?php echo $fet['pro_img']; ?>" />
<span>
<?php

echo $fet['name'];

if($fet['c_check'] == "true"){
	echo "<img src='../img/icons/checkbg.png' class='check_onlineuse' />";
}

?>
</span>
<p class="online_now">نشط الان</p>
<div class="online-icon"></div>
</div>


<?php



$selectofline = mysql_query("SELECT * FROM online WHERE user_id='$useridfo' AND session='online' AND state='true'");
while($fetr = mysql_fetch_array($selectofline)){
	$date = $fetr['time_end'];
}
if(!empty($date)){
	
    $periods = array("s", "i", "h", "d", "w", "m", "y", "k");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "نشط منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "من الان";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "$periods[$j]";

}

if($feton['state'] == "true"){

if($finaldate == "i"){
	if($difference > 1){
		mysql_query("UPDATE online SET state='false' WHERE user_id='$useridfo' AND session='online'");
	}
}else if ($finaldate == "h"){
	if($difference > 1){
		mysql_query("UPDATE online SET state='false' WHERE user_id='$useridfo' AND session='online'");
	}	
}else if ($finaldate == "d"){
	if($difference > 1){
		mysql_query("UPDATE online SET state='false' WHERE user_id='$useridfo' AND session='online'");
	}	
}else if ($finaldate == "m"){
	if($difference > 1){
		mysql_query("UPDATE online SET state='false' WHERE user_id='$useridfo' AND session='online'");
	}	
}else if ($finaldate == "y"){
	if($difference > 1){
		mysql_query("UPDATE online SET state='false' WHERE user_id='$useridfo' AND session='online'");
	}	
}

}


?>





<?php

}

}

?>




<?php 

$queryton = mysql_query("SELECT * FROM users WHERE id='$useridfo'");
while($erto = mysql_fetch_array($queryton)){
if($erto['id'] !== $finaluserid){


?>

<div class="mini_online_get" dataid="<?php echo $erto['id']; ?>">
<img class="mini_online_img" src="../upload/images/low/<?php echo $erto['pro_img']; ?>" />
<span>
<?php

echo $erto['name'];

if($erto['c_check'] == "true"){
	echo "<img src='../img/icons/checkbg.png' class='check_onlineuse' />";
}
?>
</span>

<?php

$rrid = $erto['id'];
$selectofline = mysql_query("SELECT * FROM online WHERE user_id='$rrid' AND session='online' AND state='false'");
while($fetr = mysql_fetch_array($selectofline)){
	$date = $fetr['time_start'];
}
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

}




?>
<p class="offline-now"><?php echo $finaldate; ?></p>
</div>


<?

}

}
?>



<?php

}

?>

<script>
$(".mini_online_get").click(function(){
var dataid = $(this).attr("dataid");
if($(".hideninputofpupciou #online_"+ dataid +"").length == 0){
var html = '<div class="mini_chatframe_9999 chat" id="'+ dataid +'">' +
'<div class="ce-loaging">' +
'<div class="circle"></div>' +
'<div class="circle-small"></div>' +
'<div class="circle-big"></div>' +
'<div class="circle-inner-inner"></div>' +
'<div class="circle-inner"></div>' +
'</div>' +
'</div>';
$(".inset_frames_chatrang").prepend(html);
$(".hideninputofpupciou").append("<input type='hidden' id='online_"+ dataid +"' />");
$.get("../ajax-php/mini-chat.php",{getmini: "submit",userid: dataid},function(e){$(".mini_chatframe_9999[id="+ dataid +"]").html(e);});
}else {
	$(".mini_chatframe_9999[id="+ dataid +"]").fadeIn(100);
}
setTimeout(function(){
$(".mini_range_chat_main").fadeIn(100);
},500);
});	
$(".mini_online_get").each(function(){
	$(this).mousedown(function(){
		$(this).css('background','#f8f8f8');
	});
	$(this).mouseup(function(){
		$(this).css('background','#fff');
	});
	$(this).mouseleave(function(){
		$(this).css('background','#fff');
	});
});
</script>
</div>

<?php

}

?>



















