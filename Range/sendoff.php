<?php
ob_start();
session_start();
mysql_connect('127.0.0.1','root','asdwqe123') or die(mysql_error());
mysql_select_db('cemail') or die(mysql_error());

function profile_connected(){
	
	$data = array();
	$cerange = $_SESSION['cerange'];
	$query = mysql_query("SELECT * FROM cerange WHERE r_user='$cerange'");
	
	
	
	while($rows = mysql_fetch_assoc($query)){
		$data[] = $rows;
	}
	return $data;
	
	
}
$data = profile_connected();

foreach($data as $info){

}

?>

<?php

date_default_timezone_set('Africa/Cairo');

// months 
if(date("m") == "01"){
	$month = "يناير";
}else if(date("m") == "02"){
	$month = "فيراير";
}else if(date("m") == "03"){
	$month = "مارس";
}else if(date("m") == "04"){
	$month = "ابريل";
}else if(date("m") == "05"){
	$month = "مايو";
}else if(date("m") == "06"){
	$month = "يوليو";
}else if(date("m") == "07"){
	$month = "July";
}else if(date("m") == "08"){
	$month = "أغسطس";
}else if(date("m") == "09"){
	$month = "سبتمبر";
}else if(date("m") == "10"){
	$month = "اكتوبر";
}else if(date("m") == "11"){
	$month = "نوفمبر";
}else if(date("m") == "12"){
	$month = "ديسمبر";
}


// days


if(date("d") == "01"){
	$day = "1";
}else if(date("d") == "02"){
	$day = "2";
}else if(date("d") == "03"){
	$day = "3";
}else if(date("d") == "04"){
	$day = "4";
}else if(date("d") == "05"){
	$day = "5";
}else if(date("d") == "06"){
	$day = "6";
}else if(date("d") == "07"){
	$day = "7";
}else if(date("d") == "08"){
	$day = "8";
}else if(date("d") == "09"){
	$day = "9";
}else if(date("d") == "10"){
	$day = "10";
}else if(date("d") == "11"){
	$day = "11";
}else if(date("d") == "12"){
	$day = "12";
}else if(date("d") == "13"){
	$day = "13";
}else if(date("d") == "14"){
	$day = "14";
}else if(date("d") == "15"){
	$day = "15";
}else if(date("d") == "15"){
	$day = "15";
}else if(date("d") == "16"){
	$day = "16";
}else if(date("d") == "17"){
	$day = "17";
}else if(date("d") == "18"){
	$day = "18";
}else if(date("d") == "19"){
	$day = "19";
}else if(date("d") == "20"){
	$day = "20";
}else if(date("d") == "21"){
	$day = "21";
}else if(date("d") == "22"){
	$day = "22";
}else if(date("d") == "23"){
	$day = "23";
}else if(date("d") == "24"){
	$day = "24";
}else if(date("d") == "25"){
	$day = "25";
}else if(date("d") == "26"){
	$day = "26";
}else if(date("d") == "27"){
	$day = "27";
}else if(date("d") == "28"){
	$day = "28";
}else if(date("d") == "29"){
	$day = "29";
}else if(date("d") == "30"){
	$day = "30";
}else if(date("d") == "31"){
	$day = "31";
}

// years

$year = date("Y");

// time  

$hour = date("h");
$min = date("i");
$soc = date("sa");

if($hour >= 12){
	$ampm = "صباحاً";
}else if($hour <= 12) {
	$ampm = "مساءً";
}

// days name
if(date("l") == "Saturday"){
	$dayl = "السبت";
}else if(date("l") == "Sunday"){
	$dayl = "الاحد";	
}else if(date("l") == "Monday"){
	$dayl = "الاثنين";	
}else if(date("l") == "Tuesday"){
	$dayl = "الثلاثاء";
}else if(date("l") == "Wednesday"){
	$dayl = "الاربعاء";	
}else if(date("l") == "Thursday"){
	$dayl = "الخميس";
}else if(date("l") == "Friday"){
	$dayl = "الجمعة";	
}

$id = $info['id'];

?>



<?php

if(isset($_POST['sendmessage'])){

$to = $user;
$from = $id;

$postst = addslashes(html_entity_decode(htmlspecialchars(trim($_POST['message']))));
$mestype = addslashes(html_entity_decode(htmlspecialchars(trim($_POST['type']))));
$checkempty = preg_replace('/ +/', '', $postst);
$mestype = preg_replace('/ +/', '', $mestype);
if($mestype == "like"){
$postst = "___SEND_LIKEMESSAGE_TOKENVALUE";
}else {
if(!empty($checkempty)){
//Convert urls to <a> links
$postst = preg_replace("/([\w]+\:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/", "<a target=\"_blank\" class=\"href-post\" href=\"$1\">$1</a>", $postst);

//Convert hashtags to twitter searches in <a> links
$postst = preg_replace("/#([A-Za-z0-9\/\._]*)/", "<a target=\"_blank\" class=\"href-post\" href=\"../hashtag/$1\">#$1</a>", $postst);

//Convert attags to twitter profiles in &lt;a&gt; links
$postst = preg_replace("/@([A-Za-z0-9\/\._]*)/", "<a class=\"href-post\" href=\"../$1\">@$1</a>", $postst);


function nl2p($postst) {
    $arr = explode("\n",$postst);
    $out = '';
    $count = count($arr);
    $i = 0;

    for (; $i<$count; $i++) {
        if( strlen(trim($arr[$i])) > 0 ) {
            $out .= '<p>'.trim($arr[$i]).'</p>';
        }
    }
    return $out;
}

$postst = nl2p($postst);

include "../emotions.php";
}
}
if(!empty($postst)){
	$issetphpmsg = mysql_query("INSERT INTO chat(type,message,from_id,to_id,time,online) VALUES('message','$postst','$from','$to','$timedate','insert')");
    $querysesio = mysql_query("SELECT * FROM chat WHERE type='session' AND from_id='$from' AND to_id='$to' OR type='session' AND from_id='$to' AND to_id='$from'");
	while($kkio = mysql_fetch_array($querysesio)){
		$idropen = $kkio['id'];
	}
	if(empty($idropen)){
		mysql_query("INSERT INTO chat(type,message,from_id,to_id,online) VALUES('session','$postst','$from','$to','insert')");
	}else {
		mysql_query("UPDATE chat SET message='$postst',seen='false',from_id='$from',to_id='$to',online='insert',msid='fill' WHERE type='session' AND from_id='$from' AND to_id='$to' OR type='session' AND from_id='$to' AND to_id='$from'");
	}
?>
<!--
<script>
	var html = '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">' + 
    '<path d="M0 0h24v24H0z" fill="none"/>' +
    '<path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>' +
    '</svg>';
	$('.message-to:last-child').find(".state_mriela").html(html);
	</script>
	-->
<?php
}else {}
}
?>

<?php

if(isset($_POST['chngcolor'])){

$to = $user;
$from = $id;


$mscolor = addslashes(htmlspecialchars(trim($_POST['color'])));
$checkempty = preg_replace('/ +/', '', $mscolor);
if(!empty($checkempty)){
$selecterer = mysql_query("SELECT * FROM chat WHERE type='style' AND from_id='$from' AND to_id='$to' OR type='style' AND from_id='$to' AND to_id='$from'");
while($fet = mysql_fetch_array($selecterer)){
	$tzid = $fet['id'];
}
mysql_query("INSERT INTO chat(type,from_id,to_id,alert,color,online) VALUES('alert','$from','$to','color','$mscolor','insert')");
if(empty($tzid)){
	mysql_query("INSERT INTO chat(type,from_id,to_id,color) VALUES('style','$from','$to','$mscolor')");
}else {
	mysql_query("UPDATE chat SET color='$mscolor',online='insert' WHERE from_id='$from' AND to_id='$to' AND type='style' OR from_id='$to' AND to_id='$from' AND type='style'");
}

echo '
<script>
$(document).ready(function(){
	$("#subcolor").removeAttr("disabled");
	$(".colors").css({"transform": "scale(0)"});
	setTimeout(function(){$(".colors").css("display","none");
	$(".all-chat-icons").fadeIn(0);
	$(".all-chat-icons").css({"transform": "scale(1)"});},500);
	$(".close-color,#subcolor").fadeOut(500);
});
</script>
';
?>
<script>
$(document).ready(function(){
	var html = '<div class="main_message_all">' + 
	'<div class="border_back" style="border-bottom: 1px solid <?php echo $mscolor; ?>;"></div>' +
	'<div class="body_outborder">' +
	'<p style="color: <?php echo $mscolor; ?>;border: 1px solid <?php echo $mscolor; ?>">تم تغيير الوان المحادثة</p>' +
	'</div>' +
	'</div>';
	$(".chat-ajax-show").append(html);
	$(".show-chat").animate({ scrollTop: $('.show-chat').prop("scrollHeight")},500);
});
</script>

<?php
}
}
?>




<?php

if(isset($_POST['subertopmba'])){

$style = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['hideallfil'])))));
$img = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['imgback'])))));

$to = $user;
$from = $id;
$checkempty = preg_replace('/ +/', '', $style);
$checkempyt = preg_replace('/ +/', '', $img);
if(!empty($checkempty) && !empty($checkempyt) || !empty($checkempty) && empty($checkempyt) || empty($checkempty) && !empty($checkempyt)){

$selecterer = mysql_query("SELECT * FROM chat WHERE type='style' AND from_id='$from' AND to_id='$to' OR type='style' AND from_id='$to' AND to_id='$fro'");
while($fet = mysql_fetch_array($selecterer)){
	$tzid = $fet['id'];
}
if(empty($tzid)){
	mysql_query("INSERT INTO chat(type,from_id,to_id,style,img) VALUES('style','$from','$to','$style','$img')");
}else {
	$styleq = mysql_query("UPDATE chat SET style='$style',img='$img' WHERE from_id='$from' AND to_id='$to' AND type='style' OR from_id='$to' AND to_id='$from' AND type='style'");
}

    if(isset($styleq)){
        echo '
		<script>
		$(document).ready(function(){
			$(".upload_style").fadeOut(100);
			$(".full-options-icon").css("transform","scale(0)");
			$(".all-chat-icons").css("transform","scale(1)");
            setTimeout(function(){
			$(".all-chat-icons").fadeIn(0);
	        },500);	
    		$("#suballfil").removeAttr("disabled");
			$("#hideallfil").val("");
		});
		</script>
		';
	}
}

}

?>


<?php

if(isset($_POST['subfontalls'])){

$fonts = addslashes(htmlspecialchars(strip_tags(trim($_POST['fontsize']))));
$fontfi = addslashes(htmlspecialchars(strip_tags(trim($_POST['fontfaml']))));
$fonth = addslashes(htmlspecialchars(strip_tags(trim($_POST['liheight']))));
$filfontb = addslashes(htmlspecialchars(strip_tags(trim($_POST['fontbold']))));
if($filfontb == "true"){
	$fontb = "bold";
}
$filfontu = addslashes(htmlspecialchars(strip_tags(trim($_POST['fontunde']))));
if($filfontu == "true"){
	$fontu = "underline";
}

$to = $user;
$from = $id;

if(!empty($fonts)){
$fontsi = 'font-size: '.$fonts.'px;';
}
if(!empty($fonth)){
$fonthi = 'line-height: '.$fonth.'px;';
}
if(!empty($fontb)){
$fontbi = 'font-weight: '.$fontb.';';
}
if(!empty($fontu)){
$fontui = 'text-decoration: '.$fontu.';';
}

$fontstyle = "$fontsi $fonthi $fontbi $fontui $fontfi";


$selecterer = mysql_query("SELECT * FROM chat WHERE type='style' AND from_id='$from' AND to_id='$to' OR type='style' AND from_id='$to' AND to_id='$fro'");
while($fet = mysql_fetch_array($selecterer)){
	$tzid = $fet['id'];
}
if(empty($tzid)){
	mysql_query("INSERT INTO chat(type,from_id,to_id,font_style) VALUES('style','$from','$to','$fontstyle')");
}else {
	$styleq = mysql_query("UPDATE chat SET font_style='$fontstyle' WHERE from_id='$from' AND to_id='$to' AND type='style' OR from_id='$to' AND to_id='$from' AND type='style'");
}
echo '
<script>
$(document).ready(function(){
	$("#subfontalls").removeAttr("disabled");
		$(".all-fonts-div").css({"transform": "scale(0)"});
		setTimeout(function(){
		$(".all-fonts-div").css("display","none");
		$(".all-chat-icons").fadeIn(0);
		$(".all-chat-icons").css({"transform": "scale(1)"});
		},500);
	});
</script>
';

}


?>













