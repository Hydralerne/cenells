<?php

include ("../connectdb/index.php");

?>


<?php

?>


<?php

// view posts !important

if(isset($_POST['subviewpost'])){
	$viewpostid = addslashes(htmlspecialchars(strip_tags(trim($_POST['viewpostid']))));
    $viewpostid = preg_replace('/ +/', '', $viewpostid);
	$selectid = mysql_query("SELECT user_id FROM posts WHERE id='$viewpostid'");
	while($fetch = mysql_fetch_array($selectid)){
		$toid = $fetch['user_id'];
	}
	$queryempry = mysql_query("SELECT view_id FROM view WHERE view_user_id='$id' AND view_post_id='$viewpostid'");
    while($fetem = mysql_fetch_array($queryempry)){
		$emptyseenid = $fetem['view_id'];
	}
	if(empty($emptyseenid)){
		$insertseen = mysql_query("INSERT INTO view(view_post_id,view_user_id,view_to_id,view_date,view_type) VALUES('$viewpostid','$id','$toid','$timedate','post')");
	}
}


?>










