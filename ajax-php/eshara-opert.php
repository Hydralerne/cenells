<?php

include ("../connectdb/index.php");

?>


<?php

if(isset($_POST['get'])){
?>
<div class="ofwhile_eshara_main">
<input type="hidden" id="mouqate_fadeklop" />
<?php
	$search = addslashes(htmlspecialchars(strip_tags(trim($_POST['name']))));	
	$query = mysql_query("SELECT * FROM follow WHERE follow='$id' AND follow_active='true'");
	while($fetch = mysql_fetch_array($query)){
		$getid = $fetch['following'];
		$usery = mysql_query("SELECT * FROM users WHERE id='$getid' AND name like '$search%' or id='$getid' AND user_name='$search'");
		while($row = mysql_fetch_array($usery)){
?>
<div class="clickein_eshara" dataid="<?php echo $row['id']; ?>">
<img src="../upload/images/low/<?php echo $row['pro_img']; ?>" class="eshara_user_img" />
<span>
<?php
echo "@".$row['user_name'];
?>
</span>
<h4>
<?php
if($row['c_check'] == "true"){
	echo '<img src="../img/icons/check.png" class="check_esharamain" />';
}else {}
?>
<a>
<?php echo $row['name']; ?>
</a>


</h4>
</div>
<script>
if($(".eshara_body_454568 .short_daruyi_ment[dataid=<?php echo $row['id']; ?>]").length == 1){
	$(".clickein_eshara[dataid='<?php echo $row['id']; ?>']").remove();
	$(".eshara_resault_main").fadeOut(0);
	$("#mouqate_fadeklop").val("true");
}
</script>
<?php

$empty = "true";

}
}
?>
<script>
$(".clickein_eshara").click(function(){
var id = $(this).attr("dataid");
var im = $(this).find(".eshara_user_img").attr("src");
var nm = $(this).find("h4 a").text();
var ht = '<div class="short_daruyi_ment" dataid="'+ id +'">' +
'<i class="fa fa-times-circle" aria-hidden="true"></i>' +
'<img src="'+ im +'" /><span>'+ nm +'</span>' +	
'</div>';
if($(".eshara_body_454568 .short_daruyi_ment[dataid='"+ id +"']").length == 0){
$(".eshara_body_454568").append(ht);
}
$(this).fadeOut(0);
$(".eshara_resault_main").fadeOut(0);
$("#mouqate_fadeklop").val("true");
$(".with_8678778").fadeIn(100);
$(".short_daruyi_ment").mouseenter(function(){
	$(this).find("img").fadeOut(0)
	$(this).find("i").fadeIn(0);
});
$(".short_daruyi_ment").mouseleave(function(){
	$(this).find("i").fadeOut(0)
	$(this).find("img").fadeIn(0);
});
$(".short_daruyi_ment").click(function(){
	$(this).remove();
	if($(".with_8678778 .short_daruyi_ment").length == 0){
		$(".with_8678778").fadeOut(100);
	}
});
$(".input_eshara_type").val("");
});
$(".eshara_selected_4444").fadeIn(100);
</script>
<?php
if(empty($empty)){
?>
<script>
$(".eshara_resault_main").fadeOut(0);
</script>
<?php
}else {
?>
<script>
if($("#mouqate_fadeklop").val() !== "true"){
$(".eshara_resault_main").fadeIn(0);
}
</script>
<?php
}	
?>
</div>
<?php
}
?>




<?php

if(isset($_GET['getpost'])){
?>
<div class="ofwhile_eshara_main">
<input type="hidden" id="postmouqate_fadeklop" />
<?php
	$search = addslashes(htmlspecialchars(strip_tags(trim($_GET['name']))));	
	$postid = addslashes(htmlspecialchars(strip_tags(trim($_GET['postid']))));	
	$query = mysql_query("SELECT * FROM follow WHERE follow='$id' AND follow_active='true'");
	while($fetch = mysql_fetch_array($query)){
		$getid = $fetch['following'];
		$usery = mysql_query("SELECT * FROM users WHERE id='$getid' AND name like '$search%' or id='$getid' AND user_name='$search'");
		while($row = mysql_fetch_array($usery)){
?>
<div class="clickein_eshara" dataid="<?php echo $row['id']; ?>">
<img src="../upload/images/low/<?php echo $row['pro_img']; ?>" class="eshara_user_img" />
<span>
<?php
echo "@".$row['user_name'];
?>
</span>
<h4>
<?php
if($row['c_check'] == "true"){
	echo '<img src="../img/icons/check.png" class="check_esharamain" />';
}else {}
?>
<a>
<?php echo $row['name']; ?>
</a>


</h4>
</div>
<script>
if($("#<?php echo $postid; ?> .eshara_body_454568 .short_daruyi_ment[dataid=<?php echo $row['id']; ?>]").length == 1){
	$("#<?php echo $postid; ?> .clickein_eshara[dataid='<?php echo $row['id']; ?>']").remove();
	$("#<?php echo $postid; ?> .esharainpost_ajax").fadeOut(0);
	$("#<?php echo $postid; ?> #postmouqate_fadeklop").val("true");
}
</script>
<?php

$empty = "true";

}
}
?>
<script>
$("#<?php echo $postid; ?> .clickein_eshara").click(function(){
var id = $(this).attr("dataid");
var im = $(this).find(".eshara_user_img").attr("src");
var nm = $(this).find("h4 a").text();
var ht = '<div class="short_daruyi_ment" dataid="'+ id +'">' +
'<i class="fa fa-times-circle" aria-hidden="true"></i>' +
'<img src="'+ im +'" /><span>'+ nm +'</span>' +	
'</div>';
if($(".post#<?php echo $postid; ?> .eshara_body_454568 .short_daruyi_ment[dataid='"+ id +"']").length == 0){
$(".post#<?php echo $postid; ?> .eshara_body_454568").append(ht);
}
$(this).fadeOut(0);
$(".post#<?php echo $postid; ?> .esharainpost_ajax").fadeOut(0);
$("#<?php echo $postid; ?> #postmouqate_fadeklop").val("true");
$(".post#<?php echo $postid; ?> .with_8678778").fadeIn(100);
$(".post#<?php echo $postid; ?> .short_daruyi_ment").mouseenter(function(){
	$(this).find("img").fadeOut(0)
	$(this).find("i").fadeIn(0);
});
$(".post#<?php echo $postid; ?> .short_daruyi_ment").mouseleave(function(){
	$(this).find("i").fadeOut(0)
	$(this).find("img").fadeIn(0);
});
$(".post#<?php echo $postid; ?> .short_daruyi_ment").click(function(){
	$(this).remove();
	if($(".post#<?php echo $postid; ?> .with_8678778 .short_daruyi_ment").length == 0){
		$(".post#<?php echo $postid; ?> .with_8678778").fadeOut(100);
	}
});
$(".post#<?php echo $postid; ?> .cerentpost_esharatdw").val("");
});
$(".post#<?php echo $postid; ?> .eshara_selected_4444").fadeIn(100);
</script>
<?php
if(empty($empty)){
?>
<script>
$(".post#<?php echo $postid; ?> .esharainpost_ajax").fadeOut(0);
</script>
<?php
}else {
?>
<script>
if($(".post#<?php echo $postid; ?> #postmouqate_fadeklop").val() !== "true"){
$(".post#<?php echo $postid; ?> .esharainpost_ajax").fadeIn(0);
}
</script>
<?php
}	
?>
</div>
<?php
}
?>


