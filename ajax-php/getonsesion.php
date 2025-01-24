<?php

include ("../connectdb/index.php");

?>
<?php
if(isset($_GET['getsession'])){

$query = mysql_query("SELECT * FROM cerange WHERE cemail_id='$id' LIMIT 1");
while($fetop = mysql_fetch_assoc($query)){
	$userid = $fetop['id'];
}
$qsuery = mysql_query("SELECT * FROM chat WHERE type='session' AND to_id='$userid' AND online='insert' AND msid!='empty' ORDER BY id DESC");
while($fchat = mysql_fetch_array($qsuery)){
$chtid = $fchat['id'];
if(!empty($chtid)){
$finishit = mysql_query("UPDATE chat SET online='send' WHERE id='$chtid'");
if(isset($finishit)){
$cerange = $fchat['from_id'];
$fetofpy = mysql_query("SELECT * FROM cerange WHERE id='$cerange'");
while($fort = mysql_fetch_assoc($fetofpy)){
$toidrtd = $fort['cemail_id'];
}
?>
<script>
var dataid = "<?php echo $toidrtd ?>";
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
var audio = document.getElementById("noti_message_main");
audio.play();
}else {
$(".mini_chatframe_9999[id="+ dataid +"]").fadeIn(100);
}
setTimeout(function(){
$(".mini_range_chat_main").fadeIn(100);
},500);
</script>
<?php
}
}
}
}
?>
