<?php

include ("../connectdb/index.php");

?>



<?php
if(isset($_GET['getsaved'])){
$query = mysql_query("SELECT * FROM saved WHERE user_id='$id'");
while($fetc = mysql_fetch_assoc($query)){
$postid = $fetc['post_id'];
$saveid = $fetc['save_id'];
$postquery = mysql_query("SELECT * FROM posts WHERE id='$postid' LIMIT 1");
while($fetch = mysql_fetch_assoc($postquery)){
	$postimg = $fetch['post_img'];
	$useridm = $fetch['user_id'];
	$postext = $fetch['post_text'];
	$postdat = $fetch['post_date'];
$queryuser = mysql_query("SELECT * FROM users WHERE id='$useridm' LIMIT 1");
while($fetu = mysql_fetch_assoc($queryuser)){
	$userimg = $fetu['pro_img'];
	$ceusern = $fetu['user_name'];
	$usernam = $fetu['name'];
?>
<div class="mini_save_file">
<div class="rightext_save_1230">
<?php
if(!empty($postimg)){
	$class = "image_saved_1230";
?>
<div>
<img src="../upload/posts/images/sml/<?php echo $postimg; ?>" class="savepostimg_1230" />
</div>
<?php
}else {
	$class = "noimage_saved_1230";
}
?>
<h3 class="<?php  echo $class; ?>"><?php echo $postext; ?></h3>
</div>
<div class="left_accountype_1230">
<img src="../upload/images/low/<?php echo $userimg ?>" class="useimg_save_1230" />
<span>
<?php echo $usernam; ?>
</span>
<p>@<?php echo $ceusern; ?></p>
</div>
</div>
<?php
}
}
}
}
?>