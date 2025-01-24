<?php

include ("../connectdb/index.php");

?>

<?php

if(isset($_POST['search'])){
$text = addslashes(htmlspecialchars(strip_tags(trim($_POST['text']))));
$text = str_replace("#","",$text);
$query = mysql_query("SELECT * FROM hashtags WHERE type='antily' AND name LIKE '$text%' AND post_type!='none' ORDER BY post_type DESC LIMIT 8");
while($fetch = mysql_fetch_array($query)){
?>
<div class="hash_7548"><a href="../hashtags/?q=<?php echo $fetch['name']; ?>">#<?php echo $fetch['name']; ?></a><p><span><?php echo $fetch['post_type']; ?></span> من التدوينات</p></div>
<?php
$empty = "true";
}
if(empty($empty)){
echo '
<div class="empty_hashtags"><span>لا يوجد هاشتاجات بهذا الاسم</span></div>
';
}
}

?>