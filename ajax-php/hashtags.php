<?php

include ("../connectdb/index.php");

?>

<?php
if(isset($_POST['gethash'])){
?>

<div class="hashtags-main">
<div class="tophashtags"><h3>Top Hastags Today</h3></div>
<?php

$selectop = mysql_query("SELECT * FROM hashtags WHERE type='normal' ORDER BY id DESC LIMIT 7");
while($fetch = mysql_fetch_array($selectop)){
	
?>


<div class="order_hashtags">
<span><a href="#">#<?php echo $fetch['name']; ?></a></span>
<p>60,563</p>
</div>



<?
}
?>

</div>


<?php
}
?>


