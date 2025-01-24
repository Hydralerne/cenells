<?php

include ("../connectdb/index.php");

?>

<?php

if($_GET){
	
$offset = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['offset'])))));
$limit = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['limit'])))));
$offset = preg_replace('/ +/', '', $offset);
$limit = preg_replace('/ +/', '', $limit);

$selectinf = mysql_query("SELECT account_secrit FROM info WHERE user_id='$use'");
while($finfo = mysql_fetch_assoc($selectinf)){
	$accsec = $finfo['account_secrit'];

}
if($id == $use){
include "../ajax-php/accpostval.php";
}else {
$queruychecfol = mysql_query("SELECT COUNT(id) FROM follow WHERE follow='$id' AND following='$use' AND follow_active='true'");
$countfollowid = mysql_result($queruychecfol,0);
if($accsec == "per" && $countfollowid == 0){
die("");
}else {
include "../ajax-php/accpostval.php";
}
}
}
?>