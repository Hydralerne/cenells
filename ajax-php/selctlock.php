<?php

include("../connectdb/index.php");

?>


<?php

if(isset($_GET['getuser'])){

$text = addslashes(strip_tags(htmlspecialchars(trim($_GET['text']))));
$text = preg_replace('/ +/',' ',$text);
$data = addslashes(strip_tags(htmlspecialchars(trim($_GET['data']))));
$data = preg_replace('/ +/','',$data);

preg_match_all("/@([A-Za-z0-9\/\._-]*)/", $text, $minhsan);  
$getype = mysql_query("SELECT account_type FROM info WHERE user_id='$id'");
while($voob = mysql_fetch_array($getype)){
	$user_accountype = $voob['account_type'];
}
$selectcho = mysql_query("SELECT COUNT(id) FROM users WHERE EXISTS(SELECT * FROM follow WHERE following='$id' AND follow = users.id) AND name like '$text%'");
$counthisa = mysql_result($selectcho,0);
if($counthisa > 0){
$queryalls = mysql_query("SELECT * FROM users WHERE EXISTS(SELECT * FROM follow WHERE following='$id' AND follow = users.id) AND name like '$text%' LIMIT 5");
include "selectlock-body.php";
}else {
$selectcho = mysql_query("SELECT COUNT(id) FROM users WHERE EXISTS(SELECT * FROM follow WHERE following='$id' AND follow = users.id) AND name like '%$text%'");
$counthisa = mysql_result($selectcho,0);
if($counthisa > 0){
$queryalls = mysql_query("SELECT * FROM users WHERE EXISTS(SELECT * FROM follow WHERE following='$id' AND follow = users.id) AND name like '%$text%' LIMIT 5");
include "selectlock-body.php";
}else {
$selectcho = mysql_query("SELECT COUNT(id) FROM users WHERE EXISTS(SELECT * FROM follow WHERE follow='$id' AND following = users.id) AND name like '$text%'");
$counthisa = mysql_result($selectcho,0);
if($counthisa > 0){
$queryalls = mysql_query("SELECT * FROM users WHERE EXISTS(SELECT * FROM follow WHERE follow='$id' AND following = users.id) AND name like '$text%' LIMIT 5");
include "selectlock-body.php";
}else {
$selectcho = mysql_query("SELECT COUNT(id) FROM users WHERE EXISTS(SELECT * FROM info WHERE user_id = users.id AND account_type='$user_accountype') AND name like '$text%'");
$counthisa = mysql_result($selectcho,0);
if($counthisa > 0){
$queryalls = mysql_query("SELECT * FROM users WHERE EXISTS(SELECT * FROM info WHERE user_id = users.id AND account_type='$user_accountype') AND name like '$text%' LIMIT 5");
include "selectlock-body.php";
}else {
	
}
}
}
}
if (!empty($minhsan)) {
foreach($minhsan[0] as $mins){
$mins = str_replace('@','',$mins);
$countuser = mysql_query("SELECT COUNT(id) FROM users WHERE user_name='$mins'");
$quernbmio = mysql_result($countuser,0);
if($quernbmio == 1){
$queryalls = mysql_query("SELECT * FROM users WHERE user_name='$mins' LIMIT 1");
include "selectlock-body.php";
}else {}
}
}else {}
}

?>