<?php

include ("../connectdb/index.php");

?>



<?php
if($_POST)
{
?>


<div class="chat-ajax-show">

<div class="chat-style">
<?php

$selecterer = mysql_query("SELECT * FROM chat WHERE type='style' AND from_id='$from' AND to_id='$to' OR type='style' AND from_id='$to' AND to_id='$from'");
while($fet = mysql_fetch_array($selecterer)){

if(!empty($fet['color'])){
echo '
<script>
$(document).ready(function(){
$(".mes-to-text .text_main_85 h3,#subcolor").css("background","'.$fet['color'].'");
});
</script>
';
}
if(!empty($fet['font_style'])){
$stylerrz = substr($fet['font_style'],0,-2);
echo '
<style>
.text_main_85 h3 {
'.$stylerrz.'
}
</style>
';
$hider = substr($fet['font_style'],-2);
echo '
<script>
$(document).ready(function(){
$(".text_main_85 h3").attr("id","'.$hider.'");
});
</script>
';
}

}

?>
</div>


<?php


$getochat = mysql_query("SELECT * FROM chat WHERE from_id='$from' AND to_id='$to' AND online!='insert' OR from_id='$to' AND to_id='$from' AND online!='insert' ORDER BY id");

while($fetchat = mysql_fetch_array($getochat)){

$toidrt = $fetchat['from_id'];
$selectpop = mysql_query("SELECT * FROM users WHERE id='$toidrt'");
while($fetuse = mysql_fetch_array($selectpop)){
	$userido = $fetuse['id'];
	$userimgo = $fetuse['pro_img'];
	$username = $fetuse['name'];
	$firstname = $fetuse['first_name'];
}

$mozid = $fetchat['from_id'];

if($fetchat['type'] == "message"){
?>

<div class="main_message_all">
<?php

if($id == $mozid){
	echo '
	<div class="message-to">
	';
}else{

	echo '
	<div class="message-from">
	';
}

?>
<a target="_blank" href="../<?php echo $userido; ?>">
<img draggalbe="false" src="../upload/images/<?php echo $userimgo; ?>"/>
<span><?php  ?></span>
</a>

<?php
if($id == $mozid){
    echo'
	<div class="mes-to-text">
	';
}else{
    echo'
	<div class="mes-from-text">
	';	
}
	
echo '
<div class="text_main_85">
<h3>
'.$fetchat['message'].'
</h3>
</div>
';
?>
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

}
}
	
?>
</div>




<?php
}
?>

