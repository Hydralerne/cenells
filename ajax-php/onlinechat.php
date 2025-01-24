<?php

include ("../connectdb/index.php");

?>


<?php

if(isset($_POST['getnow'])){
$from = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_POST['userid'])))));
$to = $id;

    $querysesio = mysql_query("SELECT * FROM chat WHERE type='message' AND from_id='$from' AND to_id='$to' AND online='insert' OR type='alert' AND from_id='$from' AND to_id='$to' AND online='insert' ORDER BY id DESC");
	while($fetchat = mysql_fetch_array($querysesio)){
	$chatid = $fetchat['id'];
	if(!empty($chatid)){
	$finish = mysql_query("UPDATE chat SET online='send' WHERE id='$chatid'");
	if(isset($finish)){

$toidrt = $fetchat['from_id'];
$selectpop = mysql_query("SELECT * FROM users WHERE id='$toidrt'");
while($fetuse = mysql_fetch_array($selectpop)){
	$userido = $fetuse['id'];
	$userimgo = $fetuse['pro_img'];

}

if($fetchat['type'] == "message"){
?>

<div class="main_message_all">
<div class="message-from">
<a target="_blank" href="../<?php echo $userido; ?>">
<img draggalbe="false" src="../upload/images/<?php echo $userimgo; ?>"/>
<span></span>
</a>
<div class="mes-from-text">
<div class="text_main_85">
<h3>
<?php
echo $fetchat['message'];
?>
</h3>
</div>
</div>
</div>
</div>
<?php
}
if($fetchat['type'] == "alert" && $fetchat['alert'] == "color"){
?>
<div class="main_message_all">
<div class="border_back" style="border-bottom: 1px solid <?php echo $fetchat['color']; ?>;"></div>
<div class="body_outborder">
<p style="color: <?php echo $fetchat['color']; ?>;border: 1px solid <?php echo $fetchat['color']; ?>">
تم تغيير الوان المحادثة
</p>
</div>
</div>
<?php
echo '
<script>
$(document).ready(function(){
$(".mes-to-text .text_main_85 h3,#subcolor").css("background","'.$fetchat['color'].'");
});
</script>
';

}
?>
<script>
$(".show-chat").animate({ scrollTop: $('.show-chat').prop("scrollHeight")},500);
</script>
<?php
}
}
}
}
?>


